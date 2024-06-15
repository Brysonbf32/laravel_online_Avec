<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="shaddow-xl">

    
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign up</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <div>
            <!--[if BLOCK]><![endif]--><?php if(session()->has('Successfully')): ?>           
                <div class="bg-emerald-100 px-4 py-2  text-sm rounded-md text-slate-500">
                    <p class="font-sans"><?php echo e(session('Successfully')); ?></p>      
                    <p class="font-sans">Connectez-vous &nbsp;&nbsp;<span class="hover:bg-emerald-200 py-1 px-1 rounded-md  cursor-pointer transition ease-out duration-500"> <a href="<?php echo e(route('lgn')); ?>" wire:navigate> Sign in </a></span></p>          
                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if(session()->has('EmailExist')): ?> 
                <div class=" bg-red-100 px-4 py-2 rounded-md">
                    <p class="font-sans text-sm text-slate-500"><?php echo e(session('EmailExist')); ?></p>
                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
      <form wire:submit="register" class="space-y-6" action="#" method="POST">
        <div>
            <label for="email" class="font-sans text-gray-500 text-sm">Full Name</label>
            <div class="mt-2">
              <input id="email" wire:model="user_fullname" type="text"  required class=" text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
            </div>
          </div>
          <div>
            <label for="email" class="font-sans text-gray-500 text-sm"> User Name</label>
            <div class="mt-2">
              <input id="email" wire:model="user_username" type="text"  required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
            </div>
          </div> 
        <div>
          <label for="email" class="font-sans text-gray-500 text-sm">Email address</label>
          <div class="mt-2">
            <input id="email" wire:model="user_email" type="email"  required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="text-gray-500 font-sans text-sm">Password</label>
          </div>
          <div class="mt-2">
            <input  wire:model="user_password" type="password" autocomplete="email" required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
          </div>
        </div>
  
        <div>
          <button type="submit" class="bg-blue-600 p-2 w-full inline-block rounded-md text-sans text-white">&nbsp;Sign up&nbsp;</button>
        </div>
      </form>
      <p class="mt-5 text-center text-sm text-gray-500">
        <a href="<?php echo e(route('lgn')); ?>" wire:navigate class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign in</a>
      </p>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\fintech_avec\resources\views/livewire/signup.blade.php ENDPATH**/ ?>