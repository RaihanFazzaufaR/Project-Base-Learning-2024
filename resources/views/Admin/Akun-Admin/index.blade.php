<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" method="post" action="{{ route('searchAkun-admin') }}">
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
                                action="{{ route('filterAkun-admin') }}">
                                @csrf
                                <div
                                    class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jabatan" class="block mb-2 text-sm font-bold">Jabatan</label>
                                        <select id="jabatan" name="jabatan"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option value="">Semua</option>
                                            <option value="Tidak ada">Tidak ada</option>
                                            <option value="Ketua RW">Ketua RW</option>
                                            <option value="Ketua RT">Ketua RT</option>
                                            <option value="Sekretaris">Sekretaris</option>
                                            <option value="Bendahara">Bendahara</option>
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
                    x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                            <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                Tambah Data Akun Penduduk
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
                            action="{{ route('storeAkun-admin') }}" enctype="multipart/form-data">
                            @csrf
                            <div
                                class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                <div class="col-span-2 sm:col-span-1 relative">
                                    <label class="block mb-2 text-sm font-bold">NIK</label>
                                    <input list="listNik" name="nik"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan NIK ...">
                                    <datalist id="listNik">
                                        <option value="123456"></option>
                                    </datalist>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="email" class="block mb-2 text-sm font-bold">Email Penduduk</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan Email" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="username" class="block mb-2 text-sm font-bold">Username</label>
                                    <input type="text" name="username" id="username"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan Username" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="password" class="block mb-2 text-sm font-bold">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                        placeholder="Masukkan Password" required="">
                                </div>
                                <div class="col-span-2">
                                    <div class="flex w-full justify-start items-center gap-4 pb-2 h-fit">
                                        <label for="foto" class="text-sm font-bold">Foto Profil</label>
                                    </div>
                                    <input type="file" name="image" id="foto"
                                        class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
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
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jabatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $userData)
                        {{-- @if ($userData->jabatan === 'Ketua RW' || $userData->jabatan === 'Ketua RT') --}}
                        <tr
                            class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                                                            Detail Data Penduduk
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            @click="detailModal = false">
                                                            <i class="fa-solid fa-xmark text-xl"></i>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="w-full h-full text-[#34662C]">
                                                        <div
                                                            class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl text-left">
                                                            <div class="col-span-2 sm:col-span-1 relative">
                                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                                <div class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg p-2.5 placeholder-[#34662C]"
                                                                    style="{{ !$userData->editable ? 'background-color: #e5e7eb;' : '' }}">
                                                                    {{ $userData->nik }}
                                                                </div>
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="email"
                                                                    class="block mb-2 text-sm font-bold">Email
                                                                    Penduduk</label>
                                                                <div class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg p-2.5 placeholder-[#34662C]"
                                                                    style="{{ !$userData->editable ? 'background-color: #e5e7eb;' : '' }}">
                                                                    {{ $userData->email }}
                                                                </div>
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="username"
                                                                    class="block mb-2 text-sm font-bold">Username</label>
                                                                <div class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg p-2.5 placeholder-[#34662C]"
                                                                    style="{{ !$userData->editable ? 'background-color: #e5e7eb;' : '' }}">
                                                                    {{ $userData->username }}
                                                                </div>
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="password"
                                                                    class="block mb-2 text-sm font-bold">Password</label>
                                                                <div class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg p-2.5 placeholder-[#34662C]"
                                                                    style="{{ !$userData->editable ? 'background-color: #e5e7eb;' : '' }}">
                                                                    {{ str_repeat('*', min(strlen($userData->password), 12)) }}
                                                                </div>
                                                            </div>
                                                            <div class="col-span-2">
                                                                <div
                                                                    class="flex w-full justify-start items-center gap-4 pb-2 h-fit">
                                                                    <label for="foto"
                                                                        class="text-sm font-bold">Foto
                                                                        Profil</label>
                                                                </div>
                                                                <div class="flex items-center gap-4">
                                                                    <!-- Display the profile picture -->
                                                                    <img src="{{ asset('assets/images/UserAccount/' . $userData->image) }}"
                                                                        alt="Foto Profil"
                                                                        class="w-20 h-20 rounded-full object-cover">
                                                                </div>
                                                            </div>

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
                                    <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                                        <button @click="editModal = true"
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <div>Edit</div>
                                        </button>
                                        <!-- Edit modal -->
                                        <div x-show="editModal" tabindex="-1" aria-hidden="true"
                                            class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                            <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                                @click.away="editModal = false"
                                                x-transition:enter="motion-safe:ease-out duration-300"
                                                x-transition:enter-start="opacity-0 scale-90"
                                                x-transition:enter-end="opacity-100 scale-100">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                            Edit Data Akun Penduduk
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            @click="editModal = false">
                                                            <i class="fa-solid fa-xmark text-xl"></i>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <form class="w-full h-full text-[#34662C] text-left"
                                                        method="POST"
                                                        action="{{ route('updateAkun-admin', $userData->username) }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div
                                                            class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                                            <div class="col-span-2 sm:col-span-1 relative">
                                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                                <div class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg p-2.5 placeholder-[#34662C]"
                                                                    style="{{ !$userData->editable ? 'background-color: #e5e7eb;' : '' }}">
                                                                    {{ $userData->nik }}
                                                                </div>
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="email"
                                                                    class="block mb-2 text-sm font-bold">Email
                                                                    Penduduk</label>
                                                                <input type="email" name="email" id="email"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    placeholder="Masukkan Email" required=""
                                                                    value="{{ old('email', $userData->email) }}">
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="username"
                                                                    class="block mb-2 text-sm font-bold">Username</label>
                                                                <input type="text" name="username" id="username"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    placeholder="Masukkan Username" required=""
                                                                    value="{{ old('username', $userData->username) }}">
                                                            </div>
                                                            <div class="col-span-2 sm:col-span-1">
                                                                <label for="password"
                                                                    class="block mb-2 text-sm font-bold">Password</label>
                                                                <input type="password" name="password" id="password"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                                    placeholder="Masukkan Password">
                                                            </div>
                                                            <div class="col-span-2">
                                                                <div
                                                                    class="flex w-full justify-start items-center gap-4 pb-2 h-fit">
                                                                    <label for="foto"
                                                                        class="text-sm font-bold">Foto
                                                                        Profil</label>
                                                                </div>
                                                                <input type="file" name="image" id="image"
                                                                    class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                            <button type="button" @click="editModal = false"
                                                                class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                Batal
                                                            </button>
                                                            <button type="submit"
                                                                class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('destroyAkun-admin', $userData->username) }}"
                                        method="POST">
                                        @csrf
                                        {!! method_field('DELETE') !!}

                                        <button type="submit"
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-trash-can"></i>
                                            <div>Hapus</div>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        {{-- @endif --}}
                    @endforeach
                </tbody>
            </table>
            <div class="px-8 py-5">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
