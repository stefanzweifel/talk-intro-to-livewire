<div class="w-80">
    <button type="button" wire:click="toggle"
            class="mb-4 inline-flex w-full justify-center items-center rounded-md border border-orange-500 bg-orange-500 px-6 py-3 text-lg font-semibold text-orange-900 shadow-sm hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
        Toggle
    </button>


    @if ($showMessage)
        <p class="text-center font-semibold text-4xl my-8">Hello Laravel Meetup 👋</p>
    @else
        <img src="/disperse-lesley-nielsen.gif" class="rounded-lg" style="width: 100%;">
    @endif
</div>
