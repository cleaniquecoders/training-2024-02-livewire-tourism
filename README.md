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

## Create Counter Component

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
