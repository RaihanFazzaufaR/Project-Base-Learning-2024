</div>
<!-- footer -->

<div class="pt-16 w-full ">
    <div class="grid gap-10 row-gap-6 mb-6 sm:grid-cols-2 lg:grid-cols-4 mx-auto w-[80%]">
        <div class="sm:col-span-2 text-center lg:text-left">
            <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="size-8 object-cover">
                <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 dark:text-white uppercase">SIRAWA</span>
            </a>
            <div class="mt-6 lg:max-w-sm">
                <p class="text-sm text-gray-800 dark:text-white">
                    “Mewujudkan RW 3 sebagai RW yang Modern, Kreatif, Inovatif dan Sejahtera”
                </p>
            </div>
        </div>
        <div class="space-y-2 text-sm text-right lg:text-left pr-5 lg:pr-0">
            <p class="text-base font-bold tracking-wide text-gray-900 dark:text-white">Hubungi</p>
            <div class="flex lg:justify-start justify-end">
                <p class="mr-1 text-gray-800 dark:text-white">Telepon :</p>
                <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone" class="transition-colors duration-300 text-deep-purple-accent-400 dark:text-white hover:text-deep-purple-800">850-123-5021</a>
            </div>
            <div class="flex lg:justify-start justify-end">
                <p class="mr-1 text-gray-800 dark:text-white">Email :</p>
                <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email" class="transition-colors duration-300 text-deep-purple-accent-400 dark:text-white hover:text-deep-purple-800">info@lorem.mail</a>
            </div>
            <div class="flex lg:justify-start justify-end">
                <p class="mr-1 text-gray-800 dark:text-white">Alamat :</p>
                <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer" aria-label="Our address" title="Our address" class="transition-colors duration-300 text-deep-purple-accent-400 dark:text-white hover:text-deep-purple-800">
                    312 Lovely Street, NY
                </a>
            </div>
        </div>
        <div class="pl-5 lg:pl-0">
            <span class="text-base font-bold tracking-wide text-gray-900 dark:text-white">Sosial Media</span>
            <div class="flex items-center mt-1 space-x-3 text-xl">
                <a href="https://x.com/?lang=id" class="text-gray-500 dark:text-white transition-colors duration-300 hover:text-deep-purple-accent-400 dark:text-white">
                    <i class="fa-brands fa-square-x-twitter"></i>
                </a>
                <a href="https://www.instagram.com/" class="text-gray-500 dark:text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/?locale=id_ID" class="text-gray-500 dark:text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="https://www.youtube.com/" class="text-gray-500 dark:text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a href="https://www.tiktok.com/id-ID/" class="text-gray-500 dark:text-white transition-colors duration-300 hover:text-deep-purple-accent-400">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </div>
            <p class="mt-3 text-sm text-gray-500 dark:text-white">
                Jangan lupa follow kami di sosial media untuk mendapatkan informasi terbaru.
            </p>
        </div>
    </div>
    <div class="flex flex-col-reverse justify-center items-center pt-5 pb-5 border-t lg:flex-row">
        <p class="text-sm text-gray-600 dark:text-white">
            © Copyright 2024 SIRAWA Inc. All rights reserved.
        </p>
    </div>

    {{ $slot }}
    <script defer src="{{ asset('assets/js/bundle.js') }}"></script>
    @include('sweetalert::alert')

    </body>

    </html>