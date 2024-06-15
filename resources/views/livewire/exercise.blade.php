<div class="sm:px-2 py-7">
    <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-2 py-4 px-2"> 
        <div class="py-4 pt-2 grid sm:grid-cols-1 md:grid-cols-4 gap-1 px-2 shadow-md bg-slate-100">
            <div class="flex flex-col gap-6 w-[400px] mx-auto py-16">
                <select wire:model="selectedContinent" wire:change="changeContinent">
                    <option value="1">Please Select Continent</option>
                    @foreach ($continents as $continent )
                        <option value="{{ $continent->id }}">{{ $continent->name }}</option>
                    @endforeach
                </select>
                <div class="flex relative">
                    <p wire:loading class=" absolute left-0 top-0 right-0 bottom-0 z-10 bg-white bg-opacity-90 py-2 px-3">
                        Loading...
                    </p>
                    <select class="flex-1" wire:model="selectedCountry">
                        <option value="-1">Please Seelct Country</option>
                        @foreach ($countries as $country )
                            <option value="{{ $country->id}}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="px-2 bg-yellow-200">
            <h1>Anno</h1>
        </div>
        <div class="px-2 bg-orange-600">
            <h1>Anno</h1>
        </div>
    </div>
































    <div class="grid md:grid-cols-3 sm:grid-cols-1 hidden gap-2">
        <div class="px-1 py-2 flex justify-center items-center gap-6">
            <button class=" bg-indigo-950 px-4 py-2 rounded text-white text-sm hover:bg-indigo-950" wire:click="increment">+</button>
            <span class="px-4 bg-orange-700 py-2 text-white rounded pt-1 ">{{ $count }}</span>
            <button class=" bg-indigo-950 px-4 py-2 rounded text-white text-sm hover:bg-indigo-950" wire:click="decrement">-</button>
        </div>
        <div class=" bg-[#1A202F] justify-center items-center py-2 px-2 text-white rounded-sm gap-1">
            <div class="py-3 px-2 border border-white border-spacing-7 rounded-sm w-full text-md text-end items-center font-bold">
                {{ $result}}
            </div>
            <div class=" pt-4 grid sm:grid-cols-5 md:grid-cols-5 gap-1">
                <div class="  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">MC</button>
                </div>
                <div class=" text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">MR</button>
                </div>
                <div class="  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">M+</button>
                </div>
                <div class="  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">M-</button>
                </div>
                <div class="  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">MS</button>
                </div>
            </div>
            <div class="py-2 grid sm:grid-cols-4 md:grid-cols-4 gap-1">
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="" wire:model="action">%</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">CE</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">C</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class=""><</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">X2</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">x3</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">x4</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class=""  wire:model="action">/</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">7</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">8</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">9</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class=""  wire:model="action">X</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">4</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">5</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">6</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class=""  wire:model="action">-</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="" wire:model="number1">1</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="" wire:model="number2">2</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">3</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="" wire:model="action">+</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">X1</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">0</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="">.</button>
                </div>
                <div class="bg-[#3C3C3C]  text-center rounded-sm py-3 hover:bg-[#323232] transition ease-in-out duration-700">
                    <button class="" wire:click="calculatrice">=</button>
                </div>
            </div>
        </div>   
            <div class="py-4 grid sm:grid-cols-1 md:grid-cols-4 gap-1 px-2 shadow-md bg-slate-100">
                <div class="">
                    <input placeholder="Number 1" type="number" class="p-1 w-24 border border-slate-500 rounded-sm inline-block focus:outline outline-none text-sm" wire:model="number1">
                </div>
                <div>
                    <select class="w-24 border border-slate-500 rounded-sm inline-block focus:outline outline-none text-sm p-1" wire:model="action">
                        <option>+</option>
                        <option>/</option>
                        <option>-</option>
                        <option>*</option>
                        <option>%</option>
                    </select>
                </div>
                <div class="">
                    <input placeholder="Number 2" type="number" class=" w-24 border border-slate-500 rounded-sm inline-block focus:outline outline-none text-sm p-1" wire:model="number2">
                </div>
                <div class="">
                    <button wire:click="calculatrice" class=" px-4 bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 p-1 rounded text-white" {{$disabled ? 'disabled': '' }}>
                        =
                    </button>
                </div>
            </div>
    </div>

</div>

