<x-guest-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="my-4">
            <p class="font-bold text-2xl">Grid - Justify Stretch</p>
            <div class="grid grid-flow-col justify-stretch bg-blue-100 p-4 gap-4">
                @for ($i = 0; $i < 5; $i++)
                    <div class=" align-middle rounded-lg bg-pink-700 h-12 text-white font-bold"></div>
                @endfor
            </div>
        </div>

        <div class="my-4">
            <p class="font-bold text-2xl">Grid - Column</p>
            <div class="grid grid-cols-3 bg-blue-100 p-4 gap-4">
                @for ($i = 0; $i < 5; $i++)
                    <div class=" align-middle rounded-lg bg-pink-700 h-12 text-white font-bold"></div>
                @endfor
            </div>
        </div>

        <div class="my-4">
            <p class="font-bold text-2xl">Grid - Rows</p>
            <div class="grid grid-rows-4 grid-flow-col bg-blue-100 p-4 gap-4">
                @for ($i = 0; $i < 29; $i++)
                    <div class=" align-middle rounded-lg bg-pink-700 h-12 text-white font-bold"></div>
                @endfor
            </div>
        </div>
    </div>

</x-guest-layout>
