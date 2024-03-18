<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="bg-[#F4F4F4] min-h-[300vh] w-[100%]">
        <x-navbar />

        <div class="h-[85vh] md:h-[79vh] lg:h-[130vh] lg:w-[27%] w-[30%] bg-[#6C6FB4]"></div>

        <div class="absolute z-50 left-[5vw] right-[5vw] top-[15vh] sm:top-[17vh] md:top-[13vh] lg:top-[20vh]">
            <!-- First Page -->
            <div class="z-50 rounded-xl flex shadow-lg overflow-hidden sm:mb-[7vh] lg:mb-[10vh] lg:h-[70vh]">
                <div class="w-[55%] bg-white p-8 md:p-16 lg:p-24 relative z-[60]">
                    <div class="text-3xl lg:text-4xl mb-5 w-[50vw]">Selamat Datang Di</div>
                    <div class="text-4xl md:text-5xl lg:text-[60px] font-bold sm:w-[70vw] md:w-[60vw] lg:w-[70vw] leading-tight">Portal Resmi RW 3 <br> Desa Bumiayu <br> Kecamatan Kedungkandang <br> Kota Malang</div>
                </div>
                <div class="w-[45%] relative">
                    <img src="{{ asset('assets/images/cover.jpg') }}" alt="" class="w-full h-full absolute z-[1]">
                    <div class="w-full h-full absolute bg-gradient-to-r from-white to-white/40 z-[50]"></div>
                </div>
            </div>

            <!-- UMKM Page -->
            <div class="relative z-50 h-[30vh] md:h-[25vh] lg:h-[33vh] bg-transparent flex gap-4">
                <div class="lg:w-[24%] w-[27%] flex flex-col  items-center text-white gap-5 md:h-[20vh] lg:h-[30vh]">
                    <div class="font-bold 2xl:text-6xl md:text-[38px] text-[34px] lg:text-[50px] text-center w-[80%]">UMKM Di RW 3</div>
                    <a href="/" class="bg-[#FFDA16] hover:bg-[#d6bd41] font-semibold md:font-bold lg:py-3 lg:px-4 md:py-2 md:px-3 py-1 px-2 rounded-full lg:text-md 2xl:text-lg text-center">
                        Lihat UMKM Lainnya
                    </a>
                </div>
                <div class="w-[74%] flex flex-row gap-6 ml-[24px] flex-nowrap overflow-hidden carrousel-umkm">
                    <div class="w-[70%] lg:w-[42%] h-[80%] lg:h-[85%] 2xl:h-[92%] flex-none bg-white rounded-3xl shadow-lg flex umkm">
                        <div class="w-[40%] flex justify-center items-center">
                            <img src="{{ asset('assets/images/gacoan.jpg') }}" alt="" class="w-[70%] rounded-xl">
                        </div>
                        <div class="w-[60%] flex flex-col justify-center items-center gap-3 lg:gap-2 md:pr-4 2xl:pr-0">
                            <p class="font-bold text-2xl 2xl:text-3xl">Mie Gacoan 1</p>
                            <div class="flex items-center gap-3 px-2 lg:mb-3 mb-1">
                                <i class="fa-regular fa-clock text-lg"></i>
                                <p class="text-lg">09.00 - 21.00</p>
                            </div>
                            <a href="/" class="bg-[#B1B9E4] hover:bg-[#8A93C1] text-lg p-2 2xl:w-[80%] w-[90%] text-white rounded-full text-center">
                                Lihat Selengkapnya
                            </a>
                        </div>
                    </div>
                    <div class="w-[70%] lg:w-[42%] h-[80%] lg:h-[85%] 2xl:h-[92%] flex-none bg-white rounded-3xl shadow-lg flex umkm">
                        <div class="w-[40%] flex justify-center items-center">
                            <img src="{{ asset('assets/images/gacoan.jpg') }}" alt="" class="w-[70%] rounded-xl">
                        </div>
                        <div class="w-[60%] flex flex-col justify-center items-center gap-3 lg:gap-2 md:pr-4 2xl:pr-0">
                            <p class="font-bold text-2xl 2xl:text-3xl">Mie Gacoan 2</p>
                            <div class="flex items-center gap-3 px-2 lg:mb-3 mb-1">
                                <i class="fa-regular fa-clock text-lg"></i>
                                <p class="text-lg">09.00 - 21.00</p>
                            </div>
                            <a href="/" class="bg-[#B1B9E4] hover:bg-[#8A93C1] text-lg p-2 2xl:w-[80%] w-[90%] text-white rounded-full text-center">
                                Lihat Selengkapnya
                            </a>
                        </div>
                    </div>
                    <div class="w-[70%] lg:w-[42%] h-[80%] lg:h-[85%] 2xl:h-[92%] flex-none bg-white rounded-3xl shadow-lg flex umkm">
                        <div class="w-[40%] flex justify-center items-center">
                            <img src="{{ asset('assets/images/gacoan.jpg') }}" alt="" class="w-[70%] rounded-xl">
                        </div>
                        <div class="w-[60%] flex flex-col justify-center items-center gap-3 lg:gap-2 md:pr-4 2xl:pr-0">
                            <p class="font-bold text-2xl 2xl:text-3xl">Mie Gacoan 3</p>
                            <div class="flex items-center gap-3 px-2 lg:mb-3 mb-1">
                                <i class="fa-regular fa-clock text-lg"></i>
                                <p class="text-lg">09.00 - 21.00</p>
                            </div>
                            <a href="/" class="bg-[#B1B9E4] hover:bg-[#8A93C1] text-lg p-2 2xl:w-[80%] w-[90%] text-white rounded-full text-center">
                                Lihat Selengkapnya
                            </a>
                        </div>
                    </div>
                    <div class="w-[70%] lg:w-[42%] h-[80%] lg:h-[85%] 2xl:h-[92%] flex-none bg-white rounded-3xl shadow-lg flex umkm">
                        <div class="w-[40%] flex justify-center items-center">
                            <img src="{{ asset('assets/images/gacoan.jpg') }}" alt="" class="w-[70%] rounded-xl">
                        </div>
                        <div class="w-[60%] flex flex-col justify-center items-center gap-3 lg:gap-2 md:pr-4 2xl:pr-0">
                            <p class="font-bold text-2xl 2xl:text-3xl">Mie Gacoan 4</p>
                            <div class="flex items-center gap-3 px-2 lg:mb-3 mb-1">
                                <i class="fa-regular fa-clock text-lg"></i>
                                <p class="text-lg">09.00 - 21.00</p>
                            </div>
                            <a href="/" class="bg-[#B1B9E4] hover:bg-[#8A93C1] text-lg p-2 2xl:w-[80%] w-[90%] text-white rounded-full text-center">
                                Lihat Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Next Button UMKM -->
                <button class="absolute z-[90] -right-5 lg:top-[38%] md:top-[32%] top-[30%] border-[3px] border-[#458FFF] rounded-full group hover:border-[#4b7bc2]" id="nextButtonUmkm">
                    <i class="text-4xl fa-solid fa-circle-chevron-right text-[#458FFF] border-[3px] border-transparent rounded-full group-hover:text-[#4b7bc2]"></i>
                </button>
            </div>
        </div>

        <!-- Fitur Page -->
        <div class="w-[90vw] mx-auto lg:mt-[20vh] mt-[10vh] grid lg:grid-cols-3 grid-cols-2 2xl:gap-12 gap-10 2xl:px-14 px-8 lg:px-10">
            <div class="bg-white rounded-xl shadow-lg flex flex-col 2xl:h-[44vh] lg:h-[40vh] sm:h-[45vh] md:h-[30vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[87] h-[87] bg-[#EB423F] bg-opacity-[0.33] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/umkm.png') }}" alt="" class="h-[70] w-[70]">
                </div>
                <div class="font-bold text-4xl">UMKM</div>
                <div class="lg:w-[79%] w-[85%] h-[35%] text-center font-normal text-lg">Temukan informasi mengenai daftar Usaha Mikro Kecil dan Menengah (UMKM) di RW 3</div>
                <a href="" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col 2xl:h-[44vh] lg:h-[40vh] sm:h-[45vh] md:h-[30vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#9EB4E1] bg-opacity-[0.63] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/penduduk.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Kependudukan</div>
                <div class="lg:w-[79%] w-[85%] h-[40%] text-center font-normal text-lg">Informasi mengenai daftar warga yang tinggal di RW 3</div>
                <a href="/" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col 2xl:h-[44vh] lg:h-[40vh] sm:h-[45vh] md:h-[30vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#A77DFF] bg-opacity-[0.5] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/bansos.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Bansos</div>
                <div class="lg:w-[79%] w-[85%] h-[40%] text-center font-normal text-lg">Informasi mengenai daftar masyarakat yang mendapatkan Bantuan Sosial (Bansos) dari Pemerintah di RW 3</div>
                <a href="" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col 2xl:h-[44vh] lg:h-[40vh] sm:h-[45vh] md:h-[30vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#7AF662] bg-opacity-[0.45] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/aduan.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Pengaduan</div>
                <div class="lg:w-[79%] w-[85%] h-[40%] text-center font-normal text-lg">Layanan informasi terkait sarana penyampaian aspirasi dan pengaduan warga RW 3</div>
                <a href="" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col 2xl:h-[44vh] lg:h-[40vh] sm:h-[45vh] md:h-[30vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#FCDFAD] bg-opacity-[0.33] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/jadwal.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Jadwal</div>
                <div class="lg:w-[79%] w-[85%] h-[40%] text-center font-normal text-lg">Informasi seputar kegiatan yang akan dilakukan warga RW 3</div>
                <a href="" class="flex justify-center items-center text-[#4457FF] gap-3">
                    <div class="text-lg">Selengkapnya</div>
                    <i class="pt-1 text-md fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
            <div class="bg-white rounded-xl shadow-lg flex flex-col 2xl:h-[44vh] lg:h-[40vh] sm:h-[45vh] md:h-[30vh] items-center gap-3 py-5 hover:-translate-y-3 hover:shadow-2xl transition-all duration-300">
                <div class="w-[85] h-[85] bg-[#F59C81] bg-opacity-[0.54] flex justify-center items-center rounded-lg p-1">
                    <img src="{{ asset('assets/images/surat.png') }}" alt="" class="h-[65] w-[65]">
                </div>
                <div class="font-bold text-4xl">Surat Pengantar</div>
                <div class="lg:w-[79%] w-[85%] h-[40%] text-center font-normal text-lg">Layanan informasi terkait surat pengantar RT/RW</div>
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
        let isDragStart = false,
            prevPageX, prevScrollLeft, positionDiff;

        const addCard = () => {
            const umkm = carrouselUmkm.querySelectorAll('.umkm')[index].cloneNode(true);
            carrouselUmkm.appendChild(umkm);
            index++;
            nextButtonUmkm.disabled = false;
        }

        nextButtonUmkm.addEventListener('click', () => {
            carrouselUmkm.classList.add('scroll-smooth')
            nextButtonUmkm.disabled = true;
            carrouselUmkm.scrollLeft += (firstCardWidth + 24);

            setTimeout(addCard, 500);
            carrouselUmkm.classList.remove('scroll-smooth')
        });


        const dragStart = (e) => {
            isDragStart = true;
            prevPageX = e.pageX;
            prevScrollLeft = carrouselUmkm.scrollLeft;
        }

        const dragging = (e) => {
            if (!isDragStart) return;
            e.preventDefault();
            positionDiff = e.pageX - prevPageX;
            carrouselUmkm.scrollLeft = prevScrollLeft - positionDiff;
            addCard();
        }

        const autoSlide = () => {
            positionDiff = Math.abs(positionDiff);
            let cardWidth = firstCardWidth + 24;
            let valDifference = cardWidth - positionDiff;

            if (carrouselUmkm.scrollLeft > prevScrollLeft) {
                return carrouselUmkm.scrollLeft += positionDiff > cardWidth / 3 ? valDifference : -positionDiff;
            }
            return carrouselUmkm.scrollLeft -= positionDiff > cardWidth / 3 ? valDifference : -positionDiff;
        }

        const dragEnd = () => {
            isDragStart = false;
            carrouselUmkm.classList.add('scroll-smooth')
            autoSlide();
            carrouselUmkm.classList.remove('scroll-smooth')
        }

        carrouselUmkm.addEventListener('mousedown', dragStart)
        carrouselUmkm.addEventListener('mousemove', dragging)
        carrouselUmkm.addEventListener('mouseup', dragEnd)
        carrouselUmkm.addEventListener('mouseleave', () => {
            isDragStart = false;
        })
    </script>
</body>

</html>