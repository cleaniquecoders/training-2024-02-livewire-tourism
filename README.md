# Training & Coaching Laravel Livewire with Tourism Malaysia

## Day 1

```bash
# Install Laravel Installer
composer global require laravel/installer

# Create new Laravel project name livewire
laravel new livewire

# Go to livewire/ directory
cd livewire

# Install Livewire
composer require livewire/livewire
```

### Create Counter Component

```bash
# Publish default Livewire layout
php artisan livewire:layout

# Create Counter component
php artisan livewire:make Counter
```

Then add URL for counter in `routes/web.php`:

```php
use App\Livewire\Counter;

Route::get('/counter', Counter::class)->name('counter');
```

Update the `resources/views/livewire/counter.blade.php`:

```php
<div>
    <h1>Counter: {{ $count }}</h1>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>
</div>
```

Update `app/Livewire/Counter.php`:

```php
<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
```

### Create Search Component


Prepare your data by update `database/seeders/DatabaseSeeder.php`:

```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if(! app()->isProduction()) {
            \App\Models\User::factory(rand(100, 500))->create();
        }
    }
}
```

Then run the migration & seeder:

```bash
php artisan migrate:fresh --seed
```

Now create your Livewire component:


```bash
php artisan livewire:make SearchUser
```

Add `keyword` and `users` property. Then add `updatedKeyword` method to handle searching functionality.

```php
<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUser extends Component
{
    public string $keyword = '';

    public $users = [];

    public function updatedKeyword()
    {
        if(strlen($this->keyword) < 3) {
            return;
        }

        $this->users = User::query()
            ->where('email', 'like', '%'.$this->keyword.'%')
            ->orWhere('name', 'like', '%'.$this->keyword.'%')
            ->get();
    }

    public function render()
    {
        return view('livewire.search-user');
    }
}
```

Update the `resources/views/livewire/search-user.blade.php`, to allow search by keyword and list out the user list:

```php
<div>
    <div>

        <input wire:model.live.debounce.500ms="keyword" />
    </div>

    <div class="my-4 py-4">
        <ol>
            @forelse($users as $user)
                <li class="py-2">{{ $user->name }} - {{ $user->email }}</li>
            @empty
                <li>No records found</li>
            @endforelse
        </ol>
    </div>
</div>
```

Update `routes/web.php` to set URL for search user:

```php
use App\Livewire\SearchUser;

Route::get('search-user', SearchUser::class);
```

### Installing Jetstrem

```bash
composer require laravel/jetstream
php artisan jetstream:install livewire
npm install
npm run build
php artisan livewire:publish
```

Update `config/livewire.php` layout to:

```php
'layout' => 'layouts.app',
```

### Creating User Form

```bash
php artisan livewire:make Forms/User
```

### Creating User Datatable

```bash
php artisan livewire:make UserDatatable
```
