<x-header menu="{{ $menu }}">

</x-header>
<div class="bg-[#Fff] min-h-[100vh] px-39 py-5 w-[100%]">
    <div class="w-full border-2 h-fit">

        <div id="accordion-flush" data-accordion="collapse"
            data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
            data-inactive-classes="text-gray-500 dark:text-gray-400">
            <div class="size-80 rounded-full overflow-hidden">
                <div class="absolute  size-15 bg-[#2d5523] flex justify-center items-center rounded-full text-2xl left-[390px] top-[350px] text-white ">
                    <i class="fa-solid fa-pen"></i>
                    <input type="file" type="hidden">
                </div>
                <img src="{{ asset('assets/images/contoh-foto-rw.jpg') }}" alt="profile" class="w-full h-full">
            </div>
            {{-- <div class="w-20 h-20 rounded-full overflow-hidden relative">
                <div class="absolute w-4 h-4 bg-green-800 flex justify-center items-center rounded-full text-2xl left-[390px] top-[350px] text-white cursor-pointer" id="trigger-file-input">
                    <i class="fa-solid fa-pen"></i>
                </div>
                <img src="{{ asset('assets/images/contoh-foto-rw.jpg') }}" alt="profile" class="w-full h-full">
                <input type="file" id="file-input" class="hidden">
            </div>
         --}}
            
            <h2 id="accordion-flush-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                    data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                    aria-controls="accordion-flush-body-2">
                    <span>Is there a Figma file available?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using
                        the Figma software so everything you see in the library has a design equivalent in our Figma
                        file.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on
                        the utility classes from Tailwind CSS and components from Flowbite.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer>
    <script>
        document.getElementById('trigger-file-input').addEventListener('click', function() {
            document.getElementById('file-input').click();
        });
    </script>
</x-footer>
