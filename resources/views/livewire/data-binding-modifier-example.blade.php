<div class="flex flex-col gap-4">
    <div class="text-black space-y-4">

        <div class="mb-4">
            <label for="name" class="block font-medium text-gray-100">150ms Debounce</label>
            <div class="mt-1">
                <input wire:model="search" type="text" name="search" autofocus
                       class="block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 text-xl">
            </div>
        </div>
        <div class="mb-4">
            <label for="name" class="block font-medium text-gray-100">1000ms Debounce</label>
            <div class="mt-1">
                <input wire:model.debounce.1000ms="search" type="text" name="search"
                       class="block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 text-xl">

            </div>
        </div>
        <div class="mb-4">
            <label for="name" class="block font-medium text-gray-100">Lazy</label>
            <div class="mt-1">
                <input wire:model.lazy="search" type="text" name="search"
                       class="block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 text-xl">
            </div>
        </div>


    </div>

    <div
        class="font-mono font-bold tabular-nums text-5xl bg-slate-600 p-4 rounded-lg shadow-2xl shadow-gray-900 ring-2 ring-white ring-offset-2 ring-offset-black break-words">
        {{ $search }}
    </div>

</div>
