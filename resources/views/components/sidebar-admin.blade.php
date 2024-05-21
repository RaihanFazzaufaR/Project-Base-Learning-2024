<!-- ===== Sidebar Start ===== -->
<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'" class="absolute left-0 top-0 z-[101] flex h-screen w-72.5 flex-col overflow-y-hidden bg-white duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0 shadow-md" @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-between gap-2 py-4">
        <a href="/admin" class="w-full flex justify-center items-center gap-5 font-bold text-3xl text-black">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-12 w-12" />
            <p>SIRAWA</p>
        </a>

        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z" fill="" />
            </svg>
        </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class="mt-5 pl-4 py-4 lg:mt-5 lg:pl-8 text-[#6C6969]" x-data="{selected: '{{ $selected }}'}">
            <!-- Menu Group -->
            <div>
                <!-- <h3 class="mb-4 ml-4 text-sm font-bold text-[#6C6969]">MENU</h3> -->

                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a class="group relative justify-start flex items-center gap-2.5 rounded-sm px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] dark:hover:bg-meta-4 rounded-l-2xl" href="{{ route('admin') }}" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Dashboard') && (page === 'dashboard') }">
                            <div class="w-7">
                                <i class="fa-solid fa-house text-xl"></i>
                            </div>
                            Dashboard
                        </a>
                    </li>
                    <!-- Menu Item Dashboard -->

                    <!-- Menu Item Kependudukan -->
                    <li>
                        <a class="group relative flex items-center justify-start gap-2.5 rounded-sm px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47]" href="#" @click.prevent="selected = (selected === 'Kependudukan' ? '':'Kependudukan')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Kependudukan') || (page === 'daftarPenduduk') || (page === 'daftarAkun') || (page === 'daftarNkk')}">
                            <div class=" w-7">
                                <i class="fa-solid fa-users text-xl"></i>
                            </div>
                            Kependudukan

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Kependudukan') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden" :class="(selected === 'Kependudukan') ? 'block' :'hidden'">
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
                        <a class="group relative flex items-center justify-start gap-2.5 rounded-sm px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47]" href="#" @click.prevent="selected = (selected === 'Bansos' ? '':'Bansos')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Bansos') || (page === 'listBansos') || (page === 'rekomendasiBansos')}">
                            <div class=" w-7">
                                <i class="fa-solid fa-hand-holding-hand text-xl"></i>
                            </div>
                            Bansos

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Bansos') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden" :class="(selected === 'Bansos') ? 'block' :'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('bansos-admin') }}" :class="page === 'listBansos' && '!text-[#57BA47]'">Daftar Bansos</a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('rekomendasi-bansos') }}" :class="page === 'rekomendasiBansos' && '!text-[#57BA47]'">Rekomendasi Bansos</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    <li>
                        <a class="group relative flex items-center justify-start gap-2.5 rounded-sm px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47]" href="#" @click.prevent="selected = (selected === 'Umkm' ? '':'Umkm')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Umkm') || (page === 'listUmkm') || (page === 'ajuanUmkm')}">
                            <div class=" w-7">
                                <i class="fa-solid fa-store text-xl"></i>
                            </div>
                            UMKM

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Umkm') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden" :class="(selected === 'Umkm') ? 'block' :'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('umkm-admin') }}" :class="page === 'listUmkm' && '!text-[#57BA47]'">Daftar UMKM</a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('ajuan-umkm-admin') }}" :class="page === 'ajuanUmkm' && '!text-[#57BA47]'">Ajuan UMKM</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    <!-- Menu Item Pengaduan -->
                    <li>
                        <a class="group relative flex justify-start items-center gap-2.5 rounded-sm px-4 py-3 font-bold  duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] dark:hover:bg-meta-4 rounded-l-2xl" href="{{ route('pengaduan-admin') }}" @click="selected = (selected === 'Pengaduan' ? '':'Pengaduan')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Pengaduan') && (page === 'pengaduan')
                  }">
                            <div class="w-7">
                                <i class="fa-solid fa-envelope-open-text text-xl"></i>
                            </div>
                            Pengaduan
                        </a>
                    </li>
                    <!-- Menu Item Pengaduan -->
                    <!-- Menu Item Jadwal Kegiatan -->
                    <li>
                        <a class="group relative flex items-center justify-start gap-2.5 rounded-sm px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47]" href="#" @click.prevent="selected = (selected === 'Kegiatan' ? '':'Kegiatan')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Jadwal Kegiatan') || (page === 'jadwal kegiatan') || (page === 'ajuan kegiatan')}">
                            <div class=" w-7">
                                <i class="fa-solid fa-calendar-day text-xl"></i>
                            </div>
                            Jadwal Kegiatan

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Kegiatan') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden" :class="(selected === 'Kegiatan') ? 'block' :'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('jadwal-kegiatan-admin') }}" :class="page === 'jadwal kegiatan' && '!text-[#57BA47]'">Daftar Kegiatan</a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('ajuan-kegiatan-admin') }}" :class="page === 'ajuan kegiatan' && '!text-[#57BA47]'">Ajuan Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    <!-- Menu Item Jadwal Kegiatan -->
                    <!-- Menu Item Pengumuman -->
                    <li>
                        <a class="group relative flex justify-start items-center gap-2.5 rounded-sm px-4 py-3 font-bold  duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] dark:hover:bg-meta-4 rounded-l-2xl" href="{{ route('pengumuman-admin') }}" @click="selected = (selected === 'Pengumuman' ? '':'Pengumuman')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Pengumuman') && (page === 'pengumuman')
                  }">
                            <div class="w-7">
                                <i class="fa-solid fa-bullhorn text-xl"></i>
                            </div>
                            Pengumuman
                        </a>
                    </li>
                    <!-- Menu Item Pengumuman -->
                    <li>
                        <a class="group relative flex justify-start items-center gap-2.5 rounded-sm px-4 py-3 font-bold  duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] dark:hover:bg-meta-4 rounded-l-2xl" href="{{ route('persuratan-admin') }}" @click="selected = (selected === 'Jadwal Kegiatan' ? '':'Jadwal Kegiatan')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Persuratan') && (page === 'daftarPersuratan')
                  }">
                            <div class="w-7">
                                <i class="fa-solid fa-envelopes-bulk text-xl"></i>
                            </div>
                            Persuratan
                        </a>
                    </li>
                    <!-- Menu Item Persuratan -->
                    <!-- <li>
                        <a class="group relative flex items-center justify-start gap-2.5 rounded-sm px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47]" href="#" @click.prevent="selected = (selected === 'Persuratan' ? '':'Persuratan')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Persuratan') || (page === 'daftarPersuratan') || (page === 'templateSurat') || (page === 'AjuanPersuratan')}">
                            <div class="w-7">
                                <i class="fa-solid fa-envelopes-bulk text-xl"></i>
                            </div>
                            Persuratan

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Persuratan') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                            </svg>
                        </a>

                        
                        <div class="translate transform overflow-hidden" :class="(selected === 'Persuratan') ? 'block' :'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('persuratan-admin') }}" :class="page === 'daftarPersuratan' && '!text-[#57BA47]'">Daftar Persuratan</a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('ajuan-persuratan-admin') }}" :class="page === 'ajuanPersuratan' && '!text-[#57BA47]'">Ajuan Persuratan</a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('template-surat-admin') }}" :class="page === 'templateSurat' && '!text-[#57BA47]'">Template Surat</a>
                                </li>
                            </ul>
                        </div>
                        
                    </li> -->
                    <!-- Menu Item Persuratan -->
                    <!-- Menu Item Akun Admin -->
                    <li>
                        <a class="group relative flex items-center justify-start gap-2.5 rounded-sm px-4 py-3 font-bold duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47]" href="#" @click.prevent="selected = (selected === 'Akun' ? '':'Akun')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Akun') || (page === 'daftarAkun') || (page === 'kelolaLevel')}">
                            <div class=" w-7">
                                <i class="fa-solid fa-address-book text-xl"></i>
                            </div>
                            Akun Penduduk

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Akun') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden" :class="(selected === 'Akun') ? 'block' :'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('akun-admin') }}" :class="page === 'daftarAkun' && '!text-[#57BA47]'">Daftar Akun</a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-[#57BA47]" href="{{ route('kelola-level') }}" :class="page === 'kelolaLevel' && '!text-[#57BA47]'">Kelola Akun</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    <!-- Menu Item Akun Admin -->
                    <!-- Menu Item Log Out -->
                    <!-- <li>
                        <a class="group relative flex justify-start items-center gap-2.5 rounded-sm px-4 py-3 font-bold  duration-300 ease-in-out hover:bg-[#E4F7DF] hover:text-[#57BA47] hover:border-r-4 hover:border-[#57BA47] dark:hover:bg-meta-4 rounded-l-2xl" href="{{ route('umkm-admin') }}" @click="selected = (selected === 'Log Out' ? '':'Log Out')" :class="{
                    'bg-[#E4F7DF] text-[#57BA47] border-r-4 border-[#57BA47]': (selected === 'Log Out') && (page === 'logout')
                  }">
                            <div class="w-7">
                                <i class="fa-solid fa-right-from-bracket text-xl"></i>
                            </div>

                            Log Out
                        </a>
                    </li> -->
                    <!-- Menu Item Log Out -->
                </ul>
            </div>
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>

<!-- ===== Sidebar End ===== -->