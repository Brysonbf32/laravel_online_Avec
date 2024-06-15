<div class="grid grid-cols-1 sm:grid-cols-1  md:grid-cols-10 bg-[#1A202C]">
  <div class="col-span-1 sm:col-span-1 md:col-span-2 border-r border-[#6e7278] h-screen">
    <div class="bg-[#1A202C] w-screen flex justify-between pb-2 text-stone-600 border-b border-[#6e7278]">
      <div class="grid grid-cols-1 sm:grid-cols-1  md:grid-cols-10 col-span-1 sm:col-span-1 md:col-span-2">
        <div class="px-4">
          <div class=" text-red-700  text-center items-center place-content-center pt-2"> <img class="h-10 w-10 rounded-full" src="storage/bouquetImages/658931435profile20240110_114826.jpg" alt=""> </div>
        </div>
        <div class="text-sm font-semibold text-white pt-1">pp</div>
      </div>
    </div>
    <div class="px-2 bg-[#1A202C]">
      <div class=" h-2/4">
        <div class='max-w-md mx-auto py-2'>
          <div class="relative flex items-center w-full h-10 rounded-full focus-within:shadow-lg bg-[#2D3748] overflow-hidden hover:border border-slate-500">
              <div class="grid place-items-center h-full w-12 text-gray-300 hover:border border-slate-500">
                  <i class=" fa fa-search"></i>
              </div>
              <input
              class="peer h-full w-full outline-none text-sm text-white pr-2 bg-[#2D3748]"
              type="text"
              id="search"
              placeholder="Search something.." /> 
          </div>
      </div>
        @foreach ($getprofile as $profile)
        <div class="py-1 cursor-pointer" wire:click="showproducts({{ $profile->id}})">
          <div class="flex justify-between py-2 px-2  text-white rounded-sm shadow-md hover:bg-[#2D3748] hover:rounded-md transition ease-in-out duration-700">
              <div class="flex gap-3">
                  <div class=" text-red-700 text-center items-center place-content-center pt-2 "> <img class="border  bored-red-200 h-12 w-12 rounded-full" src="storage/bouquetImages{{$profile->bq_photo}}" alt=""> </div>
                  <div>
                    <span class="text-sm font-semibold px-2">{{ $profile->bq_titre }}</span>
                    <p class="text-xs font-sans px-2 pb-0 text-slate-100">Due to Sell</p>
                </div>
              </div>
              <div>
                <span class="text-sm font-semibold px-2">{{ $profile->bq_type}}</span>
                <p class="text-xs font-sans px-2 pb-0 text-slate-100">Due to Sell</p>
            </div> 
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="col-span-1 sm:col-span-1 md:col-span-8 text-black pt-14">
    @if ($detaildata)
    <div class="px-4 grid grid-cols-2">
      <div class="bg-white text-red-400 items-center">
        <div class="items-center text-center place-content-center pt-2">
          <img class="border  bored-red-200 h-12 w-12 rounded-full" src="storage/bouquetImages{{$profile->bq_photo}}" alt="">
        </div>
        <p class="text-center">Welcome, Ja Bahati {{$detaildata->bq_titre}}</p>
      </div>
      <div class="bg-white">
        <p>fff</p>
      </div>
    </div>
        @endif
  </div>
</div>