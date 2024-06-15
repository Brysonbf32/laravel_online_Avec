<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="shaddow-xl">

    
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Insert User</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

      <form wire:submit="register" class="space-y-6">
        <div>
            <label  class="font-sans text-gray-500 text-sm">Full Name</label>
            <div class="mt-2">
              <input  wire:model="user_fullname" type="text"  required class=" text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
            </div>
          </div>
          <div>
            <label  class="font-sans text-gray-500 text-sm"> User Name</label>
            <div class="mt-2">
              <input  wire:model="user_username" type="text"  required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
            </div>
          </div>
        <div>
          <label  class="font-sans text-gray-500 text-sm">Email address</label>
          <div class="mt-2">
            <input  wire:model="user_email" type="email"  required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
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
          <button type="submit" class="bg-blue-600 p-2 px-3 w-full inline-block rounded-md text-sans text-white">
            <span wire:target="register" wire:loading.remove>Insert User</span>
            <span wire:target="register" wire:loading>loading...</span>
          </button>
        </div>
      </form>
    </div>
  </div>