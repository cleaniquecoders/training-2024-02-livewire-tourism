<x-guest-layout>
    <div class=" bg-slate-700 w-screen h-screen sm:py-12 lg:py-4">
        <p class="text-7xl text-center cursor-pointer text-slate-100 hover:text-pink-700">Hello World</p>
    </div>

    <div class="w-full py-4">
        <p class="text-4xl text-black text-center py-4">Object, Grid</p>
        <div class="grid grid-flow-row grid-rows-12 space-y-4 justify-center my-2 bg-slate-300">
            <div class=" border border-slate-300  p-4">
                <img src="{{ url('images/manja-vitolic-gKXKBY-C-Dk-unsplash.jpg') }}" class="object-cover  h-96 w-96">
                <p class="text-slate-700 text-center text-2xl pt-4">Object Cover</p>
            </div>

            <div class=" border border-slate-300  p-4">
                <img src="{{ url('images/manja-vitolic-gKXKBY-C-Dk-unsplash.jpg') }}" class="object-contain  h-96 w-96">
                <p class="text-slate-700 text-center text-2xl pt-4">Object Contain</p>
            </div>

            <div class=" border border-slate-300  p-4">
                <img src="{{ url('images/manja-vitolic-gKXKBY-C-Dk-unsplash.jpg') }}" class="object-fill  h-96 w-96">
                <p class="text-slate-700 text-center text-2xl pt-4">Object Fill</p>
            </div>

            <div class=" border border-slate-300  p-4">
                <img src="{{ url('images/manja-vitolic-gKXKBY-C-Dk-unsplash.jpg') }}" class="object-scale-down  h-96 w-96">
                <p class="text-slate-700 text-center text-2xl pt-4">Object Scale Down</p>
            </div>

            <div class=" border border-slate-300  p-4">
                <img src="{{ url('images/manja-vitolic-gKXKBY-C-Dk-unsplash.jpg') }}" class="object-none  h-96 w-96">
                <p class="text-slate-700 text-center text-2xl pt-4">Object None</p>
            </div>
        </div>
    </div>

</x-guest-layout>
