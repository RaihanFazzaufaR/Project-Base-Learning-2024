<x-header menu='{{ $menu }}'>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

</x-header>

<div class="w-[100%] relative flex justify-center items-center">
    <img src="{{ asset('assets/images/bansos-cover.jpg') }}" alt="" class="w-full ">
    <div
        class="bg-white/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] font-bold text-[36px]">Bantuan Sosial di RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center">Salurkan Bantuan Sosial di Lingkungan RW 3</p>
    </div>
</div>
<div class="bg-[#Fff] min-h-[100vh] px-[65px] py-5 w-[100%] mt-10">
    {{-- select option --}}
    {{-- opsi yang dipilih berdasarkan kategori bansos yg diterima --}}
    <div class=" flex w-full justify-end mb-4">
        <form class="   hidden items-center gap-5  ">
            <label for="kategori"
                class="text-base text-[#2d5523] font-semibold dark:text-white w-fit justify-center flex items-center">Kategori</label>
            <select id="kategori"
                class="h-fit py-3 text-center border-[3px] border-[#2d5523] text-[#2d5523] text-base rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500 ">
                <option selected>Pilih Kategori</option>
                <option value="US">PKH</option>
                <option value="CA">PKH</option>
                <option value="FR">BPNT</option>
                <option value="DE">BPNT</option>
            </select>
        </form>
        <div class=" hidden md:flex justify-end ">
            <div class="" x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                <button @click="editModal = true"
                    class="w-auto shadow-2xl h-[57px] text-[20px] px-[24px] bg-yellow-500 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-500 hover:scale-105">
                    Ajukan Permintaan Bansos
                </button>
                <div x-show="editModal" x-cloak tabindex="-1" aria-hidden="true"
                    class="flex overflow-hidden fixed top-0 right-0 left-0 z-999  justify-center items-center w-full md:inset-0 h-full">
                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                    <div class="relative z-[1000] p-4 w-fit max-h-[700px]" @click.away="editModal = false"
                        x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <!-- Modal content -->
                        <div
                            class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                            <!-- Modal header -->
                            <div
                                class="flex w-full items-center justify-between px-4 md:px-5 border-b-2 rounded-t mb-3 p-2 border-[#B8B8B8]">
                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                    Ajukan Permintaan Bansos
                                </h3>
                                <button type="button"
                                    class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    @click="editModal = false">
                                    <i class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
                                </button>
                            </div>
                            <form class=" w-full flex flex-col  bg-white" method="POST"
                                action="{{ route('umkm.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="px-4 overflow-y-scroll md:px-5 max-h-100">


                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Status
                                        Rumah</label>
                                    <select id=""
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Pilih Status Kepemilikan Rumah</option>
                                        <option value="">Kontrak/Kos</option>
                                        <option value="">Tinggal Dengan Keluarga</option>
                                        <option value="">Milik Sendiri</option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Tanggungan</label>
                                    <select id=""
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Pilih Total Penghasilan</option>
                                        <option value="">&le; Rp. 1.000.000</option>
                                        <option value="">Rp. 1.000.000 - Rp. 2.000.000</option>
                                        <option value="">Rp. 2.000.000 - Rp. 3.000.000</option>
                                        <option value="">Rp. 3.000.000 - Rp. 4.000.000</option>
                                        <option value="">Rp. 4.000.000 - Rp. 5.000.000</option>
                                        <option value="">&ge; Rp. 5.000.000 </option>
                                    </select>
                                    <label for=""
                                        class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Luas Tanah Rumah yang Ditempati</label>
                                    <select id=""
                                        class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Pilih Luas Tanah</option>
                                        <option value="">&le; 20 m&sup2;</option>
                                        <option value="">20 m&sup2; - 40 m&sup2;</option>
                                        <option value="">40 m&sup2; - 60 m&sup2;</option>
                                        <option value="">60 m&sup2; - 80 m&sup2;</option>
                                        <option value="">&ge; 80m&sup2;</option>
                                    </select>
                                    <label for=""
                                    class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Total Pengeluaran Listrik dalam 1 Bulan</label>
                                <select id=""
                                    class="bg-gray-50 border mb-3 border-[#2d5523] text-[#2d5523] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                        class="block w-full text-sm text-[#2d5523] p-2.5 border border-[#2d5523] mb-3 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="" type="file">
                                    <label class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white"
                                        for="">Masukkan Surat Keterangan Tidak Mampu(SKTM)</label>
                                    <input
                                        class="block w-full text-sm text-[#2d5523] p-2.5 border border-[#2d5523] mb-6 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="" type="file">


                                </div>
                                <div
                                    class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                    <button @click="editModal = false"
                                        class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Batal
                                    </button>
                                    <button type="submit"
                                        class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
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


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
        <table class="w-full text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-gray-700 dark:text-gray-400">
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
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                        <div class="text-base text-[#2d5523] font-semibold">Diproses</div>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                        <div class="h-2.5 w-2.5 rounded-full  bg-green-500"></div>
                        <div class="text-base text-[#2d5523] font-semibold">Diterima</div>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                        <div class="h-2.5 w-2.5 rounded-full  bg-red-500"></div>
                        <div class="text-base text-[#2d5523] font-semibold">Ditolak</div>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>
    {{-- <div class="px-8 py-5">
        {{ $penduduks->links() }}
    </div> --}}

</div>

<x-footer>

</x-footer>
