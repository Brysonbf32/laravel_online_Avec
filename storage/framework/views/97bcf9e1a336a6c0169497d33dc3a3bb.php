<?php $__env->startSection('content'); ?>
    <body class="antialiased">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('welcome');

$__html = app('livewire')->mount($__name, $__params, 'NpEfVXR', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </body>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\fintech_avec\resources\views/Welcome.blade.php ENDPATH**/ ?>