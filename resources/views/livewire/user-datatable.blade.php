<div>
    <div class="max-w-7xl py-10 sm:px-6 lg:px-8 bg-white mt-8 mx-auto">

        <div class="py-4 flex justify-between ">
            <x-input wire:model.live.debounce.500ms="search" class="" placeholder="Search user by name or email..." />
            
            <select wire:model.live.debounce.500ms="perPage"
                class="ml-4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-500 dark:focus:border-gray-600 focus:ring-gray-500 dark:focus:ring-gray-600 rounded-md shadow-sm">
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>

        <ol>
            {{ $users->links() }}
            @foreach ($users as $user)
                <li class="py-2">{{ $user->name }}</li>
            @endforeach
            {{ $users->links() }}
        </ol>
    </div>
</div>
