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
