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
          <div  class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 px-2 gap-4">
              <div class=" shadow-sm bg-white rounded-md col-span-1">
                  @if(session('status'))
                  <div class="py-2 px-2 bg-[#BAD8FC] text-sm font-serif  rounded-sm">
                      {{ session('status')}}
                  </div>
              @endif
                  <div class="flex justify-between  px-2 bg-slate-100">
                      <div class=" flex gap-2">
                          <div>
                              <span class="text-sm font-semibold px-2 text-blue-400">Permission</span>
                          </div>
                      </div>
                      <div>
                          <div x-data x-on:click="$dispatch('open-modal')" class="text-sm  px-2 w-7 h-7 bg-slate-100 text-centr rounded-full pt-1 place-content-center mb-0 font-weight-bold text-gray-800">
                          <i class="fas fa-ellipsis-v fa-lg fa-fw text-blue-400 cursor-pointer" >+</i>
                          </div>
                      </div>
                  </div>
                  <div class="px-2 ">
                      <!-- Card Body -->
                      <div class=' bg-white rounded'>
                        <table class=' w-full '>
                          <thead class=''>
                            <tr>
                              <th class=' text-sm text-left font-semibold  text-[#141B27]/[0.6] p-2'><span class=' pl-14'>Username</span></th>                            <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'>Role</th>
                            <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'></th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($getusers as $user)    
                                  <tr class='hover:bg-slate-50 border-t h-5 border-slate-200'>                    
                                    <td class='text-xs text-left font-semibold  text-[#141B27] flex justify-start gap-1 py-2'>
                                      <span class='pl-4'><img class='border border-slate-100 h-10 w-10 rounded-full'  src="../img/1a.png"/></span>
                                      <span class='pt-3  px-2'>{{ $user->user_username}}</span>
                                  </td>
                                      <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                        <span class='pb-2'>{{ $user->user_role}}</span>
                                      </td>
                                      <td class='text-xs text-right font-normal  text-[#141B27] '>
                                        <div class="flex gap-2">
                                          <div class="w-7 h-7 rounded-full bg-slate-200 text-center fff  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                          <a href=" {{ route('cnt')}}" wire:navigate><i class="fa fa-plus"></i></a>
                                          </div>
                                          <div wire:click="deletepermission({{ $user->id }})" wire:confirm="Permission Deleted successfully" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                          <i class="fa fa-trash"></i>
                                          </div>
                                          <div  wire:click="showdetailuserdata({{ $user->id}})" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500" >
                                          <i class="fa fa-eye">eye</i>
                                          </div>
                                        </div>
                                      </td>                                                   
                                  </tr>
                              @endforeach
                          </tbody>
                        </table>
                      </div>
                  </div>            
              </div>

              <div class="">
                @if ($userdetaildata)
                <div class="shadow-sm bg-white rounded-md  lg:col-span-2 sm:col-span-1">
             
                  <div class="bg-white py-0">
                    <span class="text-sm font-semibold px-2 text-blue-400">Details</span>
                  </div>
                 
                    <div class=" grid grid-cols-4 gap-1">
                      <div class="pt-2">
                        <img class='border border-slate-100 h-50 w-48 rounded-sm'  src="../img/1a.png"/>
                        <div class="py-2 px-2">
                          <h1 class="text-left text-blue-400 font-bold text-lg">{{ $userdetaildata->user_username}}</h1>
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
                            <h1>{{ $userdetaildata->user_fullname}}</h1>
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
                            <h1>{{ $userdetaildata->user_role}}</h1>
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
                            <h1>{{ $userdetaildata->user_email}}</h1>
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
                            <details> <h1>{{ $userdetaildata->user_password}}</h1></details>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                 
                </div>
                @endif
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
                      <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-4">
                        <div class="text-gray-600">
                          <p class="font-medium text-lg">Register users</p>
                        </div>
                        <div class="lg:col-span-4">
                          <form wire:submit="register"  method="POST">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                              <div class="md:col-span-2">
                                <label for="full_name">Full Name</label>
                                <input type="text" wire:model="user_fullname" id="full_name" class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none"  />
                              </div>
                              <div class="md:col-span-2">
                                <label for="full_name">Upload Profile</label>
                                <input type="file" wire:model="user_fullname" id="full_name" class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none"  />
                              </div>
                              <div class="md:col-span-2">
                                <label for="address">User Name</label>
                                <input type="text"  id="address" class="h-10 border mt-1 rounded-sm  px-2 w-full  focus:outline-none"  placeholder="" />
                              </div>
                              <div class="md:col-span-2">
                                <label for="email">Email Address</label>
                                <input type="text" wire:model="user_email" id="email" class="h-10 border mt-1 rounded-sm px-2 w-full  focus:outline-none"  placeholder="brysonbf32@gmail.com" />
                              </div>
                              <div class="md:col-span-2">
                                <label for="city">Password</label>
                                <input type="text"  wire:model="user_password" id="city" class="h-10 border mt-1 rounded-sm  px-2 w-full  focus:outline-none"  placeholder="" />
                              </div>
                              <div class="md:col-span-2">
                                <label for="city">Role</label>
                                <select wire:model="user_role" class="h-10 border mt-1 rounded-sm px-2 w-full  focus:outline-none">
                                  <option class="text-sm">Choose Role</option>
                                  <option class="text-sm" value="Administrateur">Administrateur</option>
                                  <option value="Secretary" class="text-sm">Secretary</option>
    
                                </select>
                              </div>
                              <div class="md:col-span-5">
                              </div>
                              <div class="md:col-span-5 text-right pr-4">
                                <div class="inline-flex items-end" x-on:Click="isOpen = false">
                                  <button class="bg-[#4C4C4C] hover:bg-[#4C4C4C] text-white font-semibold py-2 px-2 rounded-sm" type="submit"> 
                                  <span wire:target="register" wire:loading.remove> <i class="fas fa-plus"></i> Register</span>
                                  <span wire:target="register" wire:loading>  Loading ...</span>
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
                    </div>
                  </div>
                </div>
              </div>
          </div>
          </div>
      <div>  


      </div>
  </div>
  
</div>
