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
