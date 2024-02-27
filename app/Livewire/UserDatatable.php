<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class UserDatatable extends Component
{
    use WithPagination;

    #[Url(as: 'q')]
    public int $perPage = 25;

    #[Url]
    public string $search = '';

    public function render()
    {
        return view('livewire.user-datatable', [
            'users' => User::query()
                ->when(
                    strlen($this->search) > 3,
                    fn($query) => $query->search($this->search)
                )
                ->paginate($this->perPage),
        ]);
    }

    public function removeUser($id)
    {
        if(auth()->user()->id == $id) {
            return;
        }

        User::where('id', $id)->delete();
    }
}
