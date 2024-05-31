<x-header menu='{{ $menu }}'>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</x-header>

<div class="w-[100%] relative flex justify-center items-center">
    <img src="{{ asset('assets/images/kegiatan-cover.webp') }}" alt="" class="w-full block dark:hidden">
    <img src="{{ asset('assets/images/dark-kegiatan-cover.webp') }}" alt="" class="w-full dark:block hidden">
    <div class=" w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center ">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">Jadwal Kegiatan di RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Tumbuhkan Kolaborasi Masyarakat di Setiap Kegiatan RW</p>
    </div>
</div>

<div class="w-[90%] mx-auto h-fit flex justify-between items-center mt-15">
    <form action="{{ route('jadwal') }}" class="basis-3/5 w-full h-full flex items-center justify-center mb-0">
        <div class="flex shadow-md rounded-xl w-full bg-white border-2 border-[#2d5523] items-center justify-between py-2 h-fit dark:bg-[#30373F] dark:border-gray-600 dark:placeholder-gray-300 dark:text-white">
            <div class="flex w-full">
                <div class="w-[70%] px-4">
                    <label for="default-search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-[#58a444] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="search" class="block w-full p-2 ps-10 text-sm dark:bg-[#30373F] text-gray-900 rounded-lg dark:border-gray-600 placeholder:text-[#58a444] dark:placeholder-gray-300 dark:text-white" placeholder="Cari Kegiatan..." />
                    </div>
                </div>
                <div class="w-fit px-4 border-x-2 border-gray-400 dark:border-white">
                    <div class="relative">
                        <select name="kategoriSearching" class="block py-2.5 px-9 w-full text-sm  bg-white dark:bg-[#30373F] appearance-none text-[#58a444] dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected value="">Pilih Kategori</option>
                            <option value="Kebersihan">Kebersihan</option>
                            <option value="Lingkungan">Lingkungan</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Budaya">Budaya</option>
                            <option value="Kemanusiaan">Kemanusiaan</option>
                            <option value="Kuliner">Kuliner</option>
                            <option value="Ekonomi">Ekonomi</option>
                        </select>
                        <i class="fa-solid fa-layer-group absolute left-2 top-0 pt-4 text-[#58a444] dark:text-white text-sm"></i>
                        <i class="fa-solid fa-angle-down absolute right-2 top-0 pt-4 text-[#58a444] dark:text-white text-sm"></i>
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


    <div x-data="{ 'tambahModal': false }" @keydown.escape="tambahModal = false">
        <button @click="tambahModal = true" class="w-auto shadow-2xl h-[57px] text-[20px] px-[24px] bg-yellow-500  dark:text-white dark:hover:text-white dark:shadow-gray-900 items-center flex rounded-[15px]  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 justify-center  transition ease-in-out duration-300 hover:scale-105">
            Ajukan Kegiatan
        </button>

        <!-- Main modal -->
        <div x-show="tambahModal" x-cloak tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="tambahModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-[#30373F]">
                    <!-- Modal header -->
                    <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                            Ajukan Kegiatan
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="tambahModal = false">
                            <i class="fa-solid fa-xmark text-xl"></i>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="w-full h-fit text-[#34662C] dark:text-white" method="POST" action="{{ route('ajuanKegiatan') }}">
                        @csrf
                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                            <input type="hidden" name="id" value="{{ Auth::user()->penduduk->id_penduduk }}">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                    <option selected value="">Pilih Kategori</option>
                                    <option value="Kebersihan">Kebersihan</option>
                                    <option value="Lingkungan">Lingkungan</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Budaya">Budaya</option>
                                    <option value="Kemanusiaan">Kemanusiaan</option>
                                    <option value="Kuliner">Kuliner</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                </select>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" required placeholder="Masukkan Nama Kegiatan ...">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="iuran" class=" mb-2 text-sm font-bold flex">Iuran</label>
                                <input type="text" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" required placeholder="Masukkan Iuran ..." value="0">
                            </div>
                            <div class="col-span-2">
                                <label for="lokasi" class="block mb-2 text-sm font-bold">Lokasi</label>
                                <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" required></textarea>
                            </div>
                            <div class="col-span-2">
                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:bg-[#505c6a] dark:border-gray-500 dark:placeholder-gray-400  dark:focus:ring-primary-500 dark:focus:border-primary-500" required></textarea>
                            </div>
                        </div>
                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-t-2 rounded-b border-[#B8B8B8] dark:bg-[#4f5966]">
                            <button type="button" @click="tambahModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out dark:bg-white dark:hover:bg-white dark:text-[#2d5523]">
                                Batal
                            </button>
                            <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out dark:hover:bg-[#4ea840] dark:bg-[#57ba47]">
                                Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($searchingKey != '' || $kategoriSearching != '')
<div class="relative min-h-[40vh] w-[90%] mx-auto flex flex-col mt-20 gap-18 mb-30">
    <div class="flex h-[10%] w-full justify-center items-center text-4xl font-bold text-green-900">Pencarian "@if ($searchingKey != '')
        {{$searchingKey}}
        @else
        {{$kategoriSearching}}
        @endif
        "
    </div>
    @if (empty($dataArray['dataSearching']->toArray()))
    <div class="flex flex-col w-full justify-center items-center gap-4">
        <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[400px] h-[300px] object-cover">
        <p class="text-2xl font-semibold text-green-900 dark:text-white">Tidak ada kegiatan</p>
    </div>
    @else
    <div class="grid h-[90%] w-full grid-cols-3 gap-14">
        @foreach ($dataArray['dataSearching'] as $dt)
        <div class="bg-white rounded-xl shadow-xl flex flex-col w-[380px] h-full pt-8 pb-4 gap-3 border-2 border-green-900 hover:scale-105 hover:shadow-2xl transition ease-in-out duration-300 group">
            <div class="relative w-full h-fit flex justify-center items-center -top-10">
                <div class="absolute w-fit h-fit px-4 py-3 font-bold text-xl bg-yellow-200 rounded-xl shadow-md text-green-900">{{ $dt->mulai_tanggal }}</div>
            </div>
            <div class="flex w-full h-fit justify-start items-center gap-5 px-7">
                <div class="px-3 py-1 bg-green-500 rounded-xl text-sm font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                <div class="py-1 px-4 flex border border-green-900 rounded-xl text-sm font-medium text-green-900 justify-center items-center gap-2">
                    <i class="fa-regular fa-clock"></i>
                    <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                </div>
            </div>
            <div class="text-2xl font-semibold text-green-900 flex justify-start px-7">{{ $dt->judul }}</div>
            <div class="flex gap-3 items-center justify-start text-sm font-medium text-green-900 px-7">
                <i class="fa-solid fa-map-location-dot"></i>
                <p class="text-left">{{ $dt->lokasi }}</p>
            </div>
            <div class="flex gap-4 items-center justify-start text-sm font-medium text-green-900 px-7">
                <i class="fa-solid fa-user"></i>
                <p>
                    {{ $dt->penduduk->nama }}
                    @if ($dt->penduduk->jabatan !== 'Tidak ada')
                    ({{ ($dt->penduduk->jabatan !== 'Ketua RW')? $dt->penduduk->jabatan.' ' .$dt->penduduk->kartuKeluarga->rt : $dt->penduduk->jabatan}})
                    @endif
                </p>
            </div>
            <div class="flex gap-5 items-center justify-start text-sm font-medium text-green-900 px-7">
                <i class="fa-solid fa-dollar-sign"></i>
                <p>Rp. {{ $dt->iuran }} / KK</p>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endif

<div class="relative min-h-[40vh] w-[90%] mx-auto flex flex-col mt-20 gap-18 mb-30">
    <div class="flex h-[10%] w-full justify-center items-center text-4xl font-bold dark:text-white text-green-900">Kegiatan Mendatang</div>
    <div class="grid h-[90%] w-full grid-cols-3">
        @foreach ($dataArray['dataUpcoming'] as $dt)
        <div class="bg-white rounded-xl shadow-xl flex flex-col w-[380px] h-full pt-8 pb-4 gap-3 border-[3.5px] border-green-900 hover:scale-105 hover:shadow-2xl transition ease-in-out duration-300 group dark:bg-[#30373F] dark:border-gray-600 ">
            <div class="relative w-full h-fit flex justify-center items-center -top-10">
                <div class="absolute w-fit h-fit px-4 py-3 font-bold text-xl bg-yellow-200 rounded-xl shadow-md text-green-900 dark:bg-gray-500  dark:text-white">{{ $dt->mulai_tanggal }}</div>
            </div>
            <div class="flex w-full h-fit justify-start items-center gap-5 px-7">
                <div class="px-3 py-1 bg-green-500 rounded-xl text-sm font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                <div class="py-1 px-4 flex border border-green-900 rounded-xl text-sm font-medium text-green-900 dark:text-white justify-center items-center dark:border-gray-400 gap-2">
                    <i class="fa-regular fa-clock"></i>
                    <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                </div>
            </div>
            <div class="text-2xl font-semibold text-green-900 dark:text-white flex justify-start px-7">{{ $dt->judul }}</div>
            <div class="flex gap-3 items-center justify-start text-sm font-medium text-green-900 dark:text-white px-7">
                <i class="fa-solid fa-map-location-dot"></i>
                <p class="text-left">{{ $dt->lokasi }}</p>
            </div>
            <div class="flex gap-4 items-center justify-start text-sm font-medium text-green-900 dark:text-white px-7">
                <i class="fa-solid fa-user"></i>
                <p>
                    {{ $dt->penduduk->nama }}
                    @if ($dt->penduduk->jabatan !== 'Tidak ada')
                    ({{ ($dt->penduduk->jabatan !== 'Ketua RW')? $dt->penduduk->jabatan.' ' .$dt->penduduk->kartuKeluarga->rt : $dt->penduduk->jabatan}})
                    @endif
                </p>
            </div>
            <div class="flex gap-5 items-center justify-start text-sm font-medium text-green-900 dark:text-white px-7">
                <i class="fa-solid fa-dollar-sign"></i>
                <p>Rp. {{ $dt->iuran }} / KK</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="relative min-h-[90vh] py-3 w-[90%] flex mx-auto gap-14 justify-end items-center" id="dateToday">
    <div class="w-[400px] h-fit shadow-xl rounded-xl overflow-hidden absolute left-0 border-2 border-green-900 dark:border-gray-600">
        <div class="px-8 py-4 dark:bg-[#30373F] bg-white  flex flex-col justify-between gap-8 h-[380px]" id="calendarId">
            <div class="flex items-center justify-around">
                <button id="prev" aria-label="calendar backward" onclick="prev()" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                    </svg>
                </button>
                <span tabindex="0" class="focus:outline-none  text-lg font-extrabold dark:text-gray-100 text-gray-800" id="calendarHead"></span>
                <button id="next" aria-label="calendar forward" onclick="next()" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-between h-full">
                <table class="w-full lg:h-full">
                    <thead>
                        <tr>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Min</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sen</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sel</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Rab</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Kam</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Jum</p>
                                </div>
                            </th>
                            <th class="pb-5">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sab</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="days">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="w-[1050px] h-fit flex flex-col pl-25 py-7 gap-11 justify-center items-center">
        <div class="flex justify-center items-center text-4xl font-bold text-green-900 dark:text-white">Jadwal Kegiatan</div>
        @if (empty($dataArray['dataToday']->toArray()))
        <div class="flex flex-col w-full justify-center items-center gap-4">
            <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
            <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[400px] h-[300px] object-cover">
            <p class="text-2xl font-semibold text-green-900">Tidak ada kegiatan pada {{ $dateFormat }}</p>
        </div>
        @endif
        <div class="flex w-full max-h-[62vh] flex-wrap items-start justify-start px-10 py-10 overflow-y-auto  scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
            <?php $count = 0; ?>

            @foreach ($dataArray['dataToday'] as $dt)

            <?php $count++; ?>

            @if ($count % 2 == 1)
            <div class="flex w-full group">
                <div class="flex flex-col w-[45%] bg-yellow-200 dark:bg-green-500  dark:text-white min-h-10 rounded-xl shadow-lg px-6 py-5 gap-3 justify-start">
                    <div class="flex w-full h-fit justify-end items-center gap-5">
                        @if ($dt->diffDays > 0)
                        <div class="px-3 p-1 flex border gap-2 dark:border-white dark:text-white  border-green-900 rounded-xl text-sm font-medium text-green-900 items-center justify-center">
                            <p>Hari Ke-{{ $dt->dateNow }}</p>
                        </div>
                        @endif
                        <div class="px-3 p-1 bg-green-500 dark:bg-yellow-200 dark:text-green-900 rounded-xl text-sm font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                    </div>
                    <div class="text-2xl font-semibold dark:text-white text-green-900 flex justify-end">{{ $dt->judul }}</div>
                    <div class="dark:text-white flex gap-3 items-center justify-end text-sm font-medium text-green-900">
                        <p class="text-right">{{ $dt->lokasi }}</p>
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <div class="flex gap-4 items-center justify-end text-sm font-medium dark:text-white text-green-900">
                        <p>{{ $dt->penduduk->nama }}
                            @if ($dt->penduduk->jabatan !== 'Tidak ada')
                            ({{ ($dt->penduduk->jabatan !== 'Ketua RW')? $dt->penduduk->jabatan.' ' .$dt->penduduk->kartuKeluarga->rt : $dt->penduduk->jabatan}})
                            @endif
                        </p>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="dark:text-white flex gap-5 items-center justify-end text-sm font-medium text-green-900">
                        <p>Rp. {{ $dt->iuran }} / KK</p>
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                </div>
                <div class="flex justify-center items-center w-[10%] relative">
                    <div class="w-1 h-full bg-gray-100 transition ease-in-out duration-300 group-hover:bg-green-700"></div>
                    <div class="absolute bg-yellow-100 size-4 rounded-full border-2 border-green-700"></div>
                </div>
                <div class="flex p-8 justify-start items-center w-[45%]">
                    <div class="px-3 p-1 flex border gap-2 border-green-900 rounded-xl text-sm font-medium text-green-900 dark:border-white dark:text-white items-center justify-center">
                        <i class="fa-regular fa-clock"></i>
                        <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                    </div>
                </div>
            </div>
            @else
            <div class="flex w-full group">
                <div class="flex p-8 justify-end items-center w-[45%]">
                    <div class="px-3 p-1 flex border gap-2 border-green-900 rounded-xl text-sm font-medium text-green-900 items-center justify-center dark:border-white dark:text-white">
                        <i class="fa-regular fa-clock"></i>
                        <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                    </div>
                </div>
                <div class="flex justify-center items-center w-[10%] relative">
                    <div class="w-1 h-full bg-gray-100 transition ease-in-out duration-300 group-hover:bg-green-700"></div>
                    <div class="absolute bg-yellow-100 size-4 rounded-full border-2 border-green-700"></div>
                </div>
                <div class="flex flex-col w-[45%] bg-yellow-200 dark:bg-green-500  dark:text-white min-h-10 rounded-xl shadow-lg px-6 py-5 gap-3 justify-start">
                    <div class="flex w-full h-fit justify-start items-center gap-5">
                        <div class="px-3 p-1 bg-green-500 dark:bg-yellow-200 dark:text-green-900 rounded-xl text-sm font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                    </div>
                    <div class="text-2xl font-semibold text-green-900 dark:text-white">{{ $dt->judul }}</div>
                    <div class="flex gap-3 items-center justify-start text-sm font-medium text-green-900 dark:text-white">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <p>{{ $dt->lokasi }}</p>
                    </div>
                    <div class="flex gap-4 items-center justify-start text-sm font-medium text-green-900 dark:text-white">
                        <i class="fa-solid fa-user"></i>
                        <p>{{ $dt->penduduk->nama }}
                            @if ($dt->penduduk->jabatan !== 'Tidak ada')
                            ({{ ($dt->penduduk->jabatan !== 'Ketua RW')? $dt->penduduk->jabatan.' ' .$dt->penduduk->kartuKeluarga->rt : $dt->penduduk->jabatan}})
                            @endif
                        </p>
                    </div>
                    <div class="flex gap-5 items-center justify-start text-sm font-medium text-green-900 dark:text-white">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <p>Rp. {{ $dt->iuran }} / KK</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>

<div class="relative min-h-[40vh] w-[90%] mx-auto flex flex-col mt-20 gap-15 mb-30" id="pastSchedule">
    <div class="flex h-[10%] dark:text-white w-full justify-center items-center text-4xl font-bold text-green-900">Kegiatan Yang Telah Berlalu</div>
    <div class="flex w-full min-h-20 gap-x-6 gap-y-3 flex-wrap items-center justify-center">
        <a href="jadwal?kategoriPast=Umum&date={{ $calendarDate }}" class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl text-sm font-semibold  dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all {{ ($kategoriPast == 'Umum')?'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] dark:text-yellow-500' }}">Umum</a>
        <a href="jadwal?kategoriPast=Lingkungan&date={{ $calendarDate }}" class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl text-sm font-semibold  dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all {{ ($kategoriPast == 'Lingkungan')?'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] dark:text-yellow-500' }}">Lingkungan</a>
        <a href="jadwal?kategoriPast=Kesehatan&date={{ $calendarDate }}" class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl text-sm font-semibold  dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all {{ ($kategoriPast == 'Kesehatan')?'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] dark:text-yellow-500' }}">Kesehatan</a>
        <a href="jadwal?kategoriPast=Pendidikan&date={{ $calendarDate }}" class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl text-sm font-semibold  dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all {{ ($kategoriPast == 'Pendidikan')?'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] dark:text-yellow-500' }}">Pendidikan</a>
        <a href="jadwal?kategoriPast=Budaya&date={{ $calendarDate }}" class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl text-sm font-semibold  dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all {{ ($kategoriPast == 'Budaya')?'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] dark:text-yellow-500' }}">Budaya</a>
        <a href="jadwal?kategoriPast=Kemanusiaan&date={{ $calendarDate }}" class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl text-sm font-semibold  dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all {{ ($kategoriPast == 'Kemanusiaan')?'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] dark:text-yellow-500' }}">Kemanusiaan</a>
        <a href="jadwal?kategoriPast=Kuliner&date={{ $calendarDate }}" class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl text-sm font-semibold  dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all {{ ($kategoriPast == 'Kuliner')?'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] dark:text-yellow-500' }}">Kuliner</a>
        <a href="jadwal?kategoriPast=Ekonomi&date={{ $calendarDate }}" class="h-fit py-1 px-4 border-2 border-[#2d5523] dark:border-yellow-500 rounded-2xl text-sm font-semibold  dark:hover:text-white shadow-md hover:bg-[#2d5523] dark:hover:bg-[#e2a229] hover:text-white transition-all {{ ($kategoriPast == 'Ekonomi')?'bg-[#2d5523] text-white dark:text-white dark:bg-yellow-500 ':'text-[#2d5523] dark:text-yellow-500' }}">Ekonomi</a>
    </div>
    <div class="grid h-full w-full grid-cols-3 gap-12">
        @foreach ($dataArray['dataPast'] as $dt)
        <div class="bg-white rounded-xl shadow-xl flex flex-col w-[380px] h-[260px] pt-8 pb-4 gap-3 border-2 border-green-900 hover:scale-105 hover:shadow-2xl transition ease-in-out duration-300 group dark:bg-[#30373F] dark:border-gray-600">
            <!-- <div class="absolute w-full h-full bg-black/40 rounded-xl left-0 top-0 flex justify-center items-center opacity-0 transition ease-in-out duration-300 group-hover:opacity-100">
                <button class="w-fit h-fit px-4 py-2 font-semibold text-sm border-2 border-white bg-green-500 text-white rounded-xl">Lihat Detail</button>
            </div> -->
            <div class="relative w-full h-fit flex justify-center items-center -top-10">
                <div class="absolute w-fit h-fit px-4 py-3 font-bold text-xl bg-yellow-200 rounded-xl shadow-md text-green-900 dark:bg-gray-500  dark:text-white">{{ $dt->mulai_tanggal }}</div>
            </div>
            <div class="flex w-full h-fit justify-start items-center gap-5 px-7">
                <div class="px-3 py-1 bg-green-500 rounded-xl text-sm font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                <div class="py-1 px-4 flex border border-green-900 rounded-xl text-sm font-medium text-green-900 dark:border-gray-400 dark:text-white  justify-center items-center gap-2">
                    <i class="fa-regular fa-clock"></i>
                    <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                </div>
            </div>
            <div class="text-2xl font-semibold text-green-900 dark:text-white flex justify-start px-7">{{ $dt->judul }}</div>
            <div class="flex gap-3 items-center justify-start text-sm font-medium text-green-900 dark:text-white px-7">
                <i class="fa-solid fa-map-location-dot"></i>
                <p class="text-left">{{ $dt->lokasi }}</p>
            </div>
            <div class="flex gap-4 items-center justify-start text-sm font-medium text-green-900 dark:text-white px-7">
                <i class="fa-solid fa-user"></i>
                <p>
                    {{ $dt->penduduk->nama }}
                    @if ($dt->penduduk->jabatan !== 'Tidak ada')
                    ({{ ($dt->penduduk->jabatan !== 'Ketua RW')? $dt->penduduk->jabatan.' ' .$dt->penduduk->kartuKeluarga->rt : $dt->penduduk->jabatan}})
                    @endif
                </p>
            </div>
            <div class="flex gap-5 items-center justify-start text-sm font-medium text-green-900 dark:text-white px-7">
                <i class="fa-solid fa-dollar-sign"></i>
                <p>Rp. {{ $dt->iuran }} / KK</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

<x-footer>
    <script>
        //calendar
        const calendarHead = document.querySelector("#calendarHead");
        const days = document.querySelector("#days");
        const buttonCalendar = document.querySelectorAll(".button-calendar");

        const urlParams = new URLSearchParams(window.location.search);
        const dateParam = urlParams.get('date');

        // console.log(parseInt(dateParam.split("-")[0]));

        let date = new Date();
        let currYear = dateParam ? parseInt(dateParam.split("-")[0]) : date.getFullYear();
        let currMonth = dateParam ? parseInt(dateParam.split("-")[1]) - 1 : date.getMonth();

        const month = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ];

        const renderCalendar = () => {
            let dateKegiatan = @json($dataArray['dataDate']);
            let counter = 0;
            let firstDayofMonth = new Date(currYear, currMonth, 1)
                .getDay(); // getting last date of month
            let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
            let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
            let lastDateofLastMonth = new Date(currYear, currMonth, 0)
                .getDate(); // getting last date of month
            let daysDate = "";
            let dateCalendar = '';
            let kategoriPast = @json($kategoriPast);

            for (let i = firstDayofMonth; i > 0; i--) {
                counter++;

                if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            for (let i = 1; i <= lastDateofMonth; i++) {
                counter++;

                dateCalendar = `${currYear}-${currMonth + 1}-${i}`;

                if (i === date.getDate() && currMonth === date.getMonth() && currYear === date.getFullYear()) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#57BA47]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (i === parseInt(dateParam?.split("-")[2]) && currMonth === (parseInt(dateParam?.split("-")[1]) - 1) && currYear === (parseInt(dateParam?.split("-")[0]))) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium dark:text-gray-100 rounded-full text-white bg-[#4D4DFF]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (dateKegiatan.some(dt =>
                        (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
                        (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i)))) && (counter % 7 == 1)
                    )) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (dateKegiatan.some(dt =>
                        (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
                        (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i)))) && (counter % 7 == 0)
                    )) {
                    daysDate += `   <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>`
                } else if (dateKegiatan.some(dt =>
                        (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
                        (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i))))
                    )) {
                    daysDate += `  <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            for (let i = lastDayofMonth; i < 6; i++) {
                counter++;

                if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="jadwal?kategoriPast=${kategoriPast}&date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            calendarHead.innerHTML = `${month[currMonth]} ${currYear}`;

            days.innerHTML = daysDate;
        }

        const next = () => {
            currMonth++;
            if (currMonth > 11) {
                currMonth = 0;
                currYear++;
            }
            renderCalendar();
        }

        const prev = () => {
            currMonth--;
            if (currMonth < 0) {
                currMonth = 11;
                currYear--;
            }
            renderCalendar();
        }

        renderCalendar();
    </script>
    <script>
        let scroll = @json($scrollAuto);
        if (scroll == 'calendar') {
            // const element = document.querySelector('#dateToday');
            // console.log(element.offsetTop);
            window.scrollTo({
                // top: element.offsetTop - 20,
                top: 1099,
                behavior: 'smooth'
            });
        } else if (scroll == 'kategori') {
            // const element = document.querySelector('#pastSchedule');
            // console.log(element.offsetTop);
            window.scrollTo({
                top: 1800,
                behavior: 'smooth'
            });
        } else if (scroll == 'search') {
            // const element = document.querySelector('#pastSchedule');
            // console.log(element.offsetTop);
            window.scrollTo({
                top: 400,
                behavior: 'smooth'
            });
        }

        // console.log(scroll);
    </script>
</x-footer>