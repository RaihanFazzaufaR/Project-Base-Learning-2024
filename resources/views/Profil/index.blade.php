<x-header menu='{{ $menu }}'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</x-header>

<div class="w-[100%] relative flex justify-center items-center flex-col">
    <div class="relative z-10 flex justify-center items-center">
        <img src="{{ asset('assets/images/profil-cover.webp') }}" alt="" class="w-full h-[80vh]">
        <div class="bg-white/[0.73] dark:bg-[#24292d]/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl items-center">
            <p class="text-[#2d5523] dark:text-white font-bold text-[36px] w-[500px]">Profil RW 03</p>
            <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Mari Mengenal Lebih Dekat RW 03</p>
        </div>
    </div>
    <div class="relative bg-white dark:bg-[#30373F]  -top-[10vh] w-[75vw] h-fit pb-13 mx-auto rounded-md shadow-2xl flex flex-col gap-7 text-[#236612] dark:text-white z-20 px-4">
        <div class="w-full h-fit flex flex-col justify-center items-center px-12">
            <h1 class="font-bold text-5xl py-12">Deskripsi Singkat RW 03</h1>
            <p class="font-normal text-lg text-center">
                RW 03 di Desa Bumiayu, Kecamatan Kedungkandang, Kota Malang, adalah sebuah wilayah administratif yang
                terdiri dari 13 RT.
                Terletak di bagian selatan Kota Malang, RW 03 dikenal dengan lingkungan yang rapi dan penduduk yang
                kompak.
                Ketua RW, selaku pemimpin wilayah ini, aktif menggerakkan berbagai kegiatan sosial dan gotong royong!
                Wilayah RW 03 memiliki fasilitas umum yang memadai, termasuk sebuah taman kecil, pos ronda, dan balai
                warga yang sering digunakan untuk pertemuan dan acara komunitas.
                Kegiatan rutin yang diadakan di RW 03 meliputi program kebersihan lingkungan, pengajian, serta arisan
                ibu-ibu.
                Selain itu, RW 03 juga memiliki kelompok pemuda yang aktif dalam kegiatan olahraga dan seni.
            </p>
        </div>
    </div>
</div>

<div class="flex w-[75vw] mx-auto justify-between items-center mb-14">
    <div class="relative w-[25%] rounded-l-xl rounded-r-md bg-white dark:bg-[#30373F] dark:text-white px-5 py-7 shadow-xl group overflow-hidden">
        <div class="absolute z-[2] top-0 h-full w-full bg-gradient-to-r from-[#19A8EF] to-[#1072A3] left-0 transition ease-in-out duration-700 translate-x-[94%] group-hover:translate-x-0"></div>
        <div class="relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
            <div class="flex flex-col justify-center items-center gap-2">
                <div class="font-bold text-5xl group-hover:text-white">100</div>
                <div class="font-semibold text-[18px] text-gray-400 group-hover:text-gray-200">KK</div>
            </div>
            <div class="text-5xl text-transparent bg-gradient-to-r from-[#19A8EF] to-[#1072A3] bg-clip-text group-hover:text-white">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
    </div>
    <div class="relative w-[25%] rounded-l-xl rounded-r-md bg-white dark:bg-[#30373F] dark:text-white px-5 py-7 shadow-xl group overflow-hidden">
        <div class="absolute z-[2] top-0 h-full w-full bg-gradient-to-r from-[#F6A831] to-[#B37924] left-0 transition ease-in-out duration-700 translate-x-[94%] group-hover:translate-x-0"></div>
        <div class="relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
            <div class="flex flex-col justify-center items-center gap-2">
                <div class="font-bold text-5xl group-hover:text-white">1000</div>
                <div class="font-semibold text-[18px] text-gray-400 group-hover:text-gray-200">Penduduk</div>
            </div>
            <div class="text-5xl text-transparent bg-clip-text bg-gradient-to-r from-[#F6A831] to-[#B37924] group-hover:text-white">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
    </div>
    <div class="relative w-[25%] rounded-l-xl rounded-r-md bg-white dark:bg-[#30373F] dark:text-white px-5 py-7 shadow-xl group overflow-hidden">
        <div class="absolute z-[2] top-0 h-full w-full bg-gradient-to-r from-[#9119EF] to-[#6410A3] left-0 transition ease-in-out duration-700 translate-x-[94%] group-hover:translate-x-0"></div>
        <div class="relative flex w-full h-full justify-center items-center gap-10 z-[3] top-0 left-0">
            <div class="flex flex-col justify-center items-center gap-2">
                <div class="font-bold text-5xl group-hover:text-white">43</div>
                <div class="font-semibold text-[18px] text-gray-400 group-hover:text-gray-200">RT</div>
            </div>
            <div class="text-5xl text-transparent bg-clip-text bg-gradient-to-r from-[#9119EF] to-[#6410A3] group-hover:text-white">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
    </div>
</div>
<!-- <div class="h-fit w-full mt-[75vh] flex justify-center  bg-[#E4F7DF] py-22"> -->
<div class="h-fit w-full flex justify-center  py-22">
    <div class="w-[75vw] mx-auto gap-16 flex flex-col">
        <div class="flex justify-center items-center">
            <h1 class="font-bold text-5xl text-[#236612] dark:text-white">Profil Ketua RW</h1>
        </div>
        <div class="h-[60vh] w-full flex gap-14 px-10 justify-center">
            <div class="w-[50%] h-full flex flex-col gap-8">
                <div class="w-full h-full flex flex-col justify-between">
                    <div class="w-full min-h-15 flex relative justify-end">
                        <div class="h-full w-full bg-green-500 dark:bg-[#57ba47] flex items-center justify-center mr-7 rounded-2xl shadow-xl">
                            <div class="text-lg font-bold text-white">{{ $profileRW->nama }}</div>
                        </div>
                        <div class="h-15 w-15 rounded-full bg-yellow-500 border-4 border-white absolute right-0 top-0 flex justify-center items-center">
                            <i class="fa-solid fa-file-signature text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="w-full min-h-15 flex relative justify-end">
                        <div class="h-full w-full bg-green-500 dark:bg-[#57ba47] flex items-center justify-center mr-7 rounded-2xl shadow-xl">
                            <div class="text-lg font-bold text-white">{{ $profileRW->noTelp }}</div>
                        </div>
                        <div class="h-15 w-15 rounded-full bg-yellow-500 border-4 border-white absolute right-0 top-0 flex justify-center items-center">
                            <i class="fa-solid fa-phone text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="w-full min-h-15 flex relative justify-end">
                        <div class="h-full w-full bg-green-500 dark:bg-[#57ba47] flex items-center justify-center mr-7 rounded-2xl shadow-xl">
                            <div class="text-lg font-bold text-white">{{ $profileRW->tempatLahir }},
                                {{ $profileRW->tanggalLahir }}
                            </div>
                        </div>
                        <div class="h-15 w-15 rounded-full bg-yellow-500 border-4 border-white absolute right-0 top-0 flex justify-center items-center">
                            <i class="fa-solid fa-calendar-days text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="w-full min-h-15 flex relative justify-end">
                        <div class="h-full w-full bg-green-500 dark:bg-[#57ba47] flex items-center justify-center mr-7 rounded-2xl px-8 py-4">
                            <div class="text-lg font-bold text-white text-center">
                                {{ $profileRW->kartuKeluarga->alamat }}
                            </div>
                        </div>
                        <div class="h-15 w-15 rounded-full bg-yellow-500 border-4 border-white absolute right-0 top-0 flex justify-center items-center">
                            <i class="fa-solid fa-location-dot text-white text-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[35%] h-full flex justify-center relative items-center">
                <img src="{{ asset('assets/images/UserAccount/' . $imageRW) }}" alt="" class="h-[400px] w-[300px] absolute z-10 shadow-2xl rounded-full border-6 border-white object-cover">
                <div class="absolute h-[400px] w-[300px] z-9 bg-green-500 dark:bg-[#57ba47] top-10 left-4 rounded-full shadow-2xl border-6 border-white">
                </div>
                <div class="absolute h-[400px] w-[300px] z-9 bg-yellow-500 -top-2 right-4 rounded-full shadow-2xl border-6 border-white">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="w-full mt-[15vh] flex justify-center  ">
    <div class="w-[80vw] mx-auto gap-16 flex flex-col">
        <div class="flex justify-center items-center">
            <h1 class="font-bold text-5xl text-[#236612] dark:text-white">Profil Ketua RT</h1>
        </div>
        <div class="swiper mySwiper w-full !px-[220px]">
            <div class="swiper-wrapper w-full !py-10">
                @foreach ($profileRTnew as $rt)
                <div class="swiper-slide relative !h-[400px] !w-[240px] flex flex-col transition-all group">
                    <img src="{{ asset('assets/images/UserAccount/'. $rt['image']) }}" alt="" class="h-[320px] w-[240px] mx-auto relative z-10 shadow-2xl rounded-full border-6 border-white">
                    <div class="absolute h-[320px] w-[240px] z-8 bg-green-500 dark:bg-[#57ba47] top-4 left-7 rounded-full shadow-2xl border-6 border-white group-hover:-left-18 group-hover:top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 dark:bg-[#57ba47] rounded-2xl flex justify-center items-center shadow-md top-34 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">{{ $rt['profile']->nama }}</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-file-signature text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 dark:bg-[#57ba47] rounded-2xl flex justify-center items-center shadow-md top-39 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">{{ $rt['profile']->tempatLahir }}, {{ $rt['profile']->tanggalLahir }}</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-calendar-days text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[320px] w-[240px] z-9 bg-yellow-500 -top-4 right-7  rounded-full shadow-2xl border-6 border-white group-hover:-right-19 group-hover:-top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-13 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">{{ $rt['profile']->noTelp }}</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 dark:bg-[#57ba47] border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-18 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">{{ $rt['profile']->kartuKeluarga->alamat }}</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 dark:bg-[#57ba47] border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-location-dot text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="relative -bottom-14 w-fit h-fit py-2 px-8 mx-auto bg-green-500 dark:bg-[#57ba47] border-y-4 border-yellow-500 flex justify-center items-center rounded-xl shadow-lg">
                        <p class="font-bold text-lg text-white">Ketua RT {{ $rt['profile']->kartuKeluarga->rt }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next !top-10 !right-7 after:!text-lg !font-extrabold !text-white !h-10 !w-10 bg-yellow-500 hover:bg-[#E2A229] rounded-full hover:scale-105 transition ease-in-out duration-300">
            </div>
            <div class="swiper-button-prev !top-10 !left-7 after:!text-lg !font-extrabold !text-white !h-10 !w-10 bg-yellow-500 hover:bg-[#E2A229] rounded-full hover:scale-105 transition ease-in-out duration-300">
            </div>
            <div class="swiper-pagination !absolute !bottom-0"></div>
        </div>
    </div>
</div>


<!-- <div class="h-[200vh]"></div> -->
<x-footer>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 310,
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
</x-footer>