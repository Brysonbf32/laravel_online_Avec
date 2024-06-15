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
                <div class="container max-w-screen-sm mx-auto">
                    <div>
                        <div  class="bg-white rounded shadow-lg p-4 px-2 md:p-8 mb-6">
                            <div class=" pl-7 grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                <div class="text-gray-600">
                                    <p class="font-medium text-lg">Role</p>
                                    <p>Role Info .</p>
                                </div>
                                <div class="lg:col-span-2">
                                    <form wire:submit="givepermirole"  method="POST">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-3">
                                            <div class="md:col-span-3 pr-2">
                                                <label for="full_name">Role name {{ $role->id}} </label>
                                                <input type="text" wire:model="name"  class="h-10 border mt-1 rounded-sm  px-4 w-full focus:outline-none" autocomplete="off" />
                                            </div>
                                            <div class="md:col-span-5">
                                            </div>
                                            <div class="md:col-span-5 text-right pr-9">
                                                <div class="inline-flex items-end" x-on:Click="isOpen = false">
                                                    <button class="bg-[#ab6666] hover:bg-[#4C4C4C] text-white font-semibold py-2 px-4 rounded-sm" type="submit"> 
                                                    <span wire:target="givepermirole" wire:loading.remove> <i class="fas fa-plus"></i> Give</span>
                                                    <span wire:target="givepermirole" wire:loading>  Loading ...</span>
                                                    </button>
                                                </div>
                                                <div class="inline-flex items-end" x-on:click = "show = false">
                                                    <button class="bg-[#E6E6E6] text-[#212121] font-semibold py-2 px-4 rounded-sm"> <i class="fa fa-close fa-sm"></i> Close</button>
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
                <div class="">
                    <h1>Fraa</h1>
                </div>
            </div>
        <div>  
  

        </div>
    </div>
  </div>
  