<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 pb-2">Sign in to your account</h2>
    <div class=" px-16 grid grid-cols-3 md:grid-cols-3 sm:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3">
      <div class=" bg-white border w-16 h-12 text-center pt-2 shadow-sm rounded-md px-5 hover:bg-white">
        <div class="  text-blue-400   w-7 h-7 pt-1 pb-1 px-2 rounded-full">
          <i class="fab fa-facebook-f "></i>
        </div>
      </div>
      <div class="flex-center bg-white border w-16 h-12 text-center pt-2 shadow-sm rounded-md px-5 hover:bg-white">
        <div class=" bg-white text-lg w-7 h-7 text-black pb-1 px-1 rounded-full">
          <i class="fab fa-apple text-lg"></i>
        </div>
      </div>
      <div class="flex-end bg-white border w-16 h-12 text-center pt-2 shadow-sm rounded-md px-5 hover:bg-white">
        <div class="w-7 h-7 pb-1 px-1 rounded-full">
          <i class="fab fa-google-plus-g text-lg"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <div>
      @if (session()->has('Password_error')) 
        <div class=" bg-red-100 px-4 py-2 rounded-md">
            <p class="font-sans text-sm text-slate-500">{{ session('Password_error')}}</p>
        </div>
      @endif
      @if (session()->has('UserMail_error')) 
      <div class=" bg-red-100 px-4 py-2 rounded-md">
          <p class="font-sans text-sm text-slate-500">{{ session('UserMail_error')}}</p>
      </div>
    @endif
    </div>
    <form class="space-y-6" wire:submit="login" >
      <div>
        <label for="user_email" class="font-sans text-gray-500 text-sm">User Mail</label>
        <div class="mt-2">
          <input id="user_email" wire:model="user_email" type="mail" required class=" text-sm px-2 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
        </div>
      </div> 
      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="text-gray-500 font-sans text-sm">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="email" wire:model="user_password" type="password" required class="text-sm  px-2 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
        </div>
      </div>
      <div>
        <button type="submit" class="bg-blue-600 p-2 w-full inline-block rounded-md text-sans text-white">&nbsp;Sign in&nbsp;</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Don't You Have An Account?
      <a href="{{ route('sgn')}}" wire:navigate class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up</a>
    </p>
  </div>
</div>