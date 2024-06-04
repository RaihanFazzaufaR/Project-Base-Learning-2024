<x-header menu='{{ $menu }}'>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</x-header>


<div class="w-[100%] hidden md:flex relative justify-center items-center ">
    <img src="{{ asset('assets/images/bg-index-UMKM.webp') }}" alt="" class="w-full dark:brightness-[85%]">
    <div class="bg-white/[0.73] dark:bg-[#24292d]/[0.73]  w-[571px] h-[185px]  absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">UMKM DI RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Bangun Ekonomi Berkelanjutan di
            Setiap Sudut
            RW</p>
    </div>

</div>
<div class=" lg:hidden sm:sticky sm:top-0 fixed text-[#2d5523] w-[100%] dark:text-white font-bold border-b-2 z-9  bg-white dark:bg-[#2F363E] h-fit border-gray-300 dark:border-gray-600 py-6">
    <div class="w-[90%] mx-auto gap-4 flex flex-col">
        <div class="sm:hidden text-2xl sm:text-4xl flex flex-col gap-2">
            <p class="text-[#2d5523] dark:text-white font-bold">UMKM DI RW 3</p>
            <p class="text-[#2d5523] dark:text-white font-sans text-sm text-left">Bangun Ekonomi Berkelanjutan
                di Setiap Sudut RW</p>
        </div>

        <div class="flex gap-6">

            <div class="w-full">
                <form action="{{ route('umkmku.search') }}" method="GET" class="w-full mx-auto lg:shadow-2xl">
                    <label for="default-search" class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
                    <div class="relative h-full">
                        <div class="absolute inset-y-0 ps-6 sm:text-lg text-sm flex justify-center  text-[#2d5523]  dark:text-gray-300 pr-5 items-center px-3 pointer-events-none ">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="search" id="default-search" name="search" class=" bg-gray-100 dark:bg-[#1f2429] border-gray-400 border block w-full sm:py-3 py-1 ps-13 text-[#2d5523] text-base rounded-full h-full focus:ring-yellow-500 focus:border-yellow-500  dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-yellow-500 placeholder:text-[#2d5523] dark:focus:border-yellow-500 sm:placeholder:text-lg placeholder:text-sm pr-5" placeholder="Cari UMKM" required />
                        <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}">
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- ajukan umkm --}}
    <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false" class="absolute  z-30">

        <button @click="editModal = true" class="flex lg:hidden items-center justify-center fixed z-0 end-6 bottom-6 group animate-bounce text-white bg-[#2d5523] rounded-full sm:size-19 size-17 border-2 border-[#2d5523] hover:border-[#e2a229] dark:hover:border-[#2d5523]  dark:bg-[#e2a229] dark:border-[#e2a229] hover:bg-[#e2a229]  dark:hover:bg-[#2d5523] focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800 text-3xl ">
            <i class="fa-solid fa-plus"></i>
        </button>
        <div x-show="editModal" x-cloak tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 lg:hidden justify-center items-center w-full lg:inset-0 h-full">
            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
            <div class="relative z-[1000] p-4 w-full h-fit  pt-25" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                <!-- Modal content -->
                <div class="relative w-full bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex w-full items-center justify-between px-4 lg:px-5 border-b-2 rounded-t mb-3 p-2 border-[#B8B8B8]">
                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                            Ajukan UMKM
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="editModal = false">
                            <i class="fa-solid fa-xmark text-xl"></i>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="w-full pb-5 text-[#34662C]" method="POST" action="{{ route('umkm.store') }}" enctype="multipart/form-data">
                        <div class="max-h-[570px] overflow-y-auto">


                            @csrf
                            <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                <div class="sm:col-span-2 px-4">
                                    <label class="block mb-2 text-base font-medium text-[#2d5523] dark:text-white">Nama
                                        Pemilik</label>
                                    @if (Auth::check())
                                    <input type="text" id="nama_pemilik" name="nama_pemilik" class="bg-gray-50 border text-base border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" readonly value="{{ Auth::user()->penduduk->nama }}">
                                    <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}">
                                    @endif

                                </div>
                            </div>
                            <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                <div class="sm:col-span-2 px-4">
                                    <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">Nama
                                        UMKM</label>
                                    <input type="text" name="nama" id="nama" class="bg-gray-50 border   border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan Nama UMKM">
                                </div>
                            </div>
                            <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                <div class="sm:col-span-2 px-4">
                                    <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">No.
                                        WA</label>
                                    <input type="text" name="no_wa" id="no_wa" class="bg-gray-50 border   border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan No. WhatsApp">
                                </div>
                            </div>
                            <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                <div class="sm:col-span-2 px-4">
                                    <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">Foto
                                        UMKM</label>
                                    <input type="file" name="foto" id="foto" class="bg-gray-50 border   border-[#518742] dark:bg-[#505c6a] dark:border-gray-500  text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan No. WhatsApp" required>
                                </div>
                            </div>

                            <div class="flex px-10 pb-3 justify-between">
                                <div class="flex flex-col">
                                    <label class=" mb-2   w-full text-center mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                        Buka</label>
                                    <div class="w-fit mx-auto">
                                        <input type="time" id="buka_waktu" name="buka_waktu" class="bg-gray-50 border-2 border-[#2d5523]  dark:bg-[#505c6a] leading-none text-lg text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px]   dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="00:00" required />
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="mb-2   w-full text-center mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                        Tutup</label>
                                    <div class="w-fit mx-auto">
                                        <input type="time" id="tutup_waktu" name="tutup_waktu" class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="00:00" required />
                                    </div>
                                </div>

                            </div>
                            <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                <div class="sm:col-span-2 px-4">
                                    <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">Kategori</label>
                                    <div class="text-[#2d5523] dark:bg-[#505c6a] dark:border-gray-500 placeholder-[#34662C]/50 font-semibold  text-lg  focus:ring-primary-600 focus:border-primary-600 block w-full   rounded-lg  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 ">
                                        <select class="hidden" x-cloak id="select">
                                            <option value="1">Makanan</option>
                                            <option value="2">Minuman</option>
                                            <option value="3">Peralatan Rumah Tangga</option>
                                            <option value="4">Kebutuhan Pokok</option>
                                            <option value="5">Jasa</option>
                                            <option value="6">Lainnya</option>
                                        </select>

                                        <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col items-center">
                                            <input name="values" type="hidden" :value="selectedValues()" />
                                            <div class="relative z-20 inline-block  w-full">
                                                <div class="relative flex flex-col items-center h-full">
                                                    <div @click="open" class="w-full">
                                                        <div class=" flex rounded-lg border-2 border-[#2d5523] dark:border-gray-600 border-stroke py-2 pl-3 pr-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input">
                                                            <div class="flex flex-auto flex-wrap gap-3">
                                                                <template x-for="(option,index) in selected" :key="index">
                                                                    <div class="my-1.5 flex items-center justify-center rounded-lg border-[.5px] border-stroke bg-gray  px-2.5 py-1.5 text-sm font-medium dark:border-strokedark dark:bg-white/30">
                                                                        <div class="max-w-full flex-initial" x-model="options[option]" x-text="options[option].text">
                                                                        </div>
                                                                        <div class="flex flex-auto flex-row-reverse">
                                                                            <div @click="remove(index,option)" class="cursor-pointer pl-2 hover:text-danger">
                                                                                <svg class="fill-current" role="button" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z" fill="currentColor">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </template>
                                                                <div x-show="selected.length == 0" class="flex-1 ">
                                                                    <input placeholder="Pilih Kategori UMKM" class=" placeholder-[#2d5523] dark:bg-[#505c6a] dark:placeholder-white" :value="selectedValues()" />
                                                                </div>
                                                            </div>
                                                            <div class="flex w-8 items-center py-1 pl-1 pr-1">
                                                                <button type="button" @click="open" class="h-6 w-6 cursor-pointer outline-none focus:outline-none" :class="isOpen() === true ? 'rotate-180' : ''">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <g opacity="0.8">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" fill="#24292d"></path>
                                                                        </g>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full px-4">
                                                        <div x-show.transition.origin.top="isOpen()" class="max-h-select absolute top-full left-0 z-40 w-full overflow-y-auto rounded bg-white  dark:bg-[#505c6a] shadow dark:bg-form-input" @click.outside="close">
                                                            <div class="flex w-full flex-col">
                                                                <template x-for="(option,index) in options" :key="index">
                                                                    <div>
                                                                        <div class="w-full cursor-pointer rounded-t border-b border-stroke hover:bg-primary/5 dark:border-form-strokedark" @click="select(index,$event)">
                                                                            <div :class="option.selected ?
                                                                                'border-primary' : ''" class="relative flex w-full items-center border-l-2 border-transparent p-2 pl-2">
                                                                                <div class="flex w-full items-center">
                                                                                    <div class="mx-2 leading-6" x-model="option" x-text="option.text">
                                                                                    </div>
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
                            <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                <div class="sm:col-span-2 px-4">
                                    <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">Koordinat
                                        UMKM</label>
                                    <input id="lokasi_map" name="lokasi_map" placeholder="Masukkan Koordinat Lokasi Sesuai GMaps" class="bg-gray-50 border   border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan No. WhatsApp">
                                </div>
                                <div class="sm:col-span-2 px-4">
                                    <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">Lokasi
                                        UMKM</label>
                                    <textarea id="lokasi" name="lokasi" cols="19" rows="3" placeholder="Masukkan Alamat UMKM" class="bg-gray-50 border   border-[#518742]  text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>

                                </div>
                                <div class="sm:col-span-2 px-4">
                                    <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">Lokasi
                                        UMKM</label>
                                    <textarea id="deskripsi" name="deskripsi" cols="19" rows="3" placeholder="Masukkan Deskripsi Singkat UMKM" class="bg-gray-50 border text-base border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>

                                </div>

                            </div>
                            <div class="w-full text-[#2d5523] font-sm px-4 pb-4 dark:text-white">
                                *Sebelum mengajukan UMKM Anda, pastikan UMKM Anda sudah ada pada Google Maps
                            </div>


                            <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:bg-[#505c6a] z-999">
                                <button @click="editModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                    Batal
                                </button>
                                <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] dark:bg-[#57ba47] dark:hover:bg-[#2d5523] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out dark:text-white">
                                    Ajukan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </a>
        </div>
    </div>

</div>
<div class=" min-h-[10vh] mx-auto py-[34px] w-[90%]">
    <div class="justify-between hidden lg:block w-full">
        <div class="mt-7  md:flex justify-between w-full">
            <div class="w-full items-center  justify-between"> <!-- Menambahkan kelas justify-between di sini -->
                <div class="hidden md:flex justify-between pb-5">
                    <form action="{{ route('umkmku.search') }}" method="GET" class="w-[500px] h-fit shadow-2xl">
                        <label for="default-search" class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
                        <div class="relative h-full">
                            <div class="absolute inset-y-0 lg:start-0 text-3xl lg:text-lg flex justify-center start-8 text-[#58a444]  dark:text-gray-300 pr-5 items-center px-3 pointer-events-none ">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input type="search" id="default-search" name="search" class=" block w-full p-10 lg:p-4 ps-30 lg:ps-10 border-[3px] border-[#2d5523] text-[#2d5523] text-base rounded-lg bg-[#fff] focus:ring-yellow-500 focus:border-yellow-500 dark:bg-[#30373F] dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-yellow-500 placeholder:text-[#58a444] dark:focus:border-yellow-500 placeholder:text-3xl lg:placeholder:text-lg" placeholder="Cari UMKM" required />
                            <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}">
                        </div>
                    </form>
                    <div class="felx justify-end pb-7">
                        <div class="" x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                            <button @click="editModal = true" class="w-auto shadow-2xl h-[57px] text-[20px] px-[24px] bg-yellow-500  dark:text-white dark:hover:text-white dark:shadow-gray-900 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-300 hover:scale-105">
                                Ajukan UMKM Anda
                            </button>
                            <div x-show="editModal" x-cloak tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999  justify-center items-center w-full md:inset-0 h-full">
                                <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                <div class="relative z-[1000] p-4 w-full max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                    <!-- Modal content -->
                                    <div class="relative bg-white dark:bg-[#30373F] rounded-lg shadow  border-[#2d5523] dark:border-white">
                                        <!-- Modal header -->
                                        <div class="flex w-full items-center justify-between px-4 lg:px-5 border-b-2 rounded-t mb-3 p-2 dark:border-white border-[#2d5523]">
                                            <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                Ajukan UMKM
                                            </h3>
                                            <button type="button" class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="editModal = false">
                                                <i class="fa-solid fa-xmark text-[#2d5523] dark:text-white font-extrabold text-xl"></i>
                                            </button>
                                        </div>
                                        <form class="p-4 lg:p-5 w-full flex flex-col bg-white dark:bg-[#30373F]" method="POST" action="{{ route('umkm.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="flex w-full h-fit gap-6">
                                                {{-- kolom kiri --}}
                                                <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                                    <div class="gap-2 flex w-full">
                                                        <div class="basis-1/4 h-full flex items-center">
                                                            <label for="nama_pemilik" class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                Pemilik</label>
                                                        </div>
                                                        <div class="basis-3/4 h-full flex items-center">
                                                            <input id="nama_pemilik" name="nama_pemilik" value="{{ Auth::user()->penduduk->nama }}" readonly class="bg-white  border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                            <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}">
                                                        </div>

                                                    </div>
                                                    <div class="gap-2 flex w-full">
                                                        <div class="basis-1/4 h-full flex items-center">
                                                            <label for="nama" class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                                UMKM</label>
                                                        </div>
                                                        <div class="basis-3/4 h-full flex items-center">
                                                            <input id="nama" name="nama" placeholder="Masukkan Nama Toko" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        </div>
                                                    </div>
                                                    <div class="gap-2 flex w-full">
                                                        <div class="basis-1/4 h-full flex items-center">
                                                            <label for="no_wa" class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                                                WhatsApp</label>
                                                        </div>
                                                        <div class="basis-3/4 h-full flex items-center">
                                                            <input id="no_wa" name="no_wa" placeholder="Masukkan No. WhatsApp" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        </div>
                                                    </div>
                                                    <div class="gap-2 flex w-full">
                                                        <div class="basis-1/4 h-full flex items-center">
                                                            <label for="foto" class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Foto
                                                                UMKM</label>
                                                        </div>
                                                        <div class="basis-3/4 h-full flex items-center">
                                                            <input id="foto" name="foto" type="file" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        </div>
                                                    </div>
                                                    <div class="gap-2 flex w-full">
                                                        <div class="basis-1/4 h-full flex items-center">
                                                            <label for="buka_waktu" class="text-lg font-bold pt-[23px] items-center flex w-full text-[#2d5523] dark:text-white">Jam
                                                                Operasional</label>
                                                        </div>
                                                        <div class="basis-3/4 h-full flex items-center w-full justify-center">
                                                            <div class="basis-1/2 h-full flex w-full justify-center flex-col ">
                                                                <label for="buka_waktu" class=" mb-2 text-sm w-fit mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                                    Buka:</label>
                                                                <div class="w-fit mx-auto">
                                                                    <input type="time" id="buka_waktu" name="buka_waktu" class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900 dark:bg-[#505c6a] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px]  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="00:00" required />
                                                                </div>
                                                            </div>
                                                            <div class="basis-1/2 h-full flex w-full justify-center flex-col">
                                                                <label for="tutup_waktu" class="block mb-2 text-sm font-medium mx-auto text-[#2d5523] dark:text-white">Jam
                                                                    Tutup:</label>
                                                                <div class="w-fit mx-auto">
                                                                    <input type="time" id="tutup_waktu" name="tutup_waktu" class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="00:00" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>





                                                <!-- kolom kanan -->
                                                <div class="flex flex-col gap-5  w-full basis-1/2 ">
                                                    <div class="gap-2 flex w-full">
                                                        <div class="basis-1/4 h-full flex items-center justify-center">
                                                            <label class="text-lg font-bold  items-center flex w-full text-[#2d5523] dark:text-white">
                                                                Kategori
                                                            </label>
                                                        </div>
                                                        <div class="basis-3/4 h-full flex items-center">
                                                            <div class="text-[#2d5523]  placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full  dark:bg-[#505c6a] dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 ">
                                                                <select class="hidden" x-cloak id="select">
                                                                    <option value="1">Makanan</option>
                                                                    <option value="2">Minuman</option>
                                                                    <option value="3">Peralatan Rumah Tangga
                                                                    </option>
                                                                    <option value="4">Kebutuhan Pokok</option>
                                                                    <option value="5">Jasa</option>
                                                                    <option value="6">Lainnya</option>
                                                                </select>

                                                                <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col items-center">
                                                                    <input name="values" type="hidden" :value="selectedValues()" />
                                                                    <div class="relative z-20 inline-block  w-full">
                                                                        <div class="relative flex flex-col items-center h-full">
                                                                            <div @click="open" class="w-full">
                                                                                <div class=" flex  border-2 rounded-lg border-[#2d5523] dark:border-gray-500 border-stroke py-2 pl-3 pr-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input focus:ring-primary-600 dark:focus:ring-primary-500 ">
                                                                                    <div class="flex flex-auto flex-wrap gap-3">
                                                                                        <template x-for="(option,index) in selected" :key="index">
                                                                                            <div class="my-1.5 flex items-center justify-center rounded border-[.5px] border-stroke bg-gray  px-2.5 py-1.5 text-sm font-medium dark:border-strokedark dark:bg-white/30">
                                                                                                <div class="max-w-full flex-initial" x-model="options[option]" x-text="options[option].text">
                                                                                                </div>
                                                                                                <div class="flex flex-auto flex-row-reverse">
                                                                                                    <div @click="remove(index,option)" class="cursor-pointer pl-2 hover:text-danger">
                                                                                                        <svg class="fill-current" role="button" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z" fill="currentColor">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </template>
                                                                                        <div x-show="selected.length == 0" class="flex-1 dark:bg-[#505c6a]">
                                                                                            <input placeholder="Pilih Kategori UMKM" class=" placeholder-[#34662C]/50 dark:bg-[#505c6a] dark:placeholder-white" :value="selectedValues()" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex w-8 items-center py-1 pl-1 pr-1">
                                                                                        <button type="button" @click="open" class="h-6 w-6 cursor-pointer outline-none focus:outline-none" :class="isOpen() === true ?
                                                                                                'rotate-180' : ''">
                                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <g opacity="0.8">
                                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" fill="#24292d">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="w-full px-4">
                                                                                <div x-show.transition.origin.top="isOpen()" class="max-h-select absolute top-full left-0 z-40 w-full overflow-y-auto rounded bg-white dark:bg-[#505c6a] shadow dark:bg-form-input" @click.outside="close">
                                                                                    <div class="flex w-full flex-col">
                                                                                        <template x-for="(option,index) in options" :key="index">
                                                                                            <div>
                                                                                                <div class="w-full cursor-pointer rounded-t border-b border-stroke hover:bg-primary/5 dark:border-form-strokedark" @click="select(index,$event)">
                                                                                                    <div :class="option.selected ?
                                                                                                        'border-primary' :
                                                                                                        ''" class="relative flex w-full items-center border-l-2 border-transparent p-2 pl-2">
                                                                                                        <div class="flex w-full items-center">
                                                                                                            <div class="mx-2 leading-6" x-model="option" x-text="option.text">
                                                                                                            </div>
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
                                                            <label for="lokasi_map" class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Koordinat
                                                                UMKM</label>
                                                        </div>
                                                        <div class="basis-3/4 h-full flex items-center">
                                                            <input id="lokasi_map" name="lokasi_map" placeholder="Masukkan Koordinat Lokasi Sesuai Google Maps" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        </div>
                                                    </div>

                                                    <div class="gap-2 flex w-full">
                                                        <div class="basis-1/4 h-fit ">
                                                            <label for="lokasi" class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat
                                                                UMKM</label>
                                                        </div>
                                                        <div class="basis-3/4 h-full flex items-center">
                                                            <textarea id="lokasi" name="lokasi" cols="19" rows="3" placeholder="Masukkan Alamat UMKM" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="gap-2 flex w-full">
                                                        <div class="basis-1/4 h-fit ">
                                                            <label for="deskripsi" class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Deskripsi
                                                                Singkat</label>
                                                        </div>
                                                        <div class="basis-3/4 h-full flex items-center">
                                                            <textarea id="deskripsi" name="deskripsi" cols="19" rows="3" placeholder="Masukkan Deskripsi Singkat UMKM" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full text-[#2d5523] font-sm pb-4 dark:text-white">
                                                *Sebelum mengajukan UMKM Anda, pastikan UMKM Anda sudah ada pada Google
                                                Maps
                                            </div>
                                            <div class="flex w-full justify-end items-center px-7">
                                                <button type="submit" class="text-white items-center bg-[#2d5523] hover:bg-[#e2a229] hover:text-[#2d5523] dark:hover:text-white focus:ring-4 text-center w-full focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:hover:bg-[#4ea840] dark:bg-[#57ba47] dark:focus:ring-blue-800">
                                                    Ajukan UMKM
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- table --}}
    <div class="relative mt-[175px] sm:mt-0 overflow-x-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin  rounded-t-lg sm:rounded-lg  shadow-none dark:shadow-gray-900">
        <table class="sm:w-full w-150 text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-[#428238] dark:text-white">
                <tr>
                    <th scope="col" class="px-6 sm:w-[27%] py-3 ">
                        UMKM
                    </th>
                    <th scope="col" class="px-6  sm:w-[20%] w-40 py-3  lg:hidden">
                        Jam Operasional
                    </th>
                    <th scope="col" class="px-6  w-[10%] py-3 hidden lg:table-cell">
                        Jam Buka
                    </th>
                    <th scope="col" class="px-6  w-[10%] py-3 hidden lg:table-cell">
                        Jam Tutup
                    </th>
                    <th scope="col" class="px-6  w-[16%] py-3 hidden lg:table-cell">
                        Foto UMKM
                    </th>
                    <th scope="col" class="px-6 lg:w-[25%] sm:w-[25%] py-3">
                        Aksi
                    </th>
                    <th scope="col" class="px-6  lg:w-[10%] sm:w-[20%] w-35 py-3 ">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($umkms as $umkm)
                <tr class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E] dark:text-white dark:border-gray-700 ">
                    <td scope="row" class="px-6  py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        {{ $umkm->nama }}
                    </td>
                    <td scope="row" class="px-6  py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white  lg:hidden">
                        {{ $umkm->buka_waktu }} - {{ $umkm->tutup_waktu }}
                    </td>
                    <td scope="row" class="px-6  py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white hidden lg:table-cell">
                        {{ $umkm->buka_waktu }}
                    </td>
                    <td scope="row" class="px-6   py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white hidden lg:table-cell">
                        {{ $umkm->tutup_waktu }}
                    </td>
                    <td class="hidden lg:table-cell">
                        <div class="flex justify-center ">
                            <button class="flex  justify-center items-center gap-2 w-fit text-white bg-[#7d5dd7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3b2a69] hover:scale-105 transition-all" data-modal-target="lihat-foto1" data-modal-toggle="lihat-foto1">
                                <i class="fa-solid fa-image"></i>
                                <div>Lihat Foto</div>

                            </button>
                        </div>
                        <div id="lihat-foto1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed  -top-14 right-0 left-0 -bottom-10 z-[999] justify-center items-center w-full inset-0 ">
                            <div class="relative p-32 w-fit  max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow  dark:bg-[#30373F]">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between ps-8 pe-4 py-4 text-[#2d5523]  rounded-t dark:border-white border-[#2d5532] border-b-[3.5px]">
                                        <h3 class="text-lg font-extrabold  dark:text-white">
                                            Foto UMKM
                                        </h3>
                                        <button type="button" class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="lihat-foto1">
                                            <i class="fa-solid fa-xmark text-[#2d5523] dark:text-white font-extrabold text-xl"></i>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="relative p-10 w-full  max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white w-115  dark:bg-gray-700">
                                            <img src="{{ asset('assets/images/' . $umkm->foto) }}" {{-- <img src="{{ asset('assets/images/UMKM/oLtUGlIJjAJwSCQVqGDgiZl277Snsa7AdYUkCrFf.jpg') }}" --}} alt="" class="w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td scope="row" class="  ">
                        <div class="px-6 py-4 w-full flex gap-4 justify-center h-full items-center">
                            {{-- detail --}}
                            <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 px-2 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <div class="hidden lg:inline-flex">Detail</div>
                                </button>
                                <!-- Detail modal -->
                                <div x-show="detailModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block">
                                    </div>
                                    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl h-fit" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                            <!-- Modal header -->
                                            <div class="flex h-[100px] items-start py-4 justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8] relative">
                                                <img src="{{ asset('assets/images/' . $umkm->foto) }}" alt="" class="absolute z-1 h-full w-full object-cover left-0 top-0 rounded-t brightness-50">
                                                <h3 class="text-xl font-bold text-white dark:text-white z-[2]">
                                                    Detail Data UMKM
                                                </h3>
                                                <button type="button" class="text-white bg-transparent hover:text-gray-500 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white z-[2]" @click="detailModal = false">
                                                    <i class="fa-solid fa-xmark text-xl"></i>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="w-full h-full text-[#34662C] dark:text-white text-left">
                                                <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                                    <div class="col-span-2 sm:col-span-1 relative">
                                                        <label class="block mb-2 text-sm font-bold">Pemilik</label>
                                                        <input list="pemilik" name="pemilik" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ Auth::user()->penduduk->nama }}" readonly>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="nama" class="block mb-2 text-sm font-bold">Nama
                                                            UMKM</label>
                                                        <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->nama }}" readonly>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="noHp" class="block mb-2 text-sm font-bold">No.
                                                            Whatsapp</label>
                                                        <input type="text" name="noHp" id="noHp" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->no_wa }}" readonly>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1 grid grid-cols-2 gap-4">
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="jam-buka" class="block mb-2 text-sm font-bold">Jam
                                                                Buka</label>
                                                            <input type="time" name="jam-buka" id="jam-buka" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->buka_waktu }}" readonly>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="jam-tutup" class="block mb-2 text-sm font-bold">Jam
                                                                Tutup</label>
                                                            <input type="time" name="jam-tutup" id="jam-tutup" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->tutup_waktu }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                        @php
                                                        $kategori = '';
                                                        @endphp
                                                        @foreach ($umkmKategoris as $umkmKategori)
                                                        @foreach ($categories as $category)
                                                        @if ($umkm->umkm_id == $umkmKategori->umkm_id)
                                                        @if ($umkmKategori->kategori_id == $category->kategori_id)
                                                        @php
                                                        $kategori .=
                                                        $kategori != '' ? ', ' : '';
                                                        $kategori .= $category->nama_kategori;
                                                        @endphp
                                                        @endif
                                                        @endif
                                                        @endforeach
                                                        @endforeach
                                                        <div class="basis-3/4 h-full flex items-center">
                                                            <input id="kelas" list="listKelas" name="kelas" disabled value="{{ $kategori }}" readonly class="bg-white border border-[#34662C] text-[#2d5523] shadow-md placeholder-[#34662C] dark:placeholder-white/50 font-semibold text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" style="font-size: 0.875rem;">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="koordinat" class="block mb-2 text-sm font-bold">Koordinat</label>
                                                        <input type="text" name="koordinat" id="koordinat" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->lokasi_map }}" readonly>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label class="block mb-2 text-sm font-bold">Alamat</label>
                                                        <textarea readonly name="alamat" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">{{ $umkm->lokasi }}</textarea>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label class="block mb-2 text-sm font-bold">Deskripsi
                                                            Singkat</label>
                                                        <textarea readonly name="deskripsi" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">{{ $umkm->deskripsi }}</textarea>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <div class=" w-full justify-start items-center gap-4 pb-2 h-fit">
                                                            <label for="foto" class="text-sm font-bold">Foto
                                                                UMKM</label>
                                                            <div x-data="{ 'fotoModal': false }" @keydown.escape="fotoModal = false">
                                                                <button type="button" @click="fotoModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#7D5DD7] rounded-lg shadow-xl font-semibold text-sm h-full px-3 py-1 hover:bg-[#3C2D68] hover:scale-105 transition-all">
                                                                    <div>Lihat Foto</div>
                                                                </button>
                                                                <!-- Detail modal -->
                                                                <div x-show="fotoModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                                                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full">
                                                                    </div>
                                                                    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl h-fit" @click.away="fotoModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                                        <!-- Modal content -->
                                                                        <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                                            <!-- Modal header -->
                                                                            <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                                    Foto UMKM
                                                                                </h3>
                                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="fotoModal = false">
                                                                                    <i class="fa-solid fa-xmark text-xl"></i>
                                                                                    <span class="sr-only">Close
                                                                                        modal</span>
                                                                                </button>
                                                                            </div>
                                                                            <!-- Modal body -->
                                                                            <div class="w-full h-full text-[#34662C] text-left">
                                                                                <div class="p-4 md:p-5  w-full sm:w-150 flex max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                                                                    <img src={{ asset('assets/images/' . $umkm->foto) }} alt="" class="w-full h-full rounded-xl shadow-xl border-4 border-white ">
                                                                                </div>
                                                                                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                                                    <button type="button" @click="fotoModal = false" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                                        Keluar
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                    <button @click="detailModal = false" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                        Keluar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- edit --}}
                            <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                                @if ($umkm->status !== 'diproses')
                                <button @click="editModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 px-2 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    <div class="hidden lg:inline-flex">Edit</div>
                                </button>
                                @endif
                                <!-- Detail modal -->
                                <div x-show="editModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block">
                                    </div>
                                    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl h-fit" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                            <!-- Modal header -->
                                            <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                    Edit Data UMKM
                                                </h3>
                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="editModal = false">
                                                    <i class="fa-solid fa-xmark text-xl"></i>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <form action="{{ route('umkm.edit', ['umkm_id' => $umkm->umkm_id]) }}" class="w-full h-full text-[#34662C] dark:text-white text-left" method="POST">
                                                @csrf
                                                {!! method_field('POST') !!}

                                                <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                                    <div class="col-span-2 sm:col-span-1 relative">
                                                        <label class="block mb-2 text-sm font-bold">Pemilik</label>
                                                        <input list="pemilik" name="pemilik" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ Auth::user()->penduduk->nama }}">
                                                        <input type="hidden" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->penduduk->id_penduduk }}">
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="nama" class="block mb-2 text-sm font-bold">Nama
                                                            UMKM</label>
                                                        <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->nama }}">
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="noHp" class="block mb-2 text-sm font-bold">No.
                                                            Whatsapp</label>
                                                        <input type="text" name="no_wp" id="noHp" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->no_wa }}">
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1 grid grid-cols-2 gap-4">
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="jam-buka" class="block mb-2 text-sm font-bold">Jam
                                                                Buka</label>
                                                            <input type="time" name="jam-buka" id="jam-buka" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->buka_waktu }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="jam-tutup" class="block mb-2 text-sm font-bold">Jam
                                                                Tutup</label>
                                                            <input type="time" name="jam-tutup" id="jam-tutup" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->tutup_waktu }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                        @php
                                                        $kategori = '';
                                                        @endphp
                                                        @foreach ($umkmKategoris as $umkmKategori)
                                                        @foreach ($categories as $category)
                                                        @if ($umkm->umkm_id == $umkmKategori->umkm_id)
                                                        @if ($umkmKategori->kategori_id == $category->kategori_id)
                                                        @php
                                                        $kategori .=
                                                        $kategori != '' ? ', ' : '';
                                                        $kategori .= $category->nama_kategori;
                                                        @endphp
                                                        @endif
                                                        @endif
                                                        @endforeach
                                                        @endforeach
                                                        <select class="hidden" x-cloak id="select">
                                                            <option value="1">Makanan</option>
                                                            <option value="2">Minuman</option>
                                                            <option value="3">Peralatan Rumah Tangga
                                                            </option>
                                                            <option value="4">Kebutuhan Pokok</option>
                                                            <option value="5">Jasa</option>
                                                            <option value="6">Lainnya</option>
                                                        </select>
                                                        <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col items-center">
                                                            <input name="kategori" type="hidden" :value="selectedValues()" />
                                                            <div class="relative z-20 inline-block  w-full">
                                                                <div class="relative flex flex-col items-center h-full">
                                                                    <div @click="open" class="w-full">
                                                                        <div class=" flex rounded-lg border border-[#2d5523] dark:border-gray-500 dark:bg-[#505c6a] py-2 px-3 focus:outline-none transition focus:border-2 items-center">
                                                                            <div class="flex flex-auto flex-wrap gap-3">
                                                                                <template x-for="(option,index) in selected" :key="index">
                                                                                    <div class="my-1.5 flex items-center justify-center rounded border-[.5px] dark:border-gray-500 dark:bg-[#505c6a] bg-gray  px-2.5 py-1.5 text-sm font-medium">
                                                                                        <div class="max-w-full flex-initial" x-model="options[option]" x-text="options[option].text">
                                                                                        </div>
                                                                                        <div class="flex flex-auto flex-row-reverse">
                                                                                            <div @click="remove(index,option)" class="cursor-pointer pl-2 hover:text-danger">
                                                                                                <svg class="fill-current" role="button" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z" fill="currentColor">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </template>
                                                                                <div x-show="selected.length == 0" class="flex-1 ">
                                                                                    <input placeholder="Kosongkan Jika Tetap" class=" placeholder-[#2d5523] dark:placeholder-white dark:border-gray-500 dark:bg-[#505c6a]" :value="selectedValues()" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex w-8 items-center py-1 pl-1 pr-1">
                                                                                <button type="button" @click="open" class="h-6 w-6 cursor-pointer outline-none focus:outline-none" :class="isOpen() === true ?
                                                                                            'rotate-180' : ''">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <g opacity="0.8">
                                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" fill="#637381">
                                                                                            </path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="w-full px-4">
                                                                        <div x-show.transition.origin.top="isOpen()" class="max-h-select absolute top-full left-0 z-40 w-full overflow-y-auto rounded bg-white shadow dark:border-gray-500 dark:bg-[#505c6a]" @click.outside="close">
                                                                            <div class="flex w-full flex-col">
                                                                                <template x-for="(option,index) in options" :key="index">
                                                                                    <div>
                                                                                        <div class="w-full cursor-pointer rounded-t border-b " @click="select(index,$event)">
                                                                                            <div :class="option.selected ?
                                                                                                    'border-primary' :
                                                                                                    ''" class="relative flex w-full items-center border-l-2 border-transparent p-2 pl-2">
                                                                                                <div class="flex w-full items-center">
                                                                                                    <div class="mx-2 leading-6" x-model="option" x-text="option.text">
                                                                                                    </div>
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
                                                    <div class="col-span-2">
                                                        <label for="koordinat" class="block mb-2 text-sm font-bold">Koordinat</label>
                                                        <input type="text" name="lokasi_map" id="koordinat" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" value="{{ $umkm->lokasi_map }}">
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label class="block mb-2 text-sm font-bold">Alamat</label>
                                                        <textarea name="alamat" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">{{ $umkm->lokasi }}</textarea>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label class="block mb-2 text-sm font-bold">Deskripsi
                                                            Singkat</label>
                                                        <textarea name="deskripsi" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">{{ $umkm->lokasi }}</textarea>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <div class="flex w-full justify-start items-center gap-4 py-2 h-fit">
                                                            <label for="foto" class="text-sm font-bold">Foto
                                                                UMKM</label>
                                                            <div x-data="{ 'fotoModal': false }" @keydown.escape="fotoModal = false">
                                                                <button type="button" @click="fotoModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#7D5DD7] rounded-lg shadow-xl font-semibold text-sm h-full px-3 py-1 hover:bg-[#3C2D68] hover:scale-105 transition-all">
                                                                    <div>Lihat Foto</div>
                                                                </button>
                                                                <!-- Detail modal -->
                                                                <div x-show="fotoModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                                                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full">
                                                                    </div>
                                                                    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="fotoModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                                        <!-- Modal content -->
                                                                        <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                                            <!-- Modal header -->
                                                                            <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                                    Foto UMKM
                                                                                </h3>
                                                                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="fotoModal = false">
                                                                                    <i class="fa-solid fa-xmark text-xl"></i>
                                                                                    <span class="sr-only">Close
                                                                                        modal</span>
                                                                                </button>
                                                                            </div>
                                                                            <!-- Modal body -->
                                                                            <div class="w-full h-full text-[#34662C] text-left">
                                                                                <div class="p-4 md:p-5  w-full sm:w-150 flex max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                                                                    <img src="{{ asset('assets/images/' . $umkm->foto) }}" alt="" class="w-full h-full rounded-xl shadow-xl border-4 border-white">
                                                                                </div>
                                                                                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                                                    <button type="button" @click="fotoModal = false" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                                        Keluar
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="file" name="foto" id="foto" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                    <button type="button" @click="editModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                        Batal
                                                    </button>

                                                    <div x-data="{ 'alasanModal': false }" @keydown.escape="alasanModal = false">
                                                        <button type="button" @click="alasanModal = true" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Edit
                                                        </button>
                                                        <!-- Detail modal -->
                                                        <div x-show="alasanModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full">
                                                            </div>
                                                            <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="alasanModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                                <!-- Modal content -->
                                                                <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                                    <!-- Modal header -->
                                                                    <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                            Alasan Pengeditan UMKM
                                                                        </h3>
                                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="alasanModal = false">
                                                                            <i class="fa-solid fa-xmark text-xl"></i>
                                                                            <span class="sr-only">Close
                                                                                modal</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div class="w-full h-fit text-[#34662C] text-left">
                                                                        <div class="p-4 md:p-5  w-full sm:w-150 flex max-h-[400px] flex-col sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                                                            <label class="block mb-2 text-sm font-bold">Alasan Pengeditan UMKM</label>
                                                                            <textarea name="alasan" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white"></textarea>
                                                                        </div>
                                                                        <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                                            <button type="submit" @click="alasanModal = false" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                                Simpan
                                                                            </button>
                                                                        </div>
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
                            </div>
                            {{-- hapus --}}

                            @if ($umkm->status === 'diproses')
                            <form id="cancel-umkm-form-{{ $umkm->umkm_id }}" action="{{ route('umkm.cancel', $umkm->umkm_id) }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <button type="button" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin membatalkan?')) document.getElementById('cancel-umkm-form-{{ $umkm->umkm_id }}').submit();">
                                <i class="fa-solid fa-trash-can"></i>
                                <div class="hidden lg:inline-flex">Batalkan</div>
                            </button>
                            @else
                            <form id="delete-umkm-form-{{ $umkm->umkm_id }}" action="{{ route('umkm.destroy', $umkm->umkm_id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>

                            <button type="button" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus data ini?')) document.getElementById('delete-umkm-form-{{ $umkm->umkm_id }}').submit();">
                                <i class="fa-solid fa-trash-can"></i>
                                <div class="hidden lg:inline-flex">Hapus</div>
                            </button>
                            @endif


                        </div>
                    </td>
                    <td class="px-6  py-4 w-full">
                        <div class="flex justify-start gap-3 w-full h-full items-center">
                            @if ($umkm->status == 'diterima')
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500"></div>
                            @elseif($umkm->status == 'diproses')
                            <div class="h-2.5 w-2.5 rounded-full bg-blue-500"></div>
                            @elseif($umkm->status == 'ditolak')
                            <div class="h-2.5 w-2.5 rounded-full bg-red-500"></div>
                            @elseif($umkm->status == 'dibatalkan')
                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-500"></div>
                            @endif
                            <div class="text-base text-[#2d5523] font-semibold dark:text-white">
                                {{ $umkm->status }}
                            </div>
                        </div>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

        @if ($umkms->isEmpty())
        <div class="flex flex-col w-full h-fit py-8 justify-center items-center gap-4 shadow-sm my-auto  dark:border-gray-600">
            <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
            <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[500px] h-[300px] object-cover">
            <p class="text-2xl font-semibold text-green-900 dark:text-white">Data Tidak Ditemukan</p>
        </div>
        @endif
    </div>
    <div class="px-8 py-5 w-full shadow-2xl dark:shadow-gray-900  rounded-b-lg dark:bg-[#4f5966] ">
        {{ $umkms->links() }}
    </div>

    {{-- <div class="px-8 py-5 w-full dark:bg-[#4f5966] shadow-2xl dark:shadow-gray-900 sm:hidden rounded-b-lg">
    {{ $umkms->links() }}
</div> --}}
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