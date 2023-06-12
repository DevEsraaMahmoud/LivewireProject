<div class="p-16 flex justify-center gap-6 items-center">
    <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-500 rounded text-white">+</button>
    <h1>{{ $count }}</h1>
    <button wire:click="decrement" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-500 rounded text-white">-</button>
</div>
