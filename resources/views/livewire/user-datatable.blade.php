<div>
    <div class="max-w-7xl py-10 sm:px-6 lg:px-8 bg-white mt-8 mx-8">
        <ol>
            {{ $users->links() }}
            @foreach ($users as $user)
                <li class="py-2">{{ $user->name }}</li>
            @endforeach
            {{ $users->links() }}
        </ol>
    </div>
</div>
