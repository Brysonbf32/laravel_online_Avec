<div  class="flex">
    <div class="basis-[13%] h-[100vh] border">
        @livewire('include.Sidebars')
    </div>
    <div  class="basis-[87%] border bg-[#F7F8FB]">
        <div>
            @livewire('include.navbar')
            {{-- $this->dispatch('close-modal'); --}}
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
        {{-- Body --}}
            <div  class="grid  sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 px-2 gap-4">
                <div class=" shadow-sm bg-white rounded-md col-span-1">
                    @if(session('status'))
                    <div class="py-2 px-2 bg-[#BAD8FC] text-sm font-serif  rounded-sm">
                        {{ session('status')}}
                    </div>
                @endif
                    <div class="flex justify-between  px-2 bg-slate-100">
                        <div class=" flex gap-2">
                            <div>
                                <span class="text-sm font-semibold px-2 text-blue-400">Gestionnaire et AVEC</span>
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
                                                  <p class="font-medium text-md">Creation Gestion </p>
                                                </div>
                                                <div class="lg:col-span-4">
                                                  <form wire:submit="creategestionavec"  method="POST" enctype="multipart/form-data">
                                                    <div class="md:col-span-2 px-2 gap-2">
                                                        <label for="full_name">Nom gestion </label>
                                                        <input type="text" wire:model="titre_attr" id="full_name" class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none" required />
                                                    </div>
                                                    <div class="grid gap-2 text-sm grid-cols-1 md:grid-cols-4 py-2">
                                                      <div class="md:col-span-2">
                                                        <label for="full_name">Gestionnaire</label>
                                                        <select class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none" wire:model="gestionnaires_id">
                                                            @php
                                                                $gestionneur = \App\Models\compte\gestionnaires::all();
                                                            @endphp
                                                            @foreach ($gestionneur as $gestio)
                                                                <option value="0">Choisie le gestionnaire</option>
                                                                <option value=" {{$gestio->id}}">{{ $gestio->nom_gest}}</option>
                                                            @endforeach
                                                        </select>
                                                      </div>
                                                      <div class="md:col-span-2">
                                                        <label for="full_name">AVEC</label>
                                                        <select class="h-10 border mt-1 rounded-sm  px-2 w-full focus:outline-none" wire:model="comptes_id">
                                                            @foreach ($avecs as $avec)
                                                                <option value="0">Choisie Avec</option>
                                                                <option value="{{ $avec->id}}">{{ $avec->nom_avec}}</option>
                                                            @endforeach
                                                        </select>
                                                      </div>
                                                      <div class="md:col-span-5 text-right py-2 pr-2 ">
                                                        <div class="inline-flex items-end">
                                                          <button class="bg-[#4C4C4C] hover:bg-[#4C4C4C] text-white font-semibold py-2 px-2 rounded-sm" type="submit"> 
                                                          <span wire:target="creategestionavec" wire:loading.remove> Create <i class="fas fa-plus"></i></span>
                                                          <span wire:target="creategestionavec" wire:loading>  Loading ...</span>
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
                        @if (session('success'))
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
                                title: "{{ session('success')}}",
                              })
                          </script>
                        @endif  
                        @if (session('delete'))
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
                              icon: 'delete',
                              title: "{{ session('delete')}}",
                            })
                        </script>
                      @endif     
                        <div class=' bg-white rounded'>
                          <table class=' w-full '>
                            <thead class=''>
                              <tr>
                                <th class='text-sm text-left font-semibold  text-[#141B27]/[0.6] p-2'><span>Association </span></th>
                                <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'>Gestionnaire </th>
                                <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'>Avec </th>
                                <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'>status </th>


                              <th class='text-sm text-left font-medium  text-[#141B27]/[0.6]'></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($getallgestioavec as $gestioavec)    
                                    <tr class='hover:bg-slate-50 border-t px-2 h-5 border-slate-200'>                    
                                    <td class="pl-2">
                                      <span class='text-xs text-left font-semibold  text-[#141B27] flex justify-start gap-1 py-2'>{{ $gestioavec->titre_attr}}</span>
                                    </td>
                                    <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                      <span class='pb-2'>{{ $gestioavec->gestionnaires_id}}</span>
                                    </td>
                                    <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                      <span class='pb-2 text-center'>{{ $gestioavec->comptes_id}}</span>
                                    </td>
                                    <td class='text-xs text-left font-semibold  text-[#141B27] pb-1'>
                                      <span class='pb-2'>{{ $gestioavec->status_attr }}</span>
                                    </td>
                                    <td class='text-xs text-right font-normal  text-[#141B27] '>
                                      <div class="flex gap-2">
                                        <div  x-data="{ update_modal: false }" class="w-7 h-7 rounded-full bg-slate-200 text-center fff  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                        <i class="fa fa-pencil" @click="update_modal =!update_modal"></i>

                                          <div x-show="update_modal" class="fixed inset-0 overflow-y-auto z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="flex items-end justify-center min-h-screen px-1 sm:px-1 md:px-4 text-center md:items-center sm:block sm:p-0">
                                              <div x-cloak @click="update_modal = false" x-show="update_modal" 
                                              x-transition:enter="transition ease-out duration-300 transform"
                                              x-transition:enter-start="opacity-0" 
                                              x-transition:enter-end="opacity-100"
                                              x-transition:leave="transition ease-in duration-200 transform"
                                              x-transition:leave-start="opacity-100" 
                                              x-transition:leave-end="opacity-0"
                                              class="fixed inset-0 transition-opacity bg-[#212121] bg-opacity-30" aria-hidden="true" style="backdrop-filter: blur(1px);"
                                              ></div>
                                              <div class="flex justify-center h-screen items-center place-content-center px-3">
                                                  <div x-cloak x-show="update_modal" 
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
                                                                <p class="font-medium text-md">Modifier membreionnaire</p>
                                                              </div>
                                                              <div class="lg:col-span-4">
                                                                <form wire:submit="ajouterutilisateur"  method="POST" enctype="multipart/form-data">
                                                                  <div class="">
                                                                    <label class="text-black" for="address">Nom</label>
                                                                    <input type="text" wire:input.debounce.2000ms="edit_name({{$gestioavec->id}}, $event.target.value)" value="{{$gestioavec->titre_attr}}" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                  </div>
                                                                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-4">
       
                                                                    <div class="md:col-span-2">
                                                                      <label class="text-black" for="address">Telephone</label>
                                                                      <input type="text" wire:input.debounce.2000ms="edit_telephone({{$gestioavec->id}}, $event.target.value)" value="{{$gestioavec->gestionnaires_id}}" class="h-10 border mt-1 rounded-sm text-black px-2 w-full focus:outline-none" />
                                                                    </div>
                                                                  </div>
                                                                </form>
                                                              </div>
                                                            </div>
                                                              <div @click="update_modal =!update_modal" class="text-xl font-medium text-black  h-10 w-10 bg-white rounded-md text-center cursor-pointer flex justify-center items-center place-content-center">
                                                                  <i class="fa-solid fa-xmark"></i>    
                                                              </div>
                                                          </div>
                                                          
                                                      </div>                                                                                                                     
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div wire:click="deleteuser({{ $gestioavec->id }})" wire:confirm="Permission Deleted successfully" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500">
                                        <i class="fa fa-trash"></i>
                                        </div>
                                        <div  wire:click="showdetailuserdata({{ $gestioavec->id}})" class="w-7 h-7 rounded-full bg-slate-200 text-center  py-1.5  hover:bg-cyan-500 hover:text-white cursor-pointer transition ease-in-out duration-500" >
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
  
                <div class="">
                  @if ($gestionavecdetaildata)
                  <div class="shadow-sm bg-white rounded-md  lg:col-span-2 sm:col-span-1">
                    <div class="bg-white py-0">
                      <span class="text-sm font-semibold px-2 text-blue-400">Details</span>
                    </div>
                      <div class=" grid grid-cols-4 gap-1">
                        <div class="col-cols-2 px-2">
                          <div class="grid grid-cols-3">
                            <div class=" text-left text-[#141B27]/[0.6] font-bold text-sm pt-2">
                              <h1>Fullname</h1>
                            </div>
                            <div class=" pt-1"> 
                              <h1c class=" text-lg font-bold text-[#141B27]/[0.6] text-right px-8">:</h1>
                            </div>
                            <div class="text-sm text-left font-medium  text-[#141B27]/[0.6] pt-2">
                              <h1>{{ $gestionavecdetaildata->nom_membre}}</h1>
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
                              <h1>{{ $gestionavecdetaildata->updated_at}}</h1>
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
                              <details> <h1>{{ $gestionavecdetaildata->password_membre}}</h1></details>
                            
                            </div>
                          </div>
                        </div>
                      </div>
                   
                  </div>
                  @endif
                </div>
            </div>
            </div>
        <div>  
  
  
        </div>
    </div>
    
  </div>
  