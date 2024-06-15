<div >
<p class="bg-red-200">Go to page contact <a href="{{route('lgn')}}" wire:navigate.hover>
            Home
        </a></p>

        <p class="text-red-200">Increment:  {{ $inc }}</p>
        <Button wire:click="increase">Click</Button>
        <br>
        <p>My Name is:  {{ $name }}</p>
        <input wire:model.live="name" type="text">
</div>
