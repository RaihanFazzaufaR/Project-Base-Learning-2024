<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <!-- tambah modal start -->
    <div class="absolute h-fit w-fit" x-data="{ 'tambahModal': false }" @keydown.escape="tambahModal = false">
        <button @click="tambahModal = true" class="animate-bounce fixed bottom-10 right-7 flex size-12 bg-[#2d5523] text-white justify-center items-center rounded-full shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
            <i class="fa-solid fa-plus text-2xl"></i>
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
                    <form class="w-full h-full text-[#34662C]" method="POST" action="{{ route('storePenduduk') }}">
                        @csrf
                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                            <div class="col-span-2 relative sm:col-span-1">
                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                <datalist id="listNik">
                                    <option value="123456"></option>
                                </datalist>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                    <option selected="">Pilih Kategori</option>
                                    <option value="1">Super Admin</option>
                                    <option value="2">Admin</option>
                                    <option value="3">User</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                            </div>
                            <div class="col-span-2">
                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
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
    <!-- tambah modal end -->


    <div class="grid grid-cols-5 grid-rows-2 gap-8 h-[565px] w-full">
        <div class="col-span-3 row-span-2 h-full w-full bg-white rounded-lg shadow-xl flex flex-col justify-center gap-14 items-center p-8">
            <div class="flex items-center justify-around w-full h-[10%]">
                <button id="prev" aria-label="calendar backward" onclick="prev()" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                    </svg>
                </button>
                <span tabindex="0" class="focus:outline-none  text-2xl font-extrabold dark:text-gray-100 text-gray-800" id="calendarHead"></span>
                <button id="next" aria-label="calendar forward" onclick="next()" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-between w-full h-full">
                <table class="w-full lg:h-full">
                    <thead>
                        <tr>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Min</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sen</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sel</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Rab</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Kam</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Jum</p>
                                </div>
                            </th>
                            <th class="pb-10">
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
        <div class="col-span-2 row-span-1 h-full w-full bg-white rounded-lg shadow-xl flex flex-col gap-2 px-4 py-1">
            <div class="font-bold text-lg text-center text-black">Kegiatan Mendatang</div>
            <div class="flex flex-col h-full overflow-y-auto pb-2 pt-1 px-4 scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin gap-3">
                <div class="flex w-full h-[100px] group border-2 border-green-900 rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 px-4 text-white items-center justify-center">
                        <p class="font-bold text-3xl">10</p>
                        <p class="font-medium text-lg">Jun</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <div class="w-full h-full text-[#34662C] text-left">
                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <form class="w-full h-full text-[#34662C] text-left" method="POST">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="editModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                        </div>
                        <div class="text-lg font-medium text-green-900 text-left w-full">Kerja Bakti di RT 02</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>07:00 - 10:00</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">Kebersihan</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-[100px] group border-2 border-green-900 rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 px-4 text-white items-center justify-center">
                        <p class="font-bold text-3xl">10</p>
                        <p class="font-medium text-lg">Jun</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <div class="w-full h-full text-[#34662C] text-left">
                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <form class="w-full h-full text-[#34662C] text-left" method="POST">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="editModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                        </div>
                        <div class="text-lg font-medium text-green-900 text-left w-full">Kerja Bakti di RT 02</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>07:00 - 10:00</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">Kebersihan</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-[100px] group border-2 border-green-900 rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 px-4 text-white items-center justify-center">
                        <p class="font-bold text-3xl">10</p>
                        <p class="font-medium text-lg">Jun</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <div class="w-full h-full text-[#34662C] text-left">
                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <form class="w-full h-full text-[#34662C] text-left" method="POST">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="editModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                        </div>
                        <div class="text-lg font-medium text-green-900 text-left w-full">Kerja Bakti di RT 02</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>07:00 - 10:00</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">Kebersihan</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-[100px] group border-2 border-green-900 rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 px-4 text-white items-center justify-center">
                        <p class="font-bold text-3xl">10</p>
                        <p class="font-medium text-lg">Jun</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <div class="w-full h-full text-[#34662C] text-left">
                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <form class="w-full h-full text-[#34662C] text-left" method="POST">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="editModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                        </div>
                        <div class="text-lg font-medium text-green-900 text-left w-full">Kerja Bakti di RT 02</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>07:00 - 10:00</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">Kebersihan</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-2 row-span-1 h-full w-full bg-white rounded-lg shadow-xl flex flex-col gap-2 px-4 py-1">
            <div class="font-bold text-lg text-center text-black">Kegiatan Tanggal 29 Mei 2024</div>
            <div class="flex flex-col h-full overflow-y-auto pb-2 pt-1 px-4 scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin gap-3">
                <div class="flex w-full h-[100px] group border-2 border-green-900 rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 px-4 text-white items-center justify-center">
                        <p class="font-bold text-3xl">10</p>
                        <p class="font-medium text-lg">Jun</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <div class="w-full h-full text-[#34662C] text-left">
                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <form class="w-full h-full text-[#34662C] text-left" method="POST">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="editModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                        </div>
                        <div class="text-lg font-medium text-green-900 text-left w-full">Kerja Bakti di RT 02</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>07:00 - 10:00</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">Kebersihan</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-[100px] group border-2 border-green-900 rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 px-4 text-white items-center justify-center">
                        <p class="font-bold text-3xl">10</p>
                        <p class="font-medium text-lg">Jun</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <div class="w-full h-full text-[#34662C] text-left">
                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <form class="w-full h-full text-[#34662C] text-left" method="POST">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="editModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                        </div>
                        <div class="text-lg font-medium text-green-900 text-left w-full">Kerja Bakti di RT 02</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>07:00 - 10:00</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">Kebersihan</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-[100px] group border-2 border-green-900 rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 px-4 text-white items-center justify-center">
                        <p class="font-bold text-3xl">10</p>
                        <p class="font-medium text-lg">Jun</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <div class="w-full h-full text-[#34662C] text-left">
                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <form class="w-full h-full text-[#34662C] text-left" method="POST">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="editModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                        </div>
                        <div class="text-lg font-medium text-green-900 text-left w-full">Kerja Bakti di RT 02</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>07:00 - 10:00</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">Kebersihan</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="flex w-full h-[100px] group border-2 border-green-900 rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 px-4 text-white items-center justify-center">
                        <p class="font-bold text-3xl">10</p>
                        <p class="font-medium text-lg">Jun</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <div class="w-full h-full text-[#34662C] text-left">
                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                    <form class="w-full h-full text-[#34662C] text-left" method="POST">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK ...">
                                                <datalist id="listNik">
                                                    <option value="123456"></option>
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option selected="">Pilih Kategori</option>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">User</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Nama Kegiatan ...">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required placeholder="Masukkan Iuran ...">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required></textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                            <button @click="editModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                        </div>
                        <div class="text-lg font-medium text-green-900 text-left w-full">Kerja Bakti di RT 02</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>07:00 - 10:00</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">Kebersihan</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //calendar
        const calendarHead = document.querySelector("#calendarHead");
        const days = document.querySelector("#days");
        const buttonCalendar = document.querySelectorAll(".button-calendar");

        let date = new Date();
        let currYear = date.getFullYear();
        let currMonth = date.getMonth();

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
            let counter = 0;
            let firstDayofMonth = new Date(currYear, currMonth, 1)
                .getDay(); // getting last date of month
            let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
            let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
            let lastDateofLastMonth = new Date(currYear, currMonth, 0)
                .getDate(); // getting last date of month
            let daysDate = "";

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

                if (i === date.getDate() && currMonth === date.getMonth() && currYear === date.getFullYear()) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#57BA47]">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (i == 10 || i == 15) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</button>
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
                                                <button role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <button role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</button>
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
</x-admin-layout>