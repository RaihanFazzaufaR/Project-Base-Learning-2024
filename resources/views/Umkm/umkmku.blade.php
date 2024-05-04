<x-header menu='{{ $menu }}' >
   
</x-header>


<div class="w-[100%]  relative flex justify-center items-center ">
    <img src="{{ asset('assets/images/bg-index-UMKM.png') }}" alt="" class="w-full">
    <div
        class="bg-white/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] font-bold text-[36px]">UMKM DI RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center">“Bangun Ekonomi Berkelanjutan di Setiap Sudut
            RW”</p>
    </div>

</div>
<div class="bg-[#Fff] min-h-[100vh] px-[65px] py-[34px] w-[100%]">
    <div class="flex flex-row gap-14 mt-7">
        <div class="w-full items-center flex-col ">
            <div class="flex justify-end pb-7">
                <button class="w-auto shadow-2xl h-[57px] text-[20px] px-15 bg-yellow-500 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-500 hover:scale-105"
                    data-modal-target="ajukan-umkm" data-modal-toggle="ajukan-umkm">
                    Ajukan UMKM Anda
                </button>
            </div>
            <div id="ajukan-umkm" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 z-[999] justify-center items-center w-full inset-0 ">
                <div class="relative p-32 w-full  max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                            <h3 class="text-xl font-extrabold  dark:text-white">
                                Ajukan UMKM
                            </h3>
                            <button type="button"
                                class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="ajukan-umkm">
                                <i class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5 w-full flex flex-col bg-white" method="POST" action="">
                            <div class="flex w-full h-fit gap-6">
                                {{-- kolom kiri --}}
                                <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                    <div class="gap-2 flex w-full">
                                        <div class="basis-1/4 h-full flex items-center">
                                            <label for="kelas"
                                                class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                Pemilik</label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center">
                                            <input id="kelas" list="listKelas" name="kelas"
                                                placeholder="Masukkan Nama Pemilik UMKM"
                                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div>
                                        <datalist id="listKelas">

                                        </datalist>
                                    </div>

                                    <div class="gap-2 flex w-full">
                                        <div class="basis-1/4 h-full flex items-center">
                                            <label for="kelas"
                                                class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                UMKM</label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center">
                                            <input id="kelas" list="listKelas" name="kelas"
                                                placeholder="Masukkan Nama  UMKM"
                                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div>
                                        <datalist id="listKelas">

                                        </datalist>
                                    </div>
                                    <div class="gap-2 flex w-full">
                                        <div class="basis-1/4 h-full flex items-center">
                                            <label for="kelas"
                                                class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                                WhatsApp</label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center">
                                            <input id="kelas" list="listKelas" name="kelas"
                                                placeholder="Masukkan No. WhatsApp"
                                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div>
                                        <datalist id="listKelas">

                                        </datalist>
                                    </div>
                                    <div class="gap-2 flex w-full">
                                        <div class="basis-1/4 h-full flex items-center">
                                            <label for="kelas"
                                                class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Foto
                                                UMKM</label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center">
                                            <input
                                                class="bg-gray-50 shadow-md border-[2px] border-[#2d5523] text-[#2d5523] placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                aria-describedby="file_input_help" id="file_input" type="file">
                                        </div>
                                        <datalist id="listKelas">

                                        </datalist>
                                    </div>
                                    <div class="gap-2 flex w-full">
                                        <div class="basis-1/4 h-full flex items-center">
                                            <label for="kelas"
                                                class="text-lg font-bold pt-[23px] items-center flex w-full text-[#2d5523] dark:text-white">Jam
                                                Operasional</label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center w-full justify-center">
                                            <div class="basis-1/2 h-full flex w-full justify-center flex-col ">
                                                <label for="start-time"
                                                    class=" mb-2 text-sm w-fit mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                    Buka:</label>
                                                <div class="w-fit mx-auto">
                                                    <input type="time" id="start-time"
                                                        class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        min="09:00" max="18:00" value="00:00" required />
                                                </div>
                                            </div>
                                            <div class="basis-1/2 h-full flex w-full justify-center flex-col">
                                                <label for="end-time"
                                                    class="block mb-2 text-sm font-medium mx-auto text-[#2d5523] dark:text-white">Jam
                                                    Tutup:</label>
                                                <div class="w-fit mx-auto">
                                                    <input type="time" id="start-time"
                                                        class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        min="09:00" max="18:00" value="00:00" required />
                                                </div>
                                            </div>
                                        </div>
                                        <datalist id="listKelas">

                                        </datalist>
                                    </div>

                                </div>
                                {{-- kolom kanan --}}
                                <div class="flex flex-col gap-5 mb-4 w-full basis-1/2 ">
                                    <div class="gap-2 flex w-full">
                                        <div class="basis-1/4 h-full flex items-center">
                                            <label for="kelas"
                                                class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Kategori</label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center">
                                            <input id="kelas" list="listKelas" name="kelas"
                                                placeholder="Pilih Kategori UMKM"
                                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div>
                                        <datalist id="listKelas">

                                        </datalist>
                                    </div>

                                    <div class="gap-2 flex w-full">
                                        <div class="basis-1/4 h-full flex items-center">
                                            <label for="kelas"
                                                class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Koordinat
                                                UMKM</label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center">
                                            <input id="kelas" list="listKelas" name="kelas"
                                                placeholder="Masukkan Koordinat Lokasi Sesuai Google Maps"
                                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div>
                                        <datalist id="listKelas">

                                        </datalist>
                                    </div>
                                    <div class="gap-2 flex w-full">
                                        <div class="basis-1/4 h-fit ">
                                            <label for="kelas"
                                                class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat
                                                UMKM</label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center">
                                            <textarea id="kelas" cols="19" rows="3" name="kelas" placeholder="Masukkan Deskripsi Singkat UMKM"
                                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </textarea>
                                        </div>
                                        <datalist id="listKelas">

                                        </datalist>
                                    </div>
                                    <div class="gap-2 flex w-full">
                                        <div class="basis-1/4 h-fit ">
                                            <label for="kelas"
                                                class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Deskripsi
                                                Singkat</label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center">
                                            {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                            <textarea id="kelas" cols="19" rows="3" name="kelas" placeholder="Masukkan Deskripsi Singkat UMKM"
                                                class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </textarea>
                                        </div>
                                        <datalist id="listKelas">

                                        </datalist>
                                    </div>
                                </div>

                            </div>
                            <div class="w-full text-[#2d5523] font-sm pb-4">
                                *Sebelum mengajukan UMKM Anda, pastikan UMKM Anda sudah ada pada Google Maps
                            </div>
                            <div class="flex w-full justify-end items-center px-7">
                                <button type="submit"
                                    class="text-white items-center bg-[#2d5523] hover:bg-[#e2a229] hover:text-[#2d5523] focus:ring-4 text-center w-full focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Ajukan UMKM
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- table --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 w-[27%] py-3 ">
                                UMKM
                            </th>
                            <th scope="col" class="px-6 w-[10%] py-3 ">
                                Jam Buka
                            </th>
                            <th scope="col" class="px-6 w-[11%] py-3 ">
                                Jam Tutup
                            </th>
                            <th scope="col" class="px-6 w-[16%] py-3">
                                Foto UMKM
                            </th>
                            <th scope="col" class="px-6 w-[25%] py-3">
                                Aksi
                            </th>
                            <th scope="col" class="px-6 w-[11%] py-3 ">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                Warung Madura
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                00.00
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                23.59
                            </td>
                            <td>
                                <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false"
                                    class="px-6 py-4 flex justify-center w-full">
                                    <button @click="detailModal = true"
                                        class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-image"></i>
                                        <div>Lihat Foto</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="detailModal" tabindex="-1" aria-hidden="true"
                                        class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                            @click.away="detailModal = false"
                                            x-transition:enter="motion-safe:ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex h-[75px] items-center justify-between px-3 md:px-5 border-b-[3.5px] rounded-t border-[#2d5523]">
                                                    <h3 class="text-xl font-bold text-[#2d5523] dark:text-white">
                                                        Foto UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl "></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="relative p-10 w-full  max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white w-115  dark:bg-gray-700">
                                                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}"
                                                            alt="" class="w-full">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td scope="row" class=" ">
                                <div class="px-6 py-4 w-full flex gap-4 justify-center h-full items-center">
                                    {{-- detail --}}
                                    <div class="flex justify-end ">
                                        <button class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all"
                                            data-modal-target="detail-umkm1" data-modal-toggle="detail-umkm1">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <div>Detail</div>
                                        </button>
                                    </div>
                                    <div id="detail-umkm1" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 !z-[999] justify-center items-center w-full inset-0 ">
                                        <div class="relative p-32 w-full  max-h-full">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                    <h3 class="text-xl font-extrabold  dark:text-white">
                                                        Detail UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="detail-umkm1">
                                                        <i
                                                            class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form class="p-4 md:p-5 w-full flex flex-col bg-white" method="POST"
                                                    action="">
                                                    <div class="flex w-full h-fit gap-6">
                                                        {{-- kolom kiri --}}
                                                        <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        Pemilik</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="Sumiyati"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="Warung Madura"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                                                        WhatsApp</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="0837283794782"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold pt-[23px] items-center flex w-full text-[#2d5523] dark:text-white">Jam
                                                                        Operasional</label>
                                                                </div>
                                                                <div
                                                                    class="basis-3/4 h-full flex items-center w-full justify-center">
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col ">
                                                                        <label for="start-time"
                                                                            class=" mb-2 text-sm w-fit mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                                            Buka:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <div
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg font-medium text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-[14px] px-9 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                00.00
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col">
                                                                        <label for="end-time"
                                                                            class="block mb-2 text-sm font-medium mx-auto text-[#2d5523] dark:text-white">Jam
                                                                            Tutup:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <div
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg font-medium text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-[14px] px-9 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                23.59
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                        </div>
                                                        {{-- kolom kanan --}}
                                                        <div class="flex flex-col gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Kategori</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled
                                                                        value="Makanan, Minuman, Kebutuham Pokok"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Koordinat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled
                                                                        value="-7.947523154303634, 112.62031037480725"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas" disabled
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Jl. Semanggi Timur No.7, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Deskripsi
                                                                        Singkat</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas" disabled
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Warung Madura yang menyediakan berbagai kebutubhan pokok yang tidak pernah tutup kecuali hari kiamat
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="flex w-full justify-end items-center mt-6">
                                                        <button type="button" data-modal-toggle="detail-umkm1"
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Kembali
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- edit --}}
                                    <div class="flex justify-end ">
                                        <button class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all"
                                            data-modal-target="edit-umkm1" data-modal-toggle="edit-umkm1">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <div>Edit</div>
                                        </button>
                                    </div>
                                    <div id="edit-umkm1" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 !z-[999] justify-center items-center w-full inset-0 ">
                                        <div class="relative p-32 w-full  max-h-full">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                    <h3 class="text-xl font-extrabold  dark:text-white">
                                                        Edit UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="edit-umkm1">
                                                        <i
                                                            class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form class="p-4 md:p-5 w-full flex flex-col bg-white" method="POST"
                                                    action="">
                                                    <div class="flex w-full h-fit gap-6">
                                                        {{-- kolom kiri --}}
                                                        <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        Pemilik</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" value="Sumiyati"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" value="Warung Madura"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                                                        WhatsApp</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" value="0837283794782"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div
                                                                    class="basis-1/4 h-full flex flex-col items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Foto
                                                                        UMKM</label>

                                                                    <div x-data="{ 'detailModal': false }"
                                                                        @keydown.escape="detailModal = false"
                                                                        class=" pt-3 flex  w-full">
                                                                        <button @click="detailModal = true"
                                                                            type="button"
                                                                            class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                                                            <i class="fa-solid fa-image"></i>
                                                                            <div>Lihat Foto</div>
                                                                        </button>
                                                                        <!-- Detail modal -->
                                                                        <div x-show="detailModal" tabindex="-1"
                                                                            aria-hidden="true"
                                                                            class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                                                            <div
                                                                                class="absolute z-999 bg-black/25 h-[100vh] w-full">
                                                                            </div>
                                                                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                                                                @click.away="detailModal = false"
                                                                                x-transition:enter="motion-safe:ease-out duration-300"
                                                                                x-transition:enter-start="opacity-0 scale-90"
                                                                                x-transition:enter-end="opacity-100 scale-100">
                                                                                <!-- Modal content -->
                                                                                <div
                                                                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                                                    <!-- Modal header -->
                                                                                    <div
                                                                                        class="flex h-[75px] items-center justify-between px-3 md:px-5 border-b-[3.5px] rounded-t border-[#2d5523]">
                                                                                        <h3
                                                                                            class="text-xl font-bold text-[#2d5523] dark:text-white">
                                                                                            Foto UMKM
                                                                                        </h3>
                                                                                        <button type="button"
                                                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                                            @click="detailModal = false">
                                                                                            <i
                                                                                                class="fa-solid fa-xmark text-xl "></i>
                                                                                            <span class="sr-only">Close
                                                                                                modal</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <!-- Modal body -->
                                                                                    <div
                                                                                        class="relative p-10 w-full  max-h-full">
                                                                                        <!-- Modal content -->
                                                                                        <div
                                                                                            class="relative bg-white w-115  dark:bg-gray-700">
                                                                                            <img src="{{ asset('assets/images/toko-kelontong.jpg') }}"
                                                                                                alt=""
                                                                                                class="w-full">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input
                                                                        class="bg-gray-50 shadow-md border-[2px] border-[#2d5523] text-[#2d5523] placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                        aria-describedby="file_input_help"
                                                                        id="file_input" type="file">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold pt-[23px] items-center flex w-full text-[#2d5523] dark:text-white">Jam
                                                                        Operasional</label>
                                                                </div>
                                                                <div
                                                                    class="basis-3/4 h-full flex items-center w-full justify-center">
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col ">
                                                                        <label for="start-time"
                                                                            class=" mb-2 text-sm w-fit mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                                            Buka:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <input type="time" id="start-time"
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                value="00:00" required />
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col">
                                                                        <label for="end-time"
                                                                            class="block mb-2 text-sm font-medium mx-auto text-[#2d5523] dark:text-white">Jam
                                                                            Tutup:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <input type="time" id="start-time"
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                value="23:50" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                        </div>
                                                        {{-- kolom kanan --}}
                                                        <div class="flex flex-col gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Kategori</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas"
                                                                        value="Makanan, Minuman, Kebutuham Pokok"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Koordinat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas"
                                                                        value="-7.947523154303634, 112.62031037480725"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Jl. Semanggi Timur No.7, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Deskripsi
                                                                        Singkat</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Warung Madura yang menyediakan berbagai kebutubhan pokok yang tidak pernah tutup kecuali hari kiamat
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="flex w-full  justify-end items-center gap-5 mt-6">
                                                        <button type="button" data-modal-toggle="edit-umkm1"
                                                            class="hover:text-white items-center hover:bg-[#2d5523] bg-[#fff] hover:border-[3px] border-[3px] border-[#2d552d] text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Kembali
                                                        </button>
                                                        <button type="submit"
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Simpan
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- hapus --}}
                                    <a href="#"
                                        class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <div>Hapus</div>
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4 w-full ">
                                <div class="flex justify-start gap-3 w-full h-full items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500"></div>
                                    <div class="text-base text-[#2d5523] font-semibold">Diterima</div>
                                </div>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                Warung Madura
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                00.00
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                23.59
                            </td>
                            <td>
                                <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false"
                                    class="px-6 py-4 flex justify-center w-full">
                                    <button @click="detailModal = true"
                                        class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-image"></i>
                                        <div>Lihat Foto</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="detailModal" tabindex="-1" aria-hidden="true"
                                        class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                            @click.away="detailModal = false"
                                            x-transition:enter="motion-safe:ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex h-[75px] items-center justify-between px-3 md:px-5 border-b-[3.5px] rounded-t border-[#2d5523]">
                                                    <h3 class="text-xl font-bold text-[#2d5523] dark:text-white">
                                                        Foto UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl "></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="relative p-10 w-full  max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white w-115  dark:bg-gray-700">
                                                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}"
                                                            alt="" class="w-full">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td scope="row" class=" ">
                                <div class="px-6 py-4 w-full flex gap-4 justify-center h-full items-center">
                                    {{-- detail --}}
                                    <div class="flex justify-end ">
                                        <button
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all"
                                            data-modal-target="detail-umkm2" data-modal-toggle="detail-umkm2">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <div>Detail</div>
                                        </button>
                                    </div>
                                    <div id="detail-umkm2" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 !z-[999] justify-center items-center w-full inset-0 ">
                                        <div class="relative p-32 w-full  max-h-full">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                    <h3 class="text-xl font-extrabold  dark:text-white">
                                                        Detail UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="detail-umkm2">
                                                        <i
                                                            class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form class="p-4 md:p-5 w-full flex flex-col bg-white" method="POST"
                                                    action="">
                                                    <div class="flex w-full h-fit gap-6">
                                                        {{-- kolom kiri --}}
                                                        <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        Pemilik</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="Sumiyati"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="Warung Madura"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                                                        WhatsApp</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="0837283794782"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold pt-[23px] items-center flex w-full text-[#2d5523] dark:text-white">Jam
                                                                        Operasional</label>
                                                                </div>
                                                                <div
                                                                    class="basis-3/4 h-full flex items-center w-full justify-center">
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col ">
                                                                        <label for="start-time"
                                                                            class=" mb-2 text-sm w-fit mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                                            Buka:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <div
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg font-medium text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-[14px] px-9 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                00.00
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col">
                                                                        <label for="end-time"
                                                                            class="block mb-2 text-sm font-medium mx-auto text-[#2d5523] dark:text-white">Jam
                                                                            Tutup:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <div
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg font-medium text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-[14px] px-9 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                23.59
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                        </div>
                                                        {{-- kolom kanan --}}
                                                        <div class="flex flex-col gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Kategori</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled
                                                                        value="Makanan, Minuman, Kebutuham Pokok"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Koordinat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled
                                                                        value="-7.947523154303634, 112.62031037480725"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas" disabled
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Jl. Semanggi Timur No.7, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Deskripsi
                                                                        Singkat</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas" disabled
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Warung Madura yang menyediakan berbagai kebutubhan pokok yang tidak pernah tutup kecuali hari kiamat
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="flex w-full justify-end items-center mt-6">
                                                        <button type="button" data-modal-toggle="detail-umkm2"
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Kembali
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- hapus --}}
                                    <a href="#"
                                        class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <div>Hapus</div>

                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4 w-full ">
                                <div class="flex justify-start gap-3 w-full h-full items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-red-500"></div>
                                    <div class="text-base text-[#2d5523] font-semibold">Ditolak</div>
                                </div>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                Warung Madura
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                00.00
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                23.59
                            </td>
                            <td>
                                <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false"
                                    class="px-6 py-4 flex justify-center w-full">
                                    <button @click="detailModal = true"
                                        class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-image"></i>
                                        <div>Lihat Foto</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="detailModal" tabindex="-1" aria-hidden="true"
                                        class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                            @click.away="detailModal = false"
                                            x-transition:enter="motion-safe:ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex h-[75px] items-center justify-between px-3 md:px-5 border-b-[3.5px] rounded-t border-[#2d5523]">
                                                    <h3 class="text-xl font-bold text-[#2d5523] dark:text-white">
                                                        Foto UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl "></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="relative p-10 w-full  max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white w-115  dark:bg-gray-700">
                                                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}"
                                                            alt="" class="w-full">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td scope="row" class=" ">
                                <div class="px-6 py-4 w-full flex gap-4 justify-center h-full items-center">
                                    {{-- detail --}}
                                    <div class="flex justify-end ">
                                        <button class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all"
                                            data-modal-target="detail-umkm3" data-modal-toggle="detail-umkm3">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <div>Detail</div>
                                        </button>
                                    </div>
                                    <div id="detail-umkm3" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 !z-[999] justify-center items-center w-full inset-0 ">
                                        <div class="relative p-32 w-full  max-h-full">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                    <h3 class="text-xl font-extrabold  dark:text-white">
                                                        Detail UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="detail-umkm3">
                                                        <i
                                                            class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form class="p-4 md:p-5 w-full flex flex-col bg-white" method="POST"
                                                    action="">
                                                    <div class="flex w-full h-fit gap-6">
                                                        {{-- kolom kiri --}}
                                                        <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        Pemilik</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="Sumiyati"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="Warung Madura"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                                                        WhatsApp</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="0837283794782"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold pt-[23px] items-center flex w-full text-[#2d5523] dark:text-white">Jam
                                                                        Operasional</label>
                                                                </div>
                                                                <div
                                                                    class="basis-3/4 h-full flex items-center w-full justify-center">
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col ">
                                                                        <label for="start-time"
                                                                            class=" mb-2 text-sm w-fit mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                                            Buka:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <div
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg font-medium text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-[14px] px-9 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                00.00
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col">
                                                                        <label for="end-time"
                                                                            class="block mb-2 text-sm font-medium mx-auto text-[#2d5523] dark:text-white">Jam
                                                                            Tutup:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <div
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg font-medium text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-[14px] px-9 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                23.59
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                        </div>
                                                        {{-- kolom kanan --}}
                                                        <div class="flex flex-col gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Kategori</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled
                                                                        value="Makanan, Minuman, Kebutuham Pokok"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Koordinat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled
                                                                        value="-7.947523154303634, 112.62031037480725"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas" disabled
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Jl. Semanggi Timur No.7, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Deskripsi
                                                                        Singkat</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas" disabled
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Warung Madura yang menyediakan berbagai kebutubhan pokok yang tidak pernah tutup kecuali hari kiamat
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="flex w-full justify-end items-center mt-6">
                                                        <button type="button" data-modal-toggle="detail-umkm3"
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Kembali
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- edit --}}
                                    
                                    {{-- hapus --}}
                                    <a href="#"
                                        class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-xmark"></i>
                                        <div>Batalkan</div>
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4 w-full ">
                                <div class="flex justify-start gap-3 w-full h-full items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-blue-500"></div>
                                    <div class="text-base text-[#2d5523] font-semibold">Diproses</div>
                                </div>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                Warung Madura
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                00.00
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                                23.59
                            </td>
                            <td>
                                <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false"
                                    class="px-6 py-4 flex justify-center w-full">
                                    <button @click="detailModal = true"
                                        class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-image"></i>
                                        <div>Lihat Foto</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="detailModal" tabindex="-1" aria-hidden="true"
                                        class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                            @click.away="detailModal = false"
                                            x-transition:enter="motion-safe:ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex h-[75px] items-center justify-between px-3 md:px-5 border-b-[3.5px] rounded-t border-[#2d5523]">
                                                    <h3 class="text-xl font-bold text-[#2d5523] dark:text-white">
                                                        Foto UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl "></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="relative p-10 w-full  max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white w-115  dark:bg-gray-700">
                                                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}"
                                                            alt="" class="w-full">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td scope="row" class=" ">
                                <div class="px-6 py-4 w-full flex gap-4 justify-center h-full items-center">
                                    {{-- detail --}}
                                    <div class="flex justify-end ">
                                        <button class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all"
                                            data-modal-target="detail-umkm4" data-modal-toggle="detail-umkm4">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <div>Detail</div>
                                        </button>
                                    </div>
                                    <div id="detail-umkm4" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 !z-[999] justify-center items-center w-full inset-0 ">
                                        <div class="relative p-32 w-full  max-h-full">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                    <h3 class="text-xl font-extrabold  dark:text-white">
                                                        Detail UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="detail-umkm4">
                                                        <i
                                                            class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form class="p-4 md:p-5 w-full flex flex-col bg-white" method="POST"
                                                    action="">
                                                    <div class="flex w-full h-fit gap-6">
                                                        {{-- kolom kiri --}}
                                                        <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        Pemilik</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="Sumiyati"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="Warung Madura"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                                                        WhatsApp</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled value="0837283794782"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold pt-[23px] items-center flex w-full text-[#2d5523] dark:text-white">Jam
                                                                        Operasional</label>
                                                                </div>
                                                                <div
                                                                    class="basis-3/4 h-full flex items-center w-full justify-center">
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col ">
                                                                        <label for="start-time"
                                                                            class=" mb-2 text-sm w-fit mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                                            Buka:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <div
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg font-medium text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-[14px] px-9 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                00.00
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col">
                                                                        <label for="end-time"
                                                                            class="block mb-2 text-sm font-medium mx-auto text-[#2d5523] dark:text-white">Jam
                                                                            Tutup:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <div
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg font-medium text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-[14px] px-9 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                23.59
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                        </div>
                                                        {{-- kolom kanan --}}
                                                        <div class="flex flex-col gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Kategori</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled
                                                                        value="Makanan, Minuman, Kebutuham Pokok"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Koordinat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" disabled
                                                                        value="-7.947523154303634, 112.62031037480725"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas" disabled
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Jl. Semanggi Timur No.7, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Deskripsi
                                                                        Singkat</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas" disabled
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Warung Madura yang menyediakan berbagai kebutubhan pokok yang tidak pernah tutup kecuali hari kiamat
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="flex w-full justify-end items-center mt-6">
                                                        <button type="button" data-modal-toggle="detail-umkm4"
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Kembali
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- edit --}}
                                    <div class="flex justify-end ">
                                        <button class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all"
                                            data-modal-target="edit-umkm4" data-modal-toggle="edit-umkm4">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <div>Edit</div>
                                        </button>
                                    </div>
                                    <div id="edit-umkm4" tabindex="-1" aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 !z-[999] justify-center items-center w-full inset-0 ">
                                        <div class="relative p-32 w-full  max-h-full">
                                            <!-- Modal content -->
                                            <div
                                                class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                    <h3 class="text-xl font-extrabold  dark:text-white">
                                                        Edit UMKM
                                                    </h3>
                                                    <button type="button"
                                                        class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="edit-umkm4">
                                                        <i
                                                            class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form class="p-4 md:p-5 w-full flex flex-col bg-white" method="POST"
                                                    action="">
                                                    <div class="flex w-full h-fit gap-6">
                                                        {{-- kolom kiri --}}
                                                        <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        Pemilik</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" value="Sumiyati"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" value="Warung Madura"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                                                        WhatsApp</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas" value="0837283794782"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div
                                                                    class="basis-1/4 h-full flex flex-col items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Foto
                                                                        UMKM</label>

                                                                    <div x-data="{ 'detailModal': false }"
                                                                        @keydown.escape="detailModal = false"
                                                                        class=" pt-3 flex  w-full">
                                                                        <button @click="detailModal = true"
                                                                            type="button"
                                                                            class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all">
                                                                            <i class="fa-solid fa-image"></i>
                                                                            <div>Lihat Foto</div>
                                                                        </button>
                                                                        <!-- Detail modal -->
                                                                        <div x-show="detailModal" tabindex="-1"
                                                                            aria-hidden="true"
                                                                            class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                                                            <div
                                                                                class="absolute z-999 bg-black/25 h-[100vh] w-full">
                                                                            </div>
                                                                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                                                                @click.away="detailModal = false"
                                                                                x-transition:enter="motion-safe:ease-out duration-300"
                                                                                x-transition:enter-start="opacity-0 scale-90"
                                                                                x-transition:enter-end="opacity-100 scale-100">
                                                                                <!-- Modal content -->
                                                                                <div
                                                                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                                                                    <!-- Modal header -->
                                                                                    <div
                                                                                        class="flex h-[75px] items-center justify-between px-3 md:px-5 border-b-[3.5px] rounded-t border-[#2d5523]">
                                                                                        <h3
                                                                                            class="text-xl font-bold text-[#2d5523] dark:text-white">
                                                                                            Foto UMKM
                                                                                        </h3>
                                                                                        <button type="button"
                                                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                                            @click="detailModal = false">
                                                                                            <i
                                                                                                class="fa-solid fa-xmark text-xl "></i>
                                                                                            <span class="sr-only">Close
                                                                                                modal</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <!-- Modal body -->
                                                                                    <div
                                                                                        class="relative p-10 w-full  max-h-full">
                                                                                        <!-- Modal content -->
                                                                                        <div
                                                                                            class="relative bg-white w-115  dark:bg-gray-700">
                                                                                            <img src="{{ asset('assets/images/toko-kelontong.jpg') }}"
                                                                                                alt=""
                                                                                                class="w-full">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input
                                                                        class="bg-gray-50 shadow-md border-[2px] border-[#2d5523] text-[#2d5523] placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                        aria-describedby="file_input_help"
                                                                        id="file_input" type="file">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold pt-[23px] items-center flex w-full text-[#2d5523] dark:text-white">Jam
                                                                        Operasional</label>
                                                                </div>
                                                                <div
                                                                    class="basis-3/4 h-full flex items-center w-full justify-center">
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col ">
                                                                        <label for="start-time"
                                                                            class=" mb-2 text-sm w-fit mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                                            Buka:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <input type="time" id="start-time"
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                value="00:00" required />
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="basis-1/2 h-full flex w-full justify-center flex-col">
                                                                        <label for="end-time"
                                                                            class="block mb-2 text-sm font-medium mx-auto text-[#2d5523] dark:text-white">Jam
                                                                            Tutup:</label>
                                                                        <div class="w-fit mx-auto">
                                                                            <input type="time" id="start-time"
                                                                                class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                value="23:50" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                        </div>
                                                        {{-- kolom kanan --}}
                                                        <div class="flex flex-col gap-5 mb-4 w-full basis-1/2 ">
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Kategori</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas"
                                                                        value="Makanan, Minuman, Kebutuham Pokok"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>

                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-full flex items-center">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Koordinat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <input id="kelas" list="listKelas"
                                                                        name="kelas"
                                                                        value="-7.947523154303634, 112.62031037480725"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat
                                                                        UMKM</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Jl. Semanggi Timur No.7, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                            <div class="gap-2 flex w-full">
                                                                <div class="basis-1/4 h-fit ">
                                                                    <label for="kelas"
                                                                        class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Deskripsi
                                                                        Singkat</label>
                                                                </div>
                                                                <div class="basis-3/4 h-full flex items-center">
                                                                    {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                                                    <textarea id="kelas" cols="19" rows="3" name="kelas"
                                                                        class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Warung Madura yang menyediakan berbagai kebutubhan pokok yang tidak pernah tutup kecuali hari kiamat
                                                                </textarea>
                                                                </div>
                                                                <datalist id="listKelas">

                                                                </datalist>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="flex w-full  justify-end items-center gap-5 mt-6">
                                                        <button type="button" data-modal-toggle="edit-umkm4"
                                                            class="hover:text-white items-center hover:bg-[#2d5523] bg-[#fff] hover:border-[3px] border-[3px] border-[#2d552d] text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Kembali
                                                        </button>
                                                        <button type="submit"
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Ajukan Ulang
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- hapus --}}
                                    <a href="#"
                                        class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <div>Hapus</div>
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4 w-full ">
                                <div class="flex justify-start gap-3 w-full h-full items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-yellow-500"></div>
                                    <div class="text-base text-[#2d5523] font-semibold">Dibatalkan</div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<x-footer>

    <script defer src="{{ asset('assets/js/bundle.js') }}"></script>

</x-footer>
