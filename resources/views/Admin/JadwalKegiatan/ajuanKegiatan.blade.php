<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full sm:w-fit w-full gap-8 items-center justify-between">
            <form class="lg:w-[25vw] w-[100%] sm:w-[400px]" method="post" action="{{ route('searchPenduduk') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search" class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl bg-gray-50 dark:bg-[#2F363E] rounded-xl border border-[#34662C] focus:outline-none focus:border-[3px] dark:border-[#57BA47]" placeholder="Cari ..." required />
                        <button type="submit" class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C]  hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-[650px] sm:w-full text-center table-fixed relative">
                <thead class="sm:text-sm text-xs font-bold text-[#34662C] bg-[#91DF7D] dark:bg-[#428238] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Pembuat
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Waktu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%] sm:w-[30%]">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                    <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-[#2F363E] dark:text-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $dt->penduduk->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $dt->judul }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}
                        </td>
                        <td>
                            <div class="px-6 py-4 flex items-center justify-center h-full">
                                <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                    <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF]  rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-circle-info"></i>
                                        <div class="hidden sm:inline-flex">Detail</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                <!-- Modal header -->
                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        Detail Data Kegiatan
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="w-full h-full text-[#34662C] dark:text-white text-left">
                                                    <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                                        <div class="col-span-2 relative sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">NIK</label>
                                                            <input name="nik" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $dt->penduduk->nik }}" readonly>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Kategori</label>
                                                            <input name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->aktivitas_tipe }}">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                            <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->judul }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->tgl_mulai }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->tgl_akhir }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <div class="grid grid-cols-2 gap-2">
                                                                <div class="col-span-2 sm:col-span-1">
                                                                    <label class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                                    <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->mulai_waktu }}">
                                                                </div>
                                                                <div class="col-span-2 sm:col-span-1">
                                                                    <label class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                                    <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->akhir_waktu }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Iuran</label>
                                                            <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->iuran }}">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Lokasi</label>
                                                            <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly>{{ $dt->lokasi }}</textarea>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                            <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly>{{ $dt->konten }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                        <button @click="detailModal = false" class="hover:text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
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
                                <a href="{{ route('acceptKegiatan', ['id'=>$dt->jadwal_id]) }}" class="flex justify-center items-center gap-2 w-fit text-white bg-[#76D75D] sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 rounded-full hover:bg-[#38682D] hover:scale-105 transition-all">
                                    <i class="fa-solid fa-check text-lg"></i>
                                    <div class="hidden sm:inline-flex">Terima</div>
                                </a>

                                <div x-data="{ 'tolakModal': false }" @keydown.escape="tolakModal = false">
                                    <button @click="tolakModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E]  rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-xmark text-lg"></i>
                                        <div class="hidden sm:inline-flex">Tolak</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="tolakModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="tolakModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        Alasan Penolakan Ajuan Kegiatan
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="tolakModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('rejectKegiatan', $dt->jadwal_id) }}" method="POST">
                                                    @csrf
                                                    <!-- Modal body -->
                                                    <div class="w-full h-full text-[#34662C] dark:text-white text-left">
                                                        <form action="">
                                                            <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                                                <div class="col-span-2">
                                                                    <!-- <label for="alasan-penolakan" class="block mb-2 text-sm font-bold">Alasan Penolakan</label> -->
                                                                    <textarea id="alasan-penolakan" name="alasan" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" placeholder="Masukkan Alasan Penolakan..."></textarea>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                            <button type="button" @click="tolakModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                Batal
                                                            </button>
                                                            <button type="submit" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
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
                </tbody>
            </table>
        </div>
        <div class="px-8 py-5 dark:bg-[#343b44] rounded-b-lg">
            {{ $data->links() }}
        </div>
    </div>
</x-admin-layout>