<x-layout.base title="Home">
    <div class="grow shrink-0">
        <!-- Header -->
        <x-layout.navbar />

        <x-home.hero-section />

        <x-home.about-section />

        <x-home.count-section />

        <x-home.division-section />

        <x-home.galery-section />

        <x-home.faq-section />

        <x-layout.footer/>
    </div>

    <!-- Progress Wrapper -->
    <div class="fixed right-6 bottom-6 flex flex-col items-center space-y-4 z-[9999]">
        <!-- Button 1 -->
        <div
            class="progress-wrap w-[2.3rem] h-[2.3rem] cursor-pointer block shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] opacity-100 translate-y-0 transition-all duration-300 ease-in-out delay-[0s] rounded-full after:absolute after:content-['\e951'] after:text-center after:leading-[2.3rem] after:text-[1.2rem] after:!text-[#605dba] after:h-[2.3rem] after:w-[2.3rem] after:cursor-pointer after:block after:z-[1] after:transition-all after:duration-[0.2s] after:ease-linear after:left-0 after:top-0 motion-reduce:after:transition-none after:font-Unicons 
                hover:scale-110 hover:shadow-lg hover:shadow-indigo-300">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path
                    class="fill-none stroke-[#605dba] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none"
                    d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Button 2 (WhatsApp) -->
        <a href="#" target="_blank">
            <div
                class="progress-wrap relative w-[2.3rem] h-[2.3rem] cursor-pointer flex items-center justify-center shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] opacity-100 translate-y-0 transition-all duration-300 ease-in-out rounded-full hover:scale-110 hover:shadow-lg hover:shadow-green-300">
                <!-- SVG WhatsApp Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                    class="w-5 h-5 fill-[#25D366] absolute z-[2]">
                    <path
                        d="M16 .5C7.44.5.5 7.44.5 16c0 2.8.74 5.54 2.14 7.94L.5 31.5l7.74-2.1C10.69 30.8 13.31 31.5 16 31.5 24.56 31.5 31.5 24.56 31.5 16S24.56.5 16 .5zm0 28.5c-2.46 0-4.86-.66-6.96-1.9l-.5-.3-4.6 1.24 1.24-4.6-.3-.5C3.66 20.86 3 18.46 3 16 3 8.82 8.82 3 16 3s13 5.82 13 13-5.82 13-13 13zm6.36-9.64c-.36-.18-2.14-1.06-2.47-1.18-.33-.12-.57-.18-.81.18s-.93 1.18-1.14 1.43-.42.27-.78.09c-.36-.18-1.51-.56-2.88-1.78-1.07-.95-1.78-2.12-1.99-2.48-.21-.36-.02-.55.16-.73.16-.16.36-.42.54-.63.18-.21.24-.36.36-.6.12-.24.06-.45-.03-.63-.09-.18-.81-1.96-1.11-2.68-.29-.7-.59-.6-.81-.61-.21-.01-.45-.01-.69-.01s-.63.09-.96.45c-.33.36-1.26 1.23-1.26 3 0 1.77 1.29 3.48 1.47 3.72.18.24 2.53 3.87 6.13 5.43.86.37 1.53.59 2.05.76.86.27 1.64.23 2.26.14.69-.1 2.14-.87 2.44-1.71.3-.84.3-1.55.21-1.71-.09-.15-.33-.24-.69-.42z" />
                </svg>
                <!-- Lingkaran progress -->
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path
                        class="fill-none stroke-[#25D366] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none"
                        d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>
        </a>
    </div>
</x-layout.base>
