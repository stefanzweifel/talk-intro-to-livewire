<div class="flex flex-col gap-4">
    <div class="text-black space-y-4">
        <input wire:model="search" type="text" name="search" autofocus
               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 text-xl"
               placeholder="Search">
    </div>

    <div class="grid grid-cols-2 gap-4">
        @foreach($this->availableMountains as $mountain)
            <div class="p-4 bg-gray-800 rounded-lg shadow-lg">
                <h2 class="font-semibold">
                    {{ $mountain->name }}
                </h2>
                <p>Height: {{ $mountain->height }}m</p>
            </div>
        @endforeach
    </div>

</div>
