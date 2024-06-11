<x-header menu="{{ $menu }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</x-header>


<div class="relative sm:h-[100vh] h-fit w-full flex flex-col lg:flex-row text-[#1C4F0F] dark:text-white 2xl:px-25 sm:px-20 px-5 items-center justify-center lg:justify-between py-10 sm:py-0">
    <div class="2xl:w-[58%] lg:w-[60%] w-full flex flex-col justify-center items-start sm:items-center md:items-start h-fit 2xl:pb-12 lg:pb-13 pt-5 sm:pt-0" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="500">
        <div class="font-bold sm:text-4xl text-3xl sm:mb-3">
            Selamat Datang di
        </div>
        <div class="font-extrabold sm:text-6xl text-[38px] sm:mb-4">
            Portal RW 03
        </div>
        <div class="relative overflow-hidden w-fit">
            <div class="font-extrabold sm:text-6xl text-[38px] sm:mb-10 mb-5 w-fit">
                <span class="multiple-text"></span>
            </div>
        </div>

        <p class="font-medium text-xl lg:w-[47vw] sm:w-full w-[95%] text-justify">"Temukan informasi terkini, kegiatan komunitas, dan layanan kami untuk memajukan lingkungan kami. Bergabunglah dalam membangun kehidupan yang lebih baik untuk warga RW 3!"</p>
    </div>
    <div class="lg:absolute relative lg:pb-[12vh] 2xl:right-15 lg:right-10" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="500">
        <img src="{{ asset('assets/images/cover-home.png') }}" alt="" class="lg:h-[80vh] h-[50vh] dark:hidden block">
        <img src="{{ asset('assets/images/cover-home-dark.png') }}" alt="" class="lg:h-[80vh] hidden dark:block">
    </div>
</div>

<!-- shape -->
<svg class="hidden sm:block absolute lg:top-[100vh] top-[90vh] -left-[10vw] animate-flying" xmlns="http://www.w3.org/2000/svg" id="SvgjsSvg16702" x="0" y="0" version="1.1" viewBox="0 0 487.272 487.272" width="350" height="350" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
    <path d="M468.018 196.707 289.885 18.573c-26.341-23.625-66.246-23.625-92.587 0L19.165 196.493c-25.554 25.573-25.554 67.014 0 92.587L197.298 467a63.997 63.997 0 0 0 46.293 19.413 64 64 0 0 0 46.293-18.987l178.133-178.133.267-.267c25.421-25.567 25.302-66.9-.266-92.319z" fill="url(&quot;#SvgjsLinearGradient16703&quot;)"></path>
    <defs>
        <linearGradient gradientTransform="rotate(0 0.5 0.5)" id="SvgjsLinearGradient16703">
            <stop stop-opacity=" 1" stop-color="rgba(112, 183, 152)" offset="0"></stop>
            <stop stop-opacity=" 1" stop-color="rgba(31, 64, 55)" offset="1"></stop>
        </linearGradient>
    </defs>
</svg>

<div class="relative sm:w-[80vw] w-[90%] mx-auto lg:mt-[20vh] sm:mt-[15vh] mt-[7vh]  flex flex-col gap-14" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000" data-aos-easing="ease-in-out">
    <div class="text-center font-bold sm:text-5xl text-4xl text-[#236612] dark:text-white uppercase">Layanan Warga</div>
    <div class="grid lg:grid-cols-3 grid-cols-2 sm:gap-10 gap-7">
        <div class="relative rounded-xl shadow-lg sm:h-[45vh] md:h-[280px] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden cursor-pointer" onclick="window.location='{{ route('umkm') }}'">
            <div class="bg-white dark:bg-[#30373F] dark:text-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#F9C0E2] dark:bg-[#ca9cb8]  flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/umkm.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold sm:text-3xl text-xl">UMKM</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg hidden sm:block">Temukan informasi mengenai daftar Usaha Mikro Kecil dan Menengah (UMKM) di RW 3</div>
            </div>
            <div class=" absolute bg-[#F9C0E2]/80 dark:dark:bg-[#ca9cb8]/80 h-[45%] w-full rounded-t-[60px] bottom-0 z-10 hidden sm:flex justify-center items-center transition ease-in-out duration-500 translate-y-[110%] group-hover:-translate-y-[0%]">
                <a href="{{ route('umkm') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>

        <div class="relative rounded-xl shadow-lg sm:h-[45vh] md:h-[280px] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden cursor-pointer" onclick="window.location='{{ route('penduduk') }}'">
            <div class="bg-white dark:bg-[#30373F] dark:text-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#C2D0EC] dark:bg-[#a6b2ca] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/penduduk.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold sm:text-3xl text-xl">Kependudukan</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg hidden sm:block">Informasi mengenai daftar warga yang tinggal di RW 3</div>
            </div>
            <div class="absolute bg-[#C2D0EC]/80 dark:dark:bg-[#a6b2ca]/80 h-[45%] w-full rounded-t-[60px] bottom-0 z-10 hidden sm:flex justify-center items-center transition ease-in-out duration-500 translate-y-[110%] group-hover:-translate-y-[0%]">
                <a href="{{ route('penduduk') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="relative rounded-xl shadow-lg sm:h-[45vh] md:h-[280px] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden cursor-pointer" onclick="window.location='{{ route('bansos') }}'">
            <div class="bg-white dark:bg-[#30373F] dark:text-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#D2BDFF] dark:bg-[#af9ed5] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/bansos.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold sm:text-3xl text-xl">Bansos</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg hidden sm:block">Informasi mengenai daftar masyarakat yang mendapatkan Bantuan Sosial (Bansos) dari Pemerintah di RW 3</div>
            </div>
            <div class="absolute bg-[#D2BDFF]/80 dark:bg-[#af9ed5]/80 h-[45%] w-full rounded-t-[60px] bottom-0 z-10 hidden sm:flex justify-center items-center transition ease-in-out duration-500 translate-y-[110%] group-hover:-translate-y-[0%]">
                <a href="{{ route('bansos') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="relative rounded-xl shadow-lg sm:h-[45vh] md:h-[280px] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden cursor-pointer" onclick="window.location='{{ route('aduan') }}'">
            <div class="bg-white dark:bg-[#30373F] dark:text-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#C3FBB8] dark:bg-[#a7d69e] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/aduan.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold sm:text-3xl text-xl">Pengaduan</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg hidden sm:block">Layanan informasi terkait sarana penyampaian aspirasi dan pengaduan warga RW 3</div>
            </div>
            <div class="absolute bg-[#C3FBB8]/80 dark:bg-[#a7d69e]/80 h-[45%] w-full rounded-t-[60px] bottom-0 z-10 hidden sm:flex justify-center items-center transition ease-in-out duration-500 translate-y-[110%] group-hover:-translate-y-[0%]">
                <a href="{{ route('aduan') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="relative rounded-xl shadow-lg sm:h-[45vh] md:h-[280px] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden cursor-pointer" onclick="window.location='{{ route('jadwal') }}'">
            <div class="bg-white dark:bg-[#30373F] dark:text-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#FCDFAD] dark:bg-[#cfb78e] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/jadwal.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold sm:text-3xl text-xl">Jadwal Kegiatan</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg hidden sm:block">Informasi seputar kegiatan yang akan dilakukan warga RW 3</div>
            </div>
            <div class="absolute bg-[#FCDFAD]/80 dark:bg-[#cfb78e]/80 h-[45%] w-full rounded-t-[60px] bottom-0 z-10 hidden sm:flex justify-center items-center transition ease-in-out duration-500 translate-y-[110%] group-hover:-translate-y-[0%]">
                <a href="{{ route('jadwal') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="relative rounded-xl shadow-lg sm:h-[45vh] md:h-[280px] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden cursor-pointer" onclick="window.location='{{ route('surat') }}'">
            <div class="bg-white dark:bg-[#30373F] dark:text-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#F9C9BB] dark:bg-[#c5a095] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/surat.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold sm:text-3xl text-xl">Surat Pengantar</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg hidden sm:block">Layanan informasi terkait surat pengantar RT/RW</div>
            </div>
            <div class="absolute bg-[#F9C9BB]/80 dark:bg-[#c5a095]/80 h-[45%] w-full rounded-t-[60px] bottom-0 z-10 hidden sm:flex justify-center items-center transition ease-in-out duration-500 translate-y-[110%] group-hover:-translate-y-[0%]">
                <a href="{{ route('surat') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</div>


<!-- UMKM -->

<div class="lg:h-[90vh] h-fit w-[84vw] mt-[13vh] lg:py-[5vh] mx-auto relative" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
    <div class="h-full w-full flex flex-col justify-between">
        <div class="font-bold  text-[#1C4F0F] dark:text-white sm:text-5xl text-4xl text-center w-full py-4 uppercase">UMKM Sekitar</div>
        <div class="swiper mySwiper !xl:w-full !w-full !px-8 lg:!px-10">
            <div class="swiper-wrapper !w-full !sm:py-20 !py-12">
                @foreach ($dataUmkm as $dt)
                <div class="swiper-slide relative !h-[300px] bg-white dark:bg-[#30373F] rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl transition ease-in-out duration-500 group cursor-pointer" onclick="window.location='{{ route('umkm.detail', ['umkm_id' => $dt->umkm_id]) }}'">
                    <div class="h-[70%] w-full overflow-hidden">
                        <img src="{{ asset('assets/images/'.$dt->foto ) }}" alt="" class="h-full w-full object-cover group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                    </div>
                    <div class="h-[30%] w-full flex flex-col justify-center items-center gap-1 text-[#1C4F0F] dark:text-white">
                        <p class="font-bold text-lg">{{ $dt->nama }}</p>
                        <hr class="text-black">
                        <div class="text-sm flex justify-center items-center gap-3">
                            <i class="fa-regular fa-clock"></i>
                            <p class="">{{ $dt->buka_waktu }} - {{ $dt->tutup_waktu }}</p>
                        </div>
                    </div>
                    <div class="absolute h-[70%] w-full top-0 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                        <a href="{{ route('umkm.detail', ['umkm_id' => $dt->umkm_id]) }}" class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next !right-5 after:!text-lg !font-extrabold !text-white !h-10 !w-10 bg-yellow-500 hover:bg-[#E2A229] rounded-full hover:scale-105 transition ease-in-out duration-300"></div>
            <div class="swiper-button-prev !left-5 after:!text-lg !font-extrabold !text-white !h-10 !w-10 bg-yellow-500 hover:bg-[#E2A229] rounded-full hover:scale-105 transition ease-in-out duration-300"></div>
            <div class="swiper-pagination !absolute !top-100"></div>
        </div>


        <a href="{{ route('umkm') }}" class="mx-auto bg-yellow-500 text-[#1C4F0F] py-4 px-8 rounded-[30px] shadow-xl font-bold text-lg hover:bg-[#E2A229] transition ease-in-out duration-500 hover:scale-105 hover:shadow-2xl">Lihat Selengkapnya</a>
    </div>
</div>

<!-- Agenda Kegiatan -->
<div class="relative w-[80vw] mx-auto lg:h-[90vh] flex flex-col mt-[13vh] lg:gap-[45px] gap-8">
    <div class="font-bold text-[#1C4F0F] dark:text-white sm:text-5xl text-4xl text-center w-full py-4 uppercase" id="agenda" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine">Agenda Warga</div>
    <div class="flex lg:hidden w-full min-h-20 gap-x-6 gap-y-3 flex-wrap items-center justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine">
        <div class="flex flex-wrap gap-4 justify-center items-center">
            @foreach($dates as $index => $date)
            <a href="{{ route('home', ['date' => $date->format('Y-m-d')]) }}" class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl text-sm font-semibold dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all
            {{ ($date->format('Y-m-d') == $calendarDate) ? 'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500' : 'text-[#2d5523] dark:text-yellow-500' }}
           {{ ($index >= 5) ? 'hidden md:block' : '' }}">
                {{ $date->translatedFormat('j F') }}
            </a>
            @endforeach
        </div>

    </div>
    <div class="relative flex h-full w-full lg:flex-row items-center lg:justify-start">
        <div class="lg:basis-[65%] w-full lg:h-[80vh] sm:h-[70vh] h-[40vh] bg-cover bg-center shadow-lg rounded-lg bg-no-repeat pl-6 py-8 lg:py-10 pb-10" style="background-image: url('{{ asset('assets/images/bg-home-agenda.png') }}')" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
            @if (count($dataKegiatan) == 0)
            <div class="flex flex-col w-[80%] h-full justify-center items-center gap-4">
                <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
                <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[400px] h-[300px] object-cover">
                <p class="text-xl font-semibold text-white">Tidak ada kegiatan pada bulan ini</p>
            </div>
            @else
            <div class="lg:h-[440px] 2xl:h-[500px] h-full lg:w-[80%] w-[95%] flex flex-col overflow-y-auto gap-7 pr-5 scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                @php
                $previousDate = null;
                $activities = [];
                @endphp

                @foreach ($dataKegiatan as $index => $dt)
                @php
                $currentDate = substr($dt->mulai_tanggal, 0, 10); // Mengambil format tanggal (YYYY-MM-DD)
                @endphp

                @if ($previousDate !== $currentDate && $previousDate !== null)
                <div class="relative w-full flex justify-end h-fit bg-transparent pt-6">
                    <div class="absolute bg-[#FFD600] h-[75px] w-[115px] top-0 left-0 text-black flex justify-center items-end font-extrabold py-5 font-sans rounded-md">
                        <span class="text-xl">{{ substr($previousDate, 3, 6) }}</span>
                        <span class="text-4xl">{{ substr($previousDate, 0, 2) }}</span>
                    </div>
                    <div class="w-[95%] bg-[#4D7F41]/65 min-h-20 rounded-xl border-2 border-[#1B4810] pl-28 pr-5 py-3 text-white font-bold sm:text-xl text-base flex flex-col justify-center">
                        @foreach ($activities as $key => $activity)
                        <p><span>{{ $key + 1 }}. </span><span>{{ $activity }}</span></p>
                        @endforeach
                    </div>
                </div>

                @php
                $activities = [];
                @endphp
                @endif

                @php
                $activities[] = $dt->judul;
                $previousDate = $currentDate;
                @endphp

                @if ($index === count($dataKegiatan) - 1)
                <div class="relative w-full flex justify-end h-fit bg-transparent pt-6">
                    <div class="absolute bg-[#FFD600] h-[75px] w-[115px] top-0 left-0 text-black flex justify-center items-end font-extrabold py-5 font-sans rounded-md">
                        <span class="text-xl">{{ substr($currentDate, 3, 6) }}</span>
                        <span class="text-4xl">{{ substr($currentDate, 0, 2) }}</span>
                    </div>
                    <div class="w-[95%] bg-[#4D7F41]/65 min-h-20 rounded-xl border-2 border-[#1B4810] pl-28 pr-5 py-3 text-white font-bold sm:text-xl text-base flex flex-col justify-center">
                        @foreach ($activities as $key => $activity)
                        <p><span>{{ $key + 1 }}. </span><span>{{ $activity }}</span></p>
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            @endif
        </div>
        <div class="hidden absolute lg:flex w-[12%] h-[8%] bg-[#74CC52] right-14 top-2 shadow-lg shadow-gray-400 dark:shadow-gray-900" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">
            <div class="basis-[3%] bg-[#FFD600]"></div>
            <div class="basis-[97%] bg-[#74CC52] flex items-center justify-center">
                <p class="font-bold text-xl text-white">Agenda</p>
            </div>
        </div>

        <!-- calendar -->
        <div class="relative sm:absolute bg-white hidden lg:block lg:w-[45%] lg:h-[70%] h-fit lg:right-0 lg:top-[75px] top-0 rounded-xl shadow-2xl overflow-hidden" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-anchor-placement="center-bottom">
            <div class="px-8 py-4 dark:bg-[#30373F] bg-white flex flex-col justify-between gap-8 h-full">
                <div class="flex items-center justify-around">
                    <button id="prev" aria-label="calendar backward" onclick="prev()" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 button-calendar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="15 6 9 12 15 18" />
                        </svg>
                    </button>
                    <span tabindex="0" class="focus:outline-none  text-lg font-extrabold dark:text-gray-100 text-gray-800" id="calendarHead"></span>
                    <button id="next" aria-label="calendar forward" onclick="next()" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100 button-calendar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="9 6 15 12 9 18" />
                        </svg>
                    </button>
                    <a id="agendaDate" class="hidden"></a>
                </div>
                <div class="flex items-center justify-between h-full">
                    <table class="w-full lg:h-full">
                        <thead>
                            <tr>
                                <th class="pb-5">
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                            Min</p>
                                    </div>
                                </th>
                                <th class="pb-5">
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                            Sen</p>
                                    </div>
                                </th>
                                <th class="pb-5">
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                            Sel</p>
                                    </div>
                                </th>
                                <th class="pb-5">
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                            Rab</p>
                                    </div>
                                </th>
                                <th class="pb-5">
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                            Kam</p>
                                    </div>
                                </th>
                                <th class="pb-5">
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                            Jum</p>
                                    </div>
                                </th>
                                <th class="pb-5">
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                            Sab</p>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="days">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="relative sm:w-[80vw] w-[90%] mx-auto lg:h-[90vh] h-fit flex flex-col mt-20 lg:mt-[20vh] gap-[45px]">
    <div class="font-bold text-[#1C4F0F] dark:text-white sm:text-5xl text-4xl text-center w-full py-4 uppercase">Aduan Warga</div>
    <div class="h-fit w-full bg-white dark:bg-[#30373F] shadow-md rounded-xl border border-slate-200 dark:border-gray-600">
        <table class="w-full text-left text-black dark:text-gray-400">
            <thead class="text-xl text-center border-b-4 border-[#69CA57]/[0.32] dark:border-gray-300/80 dark:text-white text-[#2d5523]">
                <tr>
                    <th scope="col" class="w-[50%] py-5">
                        Aduan
                    </th>
                    <th scope="col" class="w-[50%] py-5">
                        Respon
                    </th>
                </tr>
            </thead>
            @php
            $stat = [
            'diproses' => [
            'classContent' =>
            'text-white bg-[#FFDE68] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all',
            'icon' => 'fa-minus',
            'value' => 'diproses',
            ],
            'selesai' => [
            'classContent' =>
            'text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all',
            'icon' => 'fa-check',
            'value' => 'selesai',
            ],
            'ditolak' => [
            'classContent' =>
            'text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all',
            'icon' => 'fa-xmark',
            'value' => 'ditolak',
            ],
            ];
            @endphp
            <tbody class="text-center text-lg font-normal ">
                @foreach ($aduans as $aduan)
                <tr class="min-h-28 border-b-4 border-[#69CA57]/[0.32] dark:border-gray-300/80 dark:text-white text-[#2d5523]">
                    <td scope="row" class="w-[50%] px-14 py-5">
                        {{ $aduan->judul }}
                    </td>

                    <td class="">
                        <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                            <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <div>Detail</div>
                                </button>
                                <!-- Detail modal -->
                                <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 bottom-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                    <div class="absolute z-999 bg-black/25 h-[100vh] w-[100vw]"></div>
                                    <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow  dark:bg-[#30373F]">
                                            <!-- Modal header -->
                                            <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t dark:border-white border-[#2d5523] ">
                                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                    {{ $aduan->judul }}
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                                    <i class="fa-solid fa-xmark text-xl"></i>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="w-full h-fit text-[#34662C] text-left rounded-b-lg bg-[#f2f2f2] dark:bg-[#2F363E]">
                                                <div class="flex p-4 w-full max-h-[450px] justify-end bg-[#dcdcdc] dark:bg-[#4f5966]">
                                                    <div class="flex justify-end my-auto gap-3 w-full h-full items-center">
                                                        @if($aduan->status == 'selesai')
                                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500"></div>
                                                        @endif
                                                        <div class="text-base text-[#2d5523] font-semibold dark:text-white">{{$aduan->status}}</div>
                                                    </div>
                                                </div>
                                                <div class="max-h-[450px]  overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin pt-3">
                                                    @if ($aduan->image != null)
                                                    <div class="flex w-full justify-center">
                                                        <img class="w-[60%] rounded-lg" src="{{ asset('assets/images/Aduan/' . $aduan->image) }}">
                                                    </div>
                                                    @endif
                                                    <div class="flex w-full p-4  {{ Auth::check() && Auth::user()->penduduk->id_penduduk == $aduan->pengadu_id ? 'justify-end' : '' }}">
                                                        <div class="p-4 w-fit rounded-lg max-w-[75%] {{  Auth::check() && Auth::user()->penduduk->id_penduduk == $aduan->pengadu_id ? 'bg-[#cdffc5] text-black dark:text-white dark:bg-[#005c4b]' : 'bg-white text-black dark:text-white dark:bg-gray-700' }}">
                                                            <p class="text-sm font-semibold">
                                                                Anonymous
                                                            </p>
                                                            <p class="font-normal pt-3">
                                                                {{ $aduan->konten_aduan }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    @foreach ($aduan->respon as $response)
                                                    <div class="flex w-full p-4 {{ Auth::check() && Auth::user()->penduduk->id_penduduk == $response->perespon_id ? 'justify-end' : '' }}">
                                                        <div class="p-4 w-fit rounded-lg max-w-[75%] {{ Auth::check() && Auth::user()->penduduk->id_penduduk == $response->perespon_id ? 'bg-[#cdffc5] text-black dark:text-white dark:bg-[#005c4b]' : 'bg-white text-black dark:text-white dark:bg-gray-700' }}">
                                                            <p class="text-sm font-semibold">
                                                                Admin
                                                            </p>
                                                            @if ($response->image != null)
                                                            <div class="pt-3">
                                                                <img class="w-fit rounded-lg" src="{{ asset('assets/images/Respon/' . $response->image) }}">
                                                            </div>
                                                            @endif
                                                            @if ($response->konten_respon != null)
                                                            <p class="font-normal pt-3">
                                                                {{ $response->konten_respon }}
                                                            </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="w-full bg bg-[#dcdcdc] dark:bg-[#4f5966] min-h-10 rounded-b-lg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<x-footer>
    <!-- text animation -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        const typed = new Typed('.multiple-text', {
            strings: ['Desa Bumiayu', 'Kec. Kedungkandang', 'Kota Malang'],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true,
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 40,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 480px
                480: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                // when window width is >= 640px
                840: {
                    slidesPerView: 3,
                    spaceBetween: 60
                },
                1300: {
                    slidesPerView: 4,
                    spaceBetween: 52
                }
            },
        });
    </script>
    <script>
        //calendar
        const calendarHead = document.querySelector("#calendarHead");
        const days = document.querySelector("#days");
        const buttonCalendar = document.querySelectorAll(".button-calendar");

        const urlParams = new URLSearchParams(window.location.search);
        const dateParam = urlParams.get('date');
        const monthParam = urlParams.get('month');
        const yearParam = urlParams.get('year');

        // console.log(parseInt(dateParam.split("-")[0]));

        let date = new Date();
        let currYear = date.getFullYear();
        let currMonth = date.getMonth();

        if (dateParam) {
            currYear = parseInt(dateParam.split("-")[0]);
            currMonth = parseInt(dateParam.split("-")[1]) - 1;
        } else if (monthParam && yearParam) {
            currYear = parseInt(yearParam);
            currMonth = parseInt(monthParam) - 1;
        }

        let = document.querySelector('#agendaDate');

        const month = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ];

        const renderCalendar = () => {
            let dateKegiatan = @json($dataDate);
            let counter = 0;
            let firstDayofMonth = new Date(currYear, currMonth, 1)
                .getDay(); // getting last date of month
            let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
            let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
            let lastDateofLastMonth = new Date(currYear, currMonth, 0)
                .getDate(); // getting last date of month
            let daysDate = "";
            let dateCalendar = '';

            for (let i = firstDayofMonth; i > 0; i--) {
                counter++;

                if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            for (let i = 1; i <= lastDateofMonth; i++) {
                counter++;

                dateCalendar = `${currYear}-${currMonth + 1}-${i}`;
                let url = `{{ route('home', ['date' => '']) }}` + dateCalendar;

                if (i === date.getDate() && currMonth === date.getMonth() && currYear === date.getFullYear()) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="${url}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#57BA47]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (i === parseInt(dateParam?.split("-")[2]) && currMonth === (parseInt(dateParam?.split("-")[1]) - 1) && currYear === (parseInt(dateParam?.split("-")[0]))) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="${url}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium dark:text-gray-100 rounded-full text-white bg-[#4D4DFF]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (dateKegiatan.some(dt =>
                        (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
                        (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i)))) && (counter % 7 == 1)
                    )) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="${url}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (dateKegiatan.some(dt =>
                        (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
                        (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i)))) && (counter % 7 == 0)
                    )) {
                    daysDate += `   <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="${url}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>`
                } else if (dateKegiatan.some(dt =>
                        (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
                        (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i))))
                    )) {
                    daysDate += `  <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="${url}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="${url}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="${url}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="${url}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            for (let i = lastDayofMonth; i < 6; i++) {
                counter++;

                if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="#" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="#" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="#" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            calendarHead.innerHTML = `${month[currMonth]} ${currYear}`;

            days.innerHTML = daysDate;
        }

        const next = () => {
            currMonth++;
            if (currMonth > 11) {
                currMonth = 0;
                currYear++;
            }
            agendaDate.href = `{{ route('home', ['month' => '']) }}${currMonth+1}&year=${currYear}`;
            agendaDate.click();

            renderCalendar();
        }

        const prev = () => {
            currMonth--;
            if (currMonth < 0) {
                currMonth = 11;
                currYear--;
            }
            agendaDate.href = `{{ route('home', ['month' => '']) }}${currMonth+1}&year=${currYear}`;
            agendaDate.click();
            renderCalendar();
        }

        renderCalendar();

        let agenda = document.querySelector('#agenda');

        // console.log();

        if (dateParam || monthParam && yearParam) {
            agenda.scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</x-footer>