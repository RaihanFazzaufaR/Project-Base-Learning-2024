<x-header menu='{{ $menu }}'>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

</x-header>

<div class="w-[100%] relative  justify-center items-center hidden lg:flex">
    <img src="{{ asset('assets/images/bantuanSosial-cover.webp') }}" alt="" class="w-full dark:brightness-[85%]">
    <div
        class="bg-white/[0.73] w-[571px] dark:bg-[#24292d]/[0.73] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">Bantuan Sosial di RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Salurkan Bantuan Sosial di Lingkungan
            RW 3</p>
    </div>
</div>
<div
    class=" lg:hidden sm:sticky sm:top-0 fixed text-[#2d5523] w-[100%] dark:text-white font-bold border-b-2 z-9  bg-white dark:bg-[#2F363E] h-fit border-gray-300 dark:border-gray-600 py-6">
    <div class="w-[90%] mx-auto gap-4 flex flex-col">
        <div class="lg:hidden text-2xl sm:text-4xl flex flex-col gap-2">
            <p class="text-[#2d5523] dark:text-white font-bold">Bantuan Sosial di RW 3</p>
            <p class="text-[#2d5523] dark:text-white font-sans text-sm text-left">Salurkan Bantuan Sosial di Lingkungan
                RW 3</p>
        </div>

        <div class="flex gap-6">

            <div class="w-full">
                <form action="{{ route('filter-bansos') }}" method="POST" enctype="multipart/form-data"
                    class="w-full mx-auto lg:shadow-2xl">
                    @csrf
                    <div
                        class="flex shadow-md rounded-xl w-full bg-white border-2 dark:bg-[#30373F] border-[#2d5523] dark:border-gray-600 items-center justify-between py-2 h-fit">
                        <div class="flex w-full">
                            <div class=" border-gray-400 px-4 w-[50%]">
                                <div class="relative">
                                    <i
                                        class="fa-solid fa-regular fa-star absolute left-2 -top-1 pt-4 hidden dark:text-white text-sm text-[#58a444]"></i>
                                    <select name="bulan" id="bulan"
                                        class="block py-2.5 px-9 w-full text-sm bg-white dark:bg-[#30373F] appearance-none text-[#58a444] dark:text-white border-none">
                                        <option selected value="">Bulan</option>
                                        @foreach (range(1, 12) as $month)
                                            <option value="{{ $month }}">
                                                {{ \Carbon\Carbon::create()->month($month)->format('F') }}</option>
                                        @endforeach
                                    </select>



                                    {{-- <i class="fa-solid fa-angle-down absolute right-2 top-0 pt-4  dark:text-white text-sm"></i> --}}
                                </div>
                            </div>
                            <div class="border-l-2 border-gray-400 px-4 w-[50%]">
                                <div class="relative">
                                    <select name="tahun" id="tahun"
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
                        <div class="w-fit flex justify-end items-center px-2">
                            <button type="submit">
                                <i class="fa-solid fa-circle-chevron-right text-3xl text-yellow-500"></i>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


</div>
<div class= "min-h-[30vh] mx-auto lg:py-[30px] py-5 w-[90%]">
    {{-- select option --}}
    {{-- opsi yang dipilih berdasarkan kategori bansos yg diterima --}}
    <div class=" flex w-full justify-between mb-10">
        <form action="{{ route('filter-bansos') }}" method="POST" enctype="multipart/form-data"
            class="w-fit h-full flex items-center justify-center mb-0">
            @csrf
            <div
                class="hidden lg:flex shadow-md rounded-xl w-full bg-white border-2 dark:bg-[#30373F] border-[#2d5523] dark:border-gray-600 items-center justify-between py-2 h-fit">
                <div class="flex w-full">
                    <div class=" border-gray-400 px-4 w-fit">
                        <div class="relative">
                            <select name="bulan" id="bulan"
                                class="block py-2.5 px-9 w-full text-sm bg-white dark:bg-[#30373F] appearance-none text-[#58a444] dark:text-white border-none">
                                <option selected value="">Bulan</option>
                                @foreach (range(1, 12) as $month)
                                    <option value="{{ $month }}">
                                        {{ \Carbon\Carbon::create()->month($month)->format('F') }}</option>
                                @endforeach
                            </select>


                            <i
                                class="fa-solid fa-regular fa-star absolute left-2 -top-1 pt-4  dark:text-white text-sm text-[#58a444]"></i>
                            {{-- <i class="fa-solid fa-angle-down absolute right-2 top-0 pt-4  dark:text-white text-sm"></i> --}}
                        </div>
                    </div>
                    <div class="border-l-2 border-gray-400 px-4 w-fit">
                        <div class="relative">
                            <select name="tahun" id="tahun"
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
                    class="hidden lg:flex w-auto shadow-2xl h-[57px] text-[20px] px-[24px]  bg-[#E2A229]  dark:text-white dark:hover:text-white dark:shadow-gray-900 items-center my-auto  rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-300 hover:scale-105">
                    Ajukan Permintaan Bansos
                </button>
                <button @click="editModal = true"
                    class="flex lg:hidden items-center p-3 sm:p-4 justify-center print:hidden fixed end-6 bottom-6 group animate-bounce text-white bg-[#2d5523] rounded-full  border-2 border-[#2d5523] hover:border-[#e2a229] dark:hover:border-[#2d5523]  dark:bg-[#e2a229] dark:border-[#e2a229] hover:bg-[#e2a229] dark:hover:BG-[#2D5523] dark:hover:bg-[#2d5523]  text-3xl">
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
                                action="{{ route('store.bansos') }}" enctype="multipart/form-data">
                                @csrf
                                <div
                                    class="px-4 overflow-y-scroll scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin   max-h-100">

                                    <input type="hidden" id="id_kartuKeluarga" name="id_kartuKeluarga"
                                        value="{{ Auth::user()->penduduk->id_kartuKeluarga }}">
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Status
                                        Rumah</label>
                                    <select id="" name="status_rumah"
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Status Kepemilikan Rumah</option>
                                        <option value="Kontrak/kos">Kontrak/Kos</option>
                                        <option value="Tinggal dengan keluarga">Tinggal Dengan Keluarga</option>
                                        <option value="Milik sendiri">Milik Sendiri</option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Tanggungan</label>
                                    <select id="" name="tanggungan"
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Jumlah Tanggungan</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value=">5">&gt;5 </option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Total
                                        Penghasilan Dalam 1 Keluarga</label>
                                    <select id="" name="penghasilan_keluarga"
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Total Penghasilan</option>
                                        <option value="<1.000.000">&le; Rp. 1.000.000</option>
                                        <option value="1.000.000 - 2.000.000">Rp. 1.000.000 - Rp. 2.000.000</option>
                                        <option value="2.000.000 - 3.000.000">Rp. 2.000.000 - Rp. 3.000.000</option>
                                        <option value="3.000.000 - 4.000.000">Rp. 3.000.000 - Rp. 4.000.000</option>
                                        <option value="4.000.000 - 5.000.000">Rp. 4.000.000 - Rp. 5.000.000</option>
                                        <option value=">5.000.000">&ge; Rp. 5.000.000 </option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Luas
                                        Tanah
                                        Rumah yang Ditempati</label>
                                    <select id="" name="luas_tempat_tinggal"
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Luas Tanah</option>
                                        <option value="<20m">&le; 20 m&sup2;</option>
                                        <option value="20m - 40m">20 m&sup2; - 40 m&sup2;</option>
                                        <option value="40m - 60m">40 m&sup2; - 60 m&sup2;</option>
                                        <option value="60m - 80m">60 m&sup2; - 80 m&sup2;</option>
                                        <option value=">80m">&ge; 80m&sup2;</option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Total
                                        Pengeluaran Listrik dalam 1 Bulan</label>
                                    <select id="" name="pengeluaran_listrik"
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                        <option selected>Pilih Total Pengeluaran Listrik</option>
                                        <option value="<50.000">&le; Rp. 50.000</option>
                                        <option value="50.000 - 100.000">Rp. 50.000 - Rp. 100.000</option>
                                        <option value="100.000 - 200.000">Rp. 100.000 - Rp. 200.000</option>
                                        <option value="200.000 - 300.000">Rp. 200.000 - Rp. 300.000</option>
                                        <option value=">300.000">&ge; Rp. 300.000 </option>
                                    </select>
                                    <label class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white"
                                        for="">Masukkan Foto Rumah</label>
                                    <input
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full   dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        id="" name="foto_rumah" type="file">
                                    <label class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white"
                                        for="">Masukkan Surat Keterangan Tidak Mampu(SKTM)</label>
                                    <input
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full   dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        id="" name="SKTM" type="file">


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
                @foreach ($ajuan_saya as $ajuan)
                    <tr
                        class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E] dark:text-white dark:border-gray-700">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523] dark:text-white">
                            {{ $namaKepalaKeluarga }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523] dark:text-white">
                            {{ $niKeluarga }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523] dark:text-white">
                            {{ $ajuan->created_at_text }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523] dark:text-white flex justify-start gap-3 w-fit mx-auto h-full items-center">
                            @if ($ajuan->status === 'diproses')
                                <div class="h-2.5 w-2.5 rounded-full bg-blue-500"></div>
                            @elseif($ajuan->status === 'diterima')
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500"></div>
                            @elseif($ajuan->status === 'ditolak')
                                <div class="h-2.5 w-2.5 rounded-full bg-red-500"></div>
                            @endif
                            <div class="text-base font-semibold">{{ $ajuan->status }}</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if ($ajuan_saya->isEmpty())
            <div
                class="flex flex-col w-full h-fit py-8 justify-center items-center gap-4 shadow-sm my-auto  dark:border-gray-600">
                <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
                <img src="{{ asset('assets/images/no-data.png') }}" alt=""
                    class="w-[500px] h-[300px] object-cover">
                <p class="text-2xl font-semibold text-green-900 dark:text-white">Data Tidak Ditemukan</p>
            </div>
        @endif


        {{-- list bansos mobile --}}
    </div>
    <div class="h-fit sm:hidden pt-[162px] ">
        <div id="accordion-open" data-accordion="open" class="border dark:border-gray-600 py-3">
            @foreach ($ajuan_saya as $index => $ajuan)
                <h2 id="accordion-open-heading-{{ $index }}">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-{{ $index }}" aria-expanded="false"
                        aria-controls="accordion-open-body-{{ $index }}">
                        <span class="flex items-center">
                            <i class="fa-solid fa-hand-holding-hand"></i>
                            <svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                            </svg>Bansos Periode {{ $ajuan->created_at_text }}</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-{{ $index }}" class="hidden"
                    aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <table class="text-[#2d5523] dark:text-white">
                            <tr>
                                <td class="pl-3 py-1">
                                    No. KK
                                </td>
                                <td class="pl-3 py-1">
                                    <span class="font-normal">
                                        {{ $niKeluarga }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-3 py-1">
                                    Nama Kepala Keluarga
                                </td>
                                <td class="pl-3 py-1">
                                    <span class="font-normal">
                                        {{ $namaKepalaKeluarga }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-3 py-1">
                                    Status
                                </td>
                                <td class="pl-3 py-1">
                                    <div
                                        class="px-3 py-1 text-base text-center h-full my-auto items-center {{ $ajuan->status === 'diproses' ? 'bg-blue-500' : ($ajuan->status === 'diterima' ? 'bg-green-500' : 'bg-red-500') }} font-semibold text-white flex justify-start gap-3 rounded-full w-fit">
                                        {{ $ajuan->status }}
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
            @endforeach
            @if ($ajuan_saya->isEmpty())
                <div
                    class="flex flex-col w-full h-fit  justify-center items-center gap-4 shadow-sm my-auto  dark:border-gray-600">
                    <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
                    <img src="{{ asset('assets/images/no-data.png') }}" alt=""
                        class="w-[500px] h-[300px] object-cover">
                    <p class="text-2xl font-semibold text-green-900 dark:text-white">Data Tidak Ditemukan</p>
                </div>
            @endif
        </div>


    </div>
</div>

<x-footer>

</x-footer>
