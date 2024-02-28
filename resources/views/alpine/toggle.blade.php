<x-guest-layout>
    <div class="flex justify-center mx-auto my-8 max-w-7xl pt-12">
        <div class="flex justify-center mx-auto my-8 max-w-7xl">
            <div x-data="{ open: false }">
                <x-button @click="open = ! open">Toggle</x-button>

                <div x-show="open" @click.outside="open = false">
                    <ul class="bg-slate-50 border border-slate-700 rounded-md shadow-md my-2">
                        <li class="rounded text-center hover:bg-slate-300 py-2">
                            <a href="https://google.com">Google</a>
                        </li>
                        <li class="rounded text-center hover:bg-slate-300 py-2">
                            <a href="https://facebook.com">Facebook</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
