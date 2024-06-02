<x-header menu='{{ $menu }}'>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

</x-header>

<div class="w-[100%] relative  justify-center items-center hidden sm:flex">
    <img src="{{ asset('assets/images/bantuanSosial-cover.webp') }}" alt="" class="w-full dark:brightness-[85%]">
    <div
        class="bg-white/[0.73] w-[571px] dark:bg-[#24292d]/[0.73] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">Bantuan Sosial di RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Salurkan Bantuan Sosial di Lingkungan
            RW 3</p>
    </div>
</div>
<div class= "min-h-[100vh] mx-auto sm:py-[34px] py-5 w-[90%]">
    {{-- select option --}}
    {{-- opsi yang dipilih berdasarkan kategori bansos yg diterima --}}
    <div class=" flex w-full justify-between mb-10">
        <form action="{{ route('aduanku') }}" class="w-fit h-full flex items-center justify-center mb-0">
            @csrf
            <div
                class="flex shadow-md rounded-xl w-full bg-white border-2 dark:bg-[#30373F] border-[#2d5523] dark:border-gray-600 items-center justify-between py-2 h-fit">
                <div class="flex w-full">
                    <div class=" border-gray-400 px-4 w-fit">
                        <div class="relative">
                            <select name="prioritas" id="prioritas"
                                class="block py-2.5 px-9 w-full text-sm  bg-white dark:bg-[#30373F] appearance-none text-[#58a444] dark:text-white border-none">
                                <option selected value="">Bulan</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                            <i
                                class="fa-solid fa-regular fa-star absolute left-2 -top-1 pt-4  dark:text-white text-sm text-[#58a444]"></i>
                            {{-- <i class="fa-solid fa-angle-down absolute right-2 top-0 pt-4  dark:text-white text-sm"></i> --}}
                        </div>
                    </div>
                    <div class="border-l-2 border-gray-400 px-4 w-fit">
                        <div class="relative">
                            <select name="status" id="status"
                                class="block py-2.5 px-9 w-full text-sm  bg-white dark:bg-[#30373F] appearance-none text-[#58a444] dark:text-white border-none">
                                <option selected value="">Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                            </select>
                            <i
                                class="fa-solid fa-question absolute left-2 -top-1 pt-4  dark:text-white text-sm text-[#58a444]"></i>
                            {{-- <i class="fa-solid fa-angle-down absolute right-2 top-0 pt-4 text-gray-500 dark:text-white text-sm"></i> --}}
                        </div>
                    </div>
                </div>
                <div class="w-fit flex justify-end items-center px-4">
                    <button type="submit">
                        <i class="fa-solid fa-circle-chevron-right text-3xl text-yellow-500"></i>
                    </button>
                </div>
            </div>
        </form>

        <div class=" flex justify-center ">
            <div class="" x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                <button @click="editModal = true"
                    class="hidden sm:flex w-auto shadow-2xl h-[57px] text-[20px] px-[24px]  bg-[#E2A229]  dark:text-white dark:hover:text-white dark:shadow-gray-900 items-center my-auto  rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-300 hover:scale-105">
                    Ajukan Permintaan Bansos
                </button>
                <button @click="editModal = true"
                    class="flex sm:hidden items-center p-3 justify-center print:hidden fixed end-6 bottom-6 group animate-bounce text-white bg-[#2d5523] rounded-full  border-2 border-[#2d5523] hover:border-[#e2a229] dark:hover:border-[#2d5523]  dark:bg-[#e2a229] dark:border-[#e2a229] hover:bg-[#e2a229] dark:hover:BG-[#2D5523] dark:hover:bg-[#2d5523]  text-3xl">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <div x-show="editModal" x-cloak tabindex="-1" aria-hidden="true"
                    class="flex overflow-hidden fixed top-0 right-0 left-0 z-999  justify-center items-center w-full md:inset-0 h-full">
                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                    <div class="relative z-[1000] p-4 w-fit max-h-[700px]" @click.away="editModal = false"
                        x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <!-- Modal content -->
                        <div class="relative bg-white dark:bg-[#30373F] rounded-lg shadow   ">
                            <!-- Modal header -->
                            <div
                                class="flex w-full items-center justify-between px-4 md:px-5 border-b-2 rounded-t mb-3 p-2 border-[#2d5523] dark:border-white">
                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                    Ajukan Permintaan Bansos
                                </h3>
                                <button type="button"
                                    class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    @click="editModal = false">
                                    <i
                                        class="fa-solid fa-xmark text-[#2d5523] dark:text-white font-extrabold text-xl"></i>
                                </button>
                            </div>
                            <form class=" w-full flex flex-col  bg-white dark:bg-[#30373F]" method="POST"
                                action="{{ route('umkm.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div
                                    class="px-4 overflow-y-scroll scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin   max-h-100">


                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Status
                                        Rumah</label>
                                    <select id=""
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Status Kepemilikan Rumah</option>
                                        <option value="">Kontrak/Kos</option>
                                        <option value="">Tinggal Dengan Keluarga</option>
                                        <option value="">Milik Sendiri</option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Tanggungan</label>
                                    <select id=""
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Jumlah Tanggungan</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">&gt;5 </option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Total
                                        Penghasilan Dalam 1 Keluarga</label>
                                    <select id=""
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Total Penghasilan</option>
                                        <option value="">&le; Rp. 1.000.000</option>
                                        <option value="">Rp. 1.000.000 - Rp. 2.000.000</option>
                                        <option value="">Rp. 2.000.000 - Rp. 3.000.000</option>
                                        <option value="">Rp. 3.000.000 - Rp. 4.000.000</option>
                                        <option value="">Rp. 4.000.000 - Rp. 5.000.000</option>
                                        <option value="">&ge; Rp. 5.000.000 </option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Luas
                                        Tanah
                                        Rumah yang Ditempati</label>
                                    <select id=""
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Luas Tanah</option>
                                        <option value="">&le; 20 m&sup2;</option>
                                        <option value="">20 m&sup2; - 40 m&sup2;</option>
                                        <option value="">40 m&sup2; - 60 m&sup2;</option>
                                        <option value="">60 m&sup2; - 80 m&sup2;</option>
                                        <option value="">&ge; 80m&sup2;</option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Total
                                        Pengeluaran Listrik dalam 1 Bulan</label>
                                    <select id=""
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Total Pengeluaran Listrik</option>
                                        <option value="">&le; Rp. 50.000</option>
                                        <option value="">Rp. 50.000 - Rp. 100.000</option>
                                        <option value="">Rp. 100.000 - Rp. 200.000</option>
                                        <option value="">Rp. 200.000 - Rp. 300.000</option>
                                        <option value="">&ge; Rp. 300.000 </option>
                                    </select>
                                    <label class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white"
                                        for="">Masukkan Foto Rumah</label>
                                    <input
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full   dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        id="" type="file">
                                    <label class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white"
                                        for="">Masukkan Surat Keterangan Tidak Mampu(SKTM)</label>
                                    <input
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full   dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        id="" type="file">


                                </div>
                                <div
                                    class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-t-2 rounded-b border-[#B8B8B8] dark:bg-[#4f5966]">
                                    <button @click="editModal = false"
                                        class="hidden sm:inline-flex hover:text-white  px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out dark:bg-white dark:hover:bg-white dark:text-[#2d5523]">
                                        Batal
                                    </button>
                                    <button type="submit"
                                        class="text-white inline-flex  mx-auto sm:mx-0 text-center w-fit px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] sm:hover:scale-105 transition duration-300 ease-in-out dark:hover:bg-[#4ea840] dark:bg-[#57ba47]">
                                        Ajukan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    {{-- list bansos laptop --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg hidden sm:block">
        <table class="w-full text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-[#428238] dark:text-white">
                <tr>
                    <th scope="col" class="px-6 w-[25%] py-3 ">
                        Nama Kepala Keluarga
                    </th>
                    <th scope="col" class="px-6 w-[25%] py-3 ">
                        Nomor Kartu Keluarga
                    </th>
                    <th scope="col" class="px-6 w-[25%] py-3">
                        periode
                    </th>
                    <th scope="col" class="px-6 w-[25%] py-3">
                        status
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E] dark:text-white dark:border-gray-700">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525981037628153
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Mei 2024
                    </td>
                    <td scope="row"
                        class="px-6 py-4  font-medium  text-base text-center text-[#2d5523]  dark:text-white flex justify-start gap-3 w-fit mx-auto h-full items-center">
                        <div class="h-2.5 w-2.5 rounded-full  bg-blue-500"></div>
                        <div class="text-base  font-semibold">Diproses</div>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E] dark:text-white dark:border-gray-700">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525981037628153
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Juni 2024
                    </td>
                    <td scope="row"
                        class="px-6 py-4  font-medium  text-base text-center text-[#2d5523]  dark:text-white flex justify-start gap-3 w-fit mx-auto h-full items-center">
                        <div class="h-2.5 w-2.5 rounded-full  bg-green-500"></div>
                        <div class="text-base  font-semibold">Diterima</div>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b  hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E] dark:text-white dark:border-gray-700">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525981037628153
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Juli 2024
                    </td>
                    <td scope="row"
                        class="px-6 py-4  font-medium  text-base text-center text-[#2d5523]  dark:text-white flex justify-start gap-3 w-fit mx-auto h-full items-center">
                        <div class="h-2.5 w-2.5 rounded-full  bg-red-500"></div>
                        <div class="text-base  font-semibold">Ditolak</div>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>

    {{-- list bansos mobile --}}
    <div class="border h-fit sm:hidden">

        


        <div id="accordion-open" data-accordion="open">
            <h2 id="accordion-open-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-open-body-1" aria-expanded="false"
                    aria-controls="accordion-open-body-1">
                    <span class="flex items-center">
                        <i class="fa-solid fa-hand-holding-hand"></i>
                        <svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                        </svg>Bansos Periode Mei 2024</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <table class="text-[#2d5523] dark:text-white">
                        <tr>
                            <td class="pl-3 py-1">
                                No. KK
                            </td>
                            <td class="pl-3 py-1">
                                <span class="font-normal">
                                    3525981037628153
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3 py-1">
                                Nama Kepala Keluarga
                            </td>
                            <td class="pl-3 py-1">
                                <span class="font-normal">
                                    Lucky Kurniawan Langoday
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3 py-1">
                                Status
                            </td>
                            <td class="pl-3 py-1">
                                <div
                                    class="px-3 py-1 text-base text-center h-full my-auto items-center bg-blue-500 font-semibold text-white flex justify-start gap-3 rounded-full w-fit">
                                    Diproses
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <h2 id="accordion-open-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                    aria-controls="accordion-open-body-2">
                    <span class="flex items-center">
                        <i class="fa-solid fa-hand-holding-hand"></i>
                        <svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                        </svg>Bansos Periode Juni 2024</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <table class="text-[#2d5523] dark:text-white">
                        <tr>
                            <td class="pl-3 py-1">
                                No. KK
                            </td>
                            <td class="pl-3 py-1">
                                <span class="font-normal">
                                    3525981037628153
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3 py-1">
                                Nama Kepala Keluarga
                            </td>
                            <td class="pl-3 py-1">
                                <span class="font-normal">
                                    Lucky Kurniawan Langoday
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3 py-1">
                                Status
                            </td>
                            <td class="pl-3 py-1">
                                <div
                                    class="px-3 py-1 text-base text-center h-full my-auto items-center bg-green-500 font-semibold text-white flex justify-start gap-3 rounded-full w-fit">
                                    Disetujui
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <h2 id="accordion-open-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                    data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                    aria-controls="accordion-open-body-3">
                    <span class="flex items-center">
                        <i class="fa-solid fa-hand-holding-hand"></i>
                        <svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                        </svg>Bansos Periode Juli 2024</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <table class="text-[#2d5523] dark:text-white">
                        <tr>
                            <td class="pl-3 py-1">
                                No. KK
                            </td>
                            <td class="pl-3 py-1">
                                <span class="font-normal">
                                    3525981037628153
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3 py-1">
                                Nama Kepala Keluarga
                            </td>
                            <td class="pl-3 py-1">
                                <span class="font-normal">
                                    Lucky Kurniawan Langoday
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3 py-1">
                                Status
                            </td>
                            <td class="pl-3 py-1">
                                <div
                                    class="px-3 py-1 text-base text-center h-full my-auto items-center bg-red-500 font-semibold text-white flex justify-start gap-3 rounded-full w-fit">
                                    Ditolak
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

    </div>
    {{-- <div class="px-8 py-5">
        {{ $penduduks->links() }}
    </div> --}}

</div>

<x-footer>

</x-footer>
