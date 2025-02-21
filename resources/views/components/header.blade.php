<x-base>
    <!-- Header -->
    <header class="h-auto fixed top-0 w-full z-10">
        <nav class="bg-transparent">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 bg-transparent">
                <!-- Desktop Header -->
                <div class="hidden h-[100px] items-center justify-between md:flex">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-[50px] w-[50px]" src="{{ asset('storage/images/logos/valourite_small_shadow_trans.webp') }}" alt="Valourite Logo">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link display_name="dashboard" route_name="home"/>
                                <x-nav-link>Hello</x-nav-link>
                            </div>
                        </div>
                    </div>
                    <!-- Conditional User Menu (Removed for brevity, transparency unaffected) -->
                </div>

                <!-- Mobile Menu Button -->
                <div class="-mr-2 flex md:hidden justify-end" id="mobile-menu-button-container">
                    <button id="mobile-menu-button" type="button" class="my-3 relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg id="hamburger-icon" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg id="close-icon" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden hidden bg-opacity-90 bg-white" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3 flex flex-col">
                    <x-nav-link display_name="dashboard" route_name="home"/>
                    <x-nav-link>Hello</x-nav-link>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Body (with Background Image) -->
    <main class="min-h-screen" style="background-image: url('/path/to/background-image.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="px-4 py-8 bg-gray-100 text-gray-600">
        <div class="container flex flex-wrap items-center justify-center mx-auto sm:justify-between sm:space-y-0">
            <div class="flex flex-row pr-3 space-x-4 sm:space-x-8">
                <div class="items-center justify-center flex-shrink-0 w-[10vw] h-auto md:lg:xl:block hidden">
                    <img src="" alt="Valourite Logo">
                </div>
                <ul class="flex flex-wrap items-center space-x-4 sm:space-x-8">
                    <li><a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Terms of Use</a></li>
                    <li><a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Privacy</a></li>
                </ul>
            </div>
            <ul class="flex flex-wrap pl-3 space-x-4 sm:space-x-8">
                <li><a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Instagram</a></li>
                <li><a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Facebook</a></li>
                <li><a rel="noopener noreferrer" href="#" class="text-gray-700 hover:text-blue-700 font-bold">Twitter</a></li>
            </ul>
        </div>
        <div class="w-full my-5 text-center flex flex-col justify-center">
            <div class="flex flex-row space-x-2 w-full text-center justify-center">
                <h2>Copyright © </h2>
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
    const menuButtonContainer = document.getElementById('mobile-menu-button-container');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    if (menuButton) {
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
</script>