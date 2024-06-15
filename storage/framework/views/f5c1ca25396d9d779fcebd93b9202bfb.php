<div  class="flex">
    <div class="basis-[13%] h-[100vh] border">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('include.Sidebars');

$__html = app('livewire')->mount($__name, $__params, 'lCOo2Xs', $__slots ?? [], get_defined_vars());

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

$__html = app('livewire')->mount($__name, $__params, 'svb0Qpj', $__slots ?? [], get_defined_vars());

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
                    <div class="flex justify-between  px-2 bg-slate-100">
                        <div class=" flex gap-2">
                            <div>
                                <span class="text-sm font-semibold px-2 text-blue-400">Users</span>
                            </div>
                        </div>
                        <div>
                            <div x-data="{ registeruser_modal: false }" class="text-sm  px-2 w-7 h-7 bg-slate-100 text-centr rounded-full pt-1 place-content-center mb-0 font-weight-bold text-gray-800">
                              <!--<i class="fas fa-ellipsis-v fa-lg fa-fw text-blue-400 cursor-pointer" ></i>-->
                            <i class="fa fa-plus fa-sm fa-fw text-blue-400 cursor-pointer"  @click="registeruser_modal =!registeruser_modal"></i>
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
                                                                    <p class="font-medium text-lg">Register users</p>
                                                                  </div>
                                                                  <div class="lg:col-span-4">
                                                                    <form wire:submit="registeruser"  method="POST" enctype="multipart/form-data">
                                                                      <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                                                        <div class="md:col-span-2">
                                                                          <label for="full_name">Full Name</label>
                                                                          <input type="text" wire:model="user_fullname" id="full_name" class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none" required />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="full_name">Upload Profile</label>
                                                                          <input type="file" wire:model="user_image"  class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none"  />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="address">User Name</label>
                                                                          <input type="text" wire:model="user_username" id="address" class="h-10 border mt-1 rounded-sm  px-2 w-full  focus:outline-none"  placeholder="" />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="email">Email Address</label>
                                                                          <input type="text" wire:model="user_email" id="email" class="h-10 border mt-1 rounded-sm px-2 w-full  focus:outline-none"  placeholder="brysonbf32@gmail.com" />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="city">Password</label>
                                                                          <input type="password"  wire:model="user_password"  class="h-10 border mt-1 rounded-sm  px-2 w-full  focus:outline-none"  placeholder="" />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="city">Role</label>
                                                                          <select wire:model="user_role" class="h-10 border mt-1 rounded-sm px-2 w-full  focus:outline-none">
                                                                            <option class="text-sm">Choose Role</option>
                                                                            <option class="text-sm" value="AD">Administrateur</option>
                                                                            <option value="SA" class="text-sm">Sous Admin</option>
                                                                            <option value="US" class="text-sm">User</option>
                                        
                                                                          </select>
                                                                        </div>
                                                                        <div class="md:col-span-5">
                                                                            <!--[if BLOCK]><![endif]--><?php if($user_image): ?>
                                                                              <img class="w-20 h-20" src="<?php echo e($user_image->temporaryUrl()); ?>" alt="">
                                                                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                                        </div>
                                                                        <div class="md:col-span-5 text-right pr-4">
                                                                          <div class="inline-flex items-end">
                                                                            <button class="bg-[#4C4C4C] hover:bg-[#4C4C4C] text-white font-semibold py-2 px-2 rounded-sm" type="submit"> 
                                                                            <span wire:target="registeruser" wire:loading.remove> Register <i class="fas fa-plus"></i></span>
                                                                            <span wire:target="registeruser" wire:loading>  Loading ...</span>
                                                                            </button>
                                                                          </div>
                                                                          <div class="inline-flex items-end" x-on:click = "show = false">
                                                                            <button class="bg-[#E6E6E6] text-[#212121] font-semibold py-2 px-2 rounded-sm"> <i class="fa fa-close fa-sm"></i> Close</button>
                                                                          </div>
                                                                        </div>
                                              
                                                                      </div>
                                                                    </form>
                                                                  </div>
                                                                </div>
                                                                  <div @click="registeruser_modal =!registeruser_modal" class="text-xl font-medium text-black  h-10 w-10 bg-gray-100 rounded-md text-center cursor-pointer flex justify-center items-center place-content-center">
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
                        <div class='bg-white rounded'>
                          <table class=' w-full '>
                            <thead class=''>
                              <tr>
                                <th class='text-sm text-left font-semibold  text-[#141B27]/[0.6] p-2'><span class=' pl-14'>Username</span></th>

                                <th class='text-sm text-left font-semibold  text-[#141B27]/[0.6] p-2'><span class=''>Email</span></th>
                                  <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'>Role</th>
                                  
                              <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'></th>
                              </tr>
                            </thead>
                            <tbody>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $getusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                    <tr class='hover:bg-slate-50 border-t h-5 border-slate-200'>                    
                                      <td class='text-xs text-left font-semibold  text-[#141B27] flex justify-start gap-1 py-2'>
                                        <span class='pl-4'><img class='border border-slate-100 h-10 w-10 rounded-full'  src="<?php echo e(asset('storage/users/'.$user->user_image)); ?>"/></span>
                                        <span class='pt-3  px-2'><?php echo e($user->user_username); ?></span>
                                    </td>
                                    <td>
                                        <span class='text-xs text-left font-semibold  text-[#141B27] flex justify-start gap-1 py-2'><?php echo e($user->user_email); ?></span>

                                    </td>
                                        <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                          <span class='pb-2'><?php echo e($user->user_role); ?></span>
                                        </td>
                                        <td class='text-xs text-right font-normal  text-[#141B27] '>
                                          <div class="flex gap-2">
                                            <div  x-data="{ updateuser_modal: false }" class="w-7 h-7 rounded-full bg-slate-200 text-center fff  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                            <i class="fa fa-pencil" @click="updateuser_modal =!updateuser_modal"></i>
                                            <div x-show="updateuser_modal" class="fixed inset-0 overflow-y-auto z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                              <div class="flex items-end justify-center min-h-screen px-1 sm:px-1 md:px-4 text-center md:items-center sm:block sm:p-0">
                                                  <div x-cloak @click="updateuser_modal = false" x-show="updateuser_modal" 
                                                      x-transition:enter="transition ease-out duration-300 transform"
                                                      x-transition:enter-start="opacity-0" 
                                                      x-transition:enter-end="opacity-100"
                                                      x-transition:leave="transition ease-in duration-200 transform"
                                                      x-transition:leave-start="opacity-100" 
                                                      x-transition:leave-end="opacity-0"
                                                      class="fixed inset-0 transition-opacity bg-[#212121] bg-opacity-30" aria-hidden="true" style="backdrop-filter: blur(1px);"
                                                  ></div>
                                                  <div class="flex justify-center h-screen items-center place-content-center px-3">
                                                      <div x-cloak x-show="updateuser_modal" 
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
                                                                    <p class="font-medium text-lg">Update users</p>
                                                                  </div>
                                                                  <div class="lg:col-span-4">
                                                                    <form wire:submit="registeruser"  method="POST" enctype="multipart/form-data">
                                                                      <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                                                        <div class="md:col-span-2">
                                                                          <label for="full_name">Full Name <?php echo e($user->id); ?></label>
                                                                          <input type="text" wire:model="user_fullname" id="full_name" class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none" required />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="full_name">Upload Profile</label>
                                                                          <input type="file" wire:model="user_image"  class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none"  />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="address">User Name</label>
                                                                          <input type="text" value="<?php echo e($user->id); ?>" wire:model="user_username" id="address" class="h-10 border mt-1 rounded-sm  px-2 w-full text-red-400 focus:outline-none"  placeholder="" />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="email">Email Address</label>
                                                                          <input type="text" wire:model="user_email" id="email" class="h-10 border mt-1 rounded-sm px-2 w-full  focus:outline-none"  placeholder="brysonbf32@gmail.com" />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="city">Password</label>
                                                                          <input type="password"  wire:model="user_password"  class="h-10 border mt-1 rounded-sm  px-2 w-full  focus:outline-none"  placeholder="" />
                                                                        </div>
                                                                        <div class="md:col-span-2">
                                                                          <label for="city">Role</label>
                                                                          <select wire:model="user_role" class="h-10 border mt-1 rounded-sm px-2 w-full  focus:outline-none">
                                                                            <option class="text-sm">Choose Role</option>
                                                                            <option class="text-sm" value="AD">Administrateur</option>
                                                                            <option value="SA" class="text-sm">Sous Admin</option>
                                                                            <option value="US" class="text-sm">User</option>
                                        
                                                                          </select>
                                                                        </div>
                                                                        <div class="md:col-span-5">
                                                                            <!--[if BLOCK]><![endif]--><?php if($user_image): ?>
                                                                              <img class="w-20 h-20" src="<?php echo e($user_image->temporaryUrl()); ?>" alt="">
                                                                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                                                        </div>
                                                                        <div class="md:col-span-5 text-right pr-4">
                                                                          <div class="inline-flex items-end">
                                                                            <button class="bg-[#4C4C4C] hover:bg-[#4C4C4C] text-white font-semibold py-2 px-2 rounded-sm" type="submit"> 
                                                                            <span wire:target="registeruser" wire:loading.remove> Update <i class="fas fa-plus"></i></span>
                                                                            <span wire:target="registeruser" wire:loading>  Loading ...</span>
                                                                            </button>
                                                                          </div>
                                                                          <div class="inline-flex items-end" x-on:click = "show = false">
                                                                            <button class="bg-[#E6E6E6] text-[#212121] font-semibold py-2 px-2 rounded-sm"> <i class="fa fa-close fa-sm"></i> Close</button>
                                                                          </div>
                                                                        </div>
                                              
                                                                      </div>
                                                                    </form>
                                                                  </div>
                                                                </div>
                                                                  <div @click="updateuser_modal =!updateuser_modal" class="text-xl font-medium text-black  h-10 w-10 bg-gray-100 rounded-md text-center cursor-pointer flex justify-center items-center place-content-center">
                                                                      <i class="fa-solid fa-xmark"></i>    
                                                                  </div>
                                                              </div>
                                                              
                                                          </div>                                                                                                                     
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                            
                                            </div>
                                            <div wire:click="deleteuser(<?php echo e($user->id); ?>)" wire:confirm="Permission Deleted successfully" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                            <i class="fa fa-trash"></i>
                                            </div>
                                            <div  wire:click="showdetailuserdata(<?php echo e($user->id); ?>)" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500" >
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

                <div class="">
                  <!--[if BLOCK]><![endif]--><?php if($userdetaildata): ?>
                  <div class="shadow-sm bg-white rounded-md  lg:col-span-2 sm:col-span-1">
                    <div class="bg-white py-0">
                      <span class="text-sm font-semibold px-2 text-blue-400">Details</span>
                    </div>
                      <div class=" grid grid-cols-4 gap-1">
                        <div class="pt-2">
                          <img class='border border-slate-100 h-50 w-48 rounded-sm'  src="<?php echo e(asset('storage/users/'.$userdetaildata->user_image)); ?>"/>
                          <div class="py-2 px-2">
                            <h1 class="text-left text-blue-400 font-bold text-lg"><?php echo e($userdetaildata->user_username); ?></h1>
                          </div>
                        </div>
                        <div class="col-cols-2 px-2">
                          <div class="grid grid-cols-3">
                            <div class=" text-left text-[#141B27]/[0.6] font-bold text-sm pt-2">
                              <h1>Fullname</h1>
                            </div>
                            <div class=" pt-1"> 
                              <h1c class=" text-lg font-bold text-[#141B27]/[0.6] text-right px-8">:</h1>
                            </div>
                            <div class="text-sm text-left font-medium  text-[#141B27]/[0.6] pt-2">
                              <h1><?php echo e($userdetaildata->user_fullname); ?></h1>
                            </div>
                          </div>
                          <div class="grid grid-cols-3">
                            <div class=" text-left text-[#141B27]/[0.6] font-bold text-sm pt-2">
                              <h1>Role</h1>
                            </div>
                            <div class=" pt-1">
                              <h1c class=" text-lg font-bold text-[#141B27]/[0.6] text-right px-8">:</h1>
                            </div>
                            <div class="text-sm text-left font-medium  text-[#141B27]/[0.6] pt-2">
                              <h1><?php echo e($userdetaildata->user_role); ?></h1>
                            </div>
                          </div>
                          
                        </div>
                        <div class=" px-7">
                          <div class="grid grid-cols-3">
                            <div class=" text-left text-[#141B27]/[0.6] font-bold text-sm pt-2">
                              <h1>Email</h1>
                            </div>
                            <div class=" pt-1">
                              <h1c class=" text-lg font-bold text-[#141B27]/[0.6] text-right px-8">:</h1>
                            </div>
                            <div class="text-sm text-left font-medium  text-[#141B27]/[0.6] pt-2">
                              <h1><?php echo e($userdetaildata->user_email); ?></h1>
                            </div>
                          </div>
                          <div class="grid grid-cols-3">
                            <div class=" text-left text-[#141B27]/[0.6] font-bold text-sm pt-2">
                              <h1>Password</h1>
                            </div>
                            <div class=" pt-1">
                              <h1c class=" text-lg font-bold text-[#141B27]/[0.6] text-right px-8">:</h1>
                            </div>
                            <div class="text-sm text-left font-medium  text-[#141B27]/[0.6] pt-2">
                              <details> <h1><?php echo e($userdetaildata->user_password); ?></h1></details>
                            
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                </div>
        <div>  
  
        </div>
    </div>
    
  </div>
  <?php /**PATH C:\xampp\htdocs\fintech_avec\resources\views/livewire/users/home.blade.php ENDPATH**/ ?>