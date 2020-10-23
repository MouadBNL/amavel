<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">

        @stack('modals')

        <!-- component -->
        <div>
            <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
            
                <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                    <div class="flex items-center justify-center h-20 border-b-4 border-white">
                        <div class="flex items-center">
                            <svg class="h-8 w-8" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <svg class="h-8 w-8" viewBox="0 0 1000 1000" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M855.297 851.801C944.754 761.461 1000 637.182 1000 500C1000 223.858 776.142 0 500 0C223.858 0 0 223.858 0 500C0 677.797 92.8009 833.918 232.608 922.57C239.906 915.919 247.062 908.272 254.076 899.629C270.529 879.443 286.233 853.836 301.19 822.809C316.146 791.782 330.729 754.4 344.938 710.663H212.572V661.319H359.521C371.86 619.451 383.825 577.21 395.417 534.594C407.382 491.979 418.599 451.045 429.069 411.794C439.539 372.543 448.887 335.909 457.113 301.891C465.339 267.5 472.256 237.594 477.865 212.174C470.387 191.24 460.104 177.222 447.017 170.12C434.304 163.017 417.104 159.466 395.417 159.466C375.225 159.466 354.286 162.643 332.599 168.998C311.285 174.979 291.842 183.764 274.268 195.352C256.694 206.567 242.111 220.585 230.519 237.407C219.302 253.855 213.693 272.359 213.693 292.919C213.693 304.882 215.189 314.414 218.18 321.517C221.546 328.619 225.285 334.04 229.398 337.778C233.885 341.142 238.185 343.385 242.298 344.507C246.411 345.254 249.589 345.628 251.833 345.628C260.807 345.628 268.285 344.133 274.268 341.142C280.624 337.778 286.046 334.413 290.533 331.049C295.394 327.311 300.068 323.947 304.555 320.956C309.042 317.592 314.09 315.909 319.699 315.909C323.812 315.909 328.299 317.031 333.16 319.274C338.394 321.143 343.068 324.32 347.181 328.806C351.668 333.292 355.408 339.273 358.399 346.75C361.39 353.852 362.886 362.637 362.886 373.104C362.886 388.057 359.895 400.953 353.912 411.794C348.303 422.635 340.825 431.794 331.477 439.27C322.503 446.373 312.033 451.793 300.068 455.531C288.477 458.896 276.885 460.578 265.294 460.578C247.346 460.578 231.08 457.4 216.498 451.045C202.289 444.317 190.137 435.345 180.041 424.13C169.945 412.916 162.28 399.832 157.045 384.879C151.81 369.926 149.193 354.226 149.193 337.778C149.193 313.106 153.306 290.49 161.532 269.93C169.758 248.996 181.163 230.118 195.745 213.296C210.328 196.1 227.528 181.147 247.346 168.437C267.163 155.354 288.477 144.513 311.285 135.915C334.468 126.943 358.586 120.215 383.638 115.729C408.691 111.243 433.93 109 459.356 109C495.252 109 525.54 111.991 550.218 117.972C575.27 123.579 596.21 132.177 613.036 143.765C629.862 154.98 643.323 169.372 653.419 186.941C663.889 204.137 672.489 224.137 679.219 246.94L799.807 661.319H921.517V710.663H813.268L855.297 851.801ZM727.558 945.335C713.756 939.238 702.691 931.853 694.363 923.18C685.763 913.834 679.406 903.928 675.293 893.461C671.554 882.994 668.563 873.836 666.319 865.985L621.449 710.663H409.999C394.295 760.008 377.282 802.81 358.96 839.07C341.012 875.331 321.007 905.424 298.946 929.348C292.521 936.316 285.906 942.76 279.1 948.682C345.713 981.539 420.701 1000 500 1000C581.953 1000 659.3 980.283 727.558 945.335ZM467.769 507.679C482.352 452.727 497.309 394.038 512.639 331.61L607.988 661.319H425.143C439.352 613.844 453.561 562.631 467.769 507.679Z" fill="#fff"/>
                                    </svg>                                    
                            </svg>
                            
                            <span class="text-white text-2xl mx-2 font-semibold">gora</span>
                        </div>
                    </div>
            
                    <nav class="mt-10">
                        <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="/">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
            
                            <span class="mx-3">Dashboard</span>
                        </a>
            
                        <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            href="/ui-elements">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                                </path>
                            </svg>
            
                            <span class="mx-3">UI Elements</span>
                        </a>
            
                        <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            href="/tables">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
            
                            <span class="mx-3">Tables</span>
                        </a>
            
                        <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            href="/forms">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
            
                            <span class="mx-3">Forms</span>
                        </a>
                    </nav>
                </div>
                <div class="flex-1 flex flex-col overflow-hidden">
                    <header class="h-20 flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
                        <div class="flex items-center">
                            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
            
                            <div class="relative mx-4 lg:mx-0">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </span>
            
                                <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
                                    placeholder="Search">
                            </div>
                        </div>
            
                        <div class="flex items-center">
                            <div x-data="{ notificationOpen: false }" class="relative">
                                <button @click="notificationOpen = ! notificationOpen"
                                    class="flex mx-4 text-gray-600 focus:outline-none">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </button>
            
                                <div x-show="notificationOpen" @click="notificationOpen = false"
                                    class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>
            
                                <div x-show="notificationOpen"
                                    class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl overflow-hidden z-10"
                                    style="width: 20rem; display: none;">
                                    <a href="#"
                                        class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-indigo-600 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                            alt="avatar">
                                        <p class="text-sm mx-2">
                                            <span class="font-bold" href="#">Sara Salah</span> replied on the <span
                                                class="font-bold text-indigo-400" href="#">Upload Image</span> artical . 2m
                                        </p>
                                    </a>
                                    <a href="#"
                                        class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-indigo-600 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1"
                                            src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                                            alt="avatar">
                                        <p class="text-sm mx-2">
                                            <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                                        </p>
                                    </a>
                                    <a href="#"
                                        class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-indigo-600 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1"
                                            src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                                            alt="avatar">
                                        <p class="text-sm mx-2">
                                            <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span
                                                class="font-bold text-indigo-400" href="#">Test with TDD</span> artical . 1h
                                        </p>
                                    </a>
                                    <a href="#"
                                        class="flex items-center px-4 py-3 text-gray-600 hover:text-white hover:bg-indigo-600 -mx-2">
                                        <img class="h-8 w-8 rounded-full object-cover mx-1"
                                            src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=398&amp;q=80"
                                            alt="avatar">
                                        <p class="text-sm mx-2">
                                            <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                                        </p>
                                    </a>
                                </div>
                            </div>
            
                            <div x-data="{ dropdownOpen: false }" class="relative">
                                <button @click="dropdownOpen = ! dropdownOpen"
                                    class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                                    <img class="h-full w-full object-cover"
                                        src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                                        alt="Your avatar">
                                </button>
            
                                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                                    style="display: none;"></div>
            
                                <div x-show="dropdownOpen"
                                    class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                                    style="display: none;">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Products</a>
                                    <a href="/login"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Page Content -->
                    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
