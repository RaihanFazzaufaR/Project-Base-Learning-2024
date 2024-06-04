<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full sm:w-fit w-full gap-8 items-center justify-between">
            <form class="lg:w-[25vw] w-[100%] sm:w-[400px]" method="post" action="{{ route('pengumuman-admin') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search" class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl bg-gray-50 dark:bg-[#2F363E] rounded-xl border border-[#34662C] focus:outline-none focus:border-[3px]" placeholder="Cari ..." required />
                        <button type="submit" class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C] hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>



        <div class="absolute sm:static h-full w-fit py-2" x-data="{ 'tambahModal': false }" @keydown.escape="tambahModal = false">
            <button @click="tambahModal = true" class="fixed sm:static right-5 bottom-5 flex z-99 w-10 h-10 sm:w-34 bg-[#57BA47] sm:h-full text-white justify-center sm:justify-between items-center px-4 rounded-full sm:rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out animate-bounce sm:animate-none">
                <i class="fa-solid fa-plus text-xl sm:text-2xl"></i>
                <div class="text-xl font-semibold hidden sm:inline-flex">Tambah</div>
            </button>

            <!-- Main modal -->
            <div x-show="tambahModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="tambahModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-t-2xl sm:rounded-lg shadow dark:bg-[#2F363E]">
                        <!-- Modal header -->
                        <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                            <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                Buat Pengumuman
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="tambahModal = false">
                                <i class="fa-solid fa-xmark text-xl"></i>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="w-full h-full text-[#34662C] dark:text-white" method="POST" action="{{ route('kirim-pengumuman') }}">
                            @csrf
                            <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="pembuat" class="block mb-2 text-sm font-bold">Pembuat</label>
                                    <select name="pembuat_id" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Pembuat ...">
                                        @foreach ($users as $user)
                                        <option value="{{ $user->nik }}">{{ $user->nama }} (
                                            {{ $user->jabatan == 'Tidak ada' ? 'Admin' : $user->jabatan }}
                                            {{ $user->jabatan == 'Ketua RW' || $user->nama == 'Admin' ? '' : $user->kartuKeluarga->rt }}
                                            )
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                    <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
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
                                <div class="col-span-2">
                                    <label for="judul" class="block mb-2 text-sm font-bold">judul Pengumuman</label>
                                    <input type="text" name="judul" id="judul" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Judul Pengumuman ...">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="mulai_tanggal" class="block mb-2 text-sm font-bold">Tanggal
                                        Mulai</label>
                                    <input type="date" name="mulai_tanggal" id="mulai_tanggal" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="akhir_tanggal" class="block mb-2 text-sm font-bold">Tanggal
                                        Selesai</label>
                                    <input type="date" name="akhir_tanggal" id="akhir_tanggal" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="mulai_waktu" class="block mb-2 text-sm font-bold">Jam
                                                Mulai</label>
                                            <input type="time" name="mulai_waktu" id="mulai_waktu" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam
                                                Selesai</label>
                                            <input type="time" name="akhir_waktu" id="akhir_waktu" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                    <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan Iuran ...">
                                </div>
                                <div class="col-span-2">
                                    <label for="lokasi" class="block mb-2 text-sm font-bold">Lokasi</label>
                                    <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"></textarea>
                                </div>
                                <div class="col-span-2">
                                    <label for="konten" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                    <textarea name="konten" rows="4" id="konten" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                </div>
                            </div>
                            <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                <button @click="tambahModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                    Batal
                                </button>
                                <button type="submit" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                    Tambah
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-sm rounded-t-lg">
            <table class="w-[650px] sm:w-[1000px] lg:w-full text-center table-fixed relative">
                <thead class="sm:text-sm text-xs font-bold text-[#34662C] bg-[#91DF7D] dark:bg-[#428238] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Pembuat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Asal Pengumuman
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Diperbarui
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Pesan Dikirim
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%] sm:w-[35%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengumumans as $pengumuman)
                    <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-[#2F363E] dark:text-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $pengumuman->jadwal_id ? $pengumuman->jadwal->penduduk->nama : ($pengumuman->pembuat ? $pengumuman->pembuat->nama : '-') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pengumuman->judul }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pengumuman->jadwal_id ? 'Jadwal' : ($pengumuman->pembuat_id_pengumuman ? 'Pengumuman' : '-') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pengumuman->updated_at ? $pengumuman->updated_at->format('Y-m-d') : '-' }}
                        </td>
                        <td>
                            {{ $pengumuman->sent_at ? date('Y-m-d', strtotime($pengumuman->sent_at)) : '-' }}
                        </td>
                        <td>
                            <div class="px-6 py-4 flex gap-4 justify-center items-center h-full">
                                <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                    <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 px-2 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
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
                                                            <label class="block mb-2 text-sm font-bold">Nama
                                                                Pembuat</label>
                                                            <input name="nama" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $pengumuman->jadwal_id ? $pengumuman->jadwal->penduduk->nama : ($pengumuman->pembuat ? $pengumuman->pembuat->nama : '-') }}" readonly>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Kategori</label>
                                                            <input name="kategori" id="kategori" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $pengumuman->aktivitas_tipe }}">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Nama
                                                                Kegiatan</label>
                                                            <input type="text" name="nama" id="nama" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $pengumuman->judul }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Tanggal
                                                                Mulai</label>
                                                            <input type="text" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $pengumuman->mulai_tanggal ? $pengumuman->mulai_tanggal : '-' }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Tanggal
                                                                Selesai</label>
                                                            <input type="text" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $pengumuman->akhir_tanggal ? $pengumuman->akhir_tanggal : '-' }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <div class="grid grid-cols-2 gap-2">
                                                                <div class="col-span-2 sm:col-span-1">
                                                                    <label class="block mb-2 text-sm font-bold">Jam
                                                                        Mulai</label>
                                                                    <input type="text" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $pengumuman->mulai_waktu ? date('H:i', strtotime($pengumuman->mulai_waktu)) : '-' }}">
                                                                </div>
                                                                <div class="col-span-2 sm:col-span-1">
                                                                    <label class="block mb-2 text-sm font-bold">Jam
                                                                        Selesai</label>
                                                                    <input type="text" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $pengumuman->akhir_waktu ? date('H:i', strtotime($pengumuman->akhir_waktu)) : '-' }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Iuran</label>
                                                            <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $pengumuman->iuran ? $pengumuman->iuran : 0 }}">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Lokasi</label>
                                                            <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly>{{ $pengumuman->lokasi ? $pengumuman->lokasi : '-' }}</textarea>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                            <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly>{{ $pengumuman->konten }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-center sm:justify-between bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                        <p>{{ $pengumuman->sent_at ? 'Pesan Terkirim' : 'Pesan Belum Terkirim' }}
                                                        </p>
                                                        <button @click="detailModal = false" class="hover:text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Keluar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End of detail modal --}}
                                </div>
                                @if (!$pengumuman->jadwal_id)
                                <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                                    <div @keydown.escape="editModal = false">
                                        <button @click="editModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68]  rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <div class="hidden sm:inline-flex">Edit</div>
                                        </button>
                                    </div>
                                    <!-- modal edit start -->
                                    <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                <!-- Modal header -->
                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        Edit Data Kegiatan
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="editModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form class="w-full h-full text-[#34662C] dark:text-white text-left" method="POST" action="{{ route('update-pengumuman', $pengumuman->pengumuman_id) }}">
                                                    @csrf
                                                    {!! method_field('PUT') !!}

                                                    <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                                        <div class="col-span-2 relative sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Pembuat</label>
                                                            <select name="pembuat_id" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Pembuat ...">
                                                                @foreach ($users as $user)
                                                                <option value="{{ $user->nik }}">
                                                                    {{ $user->nama }} (
                                                                    {{ $user->jabatan == 'Tidak ada' ? 'Admin' : $user->jabatan }}
                                                                    {{ $user->jabatan == 'Ketua RW' || $user->nama == 'Admin' ? '' : $user->kartuKeluarga->rt }}
                                                                    )
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                            <select name="kategori" id="kategori" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                                                <option value="">Pilih Kategori</option>
                                                                <option value="Kebersihan" @if ($pengumuman->aktivitas_tipe === 'Kebersihan') selected @endif>
                                                                    Kebersihan</option>
                                                                <option value="Lingkungan" @if ($pengumuman->aktivitas_tipe === 'Lingkungan') selected @endif>
                                                                    Lingkungan</option>
                                                                <option value="Kesehatan" @if ($pengumuman->aktivitas_tipe === 'Kesehatan') selected @endif>
                                                                    Kesehatan</option>
                                                                <option value="Pendidikan" @if ($pengumuman->aktivitas_tipe === 'Pendidikan') selected @endif>
                                                                    Pendidikan</option>
                                                                <option value="Budaya" @if ($pengumuman->aktivitas_tipe === 'Budaya') selected @endif>
                                                                    Budaya</option>
                                                                <option value="Kemanusiaan" @if ($pengumuman->aktivitas_tipe === 'Kemanusiaan') selected @endif>
                                                                    Kemanusiaan</option>
                                                                <option value="Kuliner" @if ($pengumuman->aktivitas_tipe === 'Kuliner') selected @endif>
                                                                    Kuliner</option>
                                                                <option value="Ekonomi" @if ($pengumuman->aktivitas_tipe === 'Ekonomi') selected @endif>
                                                                    Ekonomi</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label for="nama" class="block mb-2 text-sm font-bold">Nama
                                                                Kegiatan</label>
                                                            <input type="text" name="judul" id="nama" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $pengumuman->judul }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal
                                                                Mulai</label>
                                                            <input type="date" name="mulai_tanggal" id="mulai_tanggal" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $pengumuman->mulai_tanggal }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="akhir_tanggal" class="block mb-2 text-sm font-bold">Tanggal
                                                                Selesai</label>
                                                            <input type="date" name="akhir_tanggal" id="akhir_tanggal" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $pengumuman->akhir_tanggal }}">
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <div class="grid grid-cols-2 gap-2">
                                                                <div class="col-span-2 sm:col-span-1">
                                                                    <label for="mulai_waktu" class="block mb-2 text-sm font-bold">Jam
                                                                        Mulai</label>
                                                                    <input type="time" name="mulai_waktu" id="mulai_waktu" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $pengumuman->mulai_waktu }}">
                                                                </div>
                                                                <div class="col-span-2 sm:col-span-1">
                                                                    <label for="akhir_waktu" class="block mb-2 text-sm font-bold">Jam
                                                                        Selesai</label>
                                                                    <input type="time" name="akhir_Waktu" id="akhir_waktu" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $pengumuman->akhir_waktu }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                            <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $pengumuman->iuran }}">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label for="lokasi" class="block mb-2 text-sm font-bold">Lokasi</label>
                                                            <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">{{ $pengumuman->lokasi }}</textarea>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label for="konten" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                            <textarea name="konten" rows="4" id="konten" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>{{ $pengumuman->konten }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                        <button type="button" @click="editModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Batal
                                                        </button>
                                                        <button type="submit" class="text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Update
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal edit end -->
                                </div>
                                @endif
                                <form action="{{ route('destroy-pengumuman', $pengumuman->pengumuman_id) }}" method="POST">
                                    @csrf
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E]  rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <div class="hidden sm:inline-flex">Hapus</div>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-8 py-5 dark:bg-[#343b44] rounded-b-lg shadow-md">
            {{ $pengumumans->links() }}
        </div>
    </div>
</x-admin-layout>