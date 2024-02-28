<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UpdateUserDetails extends Component
{
    #[Validate('required|string|max:100')]
    public string $name = '';

    public int $user_id = 0;

    public bool $display = false;

    #[On('update-user-details')]
    public function fetch($id)
    {
        $user = User::where('id', $id)->first();

        $this->user_id = $user->id;
        $this->name = $user->name;

        $this->display = true;
    }

    public function save()
    {
        $this->validate();

        User::query()
            ->where('id', $this->user_id)
            ->update([
                'name' => $this->name,
            ]);

        $this->dispatch('saved');

        $this->dispatch('refresh-datatable');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.forms.update-user-details');
    }
}
