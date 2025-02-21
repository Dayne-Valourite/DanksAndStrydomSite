<x-base>

    <div class="min-h-full bg-fixed bg-center bg-cover" style="background-image: url('{{ asset('storage/images/backgrounds/mountain-2.webp') }}')">
        <nav style="background: linear-gradient(to bottom, rgb(255, 255, 255, 1), rgba(0, 0, 0, 0));">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- desktop header --}}
            <div class="hidden h-[100px] items-center justify-between md:flex">
            <div class="flex items-center">

                <div class="flex-shrink-0">
                <img class="h-[50px] w-[50px]" src="{{ asset('storage/images/logos/valourite_small_shadow_trans.webp') }}" alt="Valourite Logo">
                </div>

                <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <!-- Dashboard Link -->
                    <x-nav-link display_name="dashboard" route_name="home"/>
                    <x-nav-link>Hello</x-nav-link>
                
                </div>
                
                </div>
            </div>

            <!-- Add logic in future for signed in users -->
            @if (1 == 0)
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </a>
        
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                        <button id="user-menu-button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="#" alt="user profile icon">
                        </button>

                        <div id="user-menu" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>

                        </div>

                    </div>

                    </div>

                </div>
            @endif


            </div>

            <div class="-mr-2 flex md:hidden justify-end" id="mobile-menu-button-container">
                <!-- Mobile menu button -->
                <button id="mobile-menu-button" type="button" class="my-3 relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg id="hamburger-icon" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg id="close-icon" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                </button>
            </div>

        </div>
    
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden hidden" id="mobile-menu" style="background: linear-gradient(to bottom, rgb(255, 255, 255, 1), rgba(255, 255, 255, 0.5));">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3 flex flex-col">
                <x-nav-link display_name="dashboard" route_name="home"/>
                <x-nav-link>Hello</x-nav-link>
            </div>

            <!-- Add logic in future for signed in users -->
            @if (1 == 0)
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center justify-between px-5">
                        <div class="flex flex-row items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="#" alt="">
                        </div>
            
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-gray-500">First Name</div>
                            <div class="text-sm font-medium leading-none text-black">Email</div>
                        </div>

                        </div>

                        <a href="" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </a>
                    </div>

                    <div class="mt-3 space-y-1 px-2">
                        <a href="" class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Your Profile</a>
                        <a href="#logout_route" class="block rounded-md px-3 py-2 text-base font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Sign out</a>
                    </div>

                </div>
            @endif

            
        </div>

        </nav>
    
        {{-- header --}}
        <header class="bg-transparent flex justify-center items-center w-full px-5 my-5">

        {{-- inner div --}}
        <div class="shadow-md shadow-gray-500 lg:w-1/3 w-full text-center items-center justify-around flex flex-row h-[20vh] rounded-lg" style="background: linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 1));">

            {{-- header text --}}
            <div class="flex flex-col justify-center lg:xl:items-start items-center">
                @yield('header-text')
            </div>
        
            {{-- image --}}
            <div class="hidden lg:xl:flex justify-center items-center content-center h-full w-auto">
                <img src="@yield('header-img')" alt="Graphic" class="h-[80px] w-[100px] self-center px-2">
            </div>

        </div>

        </header>

        <main class="bg-transparent items-center justify-center w-full px-5">
        {{ $slot }}
        </main>
    </div>

    <!-- footer -->
    <footer class="px-4 py-8 dark:bg-gray-100 dark:text-gray-600">
        <div class="container flex flex-wrap items-center justify-center mx-auto sm:justify-between sm:space-y-0">

        <div class="flex flex-row pr-3 space-x-4 sm:space-x-8">

            <!-- Image -->
            <div class="items-center justify-center flex-shrink-0 w-[10vw] h-auto md:lg:xl:block hidden">
            <img src="" alt="Valourite Logo">
            </div>

            <!-- Terms & Privacy -->
            <ul class="flex flex-wrap items-center space-x-4 sm:space-x-8">
            <li>
                <a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Terms of Use</a>
            </li>
            <li>
                <a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Privacy</a>
            </li>
            </ul>
        </div>

        <!-- Socials -->
        <ul class="flex flex-wrap pl-3 space-x-4 sm:space-x-8">
            <li>
            <a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Instagram</a>
            </li>
            <li>
            <a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Facebook</a>
            </li>
            <li>
            <a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Twitter</a>
            </li>
        </ul>

        </div>

        <div class="w-full my-5 text-center flex flex-col justify-center">
            <div class="flex flex-row space-x-2 w-full text-center justify-center">
                <h2>Copyright &copy; </h2>
                <script>document.write(/\d{4}/.exec(Date())[0] + '.')</script>
                <h2>All Rights Reserved</h2>
            </div>
            <a class="font-bold hover:text-blue-700 w-auto" href="https://valourite.co.za" target="_blank">Valourite</a>
        </div>

    </footer>

</x-base>

<script>
  // Toggle mobile menu visibility
  const menuButton = document.getElementById('mobile-menu-button');
  const menuButtonContainer =document.getElementById('mobile-menu-button-container');
  const mobileMenu = document.getElementById('mobile-menu');
  const hamburgerIcon = document.getElementById('hamburger-icon');
  const closeIcon = document.getElementById('close-icon');
  const userMenuButton = document.getElementById('user-menu-button');
  const userMenu = document.getElementById('user-menu');

  if(menuButton) 
  {
    menuButton.addEventListener('click', () => {
        const isMenuVisible = mobileMenu.classList.contains('hidden');
        
        if (isMenuVisible) {
            mobileMenu.classList.remove('hidden');
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            menuButtonContainer.classList.add('bg-white');
        } else {
            mobileMenu.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            menuButtonContainer.classList.remove('bg-white');
        }
    });
  }


  if(userMenuButton)
  {
    userMenuButton.addEventListener('click', ()=> {
        const isUserMenuVisible = userMenu.classList.contains('hidden');

        if(isUserMenuVisible) {
        userMenu.classList.remove('hidden');
        } else {
        userMenu.classList.add('hidden');
        }
    });
  }
</script>