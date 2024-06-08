<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full sm:w-fit w-full gap-8 items-center justify-between">
            <form class="lg:w-[25vw] w-[100%] sm:w-[400px]" method="post" action="{{ route('searchAkun-level') }}">
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
            <div class="absolute sm:static h-full w-fit py-2" x-data="{ 'filterModal': false }" @keydown.escape="filterModal = false">
                <button @click="filterModal = true" class="fixed sm:static flex bottom-20 animate-bounce sm:animate-none z-99 right-5 w-10 h-10 sm:w-29 bg-[#57BA47] sm:h-full text-white justify-center sm:justify-between items-center px-4 rounded-full sm:rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                    <i class="fa-solid fa-sliders sm:text-2xl text-xl"></i>
                    <div class="text-xl font-semibold hidden sm:inline-flex">Filter</div>
                </button>

                <!-- Main modal -->
                <div x-show="filterModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="filterModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                            <!-- Modal header -->
                            <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                    Filter Data Akun
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="filterModal = false">
                                    <i class="fa-solid fa-xmark text-xl"></i>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="w-full h-full text-[#34662C] dark:text-white" method="POST" action="{{ route('filterAkun-level') }}">
                                @csrf
                                <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                    <div class="col-span-2">
                                        <label for="jabatan" class="block mb-2 text-sm font-bold">Jabatan</label>
                                        <select id="jabatan" name="jabatan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                            <option value="">Semua</option>
                                            <option value="Ketua RW">Ketua RW</option>
                                            <option value="Ketua RT">Ketua RT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                    <button type="button" @click="filterModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Batal
                                    </button>
                                    <button type="submit" @click="filterModal = false" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Filter
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                        <!-- Modal header -->
                        <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                            <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                Kelola Level Akun
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="tambahModal = false">
                                <i class="fa-solid fa-xmark text-xl"></i>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="w-full h-full text-[#34662C] dark:text-white" method="POST" action="{{ route('storeAkun-level') }}">
                            @csrf
                            <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                <div class="col-span-2 relative">
                                    <label class="block mb-2 text-sm font-bold">NIK</label>
                                    <input list="listNik" name="nik" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" placeholder="Masukkan NIK ...">
                                    <datalist id="listNik">
                                        <option value="123456"></option>
                                    </datalist>
                                </div>
                                <div class="col-span-2">
                                    <label for="level_id" class="block mb-2 text-sm font-bold">Level</label>
                                    <select name="level_id" id="level" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required>
                                        <option selected="">Pilih Level</option>
                                        <option value="2">Admin</option>
                                        <option value="3">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                <button type="button" @click="tambahModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                    Batal
                                </button>
                                <button type="submit" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-sm rounded-lg">
            <table class="w-[650px] sm:w-full text-center table-fixed relative">
                <thead class="sm:text-sm text-xs font-bold text-[#34662C] bg-[#91DF7D] dark:bg-[#428238] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-[25%] sm:w-[20%]">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3 w-[25%] sm:w-[20%]">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jabatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%] sm:w-[40%] lg:w-[35%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $userData)
                    @if ($userData->jabatan === 'Ketua RW' || $userData->jabatan === 'Ketua RT')
                    <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-[#2F363E] dark:text-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $userData->nik }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $userData->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $userData->jabatan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $userData->username }}
                        </td>
                        <td>
                            <div class="px-6 py-4 flex gap-4 justify-center items-center h-full">
                                <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                    <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 px-2 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-circle-info"></i>
                                        <div class="hidden sm:inline-flex">Detail</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="detailModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                                        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                <!-- Modal header -->
                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        Detail Akun Penduduk
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="w-full h-full text-[#34662C] dark:text-white text-left">
                                                    <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                                        <div class="col-span-2">
                                                            <div class="flex w-full justify-center items-center gap-4 pb-2 h-fit">
                                                                <label class="text-sm font-bold">Foto
                                                                    Profil</label>
                                                            </div>
                                                            <div class="flex items-center gap-4 justify-center w-full">
                                                                <!-- Display the profile picture -->
                                                                <img src="{{ asset('assets/images/UserAccount/' . ($userData->image ?? 'default.jpg')) }}" alt="Foto Profil" class="w-20 h-20 rounded-full object-cover">
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1 relative">
                                                            <label class="block mb-2 text-sm font-bold">NIK</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                {{ $userData->nik }}
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Email
                                                                Penduduk</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                {{ $userData->email }}
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Username</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                {{ $userData->username }}
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Password</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                {{ str_repeat('*', min(strlen($userData->password), 12)) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                        <button @click="detailModal = false" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Keluar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                                    <button @click="editModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 px-2 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <div class="hidden sm:inline-flex">Edit</div>
                                    </button>
                                    <!-- Edit modal -->
                                    <div x-show="editModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                                        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                                <!-- Modal header -->
                                                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        Edit Data Akun Penduduk
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="editModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <form class="w-full h-full text-[#34662C] text-left dark:text-white" method="POST" action="{{ route('updateAkun-level', ['username' => $userData->username]) }}">
                                                    @csrf
                                                    {!! method_field('PUT') !!}

                                                    <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                                        <div class="col-span-2 relative">
                                                            <label class="block mb-2 text-sm font-bold">NIK</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                {{ $userData->nik }}
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Level</label>
                                                            <select name="level" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required>
                                                                <option selected="">Pilih Level</option>
                                                                <option value="2">Admin</option>
                                                                <option value="3">User</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                                        <button type="button" @click="editModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Batal
                                                        </button>
                                                        <button type="submit" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                            Update
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('destroyAkun-level', $userData->username) }}" method="POST">
                                    @csrf
                                    {!! method_field('DELETE') !!}

                                    <button type="submit" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 px-2 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <div class="hidden sm:inline-flex">Hapus</div>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($users->total() == 0)
        <div class="flex flex-col w-full h-[100%] justify-center items-center gap-4 py-5 dark:bg-[#343b44] shadow-sm border-b-2 dark:border-gray-600">
            <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
            <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[200px] h-[100px] object-cover">
            <p class="text-base font-semibold text-green-900 dark:text-white">Tidak terdapat data</p>
        </div>
        @endif
        <div class="px-8 py-5 dark:bg-[#343b44] rounded-b-lg shadow-md">
            {{ $users->links() }}
        </div>
    </div>
</x-admin-layout>