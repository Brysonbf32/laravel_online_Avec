<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');">
    <div class="flex h-screen  antialiased text-gray-900 bg-white dark:bg-dark dark:text-light" >
                <!-- Loading screen -->
                <div
                x-ref="loading"
                class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold 
              text-white bg-blue-400">
                Loading.....
            </div>
            <!-- Sidebar -->
        <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 z-10 flex w-80">
            <!-- Curvy shape -->
            <svg class="absolute inset-0 w-full h-full text-white" style="filter: drop-shadow(10px 0 10px #00000030)" preserveAspectRatio="none" viewBox="0 0 309 800" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                <path d="M268.487 0H0V800H247.32C207.957 725 207.975 492.294 268.487 367.647C329 243 314.906 53.4314 268.487 0Z" />
            </svg>
            <!-- Sidebar content -->
            <div class="z-10 flex flex-col flex-1">
                <div class="flex items-center justify-between flex-shrink-0 w-64 p-4">
                    <!-- Logo -->
                    <a href="#">
                    <span class="sr-only">AVEC</span>
                    <div>
                        <i class="fa fa-user"></i>
                    </div>
                    </a>
                    <!-- Close btn -->
                    <button @click="isSidebarOpen = false" class="p-2 rounded-full hover:border-red-200 border hover:text-red-200  focus:outline-none transition duration-700 ease-in-out ">
                    <svg
                    class="w-6 h-6"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 
                    18L18 6M6 6l12 12" />
                    </svg>
                    <span class="sr-only">Close sidebar</span>
                    </button>
                </div>
                <!-- component -->
                <div class=" py-4 min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased  text-gray-800">
                    <div class="fixed flex flex-col top-0 left-0 w-30 bg-white h-full border-r">
                        <div class="overflow-y-auto overflow-x-hidden flex-grow">
                            <ul class="flex flex-col py-4 space-y-1">
                                <li class="px-5">
                                    <div class="flex flex-row items-center h-8">
                                        <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                                    </div>
                                </li>
                                    <li>
                                        <a href="<?php echo e(route('hp')); ?>" wire:navigate class="relative flex flex-row items-center h-11 focus:outline-none 
                                        hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent 
                                        hover:border-blue-400 pr-6">
                                        <span class="inline-flex justify-center items-center ml-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 
                                        1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 
                                        1v4a1 1 0 001 1m-6 0h6"></path></svg>
                                        </span>
                                        
                                        <span class="ml-2 text-sm tracking-wide truncate  ">Dashboard</span>
                                        </a>
                                    </li>
                                    <!--[if BLOCK]><![endif]--><?php if($sessionro == "AD" || $sessionro == "US"): ?>

                                    <li>
                                        <div class="relative flex flex-row items-center h-11 focus:outline-none cursor-pointer b
                                        hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent 
                                        hover:border-blue-400 pr-6" onclick="dropdown()">
                                        <span class="inline-flex justify-center items-center ml-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 
                                        0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 
                                        01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 
                                        13H4"></path></svg>
                                        </span>
                                        <span class="ml-2 text-sm tracking-wide truncate">Utilisateurs</span>
                                        <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-indigo500 bg-indigo-50 rounded-full"><i class="fa fa-arrow-circle-up"></i></span>
                                        </div>
                                        <div
                                        class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-600 font-bold bg-blue-100 shadow-sm rounded-lg"
                                        id="submenu"
                                        >
                                        <h1 class="cursor-pointer p-2 text-xs text-gray-600 font-medium tracking-wide text-indigo500 hover:bg-gray-200 hover:text-black duration-300">
                                        <a href=" <?php echo e(route('us')); ?>" wire:navigate>Gestion</a> 
                                        </h1>
                                        </div>
                                    </li>
                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]--><?php if($sessionro =='US' || $sessionro == 'AD'): ?>
                                    <li>
                                        <div class="relative flex flex-row items-center h-11 focus:outline-none cursor-pointer b
                                        hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent 
                                        hover:border-blue-400 pr-6" onclick="dropdown_compte()">
                                        <span class="inline-flex justify-center items-center ml-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 
                                        0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 
                                        01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 
                                        13H4"></path></svg>
                                        </span>
                                        <span class="ml-2 text-sm tracking-wide truncate">AVECS</span>
                                        <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-indigo500 bg-indigo-50 rounded-full"><i class="fa fa-arrow-circle-up"></i></span>
                                        </div>
                                        <div
                                            class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-600 font-bold bg-blue-100 shadow-sm rounded-lg"
                                            id="submenu_compte"
                                            >
                                            <h1 class="cursor-pointer p-2 text-xs text-gray-600 font-medium tracking-wide text-indigo500 hover:bg-gray-200 hover:text-black duration-300">
                                                <a href=" <?php echo e(route('ac')); ?>" wire:navigate>Creation</a> 
                                            </h1>
                                            <h1 class="cursor-pointer p-2 text-xs font-medium tracking-wide text-indigo500">
                                                <a href="<?php echo e(route('gest')); ?>" wire:navigate>Gestionnaire</a> 
                                            </h1>
                                            <h1 class="cursor-pointer p-2 text-xs font-medium tracking-wide text-indigo500">
                                                <a href="<?php echo e(route('mbr')); ?>" wire:navigate>Membres</a>
                                            </h1>
                                            <h1 class="cursor-pointer p-2 text-xs text-gray-600 font-medium tracking-wide text-indigo500 hover:bg-gray-200 hover:text-black duration-300">
                                                <a href=" <?php echo e(route('attr')); ?>" wire:navigate>Responsabilite</a> 
                                            </h1>
                                        </div>
                                    </li>
                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                    <!--[if BLOCK]><![endif]--><?php if($sessionro =='US' || $sessionro == 'AD'): ?>
                                    <li>
                                        <div class="relative flex flex-row items-center h-11 focus:outline-none cursor-pointer b
                                        hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent 
                                        hover:border-blue-400 pr-6" onclick="dropdown_carnet()">
                                        <span class="inline-flex justify-center items-center ml-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 
                                        0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 
                                        01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 
                                        13H4"></path></svg>
                                        </span>
                                        <span class="ml-2 text-sm tracking-wide truncate">Carnets</span>
                                        <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-indigo500 bg-indigo-50 rounded-full"><i class="fa fa-arrow-circle-up"></i></span>
                                        </div>
                                        <div
                                        class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-600 font-bold bg-blue-100 shadow-sm rounded-lg"
                                        id="submenu_carnet"
                                        >
                                        <h1 class="cursor-pointer p-2 text-xs text-gray-600 font-medium tracking-wide text-indigo500 hover:bg-gray-200 hover:text-black duration-300">
                                        <a href=" <?php echo e(route('car')); ?>" wire:navigate>Creation Carnet</a> 
                                        </h1>
                                        <h1 class="cursor-pointer p-2 text-xs font-medium tracking-wide text-indigo500">
                                        Personal
                                        </h1>
                                        <h1 class="cursor-pointer p-2 text-xs font-medium tracking-wide text-indigo500">
                                        Friends
                                        </h1>
                                        </div>
                                    </li>
                                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                                    <li>
                                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none 
                                        hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent 
                                        hover:border-blue-400 pr-6">
                                        <span class="inline-flex justify-center items-center ml-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 
                                        0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 
                                        01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 
                                        13H4"></path></svg>
                                        </span>
                                        <span class="ml-2 text-sm tracking-wide truncate">Inbox</span>
                                        <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-indigo500 bg-indigo-50 rounded-full">New</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none
                                        hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent 
                                        hover:border-blue-400 pr-6">
                                        <span class="inline-flex justify-center items-center ml-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 
                                        0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                        </span>
                                        <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none 
                                        hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent 
                                        hover:border-blue-400 pr-6">
                                        <span class="inline-flex justify-center items-center ml-4">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 
                                        14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 
                                        11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 
                                        0H9"></path></svg>
                                            </span>
                                            <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                                            <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 
                                        bg-red-50 rounded-full">ja</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none 
                                        hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent 
                                        hover:border-blue-400 pr-6">
                                            <span class="inline-flex justify-center items-center ml-4">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
                                        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" strokelinejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 
                                        14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 
                                        11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 
                                        0H9"></path></svg>
                                            </span>
                                        <span class="ml-2 text-sm tracking-wide truncate">dd</span>
                                        <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 
                                        bg-red-50 rounded-full">ja</span>
                                        </a>
                                    </li>
                                <div class=" pt-20 px-6">
                                    <a href="<?php echo e(route('lgn')); ?>" wire:navigate>  Deconnexion</a>                                
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="flex flex-col items-center justify-center flex-1">
            <!-- Page content -->
            
            <button @click="isSidebarOpen = true" class="fixed p-2 rounded-full hover:border-blue-400 border hover:text-blue-400  focus:outline-none transition duration-700 ease-in-out   
            top-5">
            <svg
            class="w-6 h-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 
            6h16M4 12h16M4 18h16" />
            </svg>
            <span class="sr-only">Open menu</span>
            </button>
            <h1 class="sr-only">Home</h1>
            <a href="https://github.com/kamona-ui" target="_blank">
            <span class="sr-only">AVEC</span>
        
            </a>
        </main>
    </div>
</div>
<script>
    const setup = () => {
    return {
    isSidebarOpen: false,
    }
    }
    </script>
    <script>
        function dropdown_carnet() {
        document.querySelector("#submenu_carnet").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
        }
        dropdown_carnet();
    </script>
        <script>
            function dropdown_compte() {
            document.querySelector("#submenu_compte").classList.toggle("hidden");
            document.querySelector("#arrow").classList.toggle("rotate-0");
            }
            dropdown_compte();
        </script>
    <script type="text/javascript">
        function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
        }

        
        dropdown();

        function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
        }
</script>
<?php /**PATH C:\xampp\htdocs\fintech_avec\resources\views/livewire/include/sidebars.blade.php ENDPATH**/ ?>