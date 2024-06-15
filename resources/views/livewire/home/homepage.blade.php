<div class="flex">
    <div class="lg basis-[10%] h-[100vh] border">
      @livewire('include.Sidebars')
    </div>
    <div class="basis-[90%] border bg-[#F7F8FB]">
        <div>
          @livewire('include.navbar')
          {{-- $this->dispatch('close-modal'); --}}
        </div>
        <div class=" pt-5 px-4">
          <div class="grid sm:grid-cols-1 md:grid-cols-4 gap-2">
            <div class="px-4 shadow-sm py-4 bg-white rounded-md border border-l-4 border-l-blue-400 ">
              <div class="flex justify-between py-4 px-4 ">
                <div class=" flex gap-2">
                    <div>
                        <span class="text-sm font-semibold px-2 text-blue-400">Users</span>
                    </div>
                </div>
                <div>
                    <div class="text-sm  px-2 w-7 h-7 bg-slate-100 text-centr rounded-full pt-1 place-content-center mb-0 font-weight-bold text-gray-800">6</div>
                </div>
              </div>
            </div>
            <div class="px-4 shadow-sm py-4 bg-white rounded-md border border-l-4 border-l-orange-400 ">
              <div class="flex justify-between py-4 px-4 ">
                <div class=" flex gap-2">
                    <div>
                        <span class="text-sm font-semibold px-2 text-blue-400">Users</span>
                    </div>
                </div>
                <div>
                    <div class="text-sm px-2 w-7 h-7 bg-slate-100 text-centr rounded-full pt-1 place-content-center mb-0 font-weight-bold text-gray-800">6</div>
                </div>
              </div>
            </div>
            <div class="px-4 shadow-sm py-4 bg-white rounded-md border border-l-4 border-l-blue-400 ">
              <div class="flex justify-between py-4 px-4 ">
                <div class=" flex gap-2">
                    <div>
                        <span class="text-sm font-semibold px-2 text-blue-400">Users</span>
                    </div>
                </div>
                <div>
                    <div class="text-sm  px-2 w-7 h-7 bg-slate-100 text-centr rounded-full pt-1 place-content-center mb-0 font-weight-bold text-gray-800">6</div>
                </div>
              </div>
            </div>
            <div class="px-4 shadow-sm py-4 bg-white rounded-md border border-l-4 border-l-blue-400 ">
              <div class="flex justify-between py-4 px-4 ">
                <div class=" flex gap-2">
                    <div>
                        <span class="text-sm font-semibold px-2 text-blue-400">Users</span>
                    </div>
                </div>
                <div>
                    <div class="text-sm px-2 w-7 h-7 bg-slate-100 text-centr rounded-full pt-1 place-content-center mb-0 font-weight-bold text-gray-800">6</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" pt-5 px-4">
          <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-2">
            <div class=" shadow-sm bg-white rounded-md  ">
              <div class="flex justify-between  px-4 bg-slate-100">
                <div class=" flex gap-2">
                    <div>
                        <span class="text-sm font-semibold px-2 text-blue-400">Users</span>
                    </div>
                </div>
                <div>
                    <div class="text-sm  px-2 w-7 h-7 bg-slate-100 text-centr rounded-full pt-1 place-content-center mb-0 font-weight-bold text-gray-800">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </div>
                </div>
              </div>
              <div class="px-4 ">
                <h1>tabl</h1>
              </div>            
            </div>
            <div class="px-4 shadow-sm py-4 bg-white rounded-md  col-span-2">
              <div class="">
                <h1 class="">Users</h1>
              </div>
            </div>
          </div>
        </div>
      <div cl>
        <Outlet></Outlet>
      </div>
    </div>
  </div>