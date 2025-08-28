<nav id="navbar" class="bg-tranparant p-2 fixed top-0 left-0 right-0 z-50">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between px-4 lg:px-10">

        <!-- Logo & Hamburger -->
        <div class="flex items-center justify-between w-full lg:w-auto">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <img src="" 
                    alt="Logo" class="h-7 lg:h-10 w-auto">
            </a>

            <!-- Hamburger Button (mobile only) -->
            <button id="menu-toggle" class="block lg:hidden focus:outline-none">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links -->
        <ul id="menu"
            class="hidden flex-col space-y-2 mt-4 text-gray-900 font-medium lg:flex lg:flex-row lg:space-x-8 lg:space-y-0 lg:mt-0 lg:items-center text-sm lg:text-lg">
            <li><a href="/" class="hover:text-amber-600 block py-2">Home</a></li>
            <li><a href="#project" class="hover:text-amber-600 block py-2">Project</a></li>
            <li><a href="#" class="hover:text-amber-600 block py-2">Blog</a></li>
            <li><a href="#contact" class="hover:text-amber-600 block py-2">Contact</a></li>
        </ul>
    </div>
</nav>
