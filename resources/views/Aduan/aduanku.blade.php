<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative lg:flex hidden justify-center items-center">
    <img src="{{ asset('assets/images/aduan-cover.webp') }}" alt="" class="w-full dark:hidden block">
    <img src="{{ asset('assets/images/dark-aduan-cover.webp') }}" alt="" class="w-full dark:block hidden">
    <div class=" w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center ">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">Aduan Warga RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Laporkan Segala Permasalahan di Lingkungan RW</p>
    </div>
</div>
<div class=" lg:hidden sm:sticky sm:top-0 top-21 fixed text-[#2d5523] w-[100%] dark:text-white font-bold border-b-2 z-9  bg-white dark:bg-[#2F363E] h-fit border-gray-300 dark:border-gray-600 py-6">
    <div class="w-[90%] mx-auto gap-4 flex flex-col">
        <div class="lg:hidden text-2xl sm:text-4xl flex flex-col gap-2">
            <p class="text-[#2d5523] dark:text-white font-bold">Aduan Warga RW 3</p>
            <p class="text-[#2d5523] dark:text-white font-sans text-sm sm:text-lg text-left">Laporkan Segala Permasalahan di Lingkungan RW</p>
        </div>

        <div class="flex gap-2">
            <div class="sm:basis-1/5 basis-1/5" x-data="{ filterModal: false }" @keydown.escape="filterModal = false">
                <button @click="filterModal = true" :class="{
                        'bg-yellow-500  text-white': {{ request('prioritas') ? 'true' : 'false' }},
                        'bg-gray-100 text-[#2d5523] dark:bg-[#1f2429] dark:text-gray-300': {{ request('prioritas') ? 'false' : 'true' }}
                    }" class="border-gray-400 border px-5 text-center py-3 rounded-full">
                    <i class="fa-solid fa-sliders sm:text-3xl text-xl"></i>
                </button>

                <!-- Modal Overlay -->
                <div x-show="filterModal" x-cloak class="fixed inset-0 z-99 flex items-end justify-center">
                    <div class="fixed inset-0" @click="filterModal = false"></div>

                    <!-- Modal Content -->
                    <div x-show="filterModal" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" class="bg-[#f3f3f3] dark:bg-[#30373F] rounded-r-lg shadow-lg h-fit max-w-screen-sm fixed left-0 sm:top-[282px] top-[257px] z-999999 p-6">
                        <!-- Modal header -->
                        <div class="w-fit flex flex-col">
                            <div class="w-fit">
                                <a href="{{ route('aduanku') }}" class="{{ request('prioritas') == '' ? 'font-bold bg-yellow-500 text-white hover:bg-yellow-600' : 'hover:bg-gray-200 dark:hover:bg-gray-700' }} block py-2 px-4 rounded ">Semua Prioritas</a>
                            </div>
                            <div class="w-fit">
                                <a href="{{ route('aduanku', ['prioritas'=>'biasa']) }}" class="{{ request('prioritas') == 'biasa' ? 'font-bold bg-yellow-500 text-white hover:bg-yellow-600' : 'hover:bg-gray-200 dark:hover:bg-gray-700' }} block py-2 px-4 rounded ">Biasa</a>
                            </div>
                            <div class="w-fit">
                                <a href="{{ route('aduanku', ['prioritas'=>'penting']) }}" class="{{ request('prioritas') == 'penting' ? 'font-bold bg-yellow-500 text-white hover:bg-yellow-600' : 'hover:bg-gray-200 dark:hover:bg-gray-700' }} block py-2 px-4 rounded ">Penting</a>
                            </div>
                            <div class="w-fit">
                                <a href="{{ route('aduanku', ['prioritas'=>'darurat']) }}" class="{{ request('prioritas') == 'darurat' ? 'font-bold bg-yellow-500 text-white hover:bg-yellow-600' : 'hover:bg-gray-200 dark:hover:bg-gray-700' }} block py-2 px-4 rounded ">Darurat</a>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:basis-1/5 basis-1/5" x-data="{ filterModal: false }" @keydown.escape="filterModal = false">
                <button @click="filterModal = true" :class="{
                        'bg-yellow-500  text-white': {{ request('prioritas') ? 'true' : 'false' }},
                        'bg-gray-100 text-[#2d5523] dark:bg-[#1f2429] dark:text-gray-300': {{ request('prioritas') ? 'false' : 'true' }}
                    }" class="border-gray-400 border px-5 text-center py-3 rounded-full">
                    <i class="fa-solid fa-sliders sm:text-3xl text-xl"></i>
                </button>

                <!-- Modal Overlay -->
                <div x-show="filterModal" x-cloak class="fixed inset-0 z-99 flex items-end justify-center">
                    <div class="fixed inset-0" @click="filterModal = false"></div>

                    <!-- Modal Content -->
                    <div x-show="filterModal" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0" class="bg-[#f3f3f3] dark:bg-[#30373F] rounded-r-lg shadow-lg h-fit max-w-screen-sm fixed left-0 sm:top-[282px] top-[257px] z-999999 p-6">
                        <!-- Modal header -->
                        <div class="w-fit flex flex-col">
                            <div class="w-fit">
                                <a href="{{ route('aduanku') }}" class="{{ request('status') == '' ? 'font-bold bg-yellow-500 text-white hover:bg-yellow-600' : 'hover:bg-gray-200 dark:hover:bg-gray-700' }} block py-2 px-4 rounded ">Semua Status</a>
                            </div>
                            <div class="w-fit">
                                <a href="{{ route('aduanku', ['status'=>'diproses']) }}" class="{{ request('status') == 'diproses' ? 'font-bold bg-yellow-500 text-white hover:bg-yellow-600' : 'hover:bg-gray-200 dark:hover:bg-gray-700' }} block py-2 px-4 rounded ">Diproses</a>
                            </div>
                            <div class="w-fit">
                                <a href="{{ route('aduanku', ['status'=>'selesai']) }}" class="{{ request('status') == 'selesai' ? 'font-bold bg-yellow-500 text-white hover:bg-yellow-600' : 'hover:bg-gray-200 dark:hover:bg-gray-700' }} block py-2 px-4 rounded ">Selesai</a>
                            </div>
                            <div class="w-fit">
                                <a href="{{ route('aduanku', ['status'=>'ditolak']) }}" class="{{ request('status') == 'ditolak' ? 'font-bold bg-yellow-500 text-white hover:bg-yellow-600' : 'hover:bg-gray-200 dark:hover:bg-gray-700' }} block py-2 px-4 rounded ">Ditolak</a>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:basis-4/5 basis-3/5">
                <form action="{{ route('aduanku') }}" method="GET" class="w-full mx-auto lg:shadow-2xl">
                    <label for="default-search" class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
                    <div class="relative h-full">
                        <div class="absolute inset-y-0 ps-6 text-lg flex justify-center  text-[#2d5523]  dark:text-gray-300 pr-5 items-center px-3 pointer-events-none ">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <input type="search" id="default-search" name="search" class=" bg-gray-100 dark:bg-[#1f2429] border-gray-400 border block w-full  ps-13 text-[#2d5523] text-base rounded-full h-full focus:ring-yellow-500 focus:border-yellow-500  dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-yellow-500 placeholder:text-[#2d5523] dark:focus:border-yellow-500 sm:placeholder:text-lg placeholder:text-base pr-5" placeholder="Cari Aduan" required />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- content --}}
<div class="w-[90%] mx-auto h-fit hidden lg:flex justify-between items-center mt-15">
    <form action="{{ route('aduanku') }}" class="w-fit h-full flex items-center justify-center mb-0">
        @csrf
        <div class="flex shadow-md rounded-xl w-full bg-white border-2 dark:bg-[#30373F] border-[#2d5523] dark:border-gray-600 items-center justify-between py-2 h-fit">
            <div class="flex w-full">
                <div class="w-fit px-4">
                    <label for="search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-[#58a444] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" name="search" id="search" class="block w-full p-2 ps-10 text-sm text-[#58a444] dark:text-white dark:placeholder:text-white dark:bg-[#30373F] rounded-lg" placeholder="Cari Aduan..." />
                    </div>
                </div>
                <div class="border-x-2 border-gray-400 px-4 w-fit">
                    <div class="relative">
                        <select name="prioritas" id="prioritas" class="block py-2.5 px-9 w-full text-sm  bg-white dark:bg-[#30373F] appearance-none text-[#58a444] dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected value="">Semua Prioritas</option>
                            <option value="biasa">Biasa</option>
                            <option value="penting">Penting</option>
                            <option value="darurat">Darurat</option>
                        </select>
                        <i class="fa-solid fa-regular fa-star absolute left-2 -top-1 pt-4 text-gray-500 dark:text-white text-sm"></i>
                        <i class="fa-solid fa-angle-down absolute right-2 top-0 pt-4 text-gray-500 dark:text-white text-sm"></i>
                    </div>
                </div>
                <div class="border-x-1 border-gray-400 px-4 w-fit">
                    <div class="relative">
                        <select name="status" id="status" class="block py-2.5 px-9 w-full text-sm  bg-white dark:bg-[#30373F] appearance-none text-[#58a444] dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected value="">Semua Status</option>
                            <option value="diproses">Diproses</option>
                            <option value="selesai">Selesai</option>
                            <option value="ditolak">Ditolak</option>
                        </select>
                        <i class="fa-solid fa-question absolute left-2 -top-1 pt-4 text-gray-500 dark:text-white text-sm"></i>
                        <i class="fa-solid fa-angle-down absolute right-2 top-0 pt-4 text-gray-500 dark:text-white text-sm"></i>
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

    {{-- tambah aduan --}}
    <div class="basis-1/3 hidden md:flex md:justify-end">
        <button type="button" class="w-auto shadow-2xl h-[57px] text-[20px] px-[24px] bg-yellow-500  dark:text-white dark:hover:text-white dark:shadow-gray-900 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-300 hover:scale-105" data-modal-target="tambahModal" data-modal-toggle="tambahModal">
            Tambah Aduan
        </button>
        <div id="tambahModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto fixed -top-14 right-0 left-0 -bottom-10 z-[999] justify-center items-center w-full inset-0 ">
            <div class="relative p-32 w-full  max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow  dark:bg-[#30373F] ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-3 pl-4 text-[#2d5523]  rounded-t dark:border-white border-[#2d5532] border-b-[3.5px]">
                        <h3 class="text-xl font-extrabold  dark:text-white">
                            Tambah Aduan
                        </h3>
                        <button type="button" class=" bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambahModal">
                            <i class="fa-solid fa-xmark text-[#2d5523] dark:text-white font-extrabold text-xl"></i>
                        </button>
                    </div>
                    <form class="p-4 md:p-5 w-full flex flex-col " method="POST" action="{{ route('aduan.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex w-full h-fit gap-6">
                            <input type="hidden" name="page" id="page" value="{{ request()->page ? request()->page : null }}">
                            <input type="hidden" name="search" id="search" value="{{ request()->search ? request()->search : null }}">
                            <input type="hidden" name="prioritas" id="prioritas" value="{{ request()->prioritas ? request()->prioritas : null }}">
                            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="status" id="status" value="{{ request()->status ? request()->status : null }}">
                            <input type="hidden" id="pengadu_id" name="pengadu_id" value="{{ Auth::user()->penduduk->id_penduduk }}">

                            {{-- kolom kiri --}}
                            <div class="grid gap-5 mb-4 w-full basis-1/2 ">
                                <div class="gap-2 flex w-full">
                                    <div class="basis-1/4 h-full flex items-center">
                                        <label for="nama_pembuat" class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Nama
                                            Pembuat</label>
                                    </div>
                                    <div class="basis-3/4 h-full flex items-center">
                                        <input type="text" id="nama" name="nama" value="{{ Auth::user()->penduduk->nama }}" readonly class="bg-white  border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    </div>
                                </div>
                                <div class="gap-2 flex w-full">
                                    <div class="basis-1/4 h-full flex items-center">
                                        <label for="judul" class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Judul</label>
                                    </div>
                                    <div class="basis-3/4 h-full flex items-center">
                                        <input type="text" id="judul" name="judul" placeholder="Masukkan Judul Aduan" class="bg-white  border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    </div>
                                </div>
                                <div class="gap-2 flex w-full">
                                    <div class="basis-1/4 h-full flex items-center">
                                        <label for="prioritas" class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Prioritas</label>
                                    </div>
                                    <div class="basis-3/4 h-full flex items-center">
                                        <select name="prioritasData" id="prioritasData" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="">Pilih Prioritas Aduan</option>
                                            <option value="biasa">Biasa</option>
                                            <option value="penting">Penting</option>
                                            <option value="darurat">Darurat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="gap-2 flex w-full">
                                    <div class="basis-1/4 h-full flex items-center">
                                        <label for="image" class="text-lg font-bold items-center flex w-full text-[#2d5523] dark:text-white">Foto
                                            Aduan</label>
                                    </div>
                                    <div class="basis-3/4 h-full flex items-center">
                                        <input id="image" name="image" type="file" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:bg-[#505c6a] dark:border-gray-500">
                                    </div>
                                </div>
                            </div>

                            <!-- kolom kanan -->
                            <div class="flex flex-col gap-5  w-full basis-1/2 ">
                                <div class="gap-2 flex w-full h-full">
                                    <div class="basis-1/4 h-fit">
                                        <label for="konten_aduan" class="text-lg font-bold w-full text-[#2d5523] dark:text-white">Deskripsi
                                            Singkat</label>
                                    </div>
                                    <div class="basis-3/4 h-full flex items-center">
                                        <textarea id="konten_aduan" name="konten_aduan" cols="19" rows="9" placeholder="Masukkan Deskripsi Singkat UMKM" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold  text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full text-[#2d5523] font-sm pb-4 dark:text-white ">
                            *Pastikan data yang anda masukkan benar dan sesuai dengan data yang sebenarnya
                        </div>
                        <div class="flex w-full justify-end items-center px-7">
                            <button type="submit" class="text-white items-center bg-[#2d5523] hover:bg-[#e2a229] hover:text-[#2d5523] dark:hover:text-white focus:ring-4 text-center w-full focus:outline-none focus:ring-blue-300  rounded-lg text-lg font-bold  py-3  dark:hover:bg-[#4ea840] dark:bg-[#57ba47] dark:focus:ring-blue-800">
                                Tambah Aduan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

<div class=" min-h-[100vh] w-[90%] py-5 mx-auto lg:mt-10 sm:mt-6 mt-44">
    <div class="relative overflow-x-auto shadow-md rounded-lg ">
        <table class="sm:w-full  w-150 text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-[#428238] dark:text-white">
                <tr>
                    <th scope="col" class="px-6 w-fit py-3 ">
                        Judul Aduan
                    </th>
                    <th scope="col" class="px-6 w-fit py-3 ">
                        Pembuat Aduan
                    </th>
                    <th scope="col" class="px-6 w-fit py-3 ">
                        Prioritas
                    </th>
                    <th scope="col" class="px-6 w-fit py-3">
                        Aksi
                    </th>
                    <th scope="col" class="px-6 w-fit py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                $stat = [
                'diproses' => [
                'classContent' =>
                'text-white bg-[#FFDE68] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all',
                'icon' => 'fa-minus',
                'value' => 'diproses',
                ],
                'selesai' => [
                'classContent' =>
                'text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all',
                'icon' => 'fa-check',
                'value' => 'selesai',
                ],
                'ditolak' => [
                'classContent' =>
                'text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all',
                'icon' => 'fa-xmark',
                'value' => 'ditolak',
                ],
                ];
                @endphp

                @foreach ($aduans as $aduan)
                <tr class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E] dark:text-white dark:border-gray-700 ">
                    <td scope="row" class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        {{ $aduan->judul }}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        {{ $aduan->penduduk->nama }}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        {{ $aduan->prioritas }}
                    </td>
                    <td class="modal">
                        <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                            <div x-data="{ 'idAduan': {{ $aduan_id }} }">
                                <div x-data="{ 'detailModal': idAduan === {{ $aduan->aduan_id }} }" @keydown.escape="detailModal = false">
                                    <button @click="detailModal = true" class="btn-modal flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-full sm:rounded-lg shadow-xl font-bold h-full px-3 py-3 sm:py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-circle-info"></i>
                                        <div class="hidden lg::inline-flex">Detail</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px] rounded-lg" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div class="relative bg-[#f4f4f4] rounded-lg shadow dark:bg-[#2F363E] h-fit">
                                                <!-- Modal header -->
                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        {{ $aduan->judul }}
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="w-full h-full text-[#34662C] text-left">
                                                    <div class="p-5  w-full sm:w-150">
                                                        @if (array_key_exists($aduan->status, $stat))
                                                        <button class="flex justify-center items-center gap-2 w-8 h-8 {{ $stat[$aduan->status]['classContent'] }}">
                                                            <i class="fa-solid text-lg {{ $stat[$aduan->status]['icon'] }}"></i>
                                                        </button>
                                                        @endif
                                                    </div>
                                                    <div class="chat-div max-h-[450px] overflow-y-auto scrollbar-thin pt-3 scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF]">
                                                        @if ($aduan->image != null)
                                                        <div class="flex w-full justify-center">
                                                            <img class="w-[60%] rounded-lg dark:shadow-md" src="{{ asset('assets/images/Aduan/' . $aduan->image) }}">
                                                        </div>
                                                        @endif
                                                        <div class="flex w-full p-4 {{ Auth::user()->penduduk->id_penduduk == $aduan->pengadu_id ? 'justify-end' : '' }}">
                                                            <div class="p-4 w-fit rounded-lg max-w-[75%] shadow-lg {{ Auth::user()->penduduk->id_penduduk == $aduan->pengadu_id ? 'bg-[#cdffc5] text-black dark:text-white dark:bg-[#005c4b]' : 'bg-white text-black dark:text-white dark:bg-gray-700' }}">
                                                                <p class="text-sm font-semibold">
                                                                    {{ $aduan->penduduk->nama }}
                                                                </p>
                                                                <p class="font-normal pt-3">
                                                                    {{ $aduan->konten_aduan }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        @foreach ($aduan->respon as $response)
                                                        <div class="flex w-full p-4 {{ Auth::user()->penduduk->id_penduduk == $response->perespon_id ? 'justify-end' : '' }}">
                                                            <div class="p-4 w-fit rounded-lg max-w-[75%] shadow-lg {{ Auth::user()->penduduk->id_penduduk == $response->perespon_id ? 'bg-[#cdffc5] text-black dark:text-white dark:bg-[#005c4b]' : 'bg-white text-black dark:text-white dark:bg-gray-700' }}">
                                                                <p class="text-sm font-semibold">
                                                                    {{ $response->penduduk->nama }}
                                                                </p>
                                                                <br>
                                                                @if ($response->image != null)
                                                                <div class="">
                                                                    <img class="w-fit rounded-lg" src="{{ asset('assets/images/Respon/' . $response->image) }}">
                                                                </div>
                                                                @endif
                                                                @if ($response->konten_respon != null)
                                                                <p class="font-normal pt-3">
                                                                    {{ $response->konten_respon }}
                                                                </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="w-full bg bg-[#e9e9e9] dark:bg-[#3e4852] min-h-10 rounded-b-lg">
                                                        @if ($aduan->status != 'selesai' && $aduan->status != 'ditolak')
                                                        <form action="{{ route('add-response') }}" method="post" enctype="multipart/form-data" class="response-form">
                                                            @csrf
                                                            <div class="flex px-4 py-3 justify-around w-full items-start bg-[#e9e9e9] dark:bg-[#3e4852] rounded-b-lg">
                                                                <input type="hidden" name="perespon_id" id="perespon_id" value="{{ Auth::user()->penduduk->id_penduduk }}">
                                                                <input type="hidden" name="aduan_id" id="aduan_id" value="{{ $aduan->aduan_id }}">
                                                                <input type="hidden" name="page" id="page" value="{{ request()->page ? request()->page : null }}">
                                                                <input type="hidden" name="search" id="search" value="{{ request()->search ? request()->search : null }}">
                                                                <input type="hidden" name="status" id="status" value="{{ request()->status ? request()->status : null }}">
                                                                <input type="hidden" name="prioritas" id="prioritas" value="{{ request()->prioritas ? request()->prioritas : null }}">
                                                                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                                                                <div class="absolute w-full h-fit py-4 px-6 flex opacity-0 flex-col justify-between items-center bg-[#e9e9e9] dark:bg-[#3e4852] bottom-16 image-preview">
                                                                    <div class="flex w-full justify-end">
                                                                        <button type="button" class="delete-image">
                                                                            <i class="fa-solid fa-trash text-lg dark:text-white"></i>
                                                                        </button>
                                                                    </div>
                                                                    <img src="" alt="" class="w-[300px] h-[150px] object-cover rounded-lg imgFile mx-auto">
                                                                </div>
                                                                <div class="relative w-[80%] sm:w-[90%] flex justify-center items-center">
                                                                    <button type="button" class="w-fit absolute left-2 clip-button">
                                                                        <i class="fa-solid fa-paperclip text-lg dark:text-white"></i>
                                                                    </button>
                                                                    <input type="text" name="konten_respon" class="pl-8 konten_respon flex flex-col w-full min-h-10 max-h-20 p-2 border border-[#34662C] rounded-lg focus:outline-none dark:bg-[#505c6a] dark:border-gray-500 dark:text-white">
                                                                    <input type="file" name="image" class="hidden file-input">
                                                                </div>
                                                                <button type="submit" class="submit text-white inline-flex px-4 py-4 h-10 w-10 text-sm font-bold rounded-full shadow-md items-center justify-center bg-[#57BA47] hover:bg-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                    <i id="sendicon" class="text-lg fa-regular fa-paper-plane"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($aduan->status == 'diproses' || $aduan->status == 'ditolak')
                            <div class="flex items-center h-full gap-4 justify-center">
                                <form id="delete-aduan-form-{{ $aduan->aduan_id }}" action="{{ route('aduan.destroy', $aduan->aduan_id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="perespon_id" id="perespon_id" value="{{ Auth::user()->penduduk->id_penduduk }}">
                                    <input type="hidden" name="aduan_id" id="aduan_id" value="{{ $aduan->aduan_id }}">
                                    <input type="hidden" name="page" id="page" value="{{ request()->page ? request()->page : null }}">
                                    <input type="hidden" name="search" id="search" value="{{ request()->search ? request()->search : null }}">
                                    <input type="hidden" name="prioritas" id="prioritas" value="{{ request()->prioritas ? request()->prioritas : null }}">
                                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                </form>
                                <button type="button" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus aduan ini?')) document.getElementById('delete-aduan-form-{{ $aduan->aduan_id }}').submit();">
                                    <i class="fa-solid fa-trash-can"></i>
                                    <div class="hidden lg::inline-flex">Hapus</div>
                                </button>
                            </div>
                            @endif
                        </div>
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        <div class="flex justify-center items-center">
                            <div class="flex justify-start gap-3 w-full h-full items-center">
                                @if($aduan->status == 'selesai')
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500"></div>
                                @elseif($aduan->status == 'ditolak')
                                <div class="h-2.5 w-2.5 rounded-full bg-red-500"></div>
                                @elseif($aduan->status == 'diproses')
                                <div class="h-2.5 w-2.5 rounded-full bg-yellow-500"></div>
                                @endif
                                <div class="text-base text-[#2d5523] font-semibold dark:text-white">{{$aduan->status}}</div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if ($aduans->isEmpty())
            <div
                class="flex flex-col w-full h-fit py-8 justify-center items-center gap-4 shadow-sm my-auto  dark:border-gray-600">
                <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
                <img src="{{ asset('assets/images/no-data.png') }}" alt=""
                    class="w-[500px] h-[300px] object-cover">
                <p class="text-2xl font-semibold text-green-900 dark:text-white">Data Tidak Ditemukan</p>
            </div>
        @endif
        <div class="px-8 py-5">
            {{ $aduans->links() }}
        </div>
    </div>
</div>
<x-footer>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".response-form").forEach((form, idx) => {
                const fileClip = form.querySelector(".clip-button");
                const inputFile = form.querySelector(".file-input");
                const image = form.querySelector(".imgFile");
                const imagePreview = form.querySelector(".image-preview");
                const deleteImage = form.querySelector(".delete-image");

                fileClip.addEventListener("click", () => {
                    inputFile.click();
                });

                inputFile.addEventListener("change", (e) => {
                    let file = e.target.files[0];
                    if (file) {
                        image.src = URL.createObjectURL(file);
                        image.onload = function() {
                            URL.revokeObjectURL(image.src);
                        }
                        if (imagePreview.classList.contains('opacity-0'))
                            imagePreview.classList.add('opacity-0');
                        imagePreview.classList.remove('opacity-0');
                    }
                });

                deleteImage.addEventListener("click", () => {
                    inputFile.value = '';
                    imagePreview.classList.add('opacity-0');
                    image.src = '';
                });
            });

            document.querySelectorAll('.modal').forEach((modal) => {
                const btn = modal.querySelector('.btn-modal');
                const div = modal.querySelector('.chat-div');

                if (btn && div) {
                    btn.addEventListener('click', () => {
                        setTimeout(() => {
                            const bottomElement = div.lastElementChild;
                            if (bottomElement) {
                                bottomElement.scrollIntoView({
                                    block: 'end'
                                });
                            }
                        }, 0);
                    });
                }
            });

            const div = document.querySelectorAll('.chat-div');
            div.forEach((d) => {
                d.lastElementChild.scrollIntoView({
                    block: 'end'
                });
            });
        });
    </script>
</x-footer>