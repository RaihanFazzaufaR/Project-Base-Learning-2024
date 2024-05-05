<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" method="post" action="{{ route('searchKartuKeluarga') }}">
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
                                    Filter Data Kartu Keluarga
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="filterModal = false">
                                    <i class="fa-solid fa-xmark text-xl"></i>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="w-full h-full text-[#34662C]" method="POST" action="{{ route('filterKartuKeluarga') }}">
                                @csrf
                                <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jumlahAnggota" class="block mb-2 text-sm font-bold">Jumlah Anggota Keluarga</label>
                                        <input type="number" min="1" name="jumlahAnggota" id="jumlahAnggota" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan Jumlah Anggota Keluarga">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="rt" class="block mb-2 text-sm font-bold ">RT</label>
                                        <select name="rt" id="rt" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
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
                                    <button type="button" @click="filterModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Batal
                                    </button>
                                    <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
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
            <button @click="tambahModal = true" class="flex w-34 bg-[#57BA47] h-full text-white justify-between items-center px-4 rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                <i class="fa-solid fa-plus text-2xl"></i>
                <div class="text-xl font-semibold">Tambah</div>
            </button>

            <!-- Main modal -->
            <div x-show="tambahModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="tambahModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                            <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                Tambah Data Penduduk
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="tambahModal = false">
                                <i class="fa-solid fa-xmark text-xl"></i>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="w-full h-full text-[#34662C]" method="POST" action="{{ route('storeKartuKeluarga') }}">
                            @csrf
                            <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="nkk" class="block mb-2 text-sm font-bold">NKK</label>
                                    <input type="text" name="nkk" id="nkk" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NKK" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="jumlahAnggota" class="block mb-2 text-sm font-bold">Jumlah Anggota Keluarga</label>
                                    <input type="number" min="1" name="jumlahAnggota" id="jumlahAnggota" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan Jumlah Anggota Keluarga" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="kepalaKeluarga" class="block mb-2 text-sm font-bold">NIK Kepala Keluarga</label>
                                    <input type="text" name="kepalaKeluarga" id="kepalaKeluarga" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK Kepala Keluarga" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="rt" class="block mb-2 text-sm font-bold">RT</label>
                                    <select name="rt" id="rt" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                        <option selected="">Pilih RT</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                    </select>
                                </div>
                                <div class="col-span-2">
                                    <label for="alamat" class="block mb-2 text-sm font-bold">Alamat</label>
                                    <textarea id="alamat" name="alamat" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan Alamat..."></textarea>
                                </div>
                            </div>
                            <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                <button @click="tambahModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                    Batal
                                </button>
                                <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
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
                            No Kartu Keluarga
                        </th>
                        <th scope="col" class="px-6 py- w-[30%]">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Anggota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            RT
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                @foreach ($user as $usr)
                <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $usr->niKeluarga }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $usr->alamat }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $usr->jmlAnggota }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $usr->rt }}
                    </td>
                    <td class="px-6 py-4 flex gap-4">
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
                                                Detail Data Penduduk
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="w-full h-full text-[#34662C] text-left">
                                            <div class="p-4 md:p-5 max-h-[450px] overflow-y-auto rounded-b-xl">
                                                <div class="relative overflow-y-auto shadow-md sm:rounded-lg w-full max-h-[360px]">
                                                    <table class="w-full text-center">
                                                        <thead class="text-sm font-bold text-[#34662C] bg-[#91DF7D] dark:bg-gray-700 dark:text-gray-400">
                                                            <tr>
                                                                <th scope="col" class="px-6 py- w-[20%]">
                                                                    NIK
                                                                </th>
                                                                <th scope="col" class="px-6 py-3 w-[25%]">
                                                                    Nama
                                                                </th>
                                                                <th scope="col" class="px-6 py-3 w-[20%]">
                                                                    Tempat Tanggal Lahir
                                                                </th>
                                                                <th scope="col" class="px-6 py-3">
                                                                    Jenis Kelamin
                                                                </th>
                                                                <th scope="col" class="px-6 py-3 w-[15%]">
                                                                    Aksi
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($usr->penduduk as $pnd)
                                                            <tr class="border-b text-sm font-medium hover:bg-gray-50 bg-white dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-600 {{ $pnd->nik === $usr->kepalaKeluarga ? 'text-[#57BA47]' : 'text-[#7F7F7F]' }}">
                                                                <td class="px-6 py-4">
                                                                    {{ $pnd->nik }}
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    {{ $pnd->nama }}
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    {{ $pnd->tempatLahir }}, {{ $pnd->tanggalLahir }}
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    {{ $pnd->jenisKelamin }}
                                                                </td>
                                                                <td class="px-6 py-4">
                                                                    <form action="{{ route('openModalPenduduk') }}" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="id_penduduk" value="{{ $pnd->id_penduduk }}">
                                                                        <button type="submit" class="flex justify-center items-center gap-2 w-fit text-white bg-[#7D5DD7] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#3C2D68] hover:scale-105 transition-all">
                                                                            <i class="fa-solid fa-eye"></i>
                                                                            <div>Lihat</div>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="flex w-full h-full items-center pt-6 gap-3">
                                                    <div class="w-10 h-4 bg-[#57BA47] rounded-xl pt-1"></div>
                                                    <p class="text-[#57BA47] text-sm font-semibold">Kepala Keluarga</p>
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
                        <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                            <button @click="editModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <div>Edit</div>
                            </button>
                            <!-- Edit modal -->
                            <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                            <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                Edit Data Penduduk
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="editModal = false">
                                                <i class="fa-solid fa-xmark text-xl"></i>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <form class="w-full h-full text-[#34662C] text-left" method="POST" action="{{ route('updateKartuKeluarga', $usr->id_kartuKeluarga ) }}">
                                            @csrf
                                            {!! method_field('PUT') !!}

                                            <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                                <div class="col-span-2 sm:col-span-1">
                                                    <label for="nkk" class="block mb-2 text-sm font-bold">NKK</label>
                                                    <input type="text" name="nkk" id="nkk" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NKK" required="" value="{{ $usr->niKeluarga }}">
                                                </div>
                                                <div class="col-span-2 sm:col-span-1">
                                                    <label for="jumlahAnggota" class="block mb-2 text-sm font-bold">Jumlah Anggota Keluarga</label>
                                                    <input type="number" min="1" name="jumlahAnggota" id="jumlahAnggota" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan Jumlah Anggota Keluarga" required="" value="{{ $usr->jmlAnggota }}">
                                                </div>
                                                <div class="col-span-2 sm:col-span-1">
                                                    <label for="kepalaKeluarga" class="block mb-2 text-sm font-bold">NIK Kepala Keluarga</label>
                                                    <input type="text" name="kepalaKeluarga" id="kepalaKeluarga" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK Kepala Keluarga" required="" value="{{ $usr->kepalaKeluarga }}">
                                                </div>
                                                <div class="col-span-2 sm:col-span-1">
                                                    <label for="rt" class="block mb-2 text-sm font-bold">RT</label>
                                                    <select name="rt" id="rt" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                        <option selected="">Pilih RT</option>
                                                        <option value="01" @if ($usr->rt === '01') selected @endif>01</option>
                                                        <option value="02" @if ($usr->rt === '02') selected @endif>02</option>
                                                        <option value="03" @if ($usr->rt === '03') selected @endif>03</option>
                                                        <option value="04" @if ($usr->rt === '04') selected @endif>04</option>
                                                        <option value="05" @if ($usr->rt === '05') selected @endif>05</option>
                                                    </select>
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="alamat" class="block mb-2 text-sm font-bold">Alamat</label>
                                                    <textarea id="alamat" name="alamat" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan Alamat...">{{ $usr->alamat }}</textarea>
                                                </div>
                                            </div>
                                            <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                <button @click="tambahModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                    Batal
                                                </button>
                                                <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                    Tambah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('destroyKartuKeluarga', $usr->id_kartuKeluarga) }}" method="POST">
                            @csrf
                            {!! method_field('DELETE') !!}

                            <button type="submit" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                <i class="fa-solid fa-trash-can"></i>
                                <div>Hapus</div>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="px-8 py-5">
                {{ $user->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>