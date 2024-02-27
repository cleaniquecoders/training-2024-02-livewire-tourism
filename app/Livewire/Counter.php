<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public function tambah()
    {
        $this->count++;
    }

    public function tolak()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
