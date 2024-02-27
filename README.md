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
    <h1>Counter</h1>
</div>
```


