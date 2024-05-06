<x-header menu='{{ $menu }}'>

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
                <button
                    class="w-auto shadow-2xl h-[57px] text-[20px] px-15 bg-yellow-500 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-500 hover:scale-105"
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
                                        <div class="basis-1/4 h-full flex items-center justify-center">
                                            <label class="text-lg font-bold  items-center flex w-full text-[#2d5523] dark:text-white">
                                                Kategori
                                            </label>
                                        </div>
                                        <div class="basis-3/4 h-full flex items-center">
                                                <div class="text-[#2d5523]  placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 ">
                                                    <select class="hidden" x-cloak id="select">
                                                        <option value="1">Makanan</option>
                                                        <option value="2">Minuman</option>
                                                        <option value="3">Peralatan Rumah Tangga</option>
                                                        <option value="4">Kebutuhan Pokok</option>
                                                        <option value="4">Jasa</option>
                                                        <option value="4">Jasa2</option>
                                                    </select>
                                                    <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col items-center">
                                                        <input name="values" type="hidden" :value="selectedValues()" />
                                                        <div class="relative z-20 inline-block  w-full">
                                                            <div class="relative flex flex-col items-center h-full">
                                                                <div @click="open" class="w-full">
                                                                    <div class=" flex rounded border-2 border-[#2d5523] border-stroke py-2 pl-3 pr-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input">
                                                                        <div class="flex flex-auto flex-wrap gap-3">
                                                                            <template x-for="(option,index) in selected" :key="index">
                                                                                <div class="my-1.5 flex items-center justify-center rounded border-[.5px] border-stroke bg-gray  px-2.5 py-1.5 text-sm font-medium dark:border-strokedark dark:bg-white/30">
                                                                                    <div class="max-w-full flex-initial" x-model="options[option]" x-text="options[option].text"></div>
                                                                                    <div class="flex flex-auto flex-row-reverse">
                                                                                        <div @click="remove(index,option)" class="cursor-pointer pl-2 hover:text-danger">
                                                                                            <svg class="fill-current" role="button" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z" fill="currentColor"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </template>
                                                                            <div x-show="selected.length == 0" class="flex-1 ">
                                                                                <input placeholder="Pilih Kategori UMKM" class=" placeholder-[#2d5523]" :value="selectedValues()" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex w-8 items-center py-1 pl-1 pr-1">
                                                                            <button type="button" @click="open" class="h-6 w-6 cursor-pointer outline-none focus:outline-none" :class="isOpen() === true ? 'rotate-180' : ''">
                                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <g opacity="0.8">
                                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" fill="#637381"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-full px-4">
                                                                    <div x-show.transition.origin.top="isOpen()" class="max-h-select absolute top-full left-0 z-40 w-full overflow-y-auto rounded bg-white shadow dark:bg-form-input" @click.outside="close">
                                                                        <div class="flex w-full flex-col">
                                                                            <template x-for="(option,index) in options" :key="index">
                                                                                <div>
                                                                                    <div class="w-full cursor-pointer rounded-t border-b border-stroke hover:bg-primary/5 dark:border-form-strokedark" @click="select(index,$event)">
                                                                                        <div :class="option.selected ? 'border-primary' : ''" class="relative flex w-full items-center border-l-2 border-transparent p-2 pl-2">
                                                                                            <div class="flex w-full items-center">
                                                                                                <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </template>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>
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
                                <div class="flex justify-center ">
                                    <button
                                    class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all" data-modal-target="lihat-foto1" data-modal-toggle="lihat-foto1">
                                    <i class="fa-solid fa-image"></i>
                                    <div>Lihat Foto</div>
                                        
                                    </button>
                                </div>
                                <div id="lihat-foto1" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 z-[999] justify-center items-center w-full inset-0 ">
                                    <div class="relative p-32 w-fit  max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                <h3 class="text-xl font-extrabold  dark:text-white">
                                                    Foto UMKM
                                                </h3>
                                                <button type="button"
                                                    class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="lihat-foto1">
                                                    <i class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
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
                            </td>
                            <td scope="row" class=" ">
                                <div class="px-6 py-4 w-full flex gap-4 justify-center h-full items-center">
                                    {{-- detail --}}
                                    <div class="flex justify-end ">
                                        <button
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all"
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
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:scale-105 transition duration-300 ease-in-out">
                                                            Kembali
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- edit --}}
                                    <div class="flex justify-end ">
                                        <button
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all"
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
                                                                        name="kelas" value="Sumiyati" readonly
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
                                                            class="hover:text-white items-center hover:bg-[#2d5523] bg-[#fff] hover:border-[3px] border-[3px] border-[#2d552d] text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:scale-105 transition duration-300 ease-in-out">
                                                            Kembali
                                                        </button>

                                                        <div class="h-full w-fit py-2" x-data="{ 'filterModal': false }"
                                                            @keydown.escape="filterModal = false">
                                                            <button @click="filterModal = true" type="button"
                                                                class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:scale-105 transition duration-300 ease-in-out">
                                                                <div class="text-xl font-semibold">Simpan</div>
                                                            </button>

                                                            <!-- Main modal -->
                                                            <div x-show="filterModal" tabindex="-1"
                                                                aria-hidden="true"
                                                                class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                                                <div
                                                                    class="absolute z-999 bg-black/25 h-[100vh] w-full">
                                                                </div>
                                                                <div class="relative flex justify-center  z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                                                    @click.away="filterModal = false"
                                                                    x-transition:enter="motion-safe:ease-out duration-300"
                                                                    x-transition:enter-start="opacity-0 scale-90"
                                                                    x-transition:enter-end="opacity-100 scale-100">
                                                                    <!-- Modal content -->
                                                                    <div
                                                                        class="relative w-[1000px]  bg-white rounded-lg shadow dark:bg-gray-700 border-[3px] border-[#2d5523]">
                                                                        <!-- Modal header -->
                                                                        <div
                                                                            class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-[3px] rounded-t border-[#2d5523]">
                                                                            <h3
                                                                                class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                                Alasan Pengeditan
                                                                            </h3>
                                                                            <button type="button"
                                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                                @click="filterModal = false">
                                                                                <i
                                                                                    class="fa-solid fa-xmark text-xl"></i>
                                                                                <span class="sr-only">Close
                                                                                    modal</span>
                                                                            </button>
                                                                        </div>
                                                                        <!-- Modal body -->
                                                                        <div class="w-full h-fit ">
                                                                            <form class="w-full h-full text-[#34662C]"
                                                                                method="POST"
                                                                                action="{{ route('filterPenduduk') }}">
                                                                                @csrf

                                                                                <div class=" w-full p-10">

                                                                                    <div
                                                                                        class="w-full h-full flex items-center">
                                                                                        {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                                                                        <textarea id="kelas" cols="19" rows="3" name="kelas" 
                                                                                            class="bg-white  border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                                </textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div
                                                                                    class="flex items-center justify-end  gap-4 w-full p-4 md:px-8 ">
                                                                                    <button type="button"
                                                                                        @click="filterModal = false"
                                                                                        class="hover:text-white inline-flex px-7 py-3 text-lg font-bold rounded-lg shadow-md items-center border-[#2d5523] border-[2px] hover:bg-[#2d5523] bg-white text-[#2d5523] hover:scale-105 transition duration-300 ease-in-out">
                                                                                        Kembali
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        @click="filterModal = false"
                                                                                        class="text-white inline-flex px-7 py-3 text-lg font-bold rounded-lg shadow-md items-center bg-[#2d5523] hover:bg-white border-[#2d5523] border-[2px] hover:text-[#2d5523] hover:scale-105 transition duration-300 ease-in-out">
                                                                                        Ajukan Perubahan
                                                                                    </button>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                <div class="flex justify-center ">
                                    <button
                                    class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all" data-modal-target="lihat-foto2" data-modal-toggle="lihat-foto2">
                                    <i class="fa-solid fa-image"></i>
                                    <div>Lihat Foto</div>
                                        
                                    </button>
                                </div>
                                <div id="lihat-foto2" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 z-[999] justify-center items-center w-full inset-0 ">
                                    <div class="relative p-32 w-fit  max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                <h3 class="text-xl font-extrabold  dark:text-white">
                                                    Foto UMKM
                                                </h3>
                                                <button type="button"
                                                    class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="lihat-foto2">
                                                    <i class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
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
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:scale-105 transition duration-300 ease-in-out">
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
                                <div class="flex justify-center ">
                                    <button
                                    class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all" data-modal-target="lihat-foto3" data-modal-toggle="lihat-foto3">
                                    <i class="fa-solid fa-image"></i>
                                    <div>Lihat Foto</div>
                                        
                                    </button>
                                </div>
                                <div id="lihat-foto3" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 z-[999] justify-center items-center w-full inset-0 ">
                                    <div class="relative p-32 w-fit  max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                <h3 class="text-xl font-extrabold  dark:text-white">
                                                    Foto UMKM
                                                </h3>
                                                <button type="button"
                                                    class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="lihat-foto3">
                                                    <i class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
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
                            </td>
                            <td scope="row" class=" ">
                                <div class="px-6 py-4 w-full flex gap-4 justify-center h-full items-center">
                                    {{-- detail --}}
                                    <div class="flex justify-end ">
                                        <button
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all"
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
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:scale-105 transition duration-300 ease-in-out">
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
                                <div class="flex justify-center ">
                                    <button
                                    class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all" data-modal-target="lihat-foto4" data-modal-toggle="lihat-foto4">
                                    <i class="fa-solid fa-image"></i>
                                    <div>Lihat Foto</div>
                                        
                                    </button>
                                </div>
                                <div id="lihat-foto4" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 z-[999] justify-center items-center w-full inset-0 ">
                                    <div class="relative p-32 w-fit  max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow  dark:bg-gray-700 border-[3.5px] border-[#2d5523]">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-gray-600 border-[#2d5532] border-b-[3.5px]">
                                                <h3 class="text-xl font-extrabold  dark:text-white">
                                                    Foto UMKM
                                                </h3>
                                                <button type="button"
                                                    class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="lihat-foto4">
                                                    <i class="fa-solid fa-xmark text-[#2d5523] font-extrabold text-xl"></i>
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
                            </td>
                            <td scope="row" class=" ">
                                <div class="px-6 py-4 w-full flex gap-4 justify-center h-full items-center">
                                    {{-- detail --}}
                                    <div class="flex justify-end ">
                                        <button
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all"
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
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:scale-105 transition duration-300 ease-in-out">
                                                            Kembali
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- edit --}}
                                    <div class="flex justify-end ">
                                        <button
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all"
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
                                                                        name="kelas" value="Sumiyati" disabled
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
                                                                                            <span
                                                                                                class="sr-only">Close
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
                                                            class="hover:text-white items-center hover:bg-[#2d5523] bg-[#fff] hover:border-[3px] border-[3px] border-[#2d552d] text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:scale-105 transition duration-300 ease-in-out">
                                                            Kembali
                                                        </button>
                                                        <button type="submit"
                                                            class="text-white items-center bg-[#2d5523] hover:bg-[#fff] hover:border-[3px] border-[3px] hover:border-[#2d552d] border-[#2d552d] hover:text-[#2d5523] focus:ring-4 text-center w-fit px-7 focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:scale-105 transition duration-300 ease-in-out">
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
    <script>
        function dropdown() {
            return {
                options: [],
                selected: [],
                show: false,
                open() {
                    this.show = true;
                },
                close() {
                    this.show = false;
                },
                isOpen() {
                    return this.show === true;
                },
                select(index, event) {
                    if (!this.options[index].selected) {
                        this.options[index].selected = true;
                        this.options[index].element = event.target;
                        this.selected.push(index);
                    } else {
                        this.selected.splice(this.selected.lastIndexOf(index), 1);
                        this.options[index].selected = false;
                    }
                },
                remove(index, option) {
                    this.options[option].selected = false;
                    this.selected.splice(index, 1);
                },
                loadOptions() {
                    const options = document.getElementById("select").options;
                    for (let i = 0; i < options.length; i++) {
                        this.options.push({
                            value: options[i].value,
                            text: options[i].innerText,
                            selected: options[i].getAttribute("selected") != null ?
                                options[i].getAttribute("selected") : false,
                        });
                    }
                },
                selectedValues() {
                    return this.selected.map((option) => {
                        return this.options[option].value;
                    });
                },
            };
        }
    </script>
    

</x-footer>
