<div  class="flex">
    <div class="basis-[13%] h-[100vh] border">
        @livewire('include.Sidebar')
    </div>
    <div  class="basis-[87%] border bg-[#F7F8FB]">
        <div>
            @livewire('include.header')
            {{-- $this->dispatch('close-modal'); --}}
        </div>
        {{-- Body --}}
        <div  class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 px-4">
            <div>
                <button x-data x-on:click="$dispatch('open-modal')" class="p-2  bg-black text-white">click</button>

            </div>
            <div>
                <h1>Fraa</h1>
            </div>
        </div>
        <div>  

            <div 
            x-data="{ show : false }"
            x-on:open-modal.window = "show = true"
            x-on:close-modal.window = "show = false"
            x-show = "show"
            x-on:keydown.escape.window = "show = false"
            class="pb-3 z-50  inset-0">
            <div class="container max-w-screen-sm mx-auto">
                <div >
                  <div  class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                      <div class="text-gray-600">
                        <p class="font-medium text-lg">Register Users</p>
                        <p>Personnal Info.</p>
                      </div>
                      <div class="lg:col-span-2">
                        <form wire:submit="register"  method="POST">
                          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                              <label for="full_name">Full Name</label>
                              <input type="text" wire:model="user_fullname" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                            </div>
                            <div class="md:col-span-5">
                              <label for="email">Email Address</label>
                              <input type="text" wire:model="user_email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="brysonbf32@gmail.com" />
                            </div>

                            <div class="md:col-span-3">
                              <label for="address">User Name</label>
                              <input type="text"  id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                            </div>
                            <div class="md:col-span-2">
                              <label for="city">Password</label>
                              <input type="text"  wire:model="user_password" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                            </div>
                            <div class="md:col-span-2 hidden" >
                              <label for="country">Country / region</label>
                              <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                <input name="country" id="country" placeholder="Country" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                <button tabindex="-1" class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                  <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                  </svg>
                                </button>
                                <button tabindex="-1" for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                  <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                </button>
                              </div>
                            </div>

                            <div class="md:col-span-2 hidden">
                              <label for="state">State / province</label>
                              <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                <input name="state" id="state" placeholder="State" class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                                <button tabindex="-1" class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                  <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                  </svg>
                                </button>
                                <button tabindex="-1" for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                  <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                </button>
                              </div>
                            </div>

                            <div class="md:col-span-1 hidden">
                              <label for="zipcode">City</label>
                              <input type="text" name="zipcode" id="zipcode" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="" value="" />
                            </div>

                            <div class="md:col-span-5">
                            </div>
                    
                            <div class="md:col-span-5 text-right">
                              <div class="inline-flex items-end" x-on:Click="isOpen = false">
                                <button class="bg-[#212121] hover:bg-[#212121] text-white font-semibold py-2 px-4  " type="submit"  > <i class="fas fa-plus"></i> Submit</button>
                              </div>
                              <div class="inline-flex items-end" x-on:click = "show = false">
                                <button class="bg-[#E6E6E6] text-[#212121] font-semibold py-2 px-4"> <i class="fa fa-close"></i> Close</button>
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
        </div>
    </div>
</div>
