<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" method="post" action="{{ route('searchPenduduk') }}">
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
            <div class="h-full w-fit py-2" x-data="{ 'filterModal': false }" @keydown.escape="filterModal = false">
                <button @click="filterModal = true"
                    class="flex w-29 bg-[#57BA47] h-full text-white justify-between items-center px-4 rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                    <i class="fa-solid fa-sliders text-2xl"></i>
                    <div class="text-xl font-semibold">Filter</div>
                </button>

                <!-- Main modal -->
                <div x-show="filterModal" tabindex="-1" aria-hidden="true"
                    class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                    <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="filterModal = false"
                        x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                    Filter Data Penduduk
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    @click="filterModal = false">
                                    <i class="fa-solid fa-xmark text-xl"></i>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="w-full h-full text-[#34662C]" method="POST"
                                action="{{ route('filterPenduduk') }}">
                                @csrf
                                <div
                                    class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="agama" class="block mb-2 text-sm font-bold">Agama</label>
                                        <select id="agama" name="agama"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Agama</option>
                                            <option value="islam">Islam</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="khonghucu">Khonghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="statusPenduduk" class="block mb-2 text-sm font-bold ">Status
                                            Penduduk</label>
                                        <select id="statusPenduduk" name="statusPenduduk"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Status Penduduk</option>
                                            <option value="penduduk">Penduduk</option>
                                            <option value="RT">RT</option>
                                            <option value="RW">RW</option>
                                            <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                                            <option value="orang luar">Orang Luar</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="statusPernikahan" class="block mb-2 text-sm font-bold ">Status
                                            Pernikahan</label>
                                        <select id="statusPernikahan" name="statusPernikahan"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Status Pernikahan</option>
                                            <option value="belum">Belum Menikah</option>
                                            <option value="sudah">Sudah Menikah</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="kewarganegaraan"
                                            class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                                        <select id="kewarganegaraan" name="kewarganegaraan"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Kewarganegaraan</option>
                                            <option value="WNI">Indonesia</option>
                                            <option value="WNA">Luar</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jenisKelamin" class="block mb-2 text-sm font-bold ">Jenis
                                            Kelamin</label>
                                        <select id="jenisKelamin" name="jenisKelamin"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="rt" class="block mb-2 text-sm font-bold ">RT</label>
                                        <select id="rt" name="rt"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih RT</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                    <button type="submit" @click="filterModal = false"
                                        class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Batal
                                    </button>
                                    <button type="submit" @click="filterModal = false"
                                        class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Filter
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="h-full w-fit py-2" x-data="{ 'tambahModal': false }" @keydown.escape="tambahModal = false">
            <button @click="tambahModal = true"
                class="flex w-34 bg-[#57BA47] h-full text-white justify-between items-center px-4 rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                <i class="fa-solid fa-plus text-2xl"></i>
                <div class="text-xl font-semibold">Tambah</div>
            </button>

            <!-- Main modal -->
            <div x-show="tambahModal" tabindex="-1" aria-hidden="true"
                class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="tambahModal = false"
                    x-transition:enter="motion-safe:ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                            <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                Tambah Data Penduduk
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
                            action="{{ route('storePenduduk') }}">
                            @csrf
                            <div
                                class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="nik" class="block mb-2 text-sm font-bold">NIK</label>
                                    <input type="text" name="nik" id="nik"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan NIK" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="nkk" class="block mb-2 text-sm font-bold">NKK</label>
                                    <input type="text" name="nkk" id="nkk"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan NKK" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="nama" class="block mb-2 text-sm font-bold">Nama</label>
                                    <input type="text" name="nama" id="nama"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan Nama" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="agama" class="block mb-2 text-sm font-bold">Agama</label>
                                    <select id="agama" name="agama"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                        <option selected="">Pilih Agama</option>
                                        <option value="islam">Islam</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="khonghucu">Khonghucu</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tempatLahir" class="block mb-2 text-sm font-bold ">Tempat
                                        Lahir</label>
                                    <input type="text" name="tempatLahir" id="tempatLahir"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan Tempat Lahir" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="tanggalLahir" class="block mb-2 text-sm font-bold ">Tanggal
                                        Lahir</label>
                                    <input type="date" name="tanggalLahir" id="tanggalLahir"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="statusPenduduk" class="block mb-2 text-sm font-bold ">Status
                                        Penduduk</label>
                                    <select id="statusPenduduk" name="statusPenduduk"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                        <option selected="">Pilih Status Penduduk</option>
                                        <option value="penduduk">Penduduk</option>
                                        <option value="RT">RT</option>
                                        <option value="RW">RW</option>
                                        <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                                        <option value="orang luar">Orang Luar</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="statusPernikahan" class="block mb-2 text-sm font-bold ">Status
                                        Pernikahan</label>
                                    <select id="statusPernikahan" name="statusPernikahan"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                        <option selected="">Pilih Status Pernikahan</option>
                                        <option value="belum">Belum Menikah</option>
                                        <option value="sudah">Sudah Menikah</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="pekerjaan" class="block mb-2 text-sm font-bold ">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" id="pekerjaan"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan Pekerjaan" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="gaji" class="block mb-2 text-sm font-bold ">Gaji</label>
                                    <input type="number" name="gaji" id="gaji"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan Gaji" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="kewarganegaraan"
                                        class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                                    <select id="kewarganegaraan" name="kewarganegaraan"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                        <option selected="">Pilih Kewarganegaraan</option>
                                        <option value="WNI">Indonesia</option>
                                        <option value="WNA">Luar</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1 grid grid-cols-2 gap-4">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jenisKelamin" class="block mb-2 text-sm font-bold ">Jenis
                                            Kelamin</label>
                                        <select id="jenisKelamin" name="jenisKelamin"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="rt" class="block mb-2 text-sm font-bold ">RT</label>
                                        <select id="rt" name="rt"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="">Pilih RT</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <label for="alamat" class="block mb-2 text-sm font-bold">Alamat</label>
                                    <textarea id="alamat" name="alamat" rows="4"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan Alamat"></textarea>
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
                        <th scope="col" class="px-6 py- w-[20%]">
                            Pemohon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Surat
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
                    @foreach ($permintaanSurat as $permintaan)
                        <tr
                            class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $permintaan->nama }} <!-- Nama pemohon -->
                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($permintaan->minta_tanggal)->format('d-m-Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $permintaan->jenisSurat }} <!-- Jenis Surat -->
                            </td>
                            <td>
                                <div class="px-6 py-4 flex items-center justify-center h-full">
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
                                                            Detail Data UMKM
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

                                                        </div>
                                                        <div
                                                            class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                            <button @click="detailModal = false"
                                                                class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
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
                                    @if ($permintaan->status == 'selesai')
                                        <button
                                            class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-check text-lg"></i>
                                        </button>
                                    @elseif ($permintaan->status == 'ditolak')
                                        <button
                                            class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-xmark text-lg"></i>
                                        </button>
                                    @else
                                        <button
                                            class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-check text-lg"></i>
                                        </button>
                                        <button
                                            class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-xmark text-lg"></i>
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="px-8 py-5">
                {{ $permintaanSurat->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
