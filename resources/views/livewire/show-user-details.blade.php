<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <p>{{ data_get($user, 'name') }}</p>
            </div>

            <div>
                <x-label for="name" value="{{ __('E-mail') }}" />
                <p>{{ data_get($user, 'email') }}</p>
            </div>

        </div>
    </div>{{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
