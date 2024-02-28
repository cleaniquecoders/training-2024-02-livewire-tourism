<div>
    <x-modal wire:model="display">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" wire:model="name" required autofocus
                        autocomplete="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-action-message class="me-3" on="saved">
                        {{ __('User Updated.') }}
                    </x-action-message>

                    <x-button wire:click="save" class="ms-4">
                        {{ __('Update') }}
                    </x-button>
                </div>

            </div>
        </div>
    </x-modal>
</div>
