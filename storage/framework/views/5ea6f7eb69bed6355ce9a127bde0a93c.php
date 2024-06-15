<div class="flex">
    <div class="basis-[13%] h-[100vh] border">
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('include.Sidebar');

$__html = app('livewire')->mount($__name, $__params, 'w4l8WLI', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
  
    <div class="basis-[87%] border bg-[#F7F8FB]">
  
        <div class=" pt-5 px-4">
          <div class=" " >
          <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-2" >

              <!--[if BLOCK]><![endif]--><?php if($userdetaildata): ?>
              <div class="shadow-sm bg-white rounded-md  lg:col-span-2 sm:col-span-1">
           
                <div class="bg-white py-0">
                  <span class="text-sm font-semibold px-2 text-blue-400">Details</span>
                </div>
               
                  <div class=" grid grid-cols-4 gap-1">
                    <div class="pt-2">
                      <img class='border border-slate-100 h-50 w-48 rounded-sm'  src="../profilesImages/im1.jpeg"/>
                      <div class="py-2 px-2">
                        <h1 class="text-left text-blue-400 font-bold text-lg"><?php echo e($userdetaildata->user_username); ?></h1>
                      </div>
                    </div>
                    <div class="col-cols-2 px-4">
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
          </div>
        </div>
      <div class="">
        <Outlet></Outlet>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\fintech_avec\resources\views/livewire/contact.blade.php ENDPATH**/ ?>