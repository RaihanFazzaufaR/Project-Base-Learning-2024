<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" method="post" action="{{ route('pengumuman-admin') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search"
                            class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl bg-gray-50 rounded-xl border border-[#34662C] focus:outline-none focus:border-[3px]"
                            placeholder="Cari ..." required />
                        <button type="submit"
                            class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C] hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>



        <div class="h-full w-fit py-2" x-data="{ 'tambahModal': false }" @keydown.escape="tambahModal = false">
            <button @click="tambahModal = true"
                class="flex w-fit bg-[#57BA47] h-full text-white justify-center gap-3 items-center px-4 rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                <i class="fa-solid fa-plus text-2xl"></i>
                <div class="text-xl font-semibold">Tambah</div>
            </button>

            <!-- Main modal -->
            <div x-show="tambahModal" tabindex="-1" aria-hidden="true"
                class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="tambahModal = false"
                    x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                            <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                Buat Pengumuman
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                @click="tambahModal = false">
                                <i class="fa-solid fa-xmark text-xl"></i>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="w-full h-full text-[#34662C]" method="POST"
                            action="{{ route('kirim-pengumuman') }}">
                            @csrf
                            <div
                                class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                <div class="col-span-2">
                                    <label for="judul" class="block mb-2 text-sm font-bold">judul Pengumuman</label>
                                    <input type="text" name="judul" id="judul"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        required placeholder="Masukkan Judul Pengumuman ...">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="pembuat" class="block mb-2 text-sm font-bold">Pembuat</label>
                                    <select name="pembuat_id"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        required placeholder="Masukkan Pembuat ...">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->nik }}">{{ $user->nama }} (
                                                {{ $user->jabatan == 'Tidak ada' ? 'Admin' : $user->jabatan }} {{ $user->jabatan == 'Ketua RW' || $user->nama == 'Admin' ? '' : $user->kartuKeluarga->rt }}
                                                )</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                    <input type="number" name="iuran" id="iuran"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan Iuran ...">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="mulai_tanggal" class="block mb-2 text-sm font-bold">Tanggal
                                        Mulai</label>
                                    <input type="date" name="mulai_tanggal" id="mulai_tanggal"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="akhir_tanggal" class="block mb-2 text-sm font-bold">Tanggal
                                        Selesai</label>
                                    <input type="date" name="akhir_tanggal" id="akhir_tanggal"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <div class="grid grid-cols-2 gap-2">
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="mulai_waktu" class="block mb-2 text-sm font-bold">Jam
                                                Mulai</label>
                                            <input type="time" name="mulai_waktu" id="mulai_waktu"
                                                class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam
                                                Selesai</label>
                                            <input type="time" name="akhir_waktu" id="akhir_waktu"
                                                class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                    <select name="kategori" id="kategori"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
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
                                    <label for="lokasi" class="block mb-2 text-sm font-bold">Lokasi</label>
                                    <textarea name="lokasi" rows="4" id="lokasi"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        ></textarea>
                                </div>
                                <div class="col-span-2">
                                    <label for="konten" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                    <textarea name="konten" rows="4" id="konten"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        required></textarea>
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                <button @click="tambahModal = false"
                                    class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
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
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-center">
                <thead class="text-sm font-bold text-[#34662C] bg-[#91DF7D] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Pembuat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Diperbarui
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Asal Pengumuman
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengumumans as $pengumuman)
                        <tr
                            class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $pengumuman->jadwal_id != null ? $pengumuman->jadwal->penduduk->nama : 'Admin'}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pengumuman->updated_at ? $pengumuman->updated_at->format('Y-m-d') : '-'}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pengumuman->judul }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pengumuman->jadwal_id != null ? 'Jadwal' : 'Pengumuman' }}
                            </td>
                            <td>
                                <div class="px-6 py-4 flex gap-4 justify-center items-center h-full">
                                    <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                        <button @click="detailModal = true"
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <div>Detail</div>
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
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                            Detail Pengumuman
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            @click="detailModal = false">
                                                            <i class="fa-solid fa-xmark text-xl"></i>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="w-full h-full text-[#34662C] text-left">
                                                        <div
                                                            class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="pembuat"
                                                                    class="block mb-2 text-sm font-bold">Pembuat</label>
                                                                <input list="listNik" name="pembuat"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    placeholder="Masukkan Pembuat ...">
                                                                <datalist id="listNik">
                                                                    <option value="123456">Maulidin Zakaria</option>
                                                                </datalist>
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="tujuan"
                                                                    class="block mb-2 text-sm font-bold">Tujuan</label>
                                                                <select name="tujuan" id="tujuan"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    required>
                                                                    <option selected="">Pilih Tujuan</option>
                                                                    <option value="1">Super Admin</option>
                                                                    <option value="2">Admin</option>
                                                                    <option value="3">User</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-2">
                                                                <label for="judul"
                                                                    class="block mb-2 text-sm font-bold">judul
                                                                    Pengumuman</label>
                                                                <input type="text" name="judul" id="judul"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    required
                                                                    placeholder="Masukkan Judul Pengumuman ...">
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="tanggal_mulai"
                                                                    class="block mb-2 text-sm font-bold">Tanggal
                                                                    Mulai</label>
                                                                <input type="date" name="tanggal_mulai"
                                                                    id="tanggal_mulai"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    required>
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="tanggal_selesai"
                                                                    class="block mb-2 text-sm font-bold">Tanggal
                                                                    Selesai</label>
                                                                <input type="date" name="tanggal_selesai"
                                                                    id="tanggal_selesai"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    required>
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <div class="grid grid-cols-2 gap-2">
                                                                    <div class="col-span-2 sm:col-span-1">
                                                                        <label for="jam_mulai"
                                                                            class="block mb-2 text-sm font-bold">Jam
                                                                            Mulai</label>
                                                                        <input type="time" name="jam_mulai"
                                                                            id="jam_mulai"
                                                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                            required>
                                                                    </div>
                                                                    <div class="col-span-2 sm:col-span-1">
                                                                        <label for="jam_selesai"
                                                                            class="block mb-2 text-sm font-bold">Jam
                                                                            Selesai</label>
                                                                        <input type="time" name="jam_selesai"
                                                                            id="jam_selesai"
                                                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="kategori"
                                                                    class="block mb-2 text-sm font-bold">Kategori</label>
                                                                <select name="kategori" id="kategori"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    required>
                                                                    <option selected="">Pilih Kategori</option>
                                                                    <option value="1">Super Admin</option>
                                                                    <option value="2">Admin</option>
                                                                    <option value="3">User</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-2">
                                                                <label for="deskripsi"
                                                                    class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                                <textarea name="deskripsi" rows="4" id="deskripsi"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    required></textarea>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                            <button @click="tambahModal = false"
                                                                class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                Batal
                                                            </button>
                                                            <button type="submit"
                                                                class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                Tambah
                                                            </button>
                                                        </div>
                                                    </div>
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
            <div class="px-8 py-5">
                {{ $pengumumans->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
