<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full sm:w-fit w-full gap-8 items-center justify-between">
            <form class="lg:w-[25vw] w-[100%] sm:w-[400px]" method="post" action="{{ route('searchAkun-admin') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search" class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl dark:bg-[#2F363E] bg-gray-50 rounded-xl border border-[#34662C] focus:outline-none focus:border-[3px]" placeholder="Cari ..." required />
                        <button type="submit" class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C] hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>

            <div class="absolute sm:static h-full w-fit py-2" x-data="{ 'filterModal': false }" @keydown.escape="filterModal = false">
                <button @click="filterModal = true" class="fixed sm:static flex bottom-5 animate-bounce sm:animate-none z-99 right-5 w-10 h-10 sm:w-29 bg-[#57BA47] sm:h-full text-white justify-center sm:justify-between items-center px-4 rounded-full sm:rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
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
                                    Filter Data Bansos
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="filterModal = false">
                                    <i class="fa-solid fa-xmark text-xl"></i>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="w-full h-full text-[#34662C] dark:text-white" method="POST" action="{{ route('filterAkun-admin') }}">
                                @csrf
                                <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-bold">Bulan</label>
                                        <select id="bulan" name="bulan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                            <option value="">Pilih Bulan</option>
                                            <?php $idx = 0 ?>
                                            @foreach ($month as $m)
                                            <option value="{{ $idx++ }}">{{ $m }}</option>
                                            @endforeach
                                            {{-- <option value="Sekretaris">Sekretaris</option>
                                            <option value="Bendahara">Bendahara</option> --}}
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label class="block mb-2 text-sm font-bold">Tahun</label>
                                        <select id="tahun" name="tahun" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                            <option value="">Pilih Tahun</option>
                                            @foreach ($years as $y)
                                            <option value="{{ $y }}">{{ $y }}</option>
                                            @endforeach
                                            {{-- <option value="Sekretaris">Sekretaris</option>
                                            <option value="Bendahara">Bendahara</option> --}}
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label class="block mb-2 text-sm font-bold">RT</label>
                                        <select id="rt" name="rt" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                            <option value="">Pilih RT</option>
                                            @for ($i = 1; $i < 10; $i++) <option value="{{$i}}">RT {{$i}}</option>
                                                @endfor
                                                {{-- <option value="Sekretaris">Sekretaris</option>
                                            <option value="Bendahara">Bendahara</option> --}}
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
    </div>

    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-sm rounded-lg">
            <table class="w-[650px] sm:w-full text-center table-fixed relative">
                <thead class="sm:text-sm text-xs font-bold text-[#34662C] bg-[#91DF7D] dark:bg-[#428238] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py- w-[20%]">
                            No Kartu Keluarga
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Kepala Keluarga
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            RT
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i=0; $i<10; $i++) <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-[#2F363E] dark:text-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            3201010101010101
                        </td>
                        <td class="px-6 py-4">
                            Sony Febri Hari Wibowo
                        </td>
                        <td class="px-6 py-4">
                            05-05-2024
                        </td>
                        <td class="px-6 py-4">
                            05
                        </td>
                        <td>
                            <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
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
                                                        Detail Data Penduduk
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="w-full h-full text-[#34662C] dark:text-white text-left">
                                                    <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                                        <div class="col-span-2 sm:col-span-1 relative">
                                                            <label class="block mb-2 text-sm font-bold">NKK</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                123261372358712
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Status Rumah</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                Kontrak
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Tanggungan</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                5 orang
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Penghasilan Keluarga</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                1.000.000
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Luas Tempat Tinggal</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                20m
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Pengeluaran Listrik</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                50.000
                                                            </div>
                                                        </div>
                                                        <div x-data="{ showModal: false }" class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Foto Rumah</label>
                                                            <div @click="showModal = true" class="cursor-pointer relative w-fit mx-auto flex justify-center items-center group">
                                                                <img src="{{ asset('assets/images/contoh-foto-rumah.jpg') }}" alt="Foto Rumah" class="w-[300px] h-[200px] object-cover rounded-lg shadow-md cursor-pointer group-hover:brightness-50 transition-all duration-300" />
                                                                <div class="cursor-pointer absolute group-hover:block hidden px-3 py-2 bg-[#446DFF] rounded-xl shadow-md hover:bg-[#273E91] font-semibold transition-all duration-300 text-base text-white">Lihat Foto</div>
                                                            </div>
                                                            <!-- Modal -->
                                                            <div x-show="showModal" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="showModal = false" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75">
                                                                <div class="relative">
                                                                    <img src="{{ asset('assets/images/contoh-foto-rumah.jpg') }}" alt="Foto Rumah" class="max-h-[85vh] max-w-[80vw] rounded-lg shadow-lg" />
                                                                    <button @click="showModal = false" class="absolute -top-10 -right-10 text-white text-3xl font-bold">&times;</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div x-data="{ showSktm: false }" class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Foto SKTM</label>

                                                            <div @click="showSktm = true" class="cursor-pointer relative w-fit mx-auto flex justify-center items-center group">
                                                                <img src="{{ asset('assets/images/contoh-sktm.jpg') }}" alt="Foto Sktm" class="h-[300px] object-cover rounded-lg shadow-md cursor-pointer group-hover:brightness-50 transition-all duration-300" />
                                                                <div class="cursor-pointer absolute group-hover:block hidden px-3 py-2 bg-[#446DFF] rounded-xl shadow-md hover:bg-[#273E91] font-semibold transition-all duration-300 text-base text-white">Lihat Foto</div>
                                                            </div>
                                                            <!-- Modal -->
                                                            <div x-show="showSktm" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="showSktm = false" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75">
                                                                <div class="relative">
                                                                    <img src="{{ asset('assets/images/contoh-sktm.jpg') }}" alt="Foto Sktm" class="max-h-[85vh] max-w-[80vw] rounded-lg shadow-lg" />
                                                                    <button @click="showSktm = false" class="absolute -top-10 -right-10 text-white text-3xl font-bold">&times;</button>
                                                                </div>
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
                            </div>
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>
        <div class="px-8 py-5 dark:bg-[#343b44] rounded-b-lg shadow-md">
            {{ $user->links() }}
        </div>
    </div>
</x-admin-layout>