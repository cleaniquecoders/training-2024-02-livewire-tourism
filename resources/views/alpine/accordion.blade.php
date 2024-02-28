<x-guest-layout>
    <div class="flex justify-center mx-auto my-8 max-w-7xl">
        <div x-data="{ open: false }" class="bg-white mx-4 my-2 w-1/2 p-4 shadow-md space-y-4 max-w-7xl">

            <div class="flex justify-between space-x-2 ">
                <span class="text-3xl">Question 1</span>
                {{-- <x-button @click="open = ! open">Toggle</x-button> --}}
                <span x-show="open" aria-hidden="true" @click="open = false"
                    class="ml-4 text-2xl cursor-pointer hover:bg-slate-300 hover:rounded-full hover:shadow-sm px-4">&minus;</span>
                <span x-show="!open" aria-hidden="true" @click="open = true"
                    class="ml-4 text-2xl cursor-pointer hover:bg-slate-300 hover:rounded-full hover:shadow-sm px-4">&plus;</span>
            </div>

            <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.250ms >
                <p class="my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc condimentum tincidunt
                    gravida. Etiam vel consectetur purus. Donec tincidunt id ligula ut accumsan. Sed semper hendrerit
                    justo, at dapibus velit interdum sed. Sed in eros sit amet elit aliquet varius non placerat nisl.
                    Integer congue mi vitae lectus malesuada, eget tempor nisi fringilla. Vestibulum laoreet nisi ut
                    sapien sollicitudin vehicula. Integer eget justo venenatis, ullamcorper nulla in, rutrum leo. Donec
                    id convallis lacus, vitae pharetra elit.</p>

                <p class="my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc condimentum tincidunt
                    gravida. Etiam vel consectetur purus. Donec tincidunt id ligula ut accumsan. Sed semper hendrerit
                    justo, at dapibus velit interdum sed. Sed in eros sit amet elit aliquet varius non placerat nisl.
                    Integer congue mi vitae lectus malesuada, eget tempor nisi fringilla. Vestibulum laoreet nisi ut
                    sapien sollicitudin vehicula. Integer eget justo venenatis, ullamcorper nulla in, rutrum leo. Donec
                    id convallis lacus, vitae pharetra elit.</p>

                <p class="my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc condimentum tincidunt
                    gravida. Etiam vel consectetur purus. Donec tincidunt id ligula ut accumsan. Sed semper hendrerit
                    justo, at dapibus velit interdum sed. Sed in eros sit amet elit aliquet varius non placerat nisl.
                    Integer congue mi vitae lectus malesuada, eget tempor nisi fringilla. Vestibulum laoreet nisi ut
                    sapien sollicitudin vehicula. Integer eget justo venenatis, ullamcorper nulla in, rutrum leo. Donec
                    id convallis lacus, vitae pharetra elit.</p>
            </div>

        </div>
    </div>
</x-guest-layout>
