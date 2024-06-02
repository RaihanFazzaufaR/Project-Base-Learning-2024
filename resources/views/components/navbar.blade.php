<nav class="sticky top-0 z-[99] bg-white border-gray-200 dark:bg-[#2F363E] border-b-2 h-fit" id="navbar" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true" style="transition: all 0.5s">
    <div class="w-full flex flex-wrap items-center justify-between lg:px-12 sm:px-10 px-5 py-4">
        <a href="{{ url('/') }}" class="flex items-center space-x-3">
            <img src="{{ asset('assets/images/logo.png') }}" class="sm:h-12 h-9" alt="Logo" />
            <div class="font-extrabold self-center hidden whitespace-nowrap text-3xl md:flex bg-gradient-to-r from-[#57BA47] to-black bg-clip-text h-9 justify-center items-end text-transparent dark:to-white">
                <p>ꦱꦶꦫꦮ</p>
            </div>
        </a>
        <div class="flex items-center lg:order-2 sm:space-x-3 space-x-2 lg:space-x-0 lg:gap-3" x-data="{'open': true}">
            <!-- notification -->
            <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:bg-gray-600 hover:bg-slate-200 dark:text-white p-2 rounded-full" type="button" @click="open = false">
                <svg class="lg:w-6 lg:h-6 sm:w-8 sm:h-8 size-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                    <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                </svg>

                <div x-show="open" class="absolute w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900 {{ (empty($messages->toArray()))?'hidden':'block' }}">
                </div>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownNotification" class="z-20 hidden sm:w-full w-[80%] max-h-70 overflow-y-auto !absolute !sm:-left-10 !left-5 !top-5 max-w-sm bg-white divide-y divide-gray-400 rounded-lg shadow dark:bg-[#2F363E] dark:divide-gray-300" aria-labelledby="dropdownNotificationButton">
                <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-[#2F363E] dark:text-white">
                    Notifikasi
                </div>
                <div class="divide-y divide-gray-100 dark:divide-gray-700" x-data="{ selected: 'normal' }">
                    @if (empty($messages->toArray()))
                    <div class="flex flex-col w-full h-[80%] justify-center items-center gap-4 py-5">
                        <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
                        <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[200px] h-[100px] object-cover">
                        <p class="text-base font-semibold text-green-900 dark:text-white">Tidak ada pesan</p>
                    </div>
                    @endif
                    <?php $i = 0; ?>
                    @foreach ($messages as $message)
                    @if ($message->status === 'selesai' || $message->status === 'diterima')
                    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex-shrink-0">
                            <img class="rounded-full w-11 h-11" src="{{ asset('assets/images/userProfile.png') }}" alt="">
                            <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-[#22C55E] border border-white rounded-full dark:border-gray-800">
                                <i class="fa-solid fa-check text-xs text-white"></i>
                            </div>
                        </div>
                        <div class="w-full ps-3">
                            <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Selamat,
                                {{ $message->source == 'tb_umkm' ? 'UMKM' : 'Kegiatan' }} yang Anda ajukan telah
                                disetujui oleh <span class="font-semibold text-gray-900 dark:text-white">{{ $message->source == 'tb_umkm' ? 'Ketua RW 03' : 'Ketua RW 03 / Ketua RT '. auth()->user()->penduduk->kartuKeluarga->rt }}</span>
                            </div>
                            <div class="text-xs text-blue-600 dark:text-blue-500">
                                @if ($message->diffMinutes < 60) {{ $message->diffMinutes < 1 ? 'beberapa saat yang lalu' : $message->diffMinutes . ' menit yang lalu' }} @elseif ($message->diffHours < 24) {{ $message->diffHours . ' jam yang lalu' }} @elseif ($message->diffDays < 7) {{ $message->diffDays . ' hari yang lalu' }} @endif </div>
                            </div>
                    </a>
                    @elseif ($message->status === 'diproses')
                    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex-shrink-0">
                            <img class="rounded-full w-11 h-11" src="{{ asset('assets/images/userProfile.png') }}" alt="">
                            <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-[#FFDE68] border border-white rounded-full dark:border-gray-800">
                                <i class="fa-solid fa-minus text-xs text-white"></i>
                            </div>
                        </div>
                        <div class="w-full ps-3">
                            <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Mohon Menunggu,
                                {{ $message->source == 'tb_umkm' ? 'UMKM' : 'Kegiatan' }} yang Anda ajukan sedang
                                diproses oleh <span class="font-semibold text-gray-900 dark:text-white">{{ $message->source == 'tb_umkm' ? 'Ketua RW 03' : 'Ketua RW 03 / Ketua RT '. auth()->user()->penduduk->kartuKeluarga->rt }}</span>
                            </div>
                            <div class="text-xs text-blue-600 dark:text-blue-500">
                                @if ($message->diffMinutes < 60) {{ $message->diffMinutes < 1 ? 'beberapa saat yang lalu' : $message->diffMinutes . ' menit yang lalu' }} @elseif ($message->diffHours < 24) {{ $message->diffHours . ' jam yang lalu' }} @elseif ($message->diffDays < 7) {{ $message->diffDays . ' hari yang lalu' }} @endif </div>
                            </div>
                    </a>
                    @elseif ($message->status === 'ditolak')
                    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700" @click.prevent="selected = (selected === 'tolak{{ $i }}' ? '':'tolak{{ $i }}')">
                        <div class="flex-shrink-0">
                            <img class="rounded-full w-11 h-11" src="{{ asset('assets/images/userProfile.png') }}" alt="">
                            <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-[#EF4444] border border-white rounded-full dark:border-gray-800">
                                <i class="fa-solid fa-xmark text-xs text-white"></i>
                            </div>
                        </div>
                        <div class="w-full ps-3">
                            <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Maaf,
                                {{ $message->source == 'tb_umkm' ? 'UMKM' : 'Kegiatan' }} yang Anda ajukan telah
                                ditolak oleh <span class="font-semibold text-gray-900 dark:text-white">{{ $message->source == 'tb_umkm' ? 'Ketua RW 03' : 'Ketua RW 03 / Ketua RT '. auth()->user()->penduduk->kartuKeluarga->rt }}</span>
                            </div>
                            <div class="w-full border-y-2 border-gray-300 text-sm py-2" :class="(selected === 'tolak{{ $i }}') ? 'block' : 'hidden'">
                                <p class="text-black font-bold">Alasan Penolakan :</p>
                                <p class="text-gray-500 dark:text-gray-400">"{{ $message->reason }}"</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="text-xs text-blue-600 dark:text-blue-500">
                                    @if ($message->diffMinutes < 60) {{ $message->diffMinutes < 1 ? 'beberapa saat yang lalu' : $message->diffMinutes . ' menit yang lalu' }} @elseif ($message->diffHours < 24) {{ $message->diffHours . ' jam yang lalu' }} @elseif ($message->diffDays < 7) {{ $message->diffDays . ' hari yang lalu' }} @endif </div>
                                                <i class="fa-solid" :class="(selected === 'tolak{{ $i }}') ? 'fa-angle-up' : 'fa-angle-down'"></i>
                                </div>
                            </div>
                    </a>
                    @endif
                    <?php $i++; ?>
                    @endforeach
                </div>
            </div>


            <!-- dark mode -->
            <div class="lg:h-11 lg:w-11 h-13 w-13 flex justify-center items-center cursor-pointer rounded-full p-2" id="darkMode"></div>

            @if (Auth::check())
            <button type="button" class="flex text-sm bg-gray-800 rounded-full lg:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img src="{{ asset('assets/images/UserAccount/' . (auth()->user()->penduduk->userAccount->image ?? 'default.jpg')) }}" class="h-11 w-11 rounded-full object-cover" />
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden !my-3 !-ml-5 text-base list-none bg-white divide-y divide-gray-400 rounded-lg overflow-hidden shadow dark:bg-[#2F363E] dark:divide-gray-300" id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm font-semibold text-gray-900 dark:text-white">{{ Auth::user()->penduduk->nama }}</span>
                    <span class="block text-sm font-medium  text-gray-500 truncate dark:text-gray-300">
                        {{ Auth::user()->penduduk->jabatan !== 'Tidak ada' ? Auth::user()->penduduk->jabatan : 'Penduduk' }}
                        {{ Auth::user()->penduduk->jabatan !== 'Tidak Ada' ? Auth::user()->penduduk->kartuKeluarga->rt : 'RT ' . Auth::user()->penduduk->kartuKeluarga->rt }}
                    </span>

                </div>
                <ul class="font-semibold" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('profilku') }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profil-Ku</a>
                    </li>
                    <li>
                        @if (Auth::user()->penduduk->id_penduduk)
                        <a href="{{ route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]) }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">UMKM-Ku</a>
                        @endif
                    </li>
                    <li>
                        <a href="{{ route('aduanku') }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Aduan-Ku</a>
                    </li>
                    <li>
                        <a href="{{ route('suratku') }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Surat-Ku</a>
                    </li>
                    @if (Auth::user()->id_level == 1 || Auth::user()->id_level == 2)
                    <li>
                        <a href="{{ route('admin') }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Portal
                            Admin</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keluar</a>
                    </li>
                </ul>
            </div>
            @else
            <a href="{{ route('login') }}" class="py-1 px-5 bg-[#34662C] shadow-lg rounded-2xl text-lg font-semibold text-white hover:bg-white hover:text-[#34662C] border-2 border-transparent hover:border-[#34662C] transition ease-in-out duration-200">Masuk</a>
            @endif


            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden sm:w-[40%] w-[60%] lg:flex lg:w-auto lg:order-1 absolute lg:static sm:top-15 top-17 right-5" id="navbar-user">
            <ul class="flex flex-col font-bold p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-transparent dark:bg-[#2F363E] lg:dark:bg-transparent dark:border-gray-400">
                <li>
                    <a href="{{ url('/') }}" class="block py-2 px-3 hover:bg-[#1C4F0F] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white rounded lg:bg-transparent lg:hover:bg-transparent dark:lg:hover:bg-transparent lg:hover:text-[#1C4F0F] lg:p-0 lg:hover:dark:text-[#57BA47] lg:relative group {{ $menu === 'Home' ? 'lg:text-[#1C4F0F] lg:dark:text-[#57BA47] bg-[#1C4F0F] text-white dark:bg-gray-600' : 'text-[#1C4F0F] lg:text-gray-500 dark:text-white' }}">
                        Home
                        <div class="lg:absolute lg:h-[2.5px] lg:w-full lg:bg-[#1C4F0F] lg:dark:bg-[#57BA47] group-hover:scale-x-100 lg:transition lg:ease-in-out lg:duration-500 {{ $menu === 'Home' ? '' : 'lg:scale-x-0' }}">
                        </div>
                    </a>
                </li>
                <li>
                    <button id="dropdownUmkmLink" data-dropdown-toggle="dropdownUmkm" class="flex items-center justify-between w-full py-2 px-3 hover:bg-[#1C4F0F] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white lg:hover:bg-transparent dark:lg:hover:bg-transparent lg:bg-transparent lg:hover:text-[#1C4F0F] lg:p-0 lg:hover:dark:text-[#57BA47] lg:relative group {{ $menu === 'UMKM' || $menu === 'UMKMKU' ? 'lg:text-[#1C4F0F] lg:dark:text-[#57BA47] bg-[#1C4F0F] text-white dark:bg-gray-600' : 'text-[#1C4F0F] lg:text-gray-500 dark:text-white' }}">
                        UMKM
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                        <div class="lg:absolute lg:h-[2.5px] lg:w-full lg:bg-[#1C4F0F] lg:dark:bg-[#57BA47] -bottom-1 group-hover:scale-x-100 lg:transition lg:ease-in-out lg:duration-500 {{ $menu === 'UMKM' || $menu === 'UMKMKU' ? '' : 'lg:scale-x-0' }}">
                        </div>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownUmkm" class="z-10 hidden font-normal overflow-hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-[#2F363E] dark:divide-gray-300">
                        <ul class="text-sm font-semibold text-gray-700 dark:text-gray-300 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('umkm') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">UMKM
                                    Di RW 3</a>
                            </li>
                            <li>
                                @if (Auth::check())
                                <a href="{{ route('umkmku', ['id_penduduk' => Auth::user()->penduduk->id_penduduk]) }}) }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">UMKM-Ku</a>
                                @else
                                <a href="{{ route('login') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">UMKM-Ku</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('jadwal') }}" class="block py-2 px-3 hover:bg-[#1C4F0F] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white lg:hover:bg-transparent dark:lg:hover:bg-transparent lg:bg-transparent lg:hover:text-[#1C4F0F] lg:p-0 lg:hover:dark:text-[#57BA47] lg:relative group {{ $menu === 'Kegiatan' ? 'lg:text-[#1C4F0F] lg:dark:text-[#57BA47] bg-[#1C4F0F] text-white dark:bg-gray-600' : 'text-[#1C4F0F] lg:text-gray-500 dark:text-white' }}">
                        Kegiatan
                        <div class="lg:absolute lg:h-[2.5px] lg:w-full lg:bg-[#1C4F0F] lg:dark:bg-[#57BA47]  group-hover:scale-x-100 lg:transition lg:ease-in-out lg:duration-500 {{ $menu === 'Kegiatan' ? '' : 'lg:scale-x-0' }}">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('penduduk') }}" class="block py-2 px-3 hover:bg-[#1C4F0F] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white lg:hover:bg-transparent dark:lg:hover:bg-transparent lg:bg-transparent lg:hover:text-[#1C4F0F] lg:p-0 lg:hover:dark:text-[#57BA47] lg:relative group {{ $menu === 'Penduduk' ? 'lg:text-[#1C4F0F] lg:dark:text-[#57BA47] bg-[#1C4F0F] text-white dark:bg-gray-600' : 'text-[#1C4F0F] lg:text-gray-500 dark:text-white' }}">
                        Penduduk
                        <div class="lg:absolute lg:h-[2.5px] lg:w-full lg:bg-[#1C4F0F] lg:dark:bg-[#57BA47] group-hover:scale-x-100 lg:transition lg:ease-in-out lg:duration-500 {{ $menu === 'Penduduk' ? '' : 'lg:scale-x-0' }}">
                        </div>
                    </a>
                </li>
                <li>
                    <button id="dropdownSuratLink" data-dropdown-toggle="dropdownSurat" class="flex items-center justify-between w-full py-2 px-3 hover:bg-[#1C4F0F] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white lg:bg-transparent lg:hover:bg-transparent dark:lg:hover:bg-transparent lg:hover:text-[#1C4F0F] lg:p-0 lg:hover:dark:text-[#57BA47] lg:relative group {{ $menu === 'Surat' || $menu === 'Suratku' ? 'lg:text-[#1C4F0F] lg:dark:text-[#57BA47] bg-[#1C4F0F] text-white dark:bg-gray-600' : 'text-[#1C4F0F] lg:text-gray-500 dark:text-white' }}">
                        Surat
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                        <div class="lg:absolute lg:h-[2.5px] lg:w-full lg:bg-[#1C4F0F] lg:dark:bg-[#57BA47] -bottom-1 group-hover:scale-x-100 lg:transition lg:ease-in-out lg:duration-500 {{ $menu === 'Surat' || $menu === 'Suratku' ? '' : 'lg:scale-x-0' }}">
                        </div>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownSurat" class="z-10 hidden font-normal overflow-hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-[#2F363E] dark:divide-gray-300">
                        <ul class="text-sm font-semibold text-gray-700 dark:text-gray-300 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('surat') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">Surat</a>
                            </li>
                            <li>
                                @if (Auth::check())
                                <a href="{{ route('suratku') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">Surat-Ku</a>
                                @else
                                <a href="{{ route('login') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">Surat-Ku</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('bansos') }}" class="block py-2 px-3 hover:bg-[#1C4F0F] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white lg:hover:bg-transparent dark:lg:hover:bg-transparent lg:bg-transparent lg:hover:text-[#1C4F0F] lg:p-0 lg:hover:dark:text-[#57BA47] lg:relative group {{ $menu === 'Bansos' ? 'lg:text-[#1C4F0F] lg:dark:text-[#57BA47] bg-[#1C4F0F] text-white dark:bg-gray-600' : 'text-[#1C4F0F] lg:text-gray-500 dark:text-white' }}">
                        Bansos
                        <div class="lg:absolute lg:h-[2.5px] lg:w-full lg:bg-[#1C4F0F] lg:dark:bg-[#57BA47] group-hover:scale-x-100 lg:transition lg:ease-in-out lg:duration-500 {{ $menu === 'Bansos' ? '' : 'lg:scale-x-0' }}">
                        </div>
                    </a>
                </li>
                <li>
                    <button id="dropdownAduanLink" data-dropdown-toggle="dropdownAduan" class="flex items-center justify-between w-full py-2 px-3 hover:bg-[#1C4F0F] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white lg:bg-transparent lg:hover:bg-transparent dark:lg:hover:bg-transparent lg:hover:text-[#1C4F0F] lg:p-0 lg:hover:dark:text-[#57BA47] lg:relative group {{ $menu === 'Aduan' || $menu === 'Aduan-Ku' ? 'lg:text-[#1C4F0F] lg:dark:text-[#57BA47] bg-[#1C4F0F] text-white dark:bg-gray-600' : 'text-[#1C4F0F] lg:text-gray-500 dark:text-white' }}">
                        Aduan
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                        <div class="lg:absolute lg:h-[2.5px] lg:w-full lg:bg-[#1C4F0F] lg:dark:bg-[#57BA47] -bottom-1 group-hover:scale-x-100 lg:transition lg:ease-in-out lg:duration-500 {{ $menu === 'Aduan' || $menu === 'Aduanku' ? '' : 'lg:scale-x-0' }}">
                        </div>
                    </button>
                    {{-- Dropdown menu --}}
                    <div id="dropdownAduan" class="z-10 hidden font-normal overflow-hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-[#2F363E] dark:divide-gray-300">
                        <ul class="text-sm font-semibold text-gray-700 dark:text-gray-300 " aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('aduan') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">Aduan</a>
                            </li>
                            <li>
                                @if (Auth::check())
                                <a href="{{ route('aduanku') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">Aduan-Ku</a>
                                @else
                                <a href="{{ route('login') }}" class="block px-4 py-2 hover:text-[#1C4F0F] hover:bg-[#e9f4e6] dark:hover:bg-gray-600 dark:hover:text-white transition-all">Aduan-Ku</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                    {{-- <a href="{{ route('aduan') }}" class="block py-2 px-3 hover:bg-[#1C4F0F] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white lg:hover:bg-transparent dark:lg:hover:bg-transparent lg:hover:text-[#1C4F0F] lg:p-0 lg:hover:dark:text-[#57BA47] lg:relative group {{ ($menu === 'Aduan') ? 'lg:text-[#1C4F0F]':'lg:text-gray-500' }}">
                    Aduan
                    <div class="lg:absolute lg:h-[2.5px] lg:w-full lg:bg-[#1C4F0F]  group-hover:scale-x-100 lg:transition lg:ease-in-out lg:duration-500 {{ ($menu === 'Aduan') ? '':'lg:scale-x-0' }}"></div>
                    </a> --}}
                </li>
                <li>
                    <a href="{{ route('profil') }}" class="block py-2 px-3 hover:bg-[#1C4F0F] hover:text-white dark:hover:bg-gray-600 dark:hover:text-white lg:hover:bg-transparent dark:lg:hover:bg-transparent lg:bg-transparent lg:hover:text-[#1C4F0F] lg:hover:dark:text-[#57BA47] lg:p-0 lg:relative group {{ $menu === 'Profil' ? 'lg:text-[#1C4F0F] lg:dark:text-[#57BA47] bg-[#1C4F0F] text-white dark:bg-gray-600' : 'text-[#1C4F0F] lg:text-gray-500 dark:text-white' }}">
                        Profil
                        <div class="lg:absolute lg:h-[2.5px] lg:w-full lg:bg-[#1C4F0F] lg:dark:bg-[#57BA47] group-hover:scale-x-100 lg:transition lg:ease-in-out lg:duration-500 {{ $menu === 'Profil' ? '' : 'lg:scale-x-0' }}">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
    // fitur button dark mode

    const darkMode = document.getElementById('darkMode');
    const userTheme = localStorage.getItem("theme");
    const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

    const darkIcon = `<i class="text-2xl text-gray-500 fa-solid fa-moon"></i>`
    const lightIcon = `<i class="text-2xl text-yellow-400 fa-regular fa-sun"></i>`


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

<script>
    let prevScrollpos = window.pageYOffset;

    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;

        if (window.innerWidth >= 500) {
            if (prevScrollpos > currentScrollPos) {
                console.log(window.innerWidth);
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-80px";
            }
        }

        prevScrollpos = currentScrollPos;
    }
</script>
<!-- <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script> -->