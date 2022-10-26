<div>
    <h1 class="text-4xl font-bold mb-8 text-center">Counter</h1>

    <div class="flex flex-col gap-8 md:flex-row items-center justify-between">
        <button type="button" wire:click="increment" class="inline-flex items-center rounded-md border border-orange-500 bg-orange-500 px-6 py-3 text-lg font-semibold text-orange-900 shadow-sm hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
            Increment Counter
        </button>

        <div>
            <div class="font-mono font-bold tabular-nums text-5xl bg-slate-600 p-4 rounded-lg shadow-2xl shadow-gray-900 ring-2 ring-white ring-offset-2 ring-offset-black">
                {{ $counter }}
            </div>
        </div>
    </div>
</div>
