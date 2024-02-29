<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="my-4">
            <p class="font-bold text-2xl">Justify Start</p>
            <div class="flex justify-start bg-blue-100 p-4 space-x-2">
                @for ($i = 0; $i < 5; $i++)
                    <div class=" align-middle rounded-lg bg-pink-700 w-12 h-12 text-white font-bold"></div>
                @endfor
            </div>
        </div>

        <div class="my-4">
            <p class="font-bold text-2xl">Justify End</p>
            <div class="flex justify-end bg-blue-100 p-4 space-x-2">
                @for ($i = 0; $i < 5; $i++)
                    <div class=" align-middle rounded-lg bg-pink-700 w-12 h-12 text-white font-bold"></div>
                @endfor
            </div>
        </div>

        <div class="my-4">
            <p class="font-bold text-2xl">Justify Around</p>
            <div class="flex justify-around bg-blue-100 p-4 space-x-2">
                @for ($i = 0; $i < 5; $i++)
                    <div class=" align-middle rounded-lg bg-pink-700 w-12 h-12 text-white font-bold"></div>
                @endfor
            </div>
        </div>

        <div class="my-4">
            <p class="font-bold text-2xl">Justify Between</p>
            <div class="flex justify-between bg-blue-100 p-4 space-x-2">
                @for ($i = 0; $i < 5; $i++)
                    <div class=" align-middle rounded-lg bg-pink-700 w-12 h-12 text-white font-bold"></div>
                @endfor
            </div>
        </div>
    </div>

</x-guest-layout>
