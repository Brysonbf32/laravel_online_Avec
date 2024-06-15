<div  class="flex">
  <div class="basis-[13%] h-[100vh] border">
      @livewire('include.Sidebars')
  </div>
  <div  class="basis-[87%] border bg-[#F7F8FB]">
    <div>
      @livewire('include.navbar')
      {{-- $this->dispatch('close-modal'); --}}
    </div>
        <div class="grid lg:grid-cols-2">
          <div>
              <div class="px-2 " x-data="{ registeruser_modal: false }">
                <!-- Card Body -->
                <div class='bg-white rounded'>
                  <div class="flex justify-between  px-4 bg-slate-100 py-2">
                    <div class="text-sm font-semibold">Users</div>
                    <div><i class="fa fa-plus fa-sm fa-fw text-blue-400 cursor-pointer font-semibold"  @click="registeruser_modal =!registeruser_modal"></i></div>
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
                                            <form wire:submit="ajouterutilisateur"  method="POST" enctype="multipart/form-data">
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
                                                    @if ($user_image)
                                                      <img class="w-20 h-20" src="{{ $user_image->temporaryUrl()}}" alt="">
                                                    @endif
                                                </div>
                                                <div class="md:col-span-5 text-right pr-4">
                                                  <div class="inline-flex items-end">
                                                    <button class="bg-[#4C4C4C] hover:bg-[#4C4C4C] text-white font-semibold py-2 px-2 rounded-sm" type="submit"> 
                                                    <span wire:target="ajouterutilisateur" wire:loading.remove> Register <i class="fas fa-plus"></i></span>
                                                    <span wire:target="ajouterutilisateur" wire:loading>  Loading ...</span>
                                                    </button>
                                                  </div>
                                                  <div @click="registeruser_modal =!registeruser_modal" class="inline-flex items-end" >
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
                        @foreach ($getusers as $user)    
                            <tr class='hover:bg-slate-50 border-t h-5 border-slate-200'>                    
                              <td class='text-xs text-left font-semibold  text-[#141B27] flex justify-start gap-1 py-2' x-data="{ updatephoto_modal: false }">
                                <span class='pl-4'><img class='border border-slate-100 h-10 w-10 rounded-full'  src="{{ asset('storage/users/'.$user->user_image)}}"/> </span>
                                <span class='pt-3  px-1'><i class="fa fa-camera"  @click="updatephoto_modal =!updatephoto_modal"></i>&nbsp;&nbsp;{{ $user->user_username}}</span>

                                <div x-show="updatephoto_modal" class="fixed inset-0 overflow-y-auto z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                  <div class="flex items-end justify-center min-h-screen px-1 sm:px-1 md:px-4 text-center md:items-center sm:block sm:p-0">
                                    <div x-cloak @click="updatephoto_modal = false" x-show="updatephoto_modal" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0" 
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100" 
                                    x-transition:leave-end="opacity-0"
                                    class="fixed inset-0 transition-opacity bg-[#212121] bg-opacity-30" aria-hidden="true" style="backdrop-filter: blur(1px);"
                                    ></div>
                                    <div class="flex justify-center h-screen items-center place-content-center px-3">
                                        <div x-cloak x-show="updatephoto_modal" 
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
                                                      <form wire:submit="edit_image"  method="POST" enctype="multipart/form-data">
                                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                                          <div class="md:col-span-2">
                                                            <label for="uploadFile1"
                                                                class="flex bg-gray-800 hover:bg-gray-700 text-white text-base px-5 py-3 outline-none rounded w-max cursor-pointer mx-auto font-[sans-serif]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 mr-2 fill-white inline" viewBox="0 0 32 32">
                                                                  <path
                                                                    d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                                                                    data-original="#000000" />
                                                                  <path
                                                                    d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                                                                    data-original="#000000" />
                                                                </svg>
                                                                Televerser
                                                                <input type="file" id='uploadFile1'  wire:model="user_image" wire:input.debounce.2000ms="edit_image({{$user->id}}, $event.target.value)" value="{{$user->user_username}}" class="hidden" />
                                                              </label>
                                                          </div>

                                                          <div class="md:col-span-5">
                                                              @if ($user_image)
                                                                <img class="w-20 h-20" src="{{ $user_image->temporaryUrl()}}" alt="">
                                                              @endif
                                                          </div>
                                                          <div class="md:col-span-5 text-right pr-4">
                                                            <div @click="updatephoto_modal =!updatephoto_modal" class="inline-flex items-end" >
                                                              <button class="bg-[#E6E6E6] text-[#212121] font-semibold py-2 px-2 rounded-sm"> <i class="fa fa-close fa-sm"></i> Close</button>
                                                            </div>
                                                          </div>
                                
                                                        </div>
                                                      </form>
                                                    </div>
                                                  </div>
                                                    <div @click="updatephoto_modal =!updatephoto_modal" class="text-xl font-medium text-black  h-10 w-10 bg-gray-100 rounded-md text-center cursor-pointer flex justify-center items-center place-content-center">
                                                        <i class="fa-solid fa-xmark"></i>    
                                                    </div>
                                                </div>
                                                
                                            </div>                                                                                                                     
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              
                            </td>
                            <td>
                                <span class='text-xs text-left font-semibold  text-[#141B27] flex justify-start gap-1 py-2'>{{ $user->user_email}}</span>
            
                            </td>
                                <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                  <span class='pb-2'>{{ $user->user_role}}</span>
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
                                                            <form wire:submit="ajouterutilisateur"  method="POST" enctype="multipart/form-data">
                                                              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
                                                                <div class="md:col-span-2">
                                                                  <label class="text-black" for="address">User Name</label>
                                                                  <input type="text" wire:input.debounce.2000ms="edit_name({{$user->id}}, $event.target.value)" value="{{$user->user_username}}" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                </div>
                                                                <div class="md:col-span-2">
                                                                  <label class="text-black" for="email">Email Address</label>
                                                                  <input type="text" wire:input.debounce.2000ms="edit_mail({{$user->id}}, $event.target.value)" value="{{$user->user_email}}" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                </div>
                                                                <div class="md:col-span-2">
                                                                  <label class="text-black" for="city">Password</label>
                                                                  <input type="text" wire:input.debounce.2000ms="edit_password({{$user->id}}, $event.target.value)" value="{{$user->user_password}}" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                </div>
                                                                <div class="md:col-span-2">
                                                                  <label class="text-black" for="city">Role</label>
                                                                  <select wire:model="user_role" class="h-10 border mt-1 rounded-sm px-2 w-full  focus:outline-none">
                                                                    <option class="text-sm">Choose Role</option>
                                                                    <input type="text" wire:input.debounce.2000ms="edit_role({{$user->id}}, $event.target.value)" value="{{$user->user_role}}" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                    <option class="text-sm" value="AD">Administrateur</option>
                                                                    <option value="SA" class="text-sm">Sous Admin</option>
                                                                    <option value="US" class="text-sm">User</option>
                                
                                                                  </select>
                                                                </div>
                                                                <div class="md:col-span-5 text-right pr-4">
                                                                  <div @click="updateuser_modal =!updateuser_modal" class="inline-flex items-end" >
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
                                    <div wire:click="deleteuser({{ $user->id }})" wire:confirm="Permission Deleted successfully" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                    <i class="fa fa-trash"></i>
                                    </div>
                                    <div  wire:click="showdetailuserdata({{ $user->id}})" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500" >
                                    <i class="fa fa-eye"></i>
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
      <div>
        @if ($userdetaildata)
        <div class="shadow-sm bg-white rounded-md  lg:col-span-2 sm:col-span-1">
          <div class="bg-white py-0">
            <span class="text-sm font-semibold px-2 text-blue-400">Details</span>
          </div>
            <div class=" grid grid-cols-4 gap-1">
              <div class="pt-2">
                <img class='border border-slate-100 h-50 w-48 rounded-sm'  src="{{ asset('storage/users/'.$userdetaildata->user_image)}}"/>
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
    </div>
  </div>

</div>
