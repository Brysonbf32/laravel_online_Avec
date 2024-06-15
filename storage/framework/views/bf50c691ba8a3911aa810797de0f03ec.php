<div >
<p class="bg-red-200">Go to page contact <a href="<?php echo e(route('lgn')); ?>" wire:navigate.hover>
            Home
        </a></p>

        <p class="text-red-200">Increment:  <?php echo e($inc); ?></p>
        <Button wire:click="increase">Click</Button>
        <br>
        <p>My Name is:  <?php echo e($name); ?></p>
        <input wire:model.live="name" type="text">
</div>
<?php /**PATH C:\xampp\htdocs\fintech_avec\resources\views/livewire/welcome.blade.php ENDPATH**/ ?>