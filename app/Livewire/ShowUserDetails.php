<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowUserDetails extends Component
{
    public $user;

    #[On('fetch-user-details')]
    public function fetch($id)
    {
        $this->user = User::where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.show-user-details');
    }
}
