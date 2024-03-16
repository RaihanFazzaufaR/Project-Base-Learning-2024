<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="bg-[#F4F4F4] min-h-[300vh] w-[100%]">
        <x-navbar />

        <div class="md:h-[93vh] lg:h-[130vh] w-[27%] bg-[#6C6FB4]"></div>

        <!-- First Page -->
        <div class="absolute z-50 bg-white md:h-[50vh] lg:h-[70vh] left-[5vw] right-[5vw] md:top-[13vh] lg:top-[20vh] rounded-xl flex overflow-hidden shadow-lg">
            <div class="w-[55%] bg-white p-16 lg:p-24 relative z-[60]">
                <div class="text-3xl mb-5 w-[50vw]">Selamat Datang Di</div>
                <div class="text-5xl font-bold md:w-[60vw] lg:w-[50vw] leading-tight">Portal Resmi RW 3 <br> Desa Bumiayu <br> Kecamatan Kedungkandang <br> Kota Malang</div>
            </div>
            <div class="w-[45%] relative">
                <img src="{{ asset('assets/images/cover.jpg') }}" alt="" class="w-full h-full absolute z-[1]">
                <div class="w-full h-full absolute bg-gradient-to-r from-white to-white/40 z-[50]"></div>
            </div>
        </div>

        <!-- UMKM Page -->
        <div class="absolute z-50 md:h-[25vh] lg:h-[33vh] bg-transparent left-[5vw] right-[5vw] md:top-[70vh] lg:top-[100vh] flex gap-4">
            <div class="w-[24%] flex flex-col justify-center items-center text-white gap-5 md:h-[20vh] lg:h-[30vh]">
                <div class="font-bold 2xl:text-6xl md:text-[38px] text-center w-[80%]">UMKM Di RW 3</div>
                <button class="bg-[#FFDA16] hover:bg-[#d6bd41] font-bold lg:py-3 lg:px-4 md:py-2 md:px-3 rounded-full lg:text-md 2xl:text-lg">
                    Lihat UMKM Lainnya
                </button>
            </div>
            <div class="w-[74%] flex flex-row gap-6 ml-[24px] flex-nowrap overflow-hidden carrousel-umkm scroll-smooth ">
                <div class="w-[42%] md:h-[80%] lg:h-[92%]  flex-none bg-white rounded-3xl shadow-lg flex umkm md:p-3 lg:p-2">
                    <div class="w-[40%] flex justify-center items-center">
                        <img src="{{ asset('assets/images/gacoan.jpg') }}" alt="" class="lg:w-[70%] md:w-[80%] lg:h-[75%] md:h-[60%] rounded-xl">
                    </div>
                    <div class="w-[60%] flex flex-col justify-center gap-2 lg:px-4 md:px-3">
                        <p class="font-bold md:text-lg lg:text-2xl 2xl:text-3xl">Mie Gacoan 1</p>
                        <div class="flex items-center md:gap-2 lg:gap-3 lg:px-2 md:px-1 lg:mb-3 md:mb-1">
                            <i class="fa-regular fa-clock lg:text-lg md:text-md"></i>
                            <p class="lg:text-lg md:text-md">09.00 - 21.00</p>
                        </div>
                        <button class="bg-[#B1B9E4] hover:bg-[#8A93C1] md:text-md lg:text-lg lg:p-2 md:p-1 w-[80%] text-white rounded-full">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
                <div class="w-[42%] md:h-[80%] lg:h-[92%] flex-none bg-white rounded-3xl shadow-lg flex umkm">
                    <div class="w-[40%] flex justify-center items-center">
                        <img src="{{ asset('assets/images/gacoan.jpg') }}" alt="" class="w-[70%] rounded-xl">
                    </div>
                    <div class="w-[60%] flex flex-col justify-center gap-2 px-4">
                        <p class="font-bold lg:text-2xl 2xl:text-3xl">Mie Gacoan 2</p>
                        <div class="flex items-center gap-3 px-2 mb-3">
                            <i class="fa-regular fa-clock text-lg"></i>
                            <p class="text-lg">09.00 - 21.00</p>
                        </div>
                        <button class="bg-[#B1B9E4] hover:bg-[#8A93C1] text-lg p-2 w-[80%] text-white rounded-full">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
                <div class="w-[42%] md:h-[80%] lg:h-[92%]  flex-none bg-white rounded-3xl shadow-lg flex umkm">
                    <div class="w-[40%] flex justify-center items-center">
                        <img src="{{ asset('assets/images/gacoan.jpg') }}" alt="" class="w-[70%] rounded-xl">
                    </div>
                    <div class="w-[60%] flex flex-col justify-center gap-2 px-4">
                        <p class="font-bold lg:text-2xl 2xl:text-3xl">Mie Gacoan 3</p>
                        <div class="flex items-center gap-3 px-2 mb-3">
                            <i class="fa-regular fa-clock text-lg"></i>
                            <p class="text-lg">09.00 - 21.00</p>
                        </div>
                        <button class="bg-[#B1B9E4] hover:bg-[#8A93C1] text-lg p-2 w-[80%] text-white rounded-full">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
                <div class="w-[42%] md:h-[80%] lg:h-[92%]  flex-none bg-white rounded-3xl shadow-lg flex umkm">
                    <div class="w-[40%] flex justify-center items-center">
                        <img src="{{ asset('assets/images/gacoan.jpg') }}" alt="" class="w-[70%] rounded-xl">
                    </div>
                    <div class="w-[60%] flex flex-col justify-center gap-2 px-4">
                        <p class="font-bold lg:text-2xl 2xl:text-3xl">Mie Gacoan 4</p>
                        <div class="flex items-center gap-3 px-2 mb-3">
                            <i class="fa-regular fa-clock text-lg"></i>
                            <p class="text-lg">09.00 - 21.00</p>
                        </div>
                        <button class="bg-[#B1B9E4] hover:bg-[#8A93C1] text-lg p-2 w-[80%] text-white rounded-full">
                            Lihat Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Next Button UMKM -->
            <button class="absolute z-[90] -right-5 top-[38%] border-[3px] border-[#458FFF] rounded-full group hover:border-[#4b7bc2]" id="nextButtonUmkm">
                <i class="text-4xl fa-solid fa-circle-chevron-right text-[#458FFF] border-[3px] border-transparent rounded-full group-hover:text-[#4b7bc2]"></i>
            </button>
        </div>

        <!-- Fitur Page -->
        <div class="w-[90vw] mx-auto mt-[20vh] grid grid-cols-3 gap-12 px-14">
            <div class="bg-white rounded-xl shadow-lg flex flex-col h-[44vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[87] h-[87] bg-[#EB423F] bg-opacity-[0.33] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/umkm.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold text-4xl">UMKM</div>
                <div class="w-[79%] h-[35%] text-center font-normal text-lg">Temukan informasi mengenai daftar Usaha Mikro Kecil dan Menengah (UMKM) di RW 3</div>
                <a href="" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col h-[44vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#9EB4E1] bg-opacity-[0.63] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/penduduk.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Kependudukan</div>
                <div class="w-[79%] h-[40%] text-center font-normal text-lg">Informasi mengenai daftar warga yang tinggal di RW 3</div>
                <a href="/" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col h-[44vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#A77DFF] bg-opacity-[0.5] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/bansos.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Bansos</div>
                <div class="w-[79%] h-[40%] text-center font-normal text-lg">Informasi mengenai daftar masyarakat yang mendapatkan Bantuan Sosial (Bansos) dari Pemerintah di RW 3</div>
                <a href="" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col h-[44vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#7AF662] bg-opacity-[0.45] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/aduan.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Pengaduan</div>
                <div class="w-[79%] h-[40%] text-center font-normal text-lg">Layanan informasi terkait sarana penyampaian aspirasi dan pengaduan warga RW 3</div>
                <a href="" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col h-[44vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#FCDFAD] bg-opacity-[0.33] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/jadwal.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Jadwal</div>
                <div class="w-[79%] h-[40%] text-center font-normal text-lg">Informasi seputar kegiatan yang akan dilakukan warga RW 3</div>
                <a href="" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col h-[44vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#F59C81] bg-opacity-[0.54] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/surat.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Surat Pengantar</div>
                <div class="w-[79%] h-[40%] text-center font-normal text-lg">Layanan informasi terkait surat pengantar RT/RW</div>
                <a href="" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
    </div>

    <script>
        const nextButtonUmkm = document.getElementById('nextButtonUmkm');
        const carrouselUmkm = document.querySelector('.carrousel-umkm');
        const firstCardWidth = carrouselUmkm.querySelector('.umkm').offsetWidth;
        let index = 0;

        nextButtonUmkm.addEventListener('click', () => {
            nextButtonUmkm.disabled = true;
            carrouselUmkm.scrollLeft += (firstCardWidth + 24);

            setTimeout(() => {
                const umkm = carrouselUmkm.querySelectorAll('.umkm')[index].cloneNode(true);
                carrouselUmkm.appendChild(umkm);
                index++;
                nextButtonUmkm.disabled = false;
            }, 500);
        });
    </script>
</body>

</html>