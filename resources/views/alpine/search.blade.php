<x-guest-layout>
    <div class="flex justify-center mx-auto my-8 max-w-7xl pt-12">
        <div x-data="{
            search: '',
            items: ['foo', 'bar', 'baz', 'foobar', 'barbaz'],
            get filteredItems() {
                return this.items.filter(
                    i => i.startsWith(this.search)
                )
            }
        }">
            <input x-model="search"
                placeholder="Search..."
                class="rounded-md shadow-md">

            <ul class="bg-slate-50 border border-slate-700 rounded-md shadow-md my-2">
                <template x-for="item in filteredItems" :key="item">
                    <li
                        class="rounded text-center py-2 cursor-pointer hover:bg-slate-300"
                        x-text="item">
                    </li>
                </template>
            </ul>
        </div>
    </div>
</x-guest-layout>
