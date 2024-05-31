<x-header menu='{{ $menu }}'>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

</x-header>

<div class="w-[100%] relative lg:flex justify-center items-center hidden ">
    <img src="{{ asset('assets/images/bg-index-UMKM.png') }}" alt="" class="w-full dark:brightness-[85%]">
    <div
        class="bg-white/[0.73] dark:bg-[#24292d]/[0.73]  w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">UMKM DI RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Bangun Ekonomi Berkelanjutan di
            Setiap Sudut
            RW</p>
    </div>
</div>
<div class="lg:min-h-[100vh] mx-auto lg:py-[34px] w-[98%] lg:w-[90%]">
    <div class="flex flex-row gap-14 mt-9 w-full">
        <div class="lg:basis-1/4 items-center flex-col hidden lg:block">
            <div class="flex border-b-[1.9px] h-[57px] dark:border-white border-[#2d5523]">
                <p class="text-[#2d5523] dark:text-white font-bold text-[19px] w-full flex  items-center">
                    Kategori UMKM</p>
            </div>
            <div class="mt-11 p-2 border-2 rounded-sm">

                {{-- database --}}
                <ul class="grid w-full">
                    <li>
                        <a href="{{ route('umkm') }}"
                            class="inline-flex pl-3 items-center justify-between w-full p-1.5 text-[#2d5523]  dark:border-gray-300   cursor-pointer dark:hover:text-gray-300   border border-gray-200'dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white  hover:text-white hover:bg-yellow-500  dark:bg-[#30373F] dark:hover:bg-gray-700 {{ $kategori === 0 ? 'bg-yellow-500 dark:bg-[#505c6a] text-white border border-gray-200' : 'bg-white dark:text-gray-300' }}">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">Semua Kategori</div>
                            </div>
                        </a>
                    </li>
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('umkm.category', $category->kategori_id) }}"
                                class="inline-flex pl-3 items-center justify-between w-full p-1.5 text-[#2d5523]  dark:border-gray-300   cursor-pointer dark:hover:text-gray-300   border border-gray-200'dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white  hover:text-white hover:bg-yellow-500  dark:bg-[#30373F] dark:hover:bg-gray-700 {{ $kategori == $category->kategori_id ? 'bg-yellow-500 dark:bg-[#505c6a] text-white border border-gray-200' : 'bg-white dark:text-gray-300' }}">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">{{ $category->nama_kategori }}</div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

        <div class="lg:basis-3/4 w-full  ">
            <div class="flex items-center   gap-11 justify-center">
                <div
                    class=" lg:basis-2/3 pt-3  lg:pt-0 lg:pb-0  lg:m-0 m-3 w-full -mt-5 lg:-mt-0 fixed z-10 lg:static dark:bg-[#24292d] bg-white pb-2 top-22">
                    <form action="{{ route('umkm.search') }}" method="GET" class="w-[90%] mx-auto lg:mx-0  mb-0 md:shadow-2xl">
                        <label for="default-search"
                            class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
                        <div class="relative h-full lg:px-0 ">
                            <div
                                class="absolute inset-y-0 lg:start-0 text-3xl lg:text-lg flex justify-center start-8 text-[#58a444]  dark:text-gray-300 pr-5 items-center px-3 pointer-events-none ">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <input type="search" id="default-search" name="search"
                                class=" block w-full p-10 lg:p-4 ps-30 lg:ps-10 border-[3px] border-[#2d5523] text-[#2d5523] text-base rounded-lg bg-[#fff] focus:ring-yellow-500 focus:border-yellow-500 dark:bg-[#30373F] dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-yellow-500 placeholder:text-[#58a444] dark:focus:border-yellow-500 placeholder:text-3xl lg:placeholder:text-lg"
                                placeholder="Cari UMKM" required />
                        </div>
                    </form>
                </div>
                <div class="basis-1/3 hidden lg:flex justify-end">
                    <div class="" x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                        @if (Auth::check())
                            <button @click="editModal = true"
                                class="w-auto shadow-2xl h-[57px] text-[20px] px-[24px] bg-yellow-500  dark:text-white dark:hover:text-white dark:shadow-xl dark:shadow-gray-900 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-300 hover:scale-105">
                                Ajukan UMKM Anda
                            </button>
                        @else 
                            <a href="{{ route('login') }}"
                            class="w-auto shadow-2xl h-[57px] text-[20px] px-[24px] bg-yellow-500  dark:text-white dark:hover:text-white dark:shadow-xl dark:shadow-gray-900 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-300 hover:scale-105">
                            Ajukan UMKM Anda
                            </a>
                        @endif
                        {{-- <button @click="editModal = true"
                            class="w-auto shadow-2xl h-[57px] text-[20px] px-[24px] bg-yellow-500  dark:text-white dark:hover:text-white dark:shadow-xl dark:shadow-gray-900 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-300 hover:scale-105">
                            Ajukan UMKM Anda
                        </button> --}}
                        <div x-show="editModal" x-cloak tabindex="-1" aria-hidden="true"
                            class="flex overflow-hidden fixed top-0 right-0 left-0 z-999  justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-full max-h-[700px]" @click.away="editModal = false"
                                x-transition:enter="motion-safe:ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90"
                                x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div
                                    class="relative bg-white dark:bg-[#30373F] rounded-lg shadow  border-[#2d5523] dark:border-white">
                                    <!-- Modal header -->
                                    <div
                                        class="flex w-full items-center justify-between px-4 lg:px-5 border-b-2 rounded-t mb-3 p-2 dark:border-white border-[#2d5523]">
                                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                            Ajukan UMKM
                                        </h3>                                        
                                            <button type="button"
                                            class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                @click="editModal = false">
                                                <i class="fa-solid fa-xmark text-[#2d5523] dark:text-white font-extrabold text-xl"></i>
                                            </button>
                                                               
                                        {{-- <button type="button"
                                            class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            @click="editModal = false">
                                            <i
                                                class="fa-solid fa-xmark text-[#2d5523] dark:text-white font-extrabold text-xl"></i>
                                        </button> --}}
                                    </div>
                                    <form class="p-4 lg:p-5 w-full flex flex-col bg-white dark:bg-[#30373F]"
                                        method="POST" action="{{ route('umkm.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="flex w-full h-fit gap-6">
                                            {{-- kolom kiri --}}
                                            <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                                <div class="gap-2 flex w-full">
                                                    <div class="basis-1/4 h-full flex items-center">
                                                        <label for="nama_pemilik"
                                                            class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                            Pemilik</label>
                                                    </div>
                                                    <div class="basis-3/4 h-full flex items-center">
                                                        @if (Auth::check())
                                                            <input id="nama_pemilik" name="nama_pemilik"
                                                            value="{{ Auth::user()->penduduk->nama }}" readonly
                                                            class="bg-white  border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                            <input type="hidden" id="id_penduduk" name="id_penduduk"
                                                            value="{{ Auth::user()->penduduk->id_penduduk }}">
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="gap-2 flex w-full">
                                                    <div class="basis-1/4 h-full flex items-center">
                                                        <label for="nama"
                                                            class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                                            UMKM</label>
                                                    </div>
                                                    <div class="basis-3/4 h-full flex items-center">
                                                        <input id="nama" name="nama"
                                                            placeholder="Masukkan Nama Toko"
                                                            class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    </div>
                                                </div>
                                                <div class="gap-2 flex w-full">
                                                    <div class="basis-1/4 h-full flex items-center">
                                                        <label for="no_wa"
                                                            class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">No.
                                                            WhatsApp</label>
                                                    </div>
                                                    <div class="basis-3/4 h-full flex items-center">
                                                        <input id="no_wa" name="no_wa"
                                                            placeholder="Masukkan No. WhatsApp"
                                                            class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    </div>
                                                </div>
                                                <div class="gap-2 flex w-full">
                                                    <div class="basis-1/4 h-full flex items-center">
                                                        <label for="foto"
                                                            class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Foto
                                                            UMKM</label>
                                                    </div>
                                                    <div class="basis-3/4 h-full flex items-center">
                                                        <input id="foto" name="foto" type="file"
                                                            class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    </div>
                                                </div>
                                                <div class="gap-2 flex w-full">
                                                    <div class="basis-1/4 h-full flex items-center">
                                                        <label for="buka_waktu"
                                                            class="text-lg font-bold pt-[23px] items-center flex w-full text-[#2d5523] dark:text-white">Jam
                                                            Operasional</label>
                                                    </div>
                                                    <div
                                                        class="basis-3/4 h-full flex items-center w-full justify-center">
                                                        <div
                                                            class="basis-1/2 h-full flex w-full justify-center flex-col ">
                                                            <label for="buka_waktu"
                                                                class=" mb-2 text-sm w-fit mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                                Buka:</label>
                                                            <div class="w-fit mx-auto">
                                                                <input type="time" id="buka_waktu"
                                                                    name="buka_waktu"
                                                                    class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900 dark:bg-[#505c6a] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px]  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                    value="00:00" required />
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="basis-1/2 h-full flex w-full justify-center flex-col">
                                                            <label for="tutup_waktu"
                                                                class="block mb-2 text-sm font-medium mx-auto text-[#2d5523] dark:text-white">Jam
                                                                Tutup:</label>
                                                            <div class="w-fit mx-auto">
                                                                <input type="time" id="tutup_waktu"
                                                                    name="tutup_waktu"
                                                                    class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                    value="00:00" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>





                                            <!-- kolom kanan -->
                                            <div class="flex flex-col gap-5  w-full basis-1/2 ">
                                                <div class="gap-2 flex w-full">
                                                    <div class="basis-1/4 h-full flex items-center justify-center">
                                                        <label
                                                            class="text-lg font-bold  items-center flex w-full text-[#2d5523] dark:text-white">
                                                            Kategori
                                                        </label>
                                                    </div>
                                                    <div class="basis-3/4 h-full flex items-center">
                                                        <div
                                                            class="text-[#2d5523]  placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full  dark:bg-[#505c6a] dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 ">
                                                            <select class="hidden" x-cloak id="select">
                                                                <option value="1">Makanan</option>
                                                                <option value="2">Minuman</option>
                                                                <option value="3">Peralatan Rumah Tangga</option>
                                                                <option value="4">Kebutuhan Pokok</option>
                                                                <option value="5">Jasa</option>
                                                                <option value="6">Lainnya</option>
                                                            </select>

                                                            <div x-data="dropdown()" x-init="loadOptions()"
                                                                class="flex flex-col items-center">
                                                                <input name="values" type="hidden"
                                                                    :value="selectedValues()" />
                                                                <div class="relative z-20 inline-block  w-full">
                                                                    <div
                                                                        class="relative flex flex-col items-center h-full">
                                                                        <div @click="open" class="w-full">
                                                                            <div
                                                                                class=" flex  border-2 rounded-lg border-[#2d5523] dark:border-gray-500 border-stroke py-2 pl-3 pr-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input focus:ring-primary-600 dark:focus:ring-primary-500 ">
                                                                                <div
                                                                                    class="flex flex-auto flex-wrap gap-3">
                                                                                    <template
                                                                                        x-for="(option,index) in selected"
                                                                                        :key="index">
                                                                                        <div
                                                                                            class="my-1.5 flex items-center justify-center rounded border-[.5px] border-stroke bg-gray  px-2.5 py-1.5 text-sm font-medium dark:border-strokedark dark:bg-white/30">
                                                                                            <div class="max-w-full flex-initial"
                                                                                                x-model="options[option]"
                                                                                                x-text="options[option].text">
                                                                                            </div>
                                                                                            <div
                                                                                                class="flex flex-auto flex-row-reverse">
                                                                                                <div @click="remove(index,option)"
                                                                                                    class="cursor-pointer pl-2 hover:text-danger">
                                                                                                    <svg class="fill-current"
                                                                                                        role="button"
                                                                                                        width="12"
                                                                                                        height="12"
                                                                                                        viewBox="0 0 12 12"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            clip-rule="evenodd"
                                                                                                            d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z"
                                                                                                            fill="currentColor">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </template>
                                                                                    <div x-show="selected.length == 0"
                                                                                        class="flex-1 dark:bg-[#505c6a]">
                                                                                        <input
                                                                                            placeholder="Pilih Kategori UMKM"
                                                                                            class=" placeholder-[#34662C]/50 dark:bg-[#505c6a] dark:placeholder-white"
                                                                                            :value="selectedValues()" />
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="flex w-8 items-center py-1 pl-1 pr-1">
                                                                                    <button type="button"
                                                                                        @click="open"
                                                                                        class="h-6 w-6 cursor-pointer outline-none focus:outline-none"
                                                                                        :class="isOpen() === true ?
                                                                                            'rotate-180' : ''">
                                                                                        <svg width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <g opacity="0.8">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    clip-rule="evenodd"
                                                                                                    d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                                                                    fill="#24292d">
                                                                                                </path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="w-full px-4">
                                                                            <div x-show.transition.origin.top="isOpen()"
                                                                                class="max-h-select absolute top-full left-0 z-40 w-full overflow-y-auto rounded bg-white dark:bg-[#505c6a] shadow dark:bg-form-input"
                                                                                @click.outside="close">
                                                                                <div class="flex w-full flex-col">
                                                                                    <template
                                                                                        x-for="(option,index) in options"
                                                                                        :key="index">
                                                                                        <div>
                                                                                            <div class="w-full cursor-pointer rounded-t border-b border-stroke hover:bg-primary/5 dark:border-form-strokedark"
                                                                                                @click="select(index,$event)">
                                                                                                <div :class="option.selected ?
                                                                                                    'border-primary' :
                                                                                                    ''"
                                                                                                    class="relative flex w-full items-center border-l-2 border-transparent p-2 pl-2">
                                                                                                    <div
                                                                                                        class="flex w-full items-center">
                                                                                                        <div class="mx-2 leading-6"
                                                                                                            x-model="option"
                                                                                                            x-text="option.text">
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
                                                        <label for="lokasi_map"
                                                            class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Koordinat
                                                            UMKM</label>
                                                    </div>
                                                    <div class="basis-3/4 h-full flex items-center">
                                                        <input id="lokasi_map" name="lokasi_map"
                                                            placeholder="Masukkan Koordinat Lokasi Sesuai Google Maps"
                                                            class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                    </div>
                                                </div>

                                                <div class="gap-2 flex w-full">
                                                    <div class="basis-1/4 h-fit ">
                                                        <label for="lokasi"
                                                            class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Alamat
                                                            UMKM</label>
                                                    </div>
                                                    <div class="basis-3/4 h-full flex items-center">
                                                        <textarea id="lokasi" name="lokasi" cols="19" rows="3" placeholder="Masukkan Alamat UMKM"
                                                            class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                                    </div>
                                                </div>

                                                <div class="gap-2 flex w-full">
                                                    <div class="basis-1/4 h-fit ">
                                                        <label for="deskripsi"
                                                            class="text-lg font-bold  w-full text-[#2d5523] dark:text-white">Deskripsi
                                                            Singkat</label>
                                                    </div>
                                                    <div class="basis-3/4 h-full flex items-center">
                                                        <textarea id="deskripsi" name="deskripsi" cols="19" rows="3"
                                                            placeholder="Masukkan Deskripsi Singkat UMKM"
                                                            class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full text-[#2d5523] font-sm pb-4 dark:text-white">
                                            *Sebelum mengajukan UMKM Anda, pastikan UMKM Anda sudah ada pada Google Maps
                                        </div>
                                        <div class="flex w-full justify-end items-center px-7">
                                            <button type="submit"
                                                class="text-white items-center bg-[#2d5523] hover:bg-[#e2a229] hover:text-[#2d5523] dark:hover:text-white focus:ring-4 text-center w-full focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:hover:bg-[#4ea840] dark:bg-[#57ba47] dark:focus:ring-blue-800">
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

            {{-- list umkm laptop --}}
            <div class="lg:grid gap-9 lg:mt-10 mb-[15vh] hidden  ">
                @foreach ($umkms as $umkm)
                    <a href="{{ route('umkm.detail', ['umkm_id' => $umkm->umkm_id]) }}" class="">
                        <div
                            class="w-full lg:h-64 h-50  bg-white dark:bg-[#30373F] dark:hover:bg-[#505c6a]  border-2 shadow-2xl border-[#2d5523] dark:border-[#505c6a] rounded-xl overflow-hidden flex hover:border-4 hover:border-yellow-500 justify-center items-center  group-hover:opacity-100 transition ease-in-out duration-400 hover:scale-105 group">
                            <div class="lg:basis-1/3 lg:h-full">
                                <img src={{ asset('assets/images/' . $umkm->foto) }} alt=""
                                    class="w-full h-full group-hover:scale-110  transition ease-in-out duration-400">
                            </div>
                            <div class="basis-2/3 h-full w-full pt-4 pl-8 ">
                                <div class="basis-2/3">
                                    <div class="text-3xl font-bold text-[#2d5523] dark:text-white">
                                        {{ $umkm->nama }} 
                                    </div>
                                    <div class="pt-4">
                                        <table class="text-[#2d5523] dark:text-white">
                                            <tr>
                                                <td class="pl-3 py-1">
                                                    <i class="fa-solid fa-clock"></i>
                                                </td>
                                                <td class="pl-3 py-1">
                                                    <span class="font-normal">
                                                        {{ $umkm->buka_waktu }} - {{ $umkm->tutup_waktu }}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-3 py-1">
                                                    <i class="fa-solid fa-map-location-dot"></i>
                                                </td>
                                                <td class="pl-3 py-1">
                                                    <span class="font-normal">
                                                        {{ $umkm->lokasi }}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pl-3 py-1">
                                                    <i class="fa-solid fa-circle-info"></i>
                                                </td>
                                                <td class="pl-3 py-1">
                                                    <span class="font-normal">
                                                        {{ $umkm->deskripsi }}
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="basis-1/3 flex justify-center items-center ">
                                <div
                                    class="w-fit h-fit p-2  rounded-lg border-2 border-[#2d5523] dark:border-[#57ba47] dark:bg-[#57ba47] text-[#2d5523] dark:text-white group-hover:text-white group-hover:bg-[#E2A229] dark:group-hover:border-[#e2a229] group-hover:scale-110">
                                    Lihat Detail
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>


            {{-- list umkm mobile --}}
            <div class=" pt-14  flex justify-center lg:hidden flex-col gap-y-10 h-fit w-[90%]  mx-auto dark:bg-[#24292d]">

                @foreach ($umkms as $umkm)
                    <a href="{{ route('umkm.detail', ['umkm_id' => $umkm->umkm_id]) }}">
                        <div
                            class=" shadow-xl rounded-2xl overflow-hidden border-black border-2  dark:text-white dark:bg-[#30373F] justify-start">
                            <div class=" flex justify-start  relative items-end ">
                                <img src={{ asset('assets/images/' . $umkm->foto) }} alt=""
                                    class="w-full group-hover:scale-110 object-cover transition ease-in-out duration-500 ">
                                <div
                                    class="py-6 px-7 absolute bg-[#2d5523] dark:bg-[#57ba47] text-3xl  -bottom-10 left-5 rounded-full text-white font-semibold flex items-center gap-2">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>{{ $umkm->buka_waktu }} - {{ $umkm->tutup_waktu }}
                                    </p>
                                </div>
                            </div>
                            <div class="w-fit py-3   ">
                                <div class="text-4xl font-bold text-[#2d5523] dark:text-white ps-5 pt-10">
                                    {{ $umkm->nama }}
                                </div>
                                <div class="text-3xl font-medium text-[#2d5523] dark:text-white ps-5 pt-4">
                                    {{ $umkm->lokasi }}
                                </div>
                                <div class="text-3xl font-medium text-[#2d5523] hidden  dark:text-white ps-5 ">
                                    {{ $umkm->deskripsi }}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div x-data @click.outside="exitFilter()">
                <div class="md:hidden fixed z-[9999] -right-[560px] top-[25%] h-auto  dark:bg-dark_grey6  dark:bg-none p-4 transition-all ease-in-out duration-1000 text-white bg-white dark:bg-gray-800 rounded-md"
                    id="filter">
                    <div class="dark:text-white text-[#2d5523] pb-4 text-lg">Pilih Kategori</div>
                    <ul class="grid w-full">
                        <li>
                            <a href="{{ route('umkm') }}"
                                class="inline-flex pl-3 items-center justify-between w-full p-1.5 text-[#2d5523]  dark:border-gray-300   cursor-pointer dark:hover:text-gray-300   border border-gray-200' dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white  hover:text-white hover:bg-yellow-500  dark:bg-[#30373F] dark:hover:bg-gray-700 {{ $kategori === 0 ? 'bg-yellow-500 dark:bg-[#505c6a] text-white border border-gray-200' : 'bg-white dark:text-gray-300' }}">
                                <div class="block">
                                    <div class="w-full text-lg font-semibold ">Semua Kategori</div>
                                </div>
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('umkm.category', $category->kategori_id) }}"
                                    class="inline-flex pl-3 items-center justify-between w-full p-1.5 text-[#2d5523]  dark:border-gray-300   cursor-pointer dark:hover:text-gray-300   border border-gray-200'dark:peer-checked:text-blue-500 peer-checked:border-[#2d5523] peer-checked:text-white  hover:text-white hover:bg-yellow-500  dark:bg-[#30373F] dark:hover:bg-gray-700 {{ $kategori == $category->kategori_id ? 'bg-yellow-500 dark:bg-[#505c6a] text-white border border-gray-200' : 'bg-white dark:text-gray-300' }}">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">{{ $category->nama_kategori }}</div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="sm:hidden  fixed z-50 right-0 top-[50%] w-10 h-10 p-2 bg-[#e2a229] text-white flex items-center  text-center rounded-l-md cursor-pointer"
                    id="buttonFilter">
                    <i class="fa-solid fa-filter" id="imgButtonFilter"></i>
                    
                </div>

            </div>

            <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                <button @click="editModal = true"
                    class="flex lg:hidden items-center  justify-center print:hidden fixed end-6 bottom-6 group animate-bounce text-white bg-[#2d5523] rounded-full w-30 h-30 border-2 border-[#2d5523] hover:border-[#e2a229] dark:hover:border-[#2d5523]  dark:bg-[#e2a229] dark:border-[#e2a229] hover:bg-[#e2a229] dark:hover:BG-[#2D5523] dark:hover:bg-[#2d5523] focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800 text-3xl">
                    <i class="fa-solid fa-plus"></i>
                </button>
                <div x-show="editModal" x-cloak tabindex="-1" aria-hidden="true"
                    class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 lg:hidden justify-center items-center w-full lg:inset-0 h-full">
                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                    <div class="relative z-[1000] p-4 w-full max-h-[700px]" @click.away="editModal = false"
                        x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <!-- Modal content -->
                        <div class="relative w-full bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex w-full items-center justify-between px-4 lg:px-5 border-b-2 rounded-t mb-3 p-2 border-[#B8B8B8]">
                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                    Ajukan UMKM
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    @click="editModal = false">
                                    <i class="fa-solid fa-xmark text-xl"></i>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="w-full pb-5 text-[#34662C]" method="POST"
                                action="{{ route('umkm.store') }}" enctype="multipart/form-data">
                                <div class="max-h-[570px] overflow-y-auto">


                                    @csrf
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2 px-4">
                                            <label
                                                class="block mb-2 text-base font-medium text-[#2d5523] dark:text-white">Nama
                                                Pemilik</label>
                                                @if (Auth::check())
                                                    <input type="text"id="nama_pemilik" name="nama_pemilik"
                                                class="bg-gray-50 border text-base border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                readonly value="{{ Auth::user()->penduduk->nama }}">
                                            <input type="hidden" id="id_penduduk" name="id_penduduk"
                                                value="{{ Auth::user()->penduduk->id_penduduk }}">x
                                                @endif
                                            
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2 px-4">
                                            <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">Nama
                                                UMKM</label>
                                            <input type="text" name="nama" id="nama"
                                                class="bg-gray-50 border   border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan Nama UMKM">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2 px-4">
                                            <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">No.
                                                WA</label>
                                            <input type="text" name="no_wa" id="no_wa"
                                                class="bg-gray-50 border   border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan No. WhatsApp">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2 px-4">
                                            <label class="block mb-2   font-medium text-[#2d5523] dark:text-white">Foto
                                                UMKM</label>
                                            <input type="file" name="foto" id="foto"
                                                class="bg-gray-50 border   border-[#518742] dark:bg-[#505c6a] dark:border-gray-500  text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan No. WhatsApp" required>
                                        </div>
                                    </div>

                                    <div class="flex px-10 pb-3 justify-between">
                                        <div class="flex flex-col">
                                            <label
                                                class=" mb-2   w-full text-center mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                Buka</label>
                                            <div class="w-fit mx-auto">
                                                <input type="time" id="buka_waktu" name="buka_waktu"
                                                    class="bg-gray-50 border-2 border-[#2d5523]  dark:bg-[#505c6a] leading-none text-lg text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px]   dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    value="00:00" required />
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            <label
                                                class="mb-2   w-full text-center mx-auto font-medium text-[#2d5523] dark:text-white">Jam
                                                Tutup</label>
                                            <div class="w-fit mx-auto">
                                                <input type="time" id="tutup_waktu" name="tutup_waktu"
                                                    class="bg-gray-50 border-2 border-[#2d5523] leading-none text-lg text-[#2d5523]  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit  py-2.5 px-[17px] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    value="00:00" required />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2 px-4">
                                            <label
                                                class="block mb-2   font-medium text-[#2d5523] dark:text-white">Kategori</label>
                                            <div
                                                class="text-[#2d5523] dark:bg-[#505c6a] dark:border-gray-500 placeholder-[#34662C]/50 font-semibold  text-lg  focus:ring-primary-600 focus:border-primary-600 block w-full   rounded-lg  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 ">
                                                <select class="hidden" x-cloak id="select">
                                                    <option value="1">Makanan</option>
                                                    <option value="2">Minuman</option>
                                                    <option value="3">Peralatan Rumah Tangga</option>
                                                    <option value="4">Kebutuhan Pokok</option>
                                                    <option value="5">Jasa</option>
                                                    <option value="6">Lainnya</option>
                                                </select>

                                                <div x-data="dropdown()" x-init="loadOptions()"
                                                    class="flex flex-col items-center">
                                                    <input name="values" type="hidden" :value="selectedValues()" />
                                                    <div class="relative z-20 inline-block  w-full">
                                                        <div class="relative flex flex-col items-center h-full">
                                                            <div @click="open" class="w-full">
                                                                <div
                                                                    class=" flex rounded-lg border-2 border-[#2d5523] dark:border-gray-600 border-stroke py-2 pl-3 pr-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input">
                                                                    <div class="flex flex-auto flex-wrap gap-3">
                                                                        <template x-for="(option,index) in selected"
                                                                            :key="index">
                                                                            <div
                                                                                class="my-1.5 flex items-center justify-center rounded-lg border-[.5px] border-stroke bg-gray  px-2.5 py-1.5 text-sm font-medium dark:border-strokedark dark:bg-white/30">
                                                                                <div class="max-w-full flex-initial"
                                                                                    x-model="options[option]"
                                                                                    x-text="options[option].text">
                                                                                </div>
                                                                                <div
                                                                                    class="flex flex-auto flex-row-reverse">
                                                                                    <div @click="remove(index,option)"
                                                                                        class="cursor-pointer pl-2 hover:text-danger">
                                                                                        <svg class="fill-current"
                                                                                            role="button"
                                                                                            width="12"
                                                                                            height="12"
                                                                                            viewBox="0 0 12 12"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z"
                                                                                                fill="currentColor">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </template>
                                                                        <div x-show="selected.length == 0"
                                                                            class="flex-1 ">
                                                                            <input placeholder="Pilih Kategori UMKM"
                                                                                class=" placeholder-[#2d5523] dark:bg-[#505c6a] dark:placeholder-white"
                                                                                :value="selectedValues()" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex w-8 items-center py-1 pl-1 pr-1">
                                                                        <button type="button" @click="open"
                                                                            class="h-6 w-6 cursor-pointer outline-none focus:outline-none"
                                                                            :class="isOpen() === true ? 'rotate-180' : ''">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <g opacity="0.8">
                                                                                    <path fill-rule="evenodd"
                                                                                        clip-rule="evenodd"
                                                                                        d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                                                        fill="#24292d"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-full px-4">
                                                                <div x-show.transition.origin.top="isOpen()"
                                                                    class="max-h-select absolute top-full left-0 z-40 w-full overflow-y-auto rounded bg-white  dark:bg-[#505c6a] shadow dark:bg-form-input"
                                                                    @click.outside="close">
                                                                    <div class="flex w-full flex-col">
                                                                        <template x-for="(option,index) in options"
                                                                            :key="index">
                                                                            <div>
                                                                                <div class="w-full cursor-pointer rounded-t border-b border-stroke hover:bg-primary/5 dark:border-form-strokedark"
                                                                                    @click="select(index,$event)">
                                                                                    <div :class="option.selected ?
                                                                                        'border-primary' : ''"
                                                                                        class="relative flex w-full items-center border-l-2 border-transparent p-2 pl-2">
                                                                                        <div
                                                                                            class="flex w-full items-center">
                                                                                            <div class="mx-2 leading-6"
                                                                                                x-model="option"
                                                                                                x-text="option.text">
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
                                            <label
                                                class="block mb-2   font-medium text-[#2d5523] dark:text-white">Koordinat
                                                UMKM</label>
                                            <input id="lokasi_map" name="lokasi_map"
                                                placeholder="Masukkan Koordinat Lokasi Sesuai GMaps"
                                                class="bg-gray-50 border   border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Masukkan No. WhatsApp">
                                        </div>
                                        <div class="sm:col-span-2 px-4">
                                            <label
                                                class="block mb-2   font-medium text-[#2d5523] dark:text-white">Lokasi
                                                UMKM</label>
                                            <textarea id="lokasi" name="lokasi" cols="19" rows="3" placeholder="Masukkan Alamat UMKM"
                                                class="bg-gray-50 border   border-[#518742]  text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>

                                        </div>
                                        <div class="sm:col-span-2 px-4">
                                            <label
                                                class="block mb-2   font-medium text-[#2d5523] dark:text-white">Lokasi
                                                UMKM</label>
                                            <textarea id="deskripsi" name="deskripsi" cols="19" rows="3"
                                                placeholder="Masukkan Deskripsi Singkat UMKM"
                                                class="bg-gray-50 border text-base border-[#518742] dark:bg-[#505c6a] dark:border-gray-500 text-[#2f5724] rounded-lg placeholder-[#34662C]/50 focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>

                                        </div>
                                        <div class="w-full text-[#2d5523] font-sm px-4 pb-4 dark:text-white">
                                            *Sebelum mengajukan UMKM Anda, pastikan UMKM Anda sudah ada pada Google Maps
                                        </div>

                                    </div>


                                    <div
                                        class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:bg-[#505c6a]">
                                        <button @click="editModal = false"
                                            class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                            Batal
                                        </button>
                                        <button type="submit"
                                            class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] dark:bg-[#57ba47] dark:hover:bg-[#2d5523] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out dark:text-white">
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
</div>

<x-footer>
    {{-- <script>
        let buttonAction = document.querySelectorAll("i");

        document.querySelector("#jadwal").addEventListener("click", (e) => {
            buttonAction.forEach(node => {
                try {
                    if (node === e.target) {
                        node.nextElementSibling.classList.toggle("hidden")
                    } else if (e.target !== node && !e.target.classList.contains("delete-modal") && !e
                        .target.classList.contains("edit-modal")) {
                        node.nextElementSibling.classList.add("hidden");
                    }
                } catch (error) {}
            });
        });
    </script> --}}
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
    <script>
        const filter = document.getElementById('filter');
        const buttonFilter = document.getElementById('buttonFilter');
        const imgButtonFilter = document.getElementById('imgButtonFilter');

        buttonFilter.addEventListener("click", () => {
            buttonFilter.classList.add("hidden")
            filter.classList.remove("-right-[560px]");
            filter.classList.add("right-0");
        })

        const exitFilter = () => {
            filter.classList.add("-right-[560px]");
            filter.classList.remove("right-0");
            buttonFilter.classList.remove("hidden")
        }
    </script>
</x-footer>
