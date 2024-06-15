<!-- modal div -->
<div class="mt-10" x-data="{ open: false }">

    <!-- Button (blue), duh! -->
    {{-- <div class="px-10">
        <button class="px-4 py-2 text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline text-center" @click="open = true">Insert Bouquet</button>
    </div> --}}
    <!-- Dialog (full screen) -->
    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.5);" x-show="open"  >
      <!-- A basic modal dialog with title, body and one button to close -->
      <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
          <h3 class="text-lg font-medium leading-6 text-gray-900">
            Bouquet
          </h3>
          <form wire:submit="achatbouquet" enctype="multipart/form-data">
            <div class="mt-2 grid grid-cols-2 px-2 ">
              <div class="px-2">
                <label  class="font-sans text-gray-500 text-sm"> Date Achat</label>
                <div class="mt-2">
                  <input  wire:model="bq_dateAchat" type="date"  required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
                </div>
              </div>
              <div class="px-2">
                <label  class="font-sans text-gray-500 text-sm"> Photo</label>
                <div class="mt-2">
                  <input  wire:model="bq_photo" type="file"  required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
                </div>
              </div>
              <div class="px-2">
                <label  class="font-sans text-gray-500 text-sm"> Titre</label>
                <div class="mt-2">
                  <input  wire:model="bq_titre" type="text"  required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
                </div>
              </div>
              <div class="px-2">
                <label  class="font-sans text-gray-500 text-sm">Type Bouquet</label>
                <div class="mt-2">
                  <select wire:model="bq_type" class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
                    <option value="">Select one</option>
                    <option value="Access">Access</option>
                    <option value="Evasion">Evasion</option>
                  </select>
                </div>
              </div>
              <div class="px-2">
                <label  class="font-sans text-gray-500 text-sm">Nombre Bouquet</label>
                <div class="mt-2">
                  <input  wire:model="bq_nombreachat" type="number"  required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
                </div>
              </div>
              <div class="px-2">
                <label  class="font-sans text-gray-500 text-sm">Montant</label>
                <div class="mt-2">
                  <input  wire:model="bq_montant" type="number"  required class="text-sm px-5 py-2 border border-slate-200 inline-block w-full rounded-md focus:outline-none">
                </div>
              </div>
            </div>
            <!-- One big close button.  --->
            <div class="mt-5 sm:mt-6">
              <span class="flex w-full rounded-md shadow-sm">
                <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700" >
                  <span wire:target="achatbouquet" wire:loading.remove>Enregistrer</span>
                  <span wire:target="achatbouquet" wire:loading>loading...</span>
                </button>
              </span>
            </div>
          </form>
        </div>
        @if ($bq_photo)
          <img src="{{ $bq_photo->temporaryUrl()}}" alt="" class="w-10 h-10">
        @endif
      </div>
    </div>

  <div>
    {{-- <div class="py-2 text-center items-center">
        <button><a href="{{ route('hp')}}" wire:navigate> <i class="fa fa-arrow-left"></i> Back</a></button>
    </div> --}}
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 py-5 px-10">
            <div class="bg-blue-950 py-4 px-4 rounded-2xl">
                <h1 class="text-xl px-7 font-semibold  py-4">TOUT LES BOUQUETS </h1>
                  @foreach ($getprofile as $profile)
                    <div class="py-2">
                      <div class="flex justify-between py-4 px-4 bg-blue-950 rounded-full ">
                        <div class=" flex gap-3">
                            <div class="bg-black text-red-700 h-14 w-14 rounded-full text-center items-center place-content-center pt-4">N</div>
                            <div>
                                <span class="text-sm font-semibold px-2">{{ $profile->bq_titre }}</span>
                                <p class="text-xs font-sans px-2 pb-0">Premium</p>
                            </div>
                        </div>
                        <p class="px-8 text-[7px] pt-2 bg-[#DECE5E] text-xs font-sans">Monthly</p>
                        <div>
                            <span class="text-sm font-semibold px-2"></span>
                            <p class="text-xs font-sans px-2 pb-0">Due to Sell</p>
                        </div>
                      </div>
                    </div>
                  @endforeach
            </div>
            <div class="px-2 ">
            <div class="shadow-md border border-slate-200 py-4 px-4 rounded-2xl">
                <h1 class="text-xl px-7 font-semibold  py-4">Details  </h1>
                <div class="py-2">
                    <div class="flex justify-between py-4 px-4 bg-slate-100  rounded-full">
                        <div class=" flex gap-3">
                            <div class="bg-white text-red-700 h-14 w-14 rounded-full text-center items-center place-content-center pt-4">Y</div>
                            <div>
                                <span class="text-sm font-semibold px-2">YouTube</span>
                                <p class="text-xs font-sans px-2 pb-0">Premium Family</p>
                            </div>
                        </div>
                        
                        <p class="px-8 text-[7px] pt-2 bg-slate-100  text-xs font-sans">Monthly</p>
                        <div>
                            <span class="text-sm font-semibold px-2">E17.99</span>
                            <p class="text-xs font-sans px-2 pb-0">Due to Sell</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div>
                <h1></h1>
            </div>
        </div>
    </div>
</div>
</div>


