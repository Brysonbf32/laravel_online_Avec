<div  class="flex">
    <div class="basis-[13%] h-[100vh] border">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('include.Sidebars');

$__html = app('livewire')->mount($__name, $__params, 'QPw1e6B', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('include.navbar');

$__html = app('livewire')->mount($__name, $__params, 'oey63kV', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            
        </div>
        <style>
          .colored-toast.swal2-icon-success {
            background-color: #a5dc86 !important;
          }

          .colored-toast.swal2-icon-error {
            background-color: #f27474 !important;
          }

          .colored-toast.swal2-icon-warning {
            background-color: #f8bb86 !important;
          }

          .colored-toast.swal2-icon-info {
            background-color: #3fc3ee !important;
          }

          .colored-toast.swal2-icon-question {
            background-color: #87adbd !important;
          }

          .colored-toast .swal2-title {
            color: white;
          }

          .colored-toast .swal2-close {
            color: white;
          }

          .colored-toast .swal2-html-container {
            color: white;
          }
        </style>
        
            <div  class="grid  sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 px-2 gap-4">
                <div class=" shadow-sm bg-white rounded-md col-span-1">
                    <!--[if BLOCK]><![endif]--><?php if(session('status')): ?>
                    <div class="py-2 px-2 bg-[#BAD8FC] text-sm font-serif  rounded-sm">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                    <div class="flex justify-between  px-2 bg-slate-100">
                        <div class=" flex gap-2">
                            <div>
                                <span class="text-sm font-semibold px-2 text-blue-400">AVEC</span>
                            </div>
                        </div>
                        <div>
                            <div x-data="{ registeruser_modal: false }" class="text-sm  px-2 w-7 h-7 bg-slate-100 text-centr rounded-full pt-1 place-content-center mb-0 font-weight-bold text-gray-800">
                            <i class="fas fa-plus fa-lg fa-fw text-blue-400 cursor-pointer" @click="registeruser_modal =!registeruser_modal"></i>
                            <div x-show="registeruser_modal" class="fixed inset-0 overflow-y-auto z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                              <div class="flex items-end justify-center min-h-screen px-1 sm:px-1 md:px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="registeruser_modal = false" x-show="registeruser_modal" 
                                x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0" 
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100" 
                                x-transition:leave-end="opacity-0"
                                class="fixed inset-0 transition-opacity bg-[#212121] bg-opacity-30" aria-hidden="true" style="backdrop-filter: blur(1px);"
                                ></div>
                                <div class="flex justify-center h-screen items-center place-content-center px-3">
                                    <div x-cloak x-show="registeruser_modal" 
                                        x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="transition ease-in duration-200 transform"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        class="relative inline-block w-full sm:w-full md:w-[600px] 2xl:w-[600px] overflow-hidden text-left transition-all transform bg-white  rounded-lg 2xl:max-w-2xl border-2 border-gray-100">
                                        <div class="p-4 sm:p-4 md:p-7">
                                            <div class="flex justify-between pb-5">
                                              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-4">
                                                <div class="text-gray-600">
                                                  <p class="font-medium text-lg">Compte</p>
                                                </div>
                                                <div class="lg:col-span-4">
                                                  <form wire:submit="createcompte"  method="POST" enctype="multipart/form-data">
                                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                                      <div class="md:col-span-2">
                                                        <label for="full_name">Nom</label>
                                                        <input type="text" wire:model="nom_avec" id="full_name" class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none" required />
                                                      </div>
                                                      <div class="md:col-span-2">
                                                        <label for="full_name">Nombre maximum de membre</label>
                                                        <input type="text" wire:model="nombre_avec"  class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none"  />
                                                      </div>
                                                      <div class="md:col-span-2">
                                                        <label for="address">Montant maximum</label>
                                                        <input type="text" wire:model="montantmax_avec" id="address" class="h-10 border mt-1 rounded-sm  px-2 w-full  focus:outline-none"  placeholder="" />
                                                      </div>
                                                      <div class="md:col-span-2">
                                                        <label for="email">Nombre de cycle</label>
                                                        <input type="text" wire:model="nombrecycle_avec" id="email" class="h-10 border mt-1 rounded-sm px-2 w-full  focus:outline-none"  />
                                                      </div>
                                                      <div class="md:col-span-2">
                                                        <label for="city">Description</label>
                                                        <textarea wire:model="description_avec" class=" border mt-1 rounded-sm px-2  focus:outline-none"  placeholder=" Decrivez votre AVEC" name="" id="" cols="74" rows="5"></textarea>
                                                      </div>
                                                      <div class="md:col-span-5 text-right pr-4">
                                                        <div class="inline-flex items-end">
                                                          <button class="bg-[#4C4C4C] hover:bg-[#4C4C4C] text-white font-semibold py-2 px-2 rounded-sm" type="submit"> 
                                                          <span wire:target="createcompte" wire:loading.remove> Create <i class="fas fa-plus"></i></span>
                                                          <span wire:target="createcompte" wire:loading>  Loading ...</span>
                                                          </button>
                                                        </div>
                                                        <div @click="registeruser_modal =!registeruser_modal" class="inline-flex items-end bg-[#E6E6E6] text-[#212121] font-semibold py-2 px-2 rounded-sm cursor-pointer" >
                                                          <span class="bg-[#E6E6E6] text-[#212121] font-semibold px-2 rounded-sm"> Close <i class="fa fa-close fa-md pt-1"></i></span>
                                                        </div>
                                                      </div>
                            
                                                    </div>
                                                  </form>
                                                  
                                                </div>
                                              </div>
                                                <div @click="registeruser_modal =!registeruser_modal" class="text-xl font-medium text-black  h-10 w-10 rounded-md text-center cursor-pointer flex justify-center items-center place-content-center">
                                                    <i class="fa-solid fa-xmark"></i>    
                                                </div>
                                            </div>
                                            
                                        </div>                                                                                                                     
                                    </div>
                                </div>
                              </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 ">
                        <!-- Card Body -->
                        <!--[if BLOCK]><![endif]--><?php if(session('success')): ?>
                          <script>
                            const Toast = Swal.mixin({
                              toast: true,
                              position: 'top-right',
                              iconColor: 'white',
                              customClass: {
                                popup: 'colored-toast',
                              },
                              showConfirmButton: false,
                              timer: 2400,
                              timerProgressBar: true,
                            })

                               Toast.fire({
                                icon: 'success',
                                title: "<?php echo e(session('success')); ?>",
                              })
                          </script>
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->      
                        <div class=' bg-white rounded'>
                          <table class=' w-full '>
                            <thead class=''>
                              <tr>
                                <th class='text-sm text-left font-semibold  text-[#141B27]/[0.6] p-2'><span>Nom </span></th>
                                <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'>Participants </th>
                                <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'>Montant Maximal </th>
                                <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'>Nombre Cycles </th>


                              <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'></th>
                              </tr>
                            </thead>
                            <tbody>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $getcomptes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comptes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                    <tr class='hover:bg-slate-50 border-t h-5 border-slate-200'>                    
                                    <td>
                                      <span class='text-xs text-left font-semibold px-2 text-[#141B27] flex justify-start gap-1 py-2'><?php echo e($comptes->nom_avec); ?></span>
                                    </td>
                                    <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                      <span class='pb-2'><?php echo e($comptes->nombre_avec); ?></span>
                                    </td>
                                    <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                      <span class='pb-2 text-center'><?php echo e($comptes->montantmax_avec); ?> $</span>
                                    </td>
                                    <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                      <span class='pb-2'><?php echo e($comptes->nombrecycle_avec); ?></span>
                                    </td>
                                    <td class='text-xs text-right font-normal  text-[#141B27] '>
                                      <div class="flex gap-2">
                                        <div  x-data="{ updateavec_modal: false }" class="w-7 h-7 rounded-full bg-slate-200 text-center fff  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                          <i class="fa fa-pencil" @click="updateavec_modal =!updateavec_modal"></i>


                                        <div x-show="updateavec_modal" class="fixed inset-0 overflow-y-auto z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                          <div class="flex items-end justify-center min-h-screen px-1 sm:px-1 md:px-4 text-center md:items-center sm:block sm:p-0">
                                            <div x-cloak @click="updateavec_modal = false" x-show="updateavec_modal" 
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0" 
                                            x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" 
                                            x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-[#212121] bg-opacity-30" aria-hidden="true" style="backdrop-filter: blur(1px);"
                                            ></div>
                                            <div class="flex justify-center h-screen items-center place-content-center px-3">
                                                <div x-cloak x-show="updateavec_modal" 
                                                    x-transition:enter="transition ease-out duration-300 transform"
                                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                    x-transition:leave="transition ease-in duration-200 transform"
                                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    class="relative inline-block w-full sm:w-full md:w-[600px] 2xl:w-[600px] overflow-hidden text-left transition-all transform bg-white  rounded-lg 2xl:max-w-2xl border-2 border-gray-100">
                                                    <div class="p-4 sm:p-4 md:p-7">
                                                        <div class="flex justify-between pb-5">
                                                          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-4">
                                                            <div class="text-gray-600">
                                                              <p class="font-medium text-md">Modifier Compte</p>
                                                            </div>
                                                            <div class="lg:col-span-4">
                                                              <form wire:submit="ajouterutilisateur"  method="POST" enctype="multipart/form-data">
                                                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                                                  <div class="md:col-span-2">
                                                                    <label class="text-black" for="address">Nom</label>
                                                                    <input type="text" wire:input.debounce.2000ms="edit_name(<?php echo e($comptes->id); ?>, $event.target.value)" value="<?php echo e($comptes->nom_avec); ?>" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                  </div>
                                                                  <div class="md:col-span-2">
                                                                    <label class="text-black" for="email">Nombre maximum de membre</label>
                                                                    <input type="text" wire:input.debounce.2000ms="edit_nombremembres(<?php echo e($comptes->id); ?>, $event.target.value)" value="<?php echo e($comptes->nombre_avec); ?>" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                  </div>
                                                                  <div class="md:col-span-2">
                                                                    <label class="text-black" for="city">Montant maximum</label>
                                                                    <input type="text" wire:input.debounce.2000ms="edit_montantmaxi(<?php echo e($comptes->id); ?>, $event.target.value)" value="<?php echo e($comptes->montantmax_avec); ?>" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                  </div>
                                                                  <div class="md:col-span-2">
                                                                    <label class="text-black" for="city">Nombre de cycle</label>
                                                                    <input type="text" wire:input.debounce.2000ms="edit_cycles(<?php echo e($comptes->id); ?>, $event.target.value)" value="<?php echo e($comptes->nombrecycle_avec); ?>" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                  </div>
                                                                  <div class="md:col-span-2">
                                                                    <label class="text-black" for="city" for="city">Description</label>
                                                                    <textarea wire:input.debounce.2000ms="edit_description(<?php echo e($comptes->id); ?>, $event.target.value)" value="<?php echo e($comptes->description_avec); ?>" class=" border mt-1 rounded-sm text-black px-2  focus:outline-none"  placeholder=" Decrivez votre AVEC" name="" id="" cols="74" rows="5"></textarea>
                                                                  </div>
                                                                </div>
                                                              </form>
                                                            </div>
                                                          </div>
                                                            <div @click="updateavec_modal =!updateavec_modal" class="text-xl font-medium text-black  h-10 w-10 bg-white rounded-md text-center cursor-pointer flex justify-center items-center place-content-center">
                                                                <i class="fa-solid fa-xmark"></i>    
                                                            </div>
                                                        </div>
                                                        
                                                    </div>                                                                                                                     
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        </div>
                                        <div wire:click="deleteuser(<?php echo e($comptes->id); ?>)" wire:confirm="Permission Deleted successfully" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                        <i class="fa fa-trash"></i>
                                        </div>
                                        <div  wire:click="showdetailuserdata(<?php echo e($comptes->id); ?>)" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500" >
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
  
                
            </div>
            </div>
        <div>  
  
  
        </div>
    </div>
    
  </div>
  <?php /**PATH C:\xampp\htdocs\fintech_avec\resources\views/livewire/counts/index.blade.php ENDPATH**/ ?>