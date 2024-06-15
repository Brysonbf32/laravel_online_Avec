<div  class="flex">
    <div class="basis-[13%] h-[100vh] border">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('include.Sidebar');

$__html = app('livewire')->mount($__name, $__params, 'Qn5rXUJ', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
    <div  class="basis-[87%] border bg-[#F7F8FB]">
        <div>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('include.header');

$__html = app('livewire')->mount($__name, $__params, 'xTZ2aCN', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            
        </div>
        
            <div  class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 px-2 gap-4">
                <div class=" shadow-sm bg-white rounded-md col-span-1">
                    <!--[if BLOCK]><![endif]--><?php if(session('status')): ?>
                    <div class="py-2 px-2 bg-[#BAD8FC] text-sm font-serif  rounded-sm">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                    <div class="flex justify-between  px-4 bg-slate-100">
                        <div class=" flex gap-2">
                            <div>
                                <span class="text-sm font-semibold px-2 text-blue-400">Permission</span>
                            </div>
                        </div>
                        <div>
                            <div x-data x-on:click="$dispatch('open-modal')" class="text-sm  px-2 w-7 h-7 bg-slate-100 text-centr rounded-full pt-1 place-content-center mb-0 font-weight-bold text-gray-800">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-blue-400" >jj</i>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 ">
                        <!-- Card Body -->
                        <div class=' bg-white rounded'>
                          <table class=' w-full '>
                            <thead class=''>
                              <tr>
                              <th class=' text-sm text-left font-semibold  text-[#141B27]/[0.6] p-2'><span class=' pl-3'>Id</span></th>
                              <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'>Name</th>
                              <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'></th>
                              </tr>
                            </thead>
                            <tbody>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $getpermission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                    <tr class='hover:bg-slate-50 border-t h-5 border-slate-200'>                    
                                        <td class='text-xs text-left font-semibold  text-[#141B27] flex justify-start gap-1 py-2'>
                                            <span class=' pl-4 pt-3 '><?php echo e($permission->id); ?></span>
                                        </td>
                                        <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                        <span class='pb-2'><?php echo e($permission->name); ?></span>
                                        </td>
                                        <td class='text-xs text-right font-normal  text-[#141B27] '>
                                        <div class="flex gap-2">
                                            <div class="w-7 h-7 rounded-full bg-slate-200 text-center fff  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                            <a href=" <?php echo e(route('cnt')); ?>" wire:navigate><i class="fa fa-plus"></i></a>
                                            </div>
                                            <div wire:click="deletepermission(<?php echo e($permission->id); ?>)" wire:confirm="Permission Deleted successfully" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                            <i class="fa fa-trash"></i>
                                            </div>
                                            <div class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500" >
                                            <i class="fa fa-eye"></i>
                                            </div>
                                            
                                        </div>
                                        </td>                                                   
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                            </tbody>
                          </table>
                        </div>
                    </div>            
                </div>
                <div 
                    x-data="{ show : false }"
                    x-on:open-modal.window = "show = true"
                    x-on:close-modal.window = "show = false"
                    x-show = "show"
                    x-on:keydown.escape.window = "show = false"
                    class="pb-3 z-50  inset-0">
                    <div class="container max-w-screen-sm mx-auto">
                        <div >
                        <div  class="bg-white rounded shadow-lg p-4 px-2 md:p-8 mb-6">
                            <div class=" pl-7 grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                <div class="text-gray-600">
                                    <p class="font-medium text-lg">Register</p>
                                    <p>Permission Info.</p>
                                </div>
                                <div class="lg:col-span-2">
                                    <form wire:submit="createpermission"  method="POST">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                            <div class="md:col-span-3 pr-2">
                                                <label for="full_name">Permission name</label>
                                                <input type="text" wire:model="name"  class="h-10 border mt-1 rounded-sm  px-4 w-full focus:outline-none" autocomplete="off" />
                                            </div>
                                            <div class="md:col-span-5">
                                            </div>
                                            <div class="md:col-span-5 text-right pr-9">
                                                <div class="inline-flex items-end" x-on:Click="isOpen = false">
                                                    <button class="bg-[#4C4C4C] hover:bg-[#4C4C4C] text-white font-semibold py-2 px-4 rounded-sm" type="submit"> 
                                                    <span wire:target="createpermission" wire:loading.remove> <i class="fas fa-plus"></i> Register</span>
                                                    <span wire:target="createpermission" wire:loading>  Loading ...</span>
                                                    </button>
                                                </div>
                                                <div class="inline-flex items-end" x-on:click = "show = false">
                                                    <button class="bg-[#E6E6E6] text-[#212121] font-semibold py-2 px-4 rounded-sm"> <i class="fa fa-close fa-sm"></i> Close</button>
                                                </div>
                                            </div>
                
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <h1>Fraa</h1>
                </div>
            </div>
        <div>  
  

        </div>
    </div>
  </div>
  <?php /**PATH C:\xampp\htdocs\fintech_avec\resources\views/livewire/role-permission/permision/index.blade.php ENDPATH**/ ?>