<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class UserDatatable extends Component
{
    use WithPagination;

    #[Url]
    public int $perPage = 25;

    #[Url(as: 'q')]
    public string $search = '';

    #[Url(as: 'v')]
    public int $verify = 0;

    public bool $displayAddNewUserForm = false;

    public bool $displayUserDetails = false;

    public function showNewUserForm()
    {
        $this->displayAddNewUserForm = true;
    }

    public function showUserDetails($id)
    {
        $this->dispatch('fetch-user-details', id: $id);

        $this->displayUserDetails = true;
    }

    public function showUpdateUserDetails($id)
    {
        $this->dispatch('update-user-details', id: $id);
    }

    #[On('refresh-datatable')]
    public function render()
    {
        return view('livewire.user-datatable', [
            'users' => User::query()
                ->when(
                    strlen($this->search) > 3,
                    fn($query) => $query->search($this->search)
                )
                ->account($this->verify)
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
