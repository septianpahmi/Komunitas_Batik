<body>
    <!-- Header -->
    <header class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center gap-4">
                    <!-- Logo 1 -->
                    <a class="block text-red-600" href="#">
                        <h2 class="text-2xl md:text-3xl font-bold">Komunitas Batik</h2>
                    </a>
                    <!-- Logo 2 -->
                    <a class="block" href="#">
                        <img src="https://www.kemdikbud.go.id/main/files/large/33ddc3bc2640689" alt="Logo Kementrian"
                            class="h-8 md:h-10 w-auto">
                    </a>
                    <!-- Logo 3 -->
                    <a class="block" href="#">
                        <img src="https://www.unpi-cianjur.ac.id/assets/images/logo_unpi_9a3.png" alt="Logo universitas"
                            class="h-8 md:h-10 w-auto">
                    </a>
                    <!-- Logo 4 -->
                    <a class="block" href="#">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Logo_Kampus_Merdeka_Kemendikbud.png/1200px-Logo_Kampus_Merdeka_Kemendikbud.png"
                            alt="Logo Kampus Merdeka" class="h-8 md:h-10 w-auto">
                    </a>
                </div>

                <!-- Hamburger Menu Button -->
                <div class="md:hidden">
                    <button id="hamburgerButton"
                        class="p-2 text-gray-500 transition hover:text-gray-600 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>

                <div class="hidden md:block">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-6 text-sm ml-auto">
                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="{{ route('home') }}">
                                    Home </a>
                            </li>
                            <li class="relative group">
                                <button id="aboutDropdownButton"
                                    class="text-gray-500 transition hover:text-gray-500/75 flex items-center">
                                    About
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06 0L10 10.34l3.71-3.13a.75.75 0 111.01 1.09l-4.25 3.5a.75.75 0 01-1.02 0l-4.25-3.5a.75.75 0 010-1.09z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="aboutDropdown"
                                    class="absolute left-0 z-10 hidden w-48 mt-2 bg-white border border-gray-200 rounded shadow-lg">
                                    <ul class="py-1">
                                        <li>
                                            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                href="{{ route('about.dahlia') }}">Dahlia Batik</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                href="{{ route('about.rajava') }}">Rajava Creation</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                href="{{ route('about.viena') }}">Viena Crafts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75"
                                    href="{{ route('katalog') }}"> Katalog
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Galeri
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Kontak
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!-- Hamburger Menu Dropdown -->
    <div id="mobileMenu" class="md:hidden hidden bg-white shadow-md mt-2">
        <nav aria-label="Mobile">
            <ul class="flex flex-col gap-4 px-4 py-2">
                <li>
                    <a class="block text-gray-500 transition hover:text-gray-500/75" href="#">Home</a>
                </li>
                <li class="relative group">
                    <button id="aboutDropdownButtonMobile"
                        class="text-gray-500 transition hover:text-gray-500/75 flex items-center">
                        About
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 text-gray-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06 0L10 10.34l3.71-3.13a.75.75 0 111.01 1.09l-4.25 3.5a.75.75 0 01-1.02 0l-4.25-3.5a.75.75 0 010-1.09z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="aboutDropdownMobile"
                        class="absolute left-0 z-10 hidden w-48 mt-2 bg-white border border-gray-200 rounded shadow-lg">
                        <ul class="py-1">
                            <li>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">Dahlia
                                    Batik</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">Rajava
                                    Creation</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">Viena
                                    Crafts</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="block text-gray-500 transition hover:text-gray-500/75"
                        href="{{ route('katalog') }}">Katalog</a>
                </li>
                <li>
                    <a class="block text-gray-500 transition hover:text-gray-500/75" href="#">Galeri</a>
                </li>
                <li>
                    <a class="block text-gray-500 transition hover:text-gray-500/75" href="#">Kontak</a>
                </li>
            </ul>
        </nav>
    </div>
