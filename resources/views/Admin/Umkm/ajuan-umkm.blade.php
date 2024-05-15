<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" method="post" action="{{ route('searchPenduduk') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search" class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl bg-gray-50 rounded-xl border border-[#34662C] focus:outline-none focus:border-[3px]" placeholder="Cari ..." required />
                        <button type="submit" class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C] hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="h-full w-fit py-2" x-data="{ 'filterModal': false }" @keydown.escape="filterModal = false">
                <button @click="filterModal = true" class="flex w-29 bg-[#57BA47] h-full text-white justify-between items-center px-4 rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                    <i class="fa-solid fa-sliders text-2xl"></i>
                    <div class="text-xl font-semibold">Filter</div>
                </button>

                <!-- Main modal -->
                <div x-show="filterModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                    <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="filterModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                    Filter Data Penduduk
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="filterModal = false">
                                    <i class="fa-solid fa-xmark text-xl"></i>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="w-full h-full text-[#34662C]" method="POST" action="{{ route('filterPenduduk') }}">
                                @csrf
                                <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="agama" class="block mb-2 text-sm font-bold">Agama</label>
                                        <select id="agama" name="agama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Agama</option>
                                            <option value="islam">Islam</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="khonghucu">Khonghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="statusPenduduk" class="block mb-2 text-sm font-bold ">Status Penduduk</label>
                                        <select id="statusPenduduk" name="statusPenduduk" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Status Penduduk</option>
                                            <option value="penduduk">Penduduk</option>
                                            <option value="RT">RT</option>
                                            <option value="RW">RW</option>
                                            <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                                            <option value="orang luar">Orang Luar</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="statusPernikahan" class="block mb-2 text-sm font-bold ">Status Pernikahan</label>
                                        <select id="statusPernikahan" name="statusPernikahan" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Status Pernikahan</option>
                                            <option value="belum">Belum Menikah</option>
                                            <option value="sudah">Sudah Menikah</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="kewarganegaraan" class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                                        <select id="kewarganegaraan" name="kewarganegaraan" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Kewarganegaraan</option>
                                            <option value="WNI">Indonesia</option>
                                            <option value="WNA">Luar</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jenisKelamin" class="block mb-2 text-sm font-bold ">Jenis Kelamin</label>
                                        <select id="jenisKelamin" name="jenisKelamin" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="rt" class="block mb-2 text-sm font-bold ">RT</label>
                                        <select id="rt" name="rt" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih RT</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                    <button type="submit" @click="filterModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Batal
                                    </button>
                                    <button type="submit" @click="filterModal = false" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Filter
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-center">
                <thead class="text-sm font-bold text-[#34662C] bg-[#91DF7D] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Pemilik
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Nama UMKM
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @for ($i=0; $i<4; $i++)  --}}
                    @foreach ($umkms as $umkm)
                    <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            @php
                            $user = $users->firstWhere('id_penduduk', $umkm->id_pemilik);
                            @endphp
                            @if($user)
                                {{ $user->nama }}
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $umkm->nama }}
                        </td>
                        <td class="px-6 py-4" x-data="{ expanded: false }">
                            <a href="#" @click.prevent="expanded = !expanded">
                                <span x-show="!expanded">{{ Str::limit($umkm->lokasi, 50) }}</span>
                                <span x-show="expanded">{{ $umkm->lokasi }}</span>
                                <span class="font-semibold" x-show="!expanded"></span>
                            </a>
                        </td>     
                        <td>
                            <div class="px-6 py-4 flex items-center justify-center h-full">
                                <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                    <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-circle-info"></i>
                                        <div>Detail</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        Detail Data UMKM
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="w-full h-full text-[#34662C] text-left">
                                                    <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                                        <div class="col-span-2 sm:col-span-1 relative">
                                                            <label class="block mb-2 text-sm font-bold">NIK</label>
                                                            <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                                            <datalist id="listNik">
                                                                <option value="123456"></option>
                                                            </datalist>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="nama" class="block mb-2 text-sm font-bold">Nama UMKM</label>
                                                            <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="jam-buka" class="block mb-2 text-sm font-bold">Jam Buka</label>
                                                            <input type="time" name="jam-buka" id="jam-buka" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="jam-tutup" class="block mb-2 text-sm font-bold">Jam Tutup</label>
                                                            <input type="time" name="jam-tutup" id="jam-tutup" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                            <select class="hidden" x-cloak id="select">
                                                                <option value="1">Makanan</option>
                                                                <option value="2">Minuman</option>
                                                                <option value="3">Peralatan Rumah Tangga</option>
                                                                <option value="4">Kebutuhan Pokok</option>
                                                                <option value="5">Jasa</option>
                                                                <option value="6">Lainnya</option>
                                                            </select>
                                                            <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col items-center">
                                                                <input name="kategori" type="hidden" :value="selectedValues()" />
                                                                <div class="relative z-20 inline-block  w-full">
                                                                    <div class="relative flex flex-col items-center h-full">
                                                                        <div @click="open" class="w-full">
                                                                            <div class=" flex rounded-lg border border-[#2d5523] border-stroke py-2 px-3 focus:outline-none transition focus:border-2 items-center">
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
                                                        <div class="col-span-2">
                                                            <label for="koordinat" class="block mb-2 text-sm font-bold">Koordinat</label>
                                                            <input type="text" name="koordinat" id="koordinat" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Alamat</label>
                                                            <textarea name="alamat" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"></textarea>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Deskripsi Singkat</label>
                                                            <textarea name="deskripsi" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"></textarea>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <div class="flex w-full justify-start items-center gap-4 py-2 h-fit">
                                                                <label for="foto" class="text-sm font-bold">Foto UMKM</label>
                                                                <div x-data="{ 'fotoModal': false }" @keydown.escape="fotoModal = false">
                                                                    <button type="button" @click="fotoModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#7D5DD7] rounded-lg shadow-xl font-semibold text-sm h-full px-3 py-1 hover:bg-[#3C2D68] hover:scale-105 transition-all">
                                                                        <div>Lihat Foto</div>
                                                                    </button>
                                                                    <!-- Detail modal -->
                                                                    <div x-show="fotoModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                                                        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="fotoModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                                            <!-- Modal content -->
                                                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                                <!-- Modal header -->
                                                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                                        Foto UMKM
                                                                                    </h3>
                                                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="fotoModal = false">
                                                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                                                        <span class="sr-only">Close modal</span>
                                                                                    </button>
                                                                                </div>
                                                                                <!-- Modal body -->
                                                                                <div class="w-full h-full text-[#34662C] text-left">
                                                                                    <div class="p-4 md:p-5  w-150 gap-4 flex justify-center items-center max-h-[450px] rounded-b-xl">
                                                                                        <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="w-full h-full rounded-xl shadow-xl border-4 border-white">
                                                                                    </div>
                                                                                    <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                                                        <button type="button" @click="fotoModal = false" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                                            Keluar
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="file" name="foto" id="foto" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                        <button @click="detailModal = false" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Keluar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="">
                            <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
<<<<<<< HEAD
                                <div x-data="{ 'terimaModal': false }" @keydown.escape="terimaModal = false">
                                    <form action="{{ route('umkm.accept') }}" method="POST">
                                        @csrf
                                        <input type="hidden" id="umkm_id" name="umkm_id" value="{{ $umkm->umkm_id }}">
                                        <button @click="terimaModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#76D75D] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-check text-lg"></i>
                                            <div>Terima</div>
                                        </button>
                                    </form>
                                    <!-- Detail modal -->
                                    <div x-show="terimaModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="terimaModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            {{-- <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        Alasan Penerimaan Ajuan UMKM
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="terimaModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <div class="px-4 md:px-5 py-2 mt-5">
                                                    <textarea name='alasan' id="alasan" cols="19" rows="3" name="kelas" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="w-full h-full text-[#34662C] text-left">
                                                    <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">

                                                    </div>
                                                    <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                        <button @click="terimaModal = false" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Keluar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- <button class="flex justify-center items-center gap-2 w-fit text-white bg-[#76D75D] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all">
                                    <i class="fa-solid fa-check text-lg"></i>
                                    <div>Terima</div>
                                </button> --}}

                                <div x-data="{ 'tolakModal': false }" @keydown.escape="tolakModal = false">
                                    <button @click="tolakModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-xmark text-lg"></i>
                                        <div>Tolak</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="tolakModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="tolakModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                {{-- <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        Alasan Penolakan Ajuan UMKM
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="tolakModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div> --}}
                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        Alasan Penolakan Ajuan UMKM
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="terimaModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('umkm.reject') }}" method="POST" class="px-4 md:px-5 py-2 mt-5">
                                                    @csrf
                                                    <div class="mt-4">
                                                        <textarea name='alasan' id="alasan" cols="19" rows="3" class="bg-white border-2 border-[#2d5523] text-[#2d5523] shadow-md placeholder-[#34662C]/50 font-semibold text-lg rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"></textarea>
                                                        <input type="hidden" id="umkm_id" name="umkm_id" value="{{ $umkm->umkm_id }}">
                                                    </div>
                                                <!-- Modal body -->
                                                <div class="w-full h-full text-[#34662C] text-left">
                                                    <form action="">
                                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                                            <div class="col-span-2">
                                                                <label for="alasan-penolakan" class="block mb-2 text-sm font-bold">Alasan Penolakan</label>
                                                                <textarea id="alasan-penolakan" name="alasan-penolakan" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan Alasan Penolakan..."></textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                        <button type= "button" @click="tolakModal = false" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Keluar
                                                        <button type="button" @click="filterModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Batal
                                                        </button>
                                                        <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Simpan
                                                        </button>
                                                        <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                        {{-- @endfor --}}
                        {{-- @for ($i=0; $i<3; $i++) 
                        <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                Lucky Kurniawan Langoday
                            </td>
                            <td class="px-6 py-4">
                                Warung Madura
                            </td>
                            <td class="px-6 py-4" x-data="{'selected': 'false'}">
                                <a href="#" @click.prevent="selected = (selected === 'true' ? '':'true')">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing
                                    <span class="font-semibold" :class="(selected === 'true') ? 'hidden' :'inline-block'">...</span><span :class="(selected === 'true') ? 'inline-block' :'hidden'">elit. Expedita, eius? Mollitia quo adipisci,</span>
                                </a>
                            </td>
                            <td>
                                <div class="px-6 py-4 flex items-center justify-center h-full">
                                    <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                        <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <div>Detail</div>
                                        </button>
                                        <!-- Detail modal -->
                                        <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                            Detail Data UMKM
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                                            <i class="fa-solid fa-xmark text-xl"></i>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="w-full h-full text-[#34662C] text-left">
                                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">

                                                        </div>
                                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                            <button @click="detailModal = false" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                Keluar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                                    <button class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-check text-lg"></i>
                                    </button>
                                </div>
                            </td>
                            </tr>
                            @endfor
                            @for ($i=0; $i<3; $i++) <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">
                                    Lucky Kurniawan Langoday
                                </td>
                                <td class="px-6 py-4">
                                    Warung Madura
                                </td>
                                <td class="px-6 py-4" x-data="{'selected': 'false'}">
                                    <a href="#" @click.prevent="selected = (selected === 'true' ? '':'true')">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing
                                        <span class="font-semibold" :class="(selected === 'true') ? 'hidden' :'inline-block'">...</span><span :class="(selected === 'true') ? 'inline-block' :'hidden'">elit. Expedita, eius? Mollitia quo adipisci,</span>
                                    </a>
                                </td>
                                <td>
                                    <div class="px-6 py-4 flex items-center justify-center h-full">
                                        <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                            <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                                <i class="fa-solid fa-circle-info"></i>
                                                <div>Detail</div>
                                            </button>
                                            <!-- Detail modal -->
                                            <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                                <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                                <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <!-- Modal header -->
                                                        <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                            <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                Detail Data UMKM
                                                            </h3>
                                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                                                <i class="fa-solid fa-xmark text-xl"></i>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="w-full h-full text-[#34662C] text-left">
                                                            <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">

                                                            </div>
                                                            <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                                <button @click="detailModal = false" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                    Keluar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                                        <button class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-xmark text-lg"></i>
                                        </button>
                                    </div>
                                </td>
                                </tr>
                            @endfor --}}
                </tbody>
            </table>
            <div class="px-8 py-5">
                {{ $umkms->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>