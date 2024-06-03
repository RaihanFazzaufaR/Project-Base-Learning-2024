 <!-- ===== Header Start ===== -->
 <header class="sticky top-0 z-[100] flex w-full bg-white dark:bg-[#2F363E]">
     <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 dark:shadow-gray-600 dark:shadow-sm md:px-6 2xl:px-11">
         <div class="flex items-center gap-3 sm:gap-4 lg:hidden">
             <!-- Hamburger Toggle BTN -->
             <button class="z-99999 block rounded-sm border border-gray-300 bg-white p-1.5 shadow-sm dark:border-gray-600 dark:bg-[#2F363E] lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
                 <span class="relative block h-5.5 w-5.5 cursor-pointer">
                     <span class="du-block absolute right-0 h-full w-full">
                         <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-300': !sidebarToggle }"></span>
                         <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-400': !sidebarToggle }"></span>
                         <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-500': !sidebarToggle }"></span>
                     </span>
                     <span class="du-block absolute right-0 h-full w-full rotate-45">
                         <span class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white" :class="{ '!h-0 delay-[0]': !sidebarToggle }"></span>
                         <span class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white" :class="{ '!h-0 dealy-200': !sidebarToggle }"></span>
                     </span>
                 </span>
             </button>
             <!-- Hamburger Toggle BTN -->
             <a class="block flex-shrink-0 lg:hidden" href="{{ route('admin') }}">
                 <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-9 h-9" />
             </a>

             <div class="hidden sm:block lg:hidden">
                 <div class="flex justify-center items-center gap-4 text-black dark:text-white">
                     <div class="uppercase font-bold text-2xl">{{ $selected }}</div>
                 </div>
             </div>
         </div>
         <div class="hidden lg:block">
             <div class="flex justify-center items-center gap-4 text-black dark:text-white">
                 <i class="text-2xl fa-solid fa-bars-staggered"></i>
                 <div class="uppercase font-bold  text-2xl">{{ $selected }}</div>
             </div>
         </div>

         <div class="flex items-center gap-3 2xs:gap-7">
             <ul class="flex items-center gap-2 2xs:gap-4">
                 <li>
                     <!-- Dark Mode Toggler -->
                     <div class="h-9 w-9 flex justify-center items-center cursor-pointer rounded-full p-2" id="darkMode"></div>
                     <!-- Dark Mode Toggler -->
                 </li>

                 <!-- Notification Menu Area -->
                 <li class="relative" x-data="{ dropdownOpen: false, notifying: true, open: true }" @click.outside="dropdownOpen = false">
                     <a class="relative flex h-9 w-9 items-center justify-center rounded-full dark:hover:bg-gray-600 hover:bg-slate-200" href="#" @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false; open = false">
                         <div x-show="open" class="absolute w-3 h-3 bg-red-500 border-2 border-white rounded-full top-1 start-4 dark:border-gray-900 block {{ (empty($messages->toArray()))?'hidden':'block' }}"></div>
                         <i class="fa-solid fa-bell text-xl text-gray-500 dark:text-white"></i>
                     </a>

                     <!-- Dropdown Start -->
                     <div x-show="dropdownOpen" class="absolute -right-27 mt-2.5 flex max-h-70 w-75 overflow-y-auto text-black dark:text-white flex-col border border-gray-300 bg-white rounded-md dark:bg-[#2F363E] shadow-default dark:border-gray-600 sm:right-0 sm:w-90">
                         <div class="px-4.5 py-3 text-center border-b-2 border-gray-400 dark:border-gray-300">
                             <h5 class="text-sm font-medium">Notifikasi</h5>
                         </div>

                         <div class="divide-y divide-gray-100 dark:divide-gray-700" x-data="{ selected: 'normal' }">
                             @if (empty($messages->toArray()))
                             <div class="flex flex-col w-full h-[80%] justify-center items-center gap-4 py-5">
                                 <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
                                 <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[200px] h-[100px] object-cover">
                                 <p class="text-base font-semibold text-green-900 dark:text-white">Tidak ada pesan</p>
                             </div>
                             @endif
                             @foreach ($messages as $message)
                             @if ($message->status === 'diproses')
                             <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                 <div class="flex-shrink-0">
                                     <img class="rounded-full w-11 h-11 object-cover" src="{{ asset('assets/images/UserAccount/'. ($message->image ?? 'default.jpg')) }}" alt="">
                                     <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-[#FFDE68] border border-white rounded-full dark:border-gray-800">
                                         <i class="fa-solid fa-minus text-xs text-white"></i>
                                     </div>
                                 </div>
                                 <div class="w-full ps-3">
                                     <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Sedang Menunggu Persutujuan,
                                         {{ $message->source == 'tb_umkm' ? 'UMKM' : 'Kegiatan' }} yang diajukan oleh <span class="font-semibold text-gray-900 dark:text-white">{{ $message->nama }}</span>.
                                         Mohon segera diproses.
                                     </div>
                                     <div class="text-xs text-blue-600 dark:text-blue-500">
                                         @if ($message->diffMinutes < 60) {{ $message->diffMinutes < 1 ? 'beberapa saat yang lalu' : $message->diffMinutes . ' menit yang lalu' }} @elseif ($message->diffHours < 24) {{ $message->diffHours . ' jam yang lalu' }} @elseif ($message->diffDays < 7) {{ $message->diffDays . ' hari yang lalu' }} @endif </div>
                                     </div>
                             </a>
                             @endif
                             @endforeach
                         </div>
                     </div>
                     <!-- Dropdown End -->
                 </li>
                 <!-- Notification Menu Area -->
             </ul>

             <!-- User Area -->
             <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                 <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                     <span class="hidden text-right lg:block">
                         <span class="block text-sm font-medium text-black dark:text-white">{{ auth()->user()->penduduk->nama }}</span>
                         <span class="block text-xs font-medium dark:text-white">
                             @if (auth()->user()->penduduk->userAccount->id_level == '1')
                             Admin Sirawa
                             @else
                             {{ auth()->user()->penduduk->jabatan }}
                             {{ (auth()->user()->penduduk->jabatan === 'Ketua RT')? auth()->user()->penduduk->kartuKeluarga->rt : '03'}}
                             @endif
                         </span>
                     </span>

                     <img src="{{ asset('assets/images/UserAccount/' . (auth()->user()->penduduk->userAccount->image ?? 'default.jpg')) }}" class="h-12 w-12 rounded-full object-cover" />

                     <i class="fa-solid fa-chevron-down transition-all duration-200 dark:text-white" :class="dropdownOpen && 'rotate-180'"></i>
                 </a>

                 <!-- Dropdown Start -->
                 <div x-show="dropdownOpen" class="absolute right-0 mt-4 flex w-62.5 flex-col border border-gray-300 bg-white shadow-default dark:border-gray-600 dark:bg-[#2F363E] dark:text-white rounded-md">
                     <div class="lg:hidden border-b border-gray-300 dark:border-gray-600 flex flex-col items-start gap-3 px-6 py-4 text-sm font-medium lg:text-base">
                         <span class="block text-sm font-medium text-black dark:text-white text-left">{{ auth()->user()->penduduk->nama }}</span>
                         <span class="block text-xs font-medium dark:text-white text-left">
                             @if (auth()->user()->penduduk->userAccount->id_level == '1')
                             Admin Sirawa
                             @else
                             {{ auth()->user()->penduduk->jabatan }}
                             {{ (auth()->user()->penduduk->jabatan === 'Ketua RT')? auth()->user()->penduduk->kartuKeluarga->rt : '03'}}
                             @endif
                         </span>
                     </div>
                     <ul class="flex flex-col border-b border-gray-300 dark:border-gray-600">
                         <li>
                             <a href="{{ route('profilku') }}" class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:bg-gray-200 hover:dark:bg-gray-600 lg:text-base px-6 py-4">
                                 <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z" fill="" />
                                     <path d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0094 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z" fill="" />
                                 </svg>
                                 Profilku
                             </a>
                         </li>
                         <li>
                             <a href="{{ route('home') }}" class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:bg-gray-200 hover:dark:bg-gray-600 lg:text-base px-6 py-4">
                                 <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M17.6687 1.44374C17.1187 0.893744 16.4312 0.618744 15.675 0.618744H7.42498C6.25623 0.618744 5.25935 1.58124 5.25935 2.78437V4.12499H4.29685C3.88435 4.12499 3.50623 4.46874 3.50623 4.91562C3.50623 5.36249 3.84998 5.70624 4.29685 5.70624H5.25935V10.2781H4.29685C3.88435 10.2781 3.50623 10.6219 3.50623 11.0687C3.50623 11.4812 3.84998 11.8594 4.29685 11.8594H5.25935V16.4312H4.29685C3.88435 16.4312 3.50623 16.775 3.50623 17.2219C3.50623 17.6687 3.84998 18.0125 4.29685 18.0125H5.25935V19.25C5.25935 20.4187 6.22185 21.4156 7.42498 21.4156H15.675C17.2218 21.4156 18.4937 20.1437 18.5281 18.5969V3.47187C18.4937 2.68124 18.2187 1.95937 17.6687 1.44374ZM16.9469 18.5625C16.9469 19.2844 16.3625 19.8344 15.6406 19.8344H7.3906C7.04685 19.8344 6.77185 19.5594 6.77185 19.2156V17.875H8.6281C9.0406 17.875 9.41873 17.5312 9.41873 17.0844C9.41873 16.6375 9.07498 16.2937 8.6281 16.2937H6.77185V11.7906H8.6281C9.0406 11.7906 9.41873 11.4469 9.41873 11C9.41873 10.5875 9.07498 10.2094 8.6281 10.2094H6.77185V5.63749H8.6281C9.0406 5.63749 9.41873 5.29374 9.41873 4.84687C9.41873 4.39999 9.07498 4.05624 8.6281 4.05624H6.77185V2.74999C6.77185 2.40624 7.04685 2.13124 7.3906 2.13124H15.6406C15.9844 2.13124 16.2937 2.26874 16.5687 2.50937C16.8094 2.74999 16.9469 3.09374 16.9469 3.43749V18.5625Z" fill="" />
                                 </svg>
                                 Portal Warga
                             </a>
                         </li>
                     </ul>
                     <a href="{{ route('logout') }}" class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:bg-gray-200 hover:dark:bg-gray-600 lg:text-base">
                         <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z" fill="" />
                             <path d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z" fill="" />
                         </svg>
                         Log Out
                     </a>
                 </div>
                 <!-- Dropdown End -->
             </div>
             <!-- User Area -->
         </div>
     </div>
 </header>

 <!-- ===== Header End ===== -->

 <script>
     // fitur button dark mode

     const darkMode = document.getElementById('darkMode');
     const userTheme = localStorage.getItem("theme");
     const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

     const darkIcon = `<i class="text-xl text-gray-500 fa-solid fa-moon"></i>`
     const lightIcon = `<i class="text-xl text-yellow-400 fa-regular fa-sun"></i>`


     const setIcon = () => {
         if (userTheme === "dark" || (!userTheme && systemTheme)) {
             darkMode.innerHTML = lightIcon;
             darkMode.classList.add('hover:bg-gray-600');
         } else {
             darkMode.innerHTML = darkIcon;
             darkMode.classList.add('hover:bg-slate-200');
         }
     }

     setIcon();

     const themeCheck = () => {
         if (userTheme === "dark" || (!userTheme && systemTheme)) {
             document.documentElement.classList.add("dark");
         }
     };

     const themeSwitch = () => {
         if (document.documentElement.classList.contains("dark")) {
             document.documentElement.classList.remove("dark");
             localStorage.setItem("theme", "light");
             iconToggle(darkIcon);
             return;
         }

         document.documentElement.classList.add("dark");
         localStorage.setItem("theme", "dark");
         iconToggle(lightIcon);
     }

     darkMode.addEventListener("click", () => {
         themeSwitch();
     })

     const iconToggle = (icon) => {
         darkMode.innerHTML = icon
         darkMode.classList.toggle('hover:bg-slate-200');
         darkMode.classList.toggle('hover:bg-gray-600');
     }

     themeCheck();
 </script>