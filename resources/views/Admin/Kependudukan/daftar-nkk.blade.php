<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" action="{{ route('daftar-nkk') }}">
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
                <x-admin.kependudukan.modal-filter-nkk />
            </div>
        </div>

        <div class="h-full w-fit py-2" x-data="{ 'tambahModal': false }" @keydown.escape="tambahModal = false">
            <button @click="tambahModal = true" class="flex w-34 bg-[#57BA47] h-full text-white justify-between items-center px-4 rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                <i class="fa-solid fa-plus text-2xl"></i>
                <div class="text-xl font-semibold">Tambah</div>
            </button>

            <!-- Main modal -->
            <x-admin.kependudukan.modal-tambah-nkk />
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
                    <td>
                        <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                            <div x-data="{ 'id_kk':{{ $id_kk }} }">
                                <div x-data="{ 'detailModal': id_kk === {{ $usr->id_kartuKeluarga }} }" @keydown.escape="detailModal = false">
                                    <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-circle-info"></i>
                                        <div>Detail</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <x-admin.kependudukan.modal-detail-nkk id="{{ $usr->id_kartuKeluarga }}" />
                                </div>
                            </div>
                            <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    <div>Edit</div>
                                </button>
                                <!-- Edit modal -->
                                <x-admin.kependudukan.modal-edit-nkk idKk="{{ $usr->id_kartuKeluarga }}" />
                            </div>

                            <form action="{{ route('destroyKartuKeluarga', $usr->id_kartuKeluarga) }}" method="POST">
                                @csrf
                                {!! method_field('DELETE') !!}

                                <button type="submit" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                    <i class="fa-solid fa-trash-can"></i>
                                    <div>Hapus</div>
                                </button>
                            </form>
                        </div>
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