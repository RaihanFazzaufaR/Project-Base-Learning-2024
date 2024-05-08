<x-header menu="{{ $menu }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</x-header>

<img src="{{ asset('assets/images/cover-home.png') }}" alt="" class="absolute top-10 right-0 h-[127vh]" data-aos="fade-left" data-aos-duration="1000">

<div class="relative h-[65vh] sm:h-[85vh] md:h-[79vh] lg:h-[120vh] w-[70%] text-[#1C4F0F] pt-[30vh] pl-[8vh]" data-aos="fade-right" data-aos-duration="1000">
    <div class="font-semibold text-2xl mb-3">
        Selamat Datang di
    </div>
    <div class="font-extrabold text-6xl mb-4">
        PORTAL RW 03
    </div>
    <div class="relative overflow-hidden w-fit">
        <div class="font-extrabold text-6xl mb-10 w-fit text-animation">
            Desa Bumiayu
        </div>
        <div class="absolute top-0 left-0 h-[70%] w-full border-l-[12px] border-[#1C4F0F] bg-white animate-leftToRight"></div>
    </div>

    <p class="font-medium text-xl w-[47vw]">"Temukan informasi terkini, kegiatan komunitas, dan layanan kami untuk memajukan lingkungan kami. Bergabunglah dalam membangun kehidupan yang lebih baik untuk warga RW 3!"</p>
    <div class="mt-[100px]">
        <!-- <button class="transition ease-in-out duration-500 hover:scale-105 hover:shadow-2xl bg-yellow-500 text-[#1C4F0F] py-5 px-8 rounded-[30px] shadow-xl font-bold text-xl hover:bg-[#E2A229] group"> -->
        <!-- Masuk Sebagai Warga -->
        <!-- <span class="hidden group-hover:inline-flex transition-opacity duration-500 ease-in-out">Sebagai Warga</span> -->
        <!-- </button> -->
    </div>
</div>

<!-- shape -->
<svg class="absolute top-[100vh] -left-[10vw] animate-flying" xmlns="http://www.w3.org/2000/svg" id="SvgjsSvg16702" x="0" y="0" version="1.1" viewBox="0 0 487.272 487.272" width="350" height="350" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" >
    <path d="M468.018 196.707 289.885 18.573c-26.341-23.625-66.246-23.625-92.587 0L19.165 196.493c-25.554 25.573-25.554 67.014 0 92.587L197.298 467a63.997 63.997 0 0 0 46.293 19.413 64 64 0 0 0 46.293-18.987l178.133-178.133.267-.267c25.421-25.567 25.302-66.9-.266-92.319z" fill="url(&quot;#SvgjsLinearGradient16703&quot;)"></path>
    <defs>
        <linearGradient gradientTransform="rotate(0 0.5 0.5)" id="SvgjsLinearGradient16703">
            <stop stop-opacity=" 1" stop-color="rgba(112, 183, 152)" offset="0"></stop>
            <stop stop-opacity=" 1" stop-color="rgba(31, 64, 55)" offset="1"></stop>
        </linearGradient>
    </defs>
</svg>
<!-- <svg class="absolute top-[100vh] -left-[10vw] animate-flying" xmlns="http://www.w3.org/2000/svg" id="SvgjsSvg8731" x="0" y="0" version="1.1" viewBox="0 0 487.272 487.272" width="350" height="350" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><path d="M468.018 196.707 289.885 18.573c-26.341-23.625-66.246-23.625-92.587 0L19.165 196.493c-25.554 25.573-25.554 67.014 0 92.587L197.298 467a63.997 63.997 0 0 0 46.293 19.413 64 64 0 0 0 46.293-18.987l178.133-178.133.267-.267c25.421-25.567 25.302-66.9-.266-92.319z" fill="url(&quot;#SvgjsLinearGradient8732&quot;)"></path><defs><linearGradient gradientTransform="rotate(0 0.5 0.5)" id="SvgjsLinearGradient8732"><stop stop-opacity=" 0" stop-color="rgba(255, 255, 255)" offset="0"></stop><stop stop-opacity=" 1" stop-color="rgba(31, 64, 55)" offset="0"></stop><stop stop-opacity=" 1" stop-color="rgba(77, 139, 122)" offset="1"></stop></linearGradient></defs></svg> -->

<!-- Fitur Page -->
<div class="w-[80vw] mx-auto mt-[10vh]  flex flex-col gap-14">
    <div class="text-center font-bold text-5xl text-[#236612] uppercase" data-aos="zoom-in" data-aos-duration="1500">Layanan Warga</div>
    <div class="grid lg:grid-cols-3 grid-cols-2 gap-10">
        <div class="relative lg:h-[38vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden" data-aos="fade-right" data-aos-duration="1000">
            <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#F9C0E2] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/umkm.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold text-3xl">UMKM</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg">Temukan informasi mengenai daftar Usaha Mikro Kecil dan Menengah (UMKM) di RW 3</div>
            </div>
            <div class="absolute bg-[#F9C0E2]/80 h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[22vh]">
                <a href="{{ route('umkm') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="relative lg:h-[38vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden" data-aos="fade-right" data-aos-duration="1000">
            <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#C2D0EC] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/penduduk.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold text-3xl">Kependudukan</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg">Informasi mengenai daftar warga yang tinggal di RW 3</div>
            </div>
            <div class="absolute bg-[#C2D0EC]/80 h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[22vh]">
                <a href="{{ route('penduduk') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="relative lg:h-[38vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden" data-aos="fade-right" data-aos-duration="1000">
            <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#D2BDFF] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/bansos.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold text-3xl">Bansos</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg">Informasi mengenai daftar masyarakat yang mendapatkan Bantuan Sosial (Bansos) dari Pemerintah di RW 3</div>
            </div>
            <div class="absolute bg-[#D2BDFF]/80 h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[22vh]">
                <a href="{{ route('bansos') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="relative lg:h-[38vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
            <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#C3FBB8] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/aduan.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold text-3xl">Pengaduan</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg">Layanan informasi terkait sarana penyampaian aspirasi dan pengaduan warga RW 3</div>
            </div>
            <div class="absolute bg-[#C3FBB8]/80 h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[22vh]">
                <a href="{{ route('aduan') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="relative lg:h-[38vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
            <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#FCDFAD] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/jadwal.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold text-3xl">Jadwal Kegiatan</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg">Informasi seputar kegiatan yang akan dilakukan warga RW 3</div>
            </div>
            <div class="absolute bg-[#FCDFAD]/80 h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[22vh]">
                <a href="{{ route('jadwal') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="relative lg:h-[38vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden" data-aos="fade-left" data-aos-duration="1000">
            <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                <div class="bg-[#F9C9BB] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/surat.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold text-3xl">Surat Pengantar</div>
                <div class="w-[85%] h-[35%] text-center font-normal text-lg">Layanan informasi terkait surat pengantar RT/RW</div>
            </div>
            <div class="absolute bg-[#F9C9BB]/80 h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[22vh]">
                <a href="{{ route('surat') }}" class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</div>


<!-- UMKM -->

<div class="h-[90vh] w-[84vw] mt-[13vh] py-[5vh] mx-auto">
    <div class="h-full w-full flex flex-col justify-between">
        <div class="font-bold  text-[#1C4F0F] text-5xl text-center w-full py-4 uppercase" data-aos="zoom-in" data-aos-duration="1500">UMKM Sekitar</div>
        <div class="swiper mySwiper w-full flex justify-center !px-12" data-aos="fade-left" data-aos-duration="1500">
            <div class="swiper-wrapper w-full !py-16">
                <div class="swiper-slide relative w-[17vw] !h-[40vh] bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl hover:!scale-105 transition ease-in-out duration-500 group">
                    <div class="h-[70%] w-full overflow-hidden">
                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-full w-full group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                    </div>
                    <div class="h-[30%] w-full flex flex-col justify-center items-center gap-1 text-[#1C4F0F]">
                        <p class="font-bold text-lg">Toko Kelontong 1</p>
                        <hr class="text-black">
                        <div class="text-sm flex justify-center items-center gap-3">
                            <i class="fa-regular fa-clock"></i>
                            <p class="">09.00 - 21.00</p>
                        </div>
                    </div>
                    <div class="absolute h-[70%] w-full top-0 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                        <a class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="swiper-slide relative w-[17vw] !h-[40vh] bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl hover:!scale-105 transition ease-in-out duration-500 group">
                    <div class="h-[70%] w-full overflow-hidden">
                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-full w-full group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                    </div>
                    <div class="h-[30%] w-full flex flex-col justify-center items-center gap-1 text-[#1C4F0F]">
                        <p class="font-bold text-lg">Toko Kelontong 2</p>
                        <hr class="text-black">
                        <div class="text-sm flex justify-center items-center gap-3">
                            <i class="fa-regular fa-clock"></i>
                            <p class="">09.00 - 21.00</p>
                        </div>
                    </div>
                    <div class="absolute h-[70%] w-full top-0 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                        <a class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="swiper-slide relative w-[17vw] !h-[40vh] bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl hover:!scale-105 transition ease-in-out duration-500 group">
                    <div class="h-[70%] w-full overflow-hidden">
                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-full w-full group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                    </div>
                    <div class="h-[30%] w-full flex flex-col justify-center items-center gap-1 text-[#1C4F0F]">
                        <p class="font-bold text-lg">Toko Kelontong 3</p>
                        <hr class="text-black">
                        <div class="text-sm flex justify-center items-center gap-3">
                            <i class="fa-regular fa-clock"></i>
                            <p class="">09.00 - 21.00</p>
                        </div>
                    </div>
                    <div class="absolute h-[70%] w-full top-0 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                        <a class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="swiper-slide relative w-[17vw] !h-[40vh] bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl hover:!scale-105 transition ease-in-out duration-500 group">
                    <div class="h-[70%] w-full overflow-hidden">
                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-full w-full group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                    </div>
                    <div class="h-[30%] w-full flex flex-col justify-center items-center gap-1 text-[#1C4F0F]">
                        <p class="font-bold text-lg">Toko Kelontong 4</p>
                        <hr class="text-black">
                        <div class="text-sm flex justify-center items-center gap-3">
                            <i class="fa-regular fa-clock"></i>
                            <p class="">09.00 - 21.00</p>
                        </div>
                    </div>
                    <div class="absolute h-[70%] w-full top-0 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                        <a class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="swiper-slide relative w-[17vw] !h-[40vh] bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl hover:!scale-105 transition ease-in-out duration-500 group">
                    <div class="h-[70%] w-full overflow-hidden">
                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-full w-full group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                    </div>
                    <div class="h-[30%] w-full flex flex-col justify-center items-center gap-1 text-[#1C4F0F]">
                        <p class="font-bold text-lg">Toko Kelontong 5</p>
                        <hr class="text-black">
                        <div class="text-sm flex justify-center items-center gap-3">
                            <i class="fa-regular fa-clock"></i>
                            <p class="">09.00 - 21.00</p>
                        </div>
                    </div>
                    <div class="absolute h-[70%] w-full top-0 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                        <a href="{{ route('umkm') }}" class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next !right-7 after:!text-lg !font-extrabold !text-white !h-10 !w-10 bg-yellow-500 hover:bg-[#E2A229] rounded-full hover:scale-105 transition ease-in-out duration-300"></div>
            <div class="swiper-button-prev !left-7 after:!text-lg !font-extrabold !text-white !h-10 !w-10 bg-yellow-500 hover:bg-[#E2A229] rounded-full hover:scale-105 transition ease-in-out duration-300"></div>
            <div class="swiper-pagination !absolute !top-[53vh]"></div>
        </div>


        <a href="{{ route('umkm') }}" class="mx-auto bg-yellow-500 text-[#1C4F0F] py-4 px-8 rounded-[30px] shadow-xl font-bold text-lg hover:bg-[#E2A229] transition ease-in-out duration-500 hover:scale-105 hover:shadow-2xl" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="-50">Lihat Selengkapnya</a>
    </div>
</div>

<!-- Agenda Kegiatan -->
<div class="relative w-[80vw] mx-auto h-[90vh] flex flex-col mt-[13vh] gap-[45px]">
    <div class="font-bold text-[#1C4F0F] text-5xl text-center w-full py-4 uppercase" data-aos="zoom-in" data-aos-duration="1500">Agenda Warga</div>
    <div class="relative flex h-full w-full pb-[5vh]">
        <div class="basis-[65%] h-[70vh] bg-cover bg-center shadow-lg rounded-lg bg-no-repeat pl-6 py-10" style="background-image: url('{{ asset('assets/images/bg-home-agenda.png') }}')" data-aos="fade-right" data-aos-duration="1500">
            <div class="max-h-[60vh] w-[80%] flex flex-col overflow-auto gap-7">
                <div class="relative w-full flex justify-end min-h-30 bg-transparent pt-6">
                    <div class="absolute bg-[#FFD600] h-[75px] w-[115px] top-0 left-0 text-black flex justify-center items-end font-extrabold py-5 font-sans rounded-md">
                        <span class="text-xl">Mei</span>
                        <span class="text-4xl">10</span>
                    </div>
                    <div class="w-[95%] min-h-20 bg-[#4D7F41]/65 rounded-xl border-2 border-[#1B4810] pl-28 pr-5 py-3">
                        <div class="text-white font-bold text-xl">
                            <p>
                                <span>1. </span>
                                <span>Posyandu di RT 4</span>
                            </p>
                            <p>
                                <span>2. </span>
                                <span>Senam bersama di RT 5</span>
                            </p>
                            <p>
                                <span>3. </span>
                                <span>Medical Check Up gratis di RT 7</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative w-full flex justify-end min-h-30 bg-transparent pt-6">
                    <div class="absolute bg-[#FFD600] h-[75px] w-[115px] top-0 left-0 text-black flex justify-center items-end font-extrabold py-5 font-sans rounded-md">
                        <span class="text-xl">Mei</span>
                        <span class="text-4xl">15</span>
                    </div>
                    <div class="w-[95%] min-h-20 bg-[#4D7F41]/65 rounded-xl border-2 border-[#1B4810] pl-28 pr-5 py-3">
                        <div class="text-white font-bold text-xl">
                            <p>
                                <span>1. </span>
                                <span>Kerja bakti di RT 01</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute flex w-[12%] h-[8%] bg-[#74CC52] right-14 top-2 shadow-lg shadow-gray-400" data-aos="fade-left" data-aos-duration="1500">
            <div class="basis-[3%] bg-[#FFD600]"></div>
            <div class="basis-[97%] bg-[#74CC52] flex items-center justify-center">
                <p class="font-bold text-xl text-white">Agenda</p>
            </div>
        </div>

        <!-- calendar -->
        <div class="absolute bg-white w-[45%] h-[70%] right-0 top-[75px] rounded-xl shadow-2xl overflow-hidden" data-aos="fade-left" data-aos-duration="1500">
            <div class="basis-1/2 px-8 py-4 dark:bg-gray-800 bg-white flex flex-col justify-between gap-8 h-[380px]">
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

<div class="relatif w-[80vw] mx-auto h-[90vh] flex flex-col mt-[20vh] gap-[45px]">
    <div class="font-bold text-[#1C4F0F] text-5xl text-center w-full py-4 uppercase" data-aos="zoom-in" data-aos-duration="1500">Aduan Warga</div>
    <div class="relative h-fit w-full bg-white shadow-md rounded-xl overflow-hidden border border-slate-200" data-aos="fade-right" data-aos-duration="1500">
        <table class="w-full text-left rtl:text-right text-black dark:text-gray-400">
            <thead class="text-xl text-center border-b-4 border-[#69CA57]/[0.32]">
                <tr>
                    <th scope="col" class="w-[50%] py-5">
                        Aduan
                    </th>
                    <th scope="col" class="w-[50%] py-5">
                        Respon
                    </th>
                </tr>
            </thead>
            <tbody class="text-center text-lg font-normal ">
                <tr class="min-h-28 border-b-4 border-[#69CA57]/[0.32]">
                    <td scope="row" class="w-[50%] px-14 py-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet risus id eros tincidunt, dapibus aliquam velit elementum.
                    </td>
                    <td scope="row" class="w-[50%] px-14 py-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet risus id eros tincidunt, dapibus aliquam velit elementum.
                    </td>
                </tr>
                <tr class="min-h-28 border-b-4 border-[#69CA57]/[0.32]">
                    <td scope="row" class="w-[50%] px-14 py-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet risus id eros tincidunt, dapibus aliquam velit elementum.
                    </td>
                    <td scope="row" class="w-[50%] px-14 py-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet risus id eros tincidunt, dapibus aliquam velit elementum.
                    </td>
                </tr>
                <tr class="min-h-28 border-b-4 border-[#69CA57]/[0.32]">
                    <td scope="row" class="w-[50%] px-14 py-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet risus id eros tincidunt, dapibus aliquam velit elementum.
                    </td>
                    <td scope="row" class="w-[50%] px-14 py-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet risus id eros tincidunt, dapibus aliquam velit elementum.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<x-footer>
    <!-- text animation -->
    <script>
        const text = document.querySelector(".text-animation");

        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "Desa Bumiayu";
            }, 0);
            setTimeout(() => {
                text.textContent = "Kec. Kedungkandang";
            }, 7000);
            setTimeout(() => {
                text.textContent = "Kota Malang";
            }, 14000);
        }

        textLoad();
        setInterval(textLoad, 21000);
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 61,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        //calendar
        const calendarHead = document.querySelector("#calendarHead");
        const days = document.querySelector("#days");
        const buttonCalendar = document.querySelectorAll(".button-calendar");

        let date = new Date();
        let currYear = date.getFullYear();
        let currMonth = date.getMonth();

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
            let counter = 0;
            let firstDayofMonth = new Date(currYear, currMonth, 1)
                .getDay(); // getting last date of month
            let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
            let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
            let lastDateofLastMonth = new Date(currYear, currMonth, 0)
                .getDate(); // getting last date of month
            let daysDate = "";

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

                if (i === date.getDate() && currMonth === date.getMonth() && currYear === date.getFullYear()) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#57BA47]">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (i == 10 || i == 15) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
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
                                                <button role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
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
            renderCalendar();
        }

        const prev = () => {
            currMonth--;
            if (currMonth < 0) {
                currMonth = 11;
                currYear--;
            }
            renderCalendar();
        }

        renderCalendar();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</x-footer>