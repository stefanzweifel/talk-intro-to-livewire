<div class="flex flex-col gap-4">
    <div class="text-black">
        <form wire:submit.prevent="save">
            <div class="mb-4">
                <label for="name" class="block font-medium text-gray-100">Name</label>
                <div class="mt-1">
                    <input wire:model="mountain.name" type="text" id="name"
                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 text-xl">
                    @error('mountain.name')
                        <div class="text-red-500 font-semibold">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
                <label for="height" class="block font-medium text-gray-100">Height</label>
                <div class="mt-1">
                    <input wire:model="mountain.height" type="text" id="height"
                           class="block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 text-xl">

                    @error('mountain.height')
                        <div class="text-red-500 font-semibold">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div>
                @dump($mountain::class, $mountain->toArray(), ['is-dirty' => $mountain->isDirty()])
            </div>

            <button type="submit"
                    class="mt-4 inline-flex w-full justify-center items-center rounded-md border border-orange-500 bg-orange-500 px-6 py-3 text-lg font-semibold text-orange-900 shadow-sm hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                Save
            </button>

        </form>
    </div>
</div>
