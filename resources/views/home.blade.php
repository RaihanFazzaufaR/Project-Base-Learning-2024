<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- <div class="bg-[#F4FCF2] min-h-[400vh] w-[100%]"> -->
    <x-navbar />
    <div class="bg-white w-[100%]">
        <!-- top-[15vh] sm:top-[17vh] md:top-[13vh] lg:top-[20vh] -->
        <img src="{{ asset('assets/images/bg-home-slice-1.png') }}" alt="" class="absolute top-10 right-0 h-[127vh] w-[69vw]">

        <div class="absolute top-5 right-0" style="mask-image: url('{{ asset('assets/images/bg-home-slice.png') }}'); mask-repeat: no-repeat; mask-size: cover;">
            <img src="{{ asset('assets/images/cover.jpg') }}" alt="" class="h-[127vh] w-[65vw]">
        </div>

        <div class="relative h-[65vh] sm:h-[85vh] md:h-[79vh] lg:h-[120vh] w-[70%] text-[#1C4F0F] pt-[20vh] pl-[8vh]">
            <!-- <div class="relative h-[65vh] sm:h-[85vh] md:h-[79vh] lg:h-[90vh] w-[70%] text-[#1C4F0F] pt-[20vh] pl-[8vh]"> -->
            <div class="font-semibold text-2xl mb-3">
                Selamat Datang di
            </div>
            <div class="font-extrabold text-6xl mb-4">
                PORTAL RW 03
            </div>
            <div class="font-bold text-6xl mb-4">
                Desa Bumiayu
            </div>
            <div class="font-bold text-6xl mb-10">
                Kec. Kedungkandang
            </div>
            <p class="font-medium text-xl w-[47vw]">Temukan informasi terkini, kegiatan komunitas, dan layanan kami untuk memajukan lingkungan kami. Bergabunglah dalam membangun kehidupan yang lebih baik untuk warga RW 3!"</p>
            <div class="mt-[100px]">
                <!-- <button class="transition ease-in-out duration-500 hover:scale-105 hover:shadow-2xl bg-yellow-500 text-[#1C4F0F] py-5 px-8 rounded-[30px] shadow-xl font-bold text-xl hover:bg-[#E2A229] group"> -->
                <!-- Masuk Sebagai Warga -->
                <!-- <span class="hidden group-hover:inline-flex transition-opacity duration-500 ease-in-out">Sebagai Warga</span> -->
                <!-- </button> -->
            </div>
        </div>

        <!-- Fitur Page -->
        <div class="w-[80vw] mx-auto mt-[10vh]  flex flex-col gap-14">
            <div class="text-center font-bold text-5xl text-[#236612]">Layanan Warga</div>
            <div class="grid lg:grid-cols-3 grid-cols-2 gap-10">
                <div class="relative lg:h-[40vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden">
                    <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                        <div class="bg-[#F9C0E2] flex justify-center items-center rounded-lg p-1">
                            <img src="{{ asset('assets/images/umkm.png') }}" alt="" class="h-[70] w-[70]">
                        </div>
                        <div class="font-bold text-4xl">UMKM</div>
                        <div class="w-[85%] h-[35%] text-center font-normal text-lg">Temukan informasi mengenai daftar Usaha Mikro Kecil dan Menengah (UMKM) di RW 3</div>
                    </div>
                    <div class="absolute bg-[#F9C0E2] h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[23vh]">
                        <a class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="relative lg:h-[40vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden">
                    <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                        <div class="bg-[#C2D0EC] flex justify-center items-center rounded-lg p-1">
                            <img src="{{ asset('assets/images/penduduk.png') }}" alt="" class="h-[70] w-[70]">
                        </div>
                        <div class="font-bold text-4xl">Kependudukan</div>
                        <div class="w-[85%] h-[35%] text-center font-normal text-lg">Informasi mengenai daftar warga yang tinggal di RW 3</div>
                    </div>
                    <div class="absolute bg-[#C2D0EC] h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[23vh]">
                        <a class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="relative lg:h-[40vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden">
                    <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                        <div class="bg-[#D2BDFF] flex justify-center items-center rounded-lg p-1">
                            <img src="{{ asset('assets/images/bansos.png') }}" alt="" class="h-[70] w-[70]">
                        </div>
                        <div class="font-bold text-4xl">Bansos</div>
                        <div class="w-[85%] h-[35%] text-center font-normal text-lg">Informasi mengenai daftar masyarakat yang mendapatkan Bantuan Sosial (Bansos) dari Pemerintah di RW 3</div>
                    </div>
                    <div class="absolute bg-[#D2BDFF] h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[23vh]">
                        <a class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="relative lg:h-[40vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden">
                    <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                        <div class="bg-[#C3FBB8] flex justify-center items-center rounded-lg p-1">
                            <img src="{{ asset('assets/images/aduan.png') }}" alt="" class="h-[70] w-[70]">
                        </div>
                        <div class="font-bold text-4xl">Pengaduan</div>
                        <div class="w-[85%] h-[35%] text-center font-normal text-lg">Layanan informasi terkait sarana penyampaian aspirasi dan pengaduan warga RW 3</div>
                    </div>
                    <div class="absolute bg-[#C3FBB8] h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[23vh]">
                        <a class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="relative lg:h-[40vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden">
                    <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                        <div class="bg-[#FCDFAD] flex justify-center items-center rounded-lg p-1">
                            <img src="{{ asset('assets/images/jadwal.png') }}" alt="" class="h-[70] w-[70]">
                        </div>
                        <div class="font-bold text-4xl">Jadwal Kegiatan</div>
                        <div class="w-[85%] h-[35%] text-center font-normal text-lg">Informasi seputar kegiatan yang akan dilakukan warga RW 3</div>
                    </div>
                    <div class="absolute bg-[#FCDFAD] h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[23vh]">
                        <a class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="relative lg:h-[40vh] rounded-xl shadow-lg sm:h-[45vh] md:h-[30vh] group hover:-translate-y-3 hover:shadow-2xl transition ease-in-out duration-500 overflow-hidden">
                    <div class="bg-white text-[#1C4F0F] h-full flex flex-col items-center gap-3 py-5">
                        <div class="bg-[#F9C9BB] flex justify-center items-center rounded-lg p-1">
                            <img src="{{ asset('assets/images/surat.png') }}" alt="" class="h-[70] w-[70]">
                        </div>
                        <div class="font-bold text-4xl">Surat Pengantar</div>
                        <div class="w-[85%] h-[35%] text-center font-normal text-lg">Layanan informasi terkait surat pengantar RT/RW</div>
                    </div>
                    <div class="absolute bg-[#F9C9BB] h-[50%] w-full rounded-t-[60px] top-0 z-10 opacity-100 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500 translate-y-[45vh] group-hover:translate-y-[23vh]">
                        <a class="bg-white text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm shadow-md border border-[#1C4F0F] hover:bg-yellow-500 cursor-pointer">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- UMKM -->

        <div class="h-[90vh] w-[80vw] mt-[5vh] py-[5vh] mx-auto">
            <div class="h-full w-full flex flex-col justify-between">
                <div class="font-bold  text-[#1C4F0F] text-5xl text-center w-full py-4">UMKM Sekitar</div>
                <div class="relative h-[40vh] w-full ">
                    <!-- Prev Button UMKM -->
                    <button class="absolute z-[90] -left-5 lg:top-[38%] md:top-[32%] top-[30%] border-[3px] border-[#458FFF] rounded-full group hover:border-[#4b7bc2]" id="nextButtonUmkm">
                        <i class="text-4xl fa-solid fa-circle-chevron-right text-[#458FFF] border-[3px] border-transparent rounded-full group-hover:text-[#4b7bc2] rotate-180"></i>
                    </button>

                    <div class="h-[40vh] w-full flex justify-between">
                        <div class="relative w-[17vw] h-full bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl hover:scale-105 transition ease-in-out duration-500 group">
                            <div class="h-[70%] w-full overflow-hidden">
                                <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-full w-full group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                            </div>
                            <div class="h-[30%] w-full flex flex-col justify-center items-center gap-2 text-[#1C4F0F]">
                                <p class="font-bold text-lg">Toko Kelontong 1</p>
                                <hr class="text-black">
                                <div class="text-sm flex justify-center items-center gap-3">
                                    <i class="fa-regular fa-clock"></i>
                                    <p class="">09.00 - 21.00</p>
                                </div>
                            </div>
                            <div class="absolute h-[70%] w-full z-10 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                                <a class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        <div class="relative w-[17vw] h-full bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl hover:scale-105 transition ease-in-out duration-500 group">
                            <div class="h-[70%] w-full overflow-hidden">
                                <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-full w-full group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                            </div>
                            <div class="h-[30%] w-full flex flex-col justify-center items-center gap-2 text-[#1C4F0F]">
                                <p class="font-bold text-lg">Toko Kelontong 2</p>
                                <hr class="text-black">
                                <div class="text-sm flex justify-center items-center gap-3">
                                    <i class="fa-regular fa-clock"></i>
                                    <p class="">09.00 - 21.00</p>
                                </div>
                            </div>
                            <div class="absolute h-[70%] w-full z-10 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                                <a class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        <div class="relative w-[17vw] h-full bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl hover:scale-105 transition ease-in-out duration-500 group">
                            <div class="h-[70%] w-full overflow-hidden">
                                <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-full w-full group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                            </div>
                            <div class="h-[30%] w-full flex flex-col justify-center items-center gap-2 text-[#1C4F0F]">
                                <p class="font-bold text-lg">Toko Kelontong 3</p>
                                <hr class="text-black">
                                <div class="text-sm flex justify-center items-center gap-3">
                                    <i class="fa-regular fa-clock"></i>
                                    <p class="">09.00 - 21.00</p>
                                </div>
                            </div>
                            <div class="absolute h-[70%] w-full z-10 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                                <a class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                            </div>
                        </div>
                        <div class="relative w-[17vw] h-full bg-white rounded-2xl shadow-lg flex flex-col overflow-hidden hover:shadow-2xl hover:scale-105 transition ease-in-out duration-500 group">
                            <div class="h-[70%] w-full overflow-hidden">
                                <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="h-full w-full group-hover:brightness-[0.4] transition ease-in-out duration-500 group-hover:scale-110">
                            </div>
                            <div class="h-[30%] w-full flex flex-col justify-center items-center gap-2 text-[#1C4F0F]">
                                <p class="font-bold text-lg">Toko Kelontong 4</p>
                                <hr class="text-black">
                                <div class="text-sm flex justify-center items-center gap-3">
                                    <i class="fa-regular fa-clock"></i>
                                    <p class="">09.00 - 21.00</p>
                                </div>
                            </div>
                            <div class="absolute h-[70%] w-full z-10 opacity-0 justify-center items-center flex group-hover:opacity-100 transition ease-in-out duration-500">
                                <a class="bg-yellow-500 text-[#1C4F0F] py-2 px-3 rounded-xl font-bold text-sm hover:bg-[#E2A229] cursor-pointer">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Next Button UMKM -->
                    <button class="absolute z-[90] -right-5 lg:top-[38%] md:top-[32%] top-[30%] border-[3px] border-[#458FFF] rounded-full group hover:border-[#4b7bc2]" id="nextButtonUmkm">
                        <i class="text-4xl fa-solid fa-circle-chevron-right text-[#458FFF] border-[3px] border-transparent rounded-full group-hover:text-[#4b7bc2]"></i>
                    </button>
                </div>
                <a href="#" class="mx-auto bg-yellow-500 text-[#1C4F0F] py-4 px-8 rounded-[30px] shadow-xl font-bold text-lg hover:bg-[#E2A229] transition ease-in-out duration-500 hover:scale-105 hover:shadow-2xl">Lihat Selengkapnya</a>
            </div>
        </div>

        <!-- Agenda Kegiatan -->
        <div class="relative w-[80vw] mx-auto h-[90vh] flex flex-col mt-[13vh] gap-[45px]">
            <div class="font-bold text-[#1C4F0F] text-5xl text-center w-full py-4">Agenda Warga</div>
            <div class="relative flex h-full w-full pb-[5vh]">
                <div class="basis-[65%] h-[70vh] bg-cover bg-center shadow-lg rounded-lg bg-no-repeat pl-6 py-10" style="background-image: url('{{ asset('assets/images/bg-home-agenda.png') }}')">
                    <div class="max-h-[60vh] w-[80%] flex flex-col overflow-auto gap-7">
                        <div class="relative w-full flex justify-end min-h-30 bg-transparent pt-6">
                            <div class="absolute bg-[#FFD600] h-[75px] w-[115px] top-0 left-0 text-black flex justify-center items-end font-extrabold py-5 font-sans rounded-md">
                                <span class="text-xl">Agu</span>
                                <span class="text-4xl">10</span>
                            </div>
                            <div class="w-[95%] min-h-20 bg-[#4D7F41]/65 rounded-xl border-2 border-[#1B4810] pl-28 pr-5 py-3">
                                <div class="text-white font-bold text-xl">
                                    <p>
                                        <span>1. </span>
                                        <span>Lomba Agustusan di RT 2</span>
                                    </p>
                                    <p>
                                        <span>2. </span>
                                        <span>Lomba Agustusan di RT 3</span>
                                    </p>
                                    <p>
                                        <span>3. </span>
                                        <span>Lomba Agustusan di RT 4</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative w-full flex justify-end min-h-30 bg-transparent pt-6">
                            <div class="absolute bg-[#FFD600] h-[75px] w-[115px] top-0 left-0 text-black flex justify-center items-end font-extrabold py-5 font-sans rounded-md">
                                <span class="text-xl">Agu</span>
                                <span class="text-4xl">15</span>
                            </div>
                            <div class="w-[95%] min-h-20 bg-[#4D7F41]/65 rounded-xl border-2 border-[#1B4810] pl-28 pr-5 py-3">
                                <div class="text-white font-bold text-xl">
                                    <p>
                                        <span>1. </span>
                                        <span>Lomba Agustusan di RT 9</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute flex w-[12%] h-[8%] bg-[#74CC52] right-14 top-2 shadow-lg shadow-gray-400">
                    <div class="basis-[3%] bg-[#FFD600]"></div>
                    <div class="basis-[97%] bg-[#74CC52] flex items-center justify-center">
                        <p class="font-bold text-xl text-white">Agenda</p>
                    </div>
                </div>

                <!-- calendar -->
                <div class="absolute bg-white w-[45%] h-[70%] right-0 top-[75px] rounded-xl shadow-2xl">

                </div>
            </div>
        </div>

        <div class="relatif w-[80vw] mx-auto h-[90vh] flex flex-col mt-[20vh] gap-[45px] mb-[20vh]">
            <div class="font-bold text-[#1C4F0F] text-5xl text-center w-full py-4">Aduan Warga</div>
            <div class="relative h-fit w-full bg-white rounded-md shadow-md">
                <table class="w-full text-left rtl:text-right text-black dark:text-gray-400 border border-slate-200">
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
    </div>

    <div class="relative w-full h-[40vh] bottom-0 flex flex-col">
        <div class="w-full h-[32vh] flex bg-[#C1EFBD] justify-between items-center text-[#1C4F0F] px-[8vw] py-12">
            <img src="{{ asset('assets/images/footer.png') }}" alt="" class="h-full">
            <div class="h-full w-[400px] font-bold text-2xl pt-2">
                <i>“Mewujudkan RW 3 sebagai RW yang Modern, Kreatif, Inovatif dan Sejahtera”</i>
            </div>
        </div>
        <div class="w-full h-[8vh] flex bg-[#1C4F0F] justify-center items-center text-[#C1EFBD]">
            &copy; 2024 SIRAWA. All Rights Reserved.
        </div>
    </div>
</body>

</html>