<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" action="{{ route('daftar-penduduk') }}">
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
                <x-admin.kependudukan.modal-filter-penduduk />
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-center">
                <thead class="text-sm font-bold text-[#34662C] bg-[#91DF7D] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py- w-[70%]">
                            Judul Aduan
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</x-admin-layout>