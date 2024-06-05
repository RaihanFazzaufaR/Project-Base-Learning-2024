<!-- ===== Sidebar Start ===== -->
<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'" class="absolute left-0 top-0 z-[101] flex h-screen w-72.5 flex-col overflow-y-hidden duration-300 ease-linear  lg:static lg:translate-x-0 shadow-md" @click.outside="sidebarToggle = false">
    <div class="w-full h-full bg-white dark:bg-[#2F363E]">
        <!-- SIDEBAR HEADER -->
        <div class="flex items-center justify-between gap-2 py-4 pr-3">
            <a href="/admin" class="w-full flex justify-center items-center gap-3 font-bold h-fit text-black dark:text-white text-4xl">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-12 w-12" />
                <div class="font-extrabold self-center hidden whitespace-nowrap md:flex flex-col bg-gradient-to-r from-[#57BA47] to-black bg-clip-text h-fit justify-center items-start text-transparent dark:to-white">
                    <div class="text-3xl">ꦱꦶꦫꦮ</div>
                    <div class="text-xs flex justify-between w-full">
                        <div class="">S</div>
                        <div class="">I</div>
                        <div class="">R</div>
                        <div class="">A</div>
                        <div class="">W</div>
                        <div class="">A</div>
                    </div>
                </div>
            </a>

            <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
                <i class="fa-solid fa-angles-left text-2xl text-black dark:text-white"></i>
            </button>
        </div>
        <!-- SIDEBAR HEADER -->

        <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
            <!-- Sidebar Menu -->
            <nav class="mt-5 pl-4 py-4 lg:mt-5 lg:pl-8 text-[#6C6969] dark:text-gray-400" x-data="{ selected: '{{ $selected }}' }">
                <!-- Menu Group -->
                <div>
                    <!-- <h3 class="mb-4 ml-4 text-sm font-bold text-[#6C6969]">MENU</h3> -->

                    <ul class="mb-6 flex flex-col gap-1.5">
                        <!-- Menu Item Dashboard -->
                        <li>
                            <a class="group relative justify-start flex items-center gap-2.5 px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] rounded-l-2xl hover:dark:bg-[#57BA47] hover:dark:text-white hover:dark:border-white" href="{{ route('admin') }}" :class="{
                                'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47] dark:bg-[#57BA47] dark:text-white dark:border-white': (selected === 'Dashboard') &&
                                    (page === 'dashboard')
                            }">
                                <div class="w-7">
                                    <i class="fa-solid fa-house text-xl"></i>
                                </div>
                                Dashboard
                            </a>
                        </li>
                        <!-- Menu Item Dashboard -->

                        <!-- Menu Item Kependudukan -->
                        <li>
                            <a class="group relative justify-start flex items-center gap-2.5 px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] rounded-l-2xl hover:dark:bg-[#57BA47] hover:dark:text-white hover:dark:border-white" href="#" @click.prevent="selected = (selected === 'Kependudukan' ? '':'Kependudukan')" :class="{
                                'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47] dark:bg-[#57BA47] dark:text-white dark:border-white': (
                                    selected === 'Kependudukan') || (page === 'daftarPenduduk') || (
                                    page === 'daftarAkun') || (page === 'daftarNkk')
                            }">
                                <div class=" w-7">
                                    <i class="fa-solid fa-users text-xl"></i>
                                </div>
                                Kependudukan

                                <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Kependudukan') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                                </svg>
                            </a>

                            <!-- Dropdown Menu Start -->
                            <div class="translate transform overflow-hidden" :class="(selected === 'Kependudukan') ? 'block' : 'hidden'">
                                <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('daftar-penduduk') }}" :class="page === 'daftarPenduduk' && '!text-[#57BA47]'">Daftar Penduduk</a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('daftar-nkk') }}" :class="page === 'daftarNkk' && '!text-[#57BA47]'">Daftar Kartu Keluarga</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown Menu End -->
                        </li>
                        <li>
                            <a class="group relative justify-start flex items-center gap-2.5 px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] rounded-l-2xl hover:dark:bg-[#57BA47] hover:dark:text-white hover:dark:border-white" href="#" @click.prevent="selected = (selected === 'Bansos' ? '':'Bansos')" :class="{
                                'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47] dark:bg-[#57BA47] dark:text-white dark:border-white': (selected === 'Bansos') ||
                                    (page === 'listBansos') || (page === 'rekomendasiBansos')
                            }">
                                <div class=" w-7">
                                    <i class="fa-solid fa-hand-holding-hand text-xl"></i>
                                </div>
                                Bansos
                                @if ($bansosRequest > 0 && (auth()->user()->penduduk->jabatan != 'Ketua RW'))
                                <div class="absolute size-7 rounded-full flex justify-center items-center bg-yellow-400 text-white right-10 shadow-md" :class="(selected === 'Bansos')? 'hidden' : 'flex'">{{ $bansosRequest }}</div>
                                @endif
                                <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Bansos') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                                </svg>
                            </a>

                            <!-- Dropdown Menu Start -->
                            <div class="translate transform overflow-hidden" :class="(selected === 'Bansos') ? 'block' : 'hidden'">
                                <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('bansos-admin') }}" :class="page === 'listBansos' && '!text-[#57BA47]'">Daftar Bansos</a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('spk') }}" :class="page === 'rekomendasiBansos' && '!text-[#57BA47]'">Rekomendasi
                                            Bansos
                                            @if ($bansosRequest > 0  && (auth()->user()->penduduk->jabatan != 'Ketua RW'))
                                            <div class="absolute size-7 rounded-full flex justify-center items-center bg-yellow-400 text-white right-5 shadow-md" :class="(selected === 'Bansos')? 'flex' : 'hidden'">{{ $bansosRequest }}</div>
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown Menu End -->
                        </li>
                        <li>
                            <a class="group relative justify-start flex items-center gap-2.5 px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] rounded-l-2xl hover:dark:bg-[#57BA47] hover:dark:text-white hover:dark:border-white" href="#" @click.prevent="selected = (selected === 'Umkm' ? '':'Umkm')" :class="{
                                'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47] dark:bg-[#57BA47] dark:text-white dark:border-white': (selected === 'Umkm') ||
                                    (page === 'listUmkm') || (page === 'ajuanUmkm')
                            }">
                                <div class=" w-7">
                                    <i class="fa-solid fa-store text-xl"></i>
                                </div>
                                UMKM
                                @if ($UmkmRequest > 0 && (auth()->user()->penduduk->jabatan == 'Ketua RW'))
                                <div class="absolute size-7 rounded-full flex justify-center items-center bg-yellow-400 text-white right-10 shadow-md" :class="(selected === 'Umkm')? 'hidden' : 'flex'">{{ $UmkmRequest }}</div>
                                @endif
                                <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Umkm') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                                </svg>
                            </a>

                            <!-- Dropdown Menu Start -->
                            <div class="translate transform overflow-hidden" :class="(selected === 'Umkm') ? 'block' : 'hidden'">
                                <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('umkm-admin') }}" :class="page === 'listUmkm' && '!text-[#57BA47]'">Daftar UMKM</a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('ajuan-umkm-admin') }}" :class="page === 'ajuanUmkm' && '!text-[#57BA47]'">
                                            Ajuan UMKM
                                            @if ($UmkmRequest > 0 && (auth()->user()->penduduk->jabatan == 'Ketua RW'))
                                            <div class="absolute size-7 rounded-full flex justify-center items-center bg-yellow-400 text-white right-10 shadow-md" :class="(selected === 'Umkm')? 'flex' : 'hidden'">{{ $UmkmRequest }}</div>
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown Menu End -->
                        </li>
                        <!-- Menu Item Pengaduan -->
                        <li>
                            <a class="group relative justify-start flex items-center gap-2.5 px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] rounded-l-2xl hover:dark:bg-[#57BA47] hover:dark:text-white hover:dark:border-white" href="{{ route('pengaduan-admin') }}" @click="selected = (selected === 'Pengaduan' ? '':'Pengaduan')" :class="{
                                'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47] dark:bg-[#57BA47] dark:text-white dark:border-white': (
                                    selected === 'Pengaduan') && (page === 'pengaduan')
                            }">
                                <div class="w-7">
                                    <i class="fa-solid fa-envelope-open-text text-xl"></i>
                                </div>
                                Pengaduan
                                @if ($AduanRequest > 0)
                                <div class="absolute size-7 rounded-full flex justify-center items-center bg-yellow-400 text-white right-10 shadow-md">{{ $AduanRequest }}</div>
                                @endif
                            </a>
                        </li>
                        <!-- Menu Item Pengaduan -->
                        <!-- Menu Item Jadwal Kegiatan -->
                        <li>
                            <a class="group relative justify-start flex items-center gap-2.5 px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] rounded-l-2xl hover:dark:bg-[#57BA47] hover:dark:text-white hover:dark:border-white" href="#" @click.prevent="selected = (selected === 'Kegiatan' ? '':'Kegiatan')" :class="{
                                'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47] dark:bg-[#57BA47] dark:text-white dark:border-white': (selected === 'Kegiatan') ||
                                    (page === 'jadwal kegiatan') || (page === 'ajuan kegiatan')
                            }">
                                <div class=" w-7">
                                    <i class="fa-solid fa-calendar-day text-xl"></i>
                                </div>
                                Jadwal Kegiatan
                                @if ($KegiatanRequest > 0)
                                <div class="absolute size-7 rounded-full flex justify-center items-center bg-yellow-400 text-white right-10 shadow-md" :class="(selected === 'Kegiatan')? 'hidden' : 'flex'">{{ $KegiatanRequest }}</div>
                                @endif
                                <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Kegiatan') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                                </svg>
                            </a>

                            <!-- Dropdown Menu Start -->
                            <div class="translate transform overflow-hidden" :class="(selected === 'Kegiatan') ? 'block' : 'hidden'">
                                <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('jadwal-kegiatan-admin') }}" :class="page === 'jadwal kegiatan' && '!text-[#57BA47]'">Daftar Kegiatan</a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('ajuan-kegiatan-admin') }}" :class="page === 'ajuan kegiatan' && '!text-[#57BA47]'">
                                            Ajuan Kegiatan
                                            @if ($KegiatanRequest > 0)
                                            <div class="absolute size-7 rounded-full flex justify-center items-center bg-yellow-400 text-white right-10 shadow-md" :class="(selected === 'Kegiatan')? 'flex' : 'hidden'">{{ $KegiatanRequest }}</div>
                                            @endif
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown Menu End -->
                        </li>
                        <!-- Menu Item Jadwal Kegiatan -->
                        <!-- Menu Item Pengumuman -->
                        <li>
                            <a class="group relative justify-start flex items-center gap-2.5 px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] rounded-l-2xl hover:dark:bg-[#57BA47] hover:dark:text-white hover:dark:border-white" href="{{ route('pengumuman-admin') }}" @click="selected = (selected === 'Pengumuman' ? '':'Pengumuman')" :class="{
                                'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47] dark:bg-[#57BA47] dark:text-white dark:border-white': (
                                    selected === 'Pengumuman') && (page === 'pengumuman')
                            }">
                                <div class="w-7">
                                    <i class="fa-solid fa-bullhorn text-xl"></i>
                                </div>
                                Pengumuman
                            </a>
                        </li>
                        <!-- Menu Item Pengumuman -->
                        <li>
                            <a class="group relative justify-start flex items-center gap-2.5 px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] rounded-l-2xl hover:dark:bg-[#57BA47] hover:dark:text-white hover:dark:border-white" href="{{ route('persuratan-admin') }}" @click="selected = (selected === 'Jadwal Kegiatan' ? '':'Jadwal Kegiatan')" :class="{
                                'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47] dark:bg-[#57BA47] dark:text-white dark:border-white': (
                                    selected === 'Persuratan') && (page === 'daftarPersuratan')
                            }">
                                <div class="w-7">
                                    <i class="fa-solid fa-envelopes-bulk text-xl"></i>
                                </div>
                                Persuratan
                            </a>
                        </li>
                        <!-- Menu Item Persuratan -->
                        <!-- Menu Item Akun Admin -->
                        @if (Auth::user()->id_level == 1)
                        <li>
                            <a class="group relative justify-start flex items-center gap-2.5 px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] rounded-l-2xl hover:dark:bg-[#57BA47] hover:dark:text-white hover:dark:border-white" href="#" @click.prevent="selected = (selected === 'Akun' ? '':'Akun')" :class="{
                                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47] dark:bg-[#57BA47] dark:text-white dark:border-white': (
                                            selected === 'Akun') ||
                                        (page === 'daftarAkun') || (page === 'kelolaLevel')
                                }">
                                <div class=" w-7">
                                    <i class="fa-solid fa-address-book text-xl"></i>
                                </div>
                                Akun Penduduk

                                <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Akun') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                                </svg>
                            </a>

                            <!-- Dropdown Menu Start -->
                            <div class="translate transform overflow-hidden" :class="(selected === 'Akun') ? 'block' : 'hidden'">
                                <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('akun-admin') }}" :class="page === 'daftarAkun' && '!text-[#57BA47]'">Daftar Akun</a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('akun-level') }}" :class="page === 'kelolaLevel' && '!text-[#57BA47]'">Kelola Akun</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown Menu End -->
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
            <!-- Sidebar Menu -->
        </div>
    </div>
</aside>

<!-- ===== Sidebar End ===== -->