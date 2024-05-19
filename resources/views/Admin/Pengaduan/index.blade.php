<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" action="{{ route('pengaduan-admin') }}">
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
                <x-admin.kependudukan.modal-filter-penduduk />
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-center">
                <thead class="text-sm font-bold text-[#34662C] bg-[#91DF7D] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Judul Aduan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pembuat Aduan
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($complaints as $complaint)
                        <tr
                            class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                {{ $complaint->judul }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                {{ $complaint->penduduk->nama }}
                            </td>
                            <td class="">
                                <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                                    <div x-data="{ 'idAduan': {{ $aduan_id }} }">
                                        <div x-data="{ 'detailModal': idAduan === {{ $complaint->aduan_id }} }" @keydown.escape="detailModal = false">
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
                                                            <h3
                                                                class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                {{ $complaint->judul }}
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
                                                                class="flex p-4 md:p-5 w-150 gap-4 max-h-[450px] overflow-y-auto justify-end rounded-b-xl">
                                                                @if ($complaint->status == 'diproses')
                                                                    <button
                                                                        class="flex justify-center items-center gap-2 w-7 h-7 @text-white bg-[#FFDE68] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                                                        <i class="fa-solid fa-minus text-lg"></i>
                                                                    </button>
                                                                @elseif($complaint->status == 'selesai')
                                                                    <button
                                                                        class="flex justify-center items-center gap-2 w-7 h-7 text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all">
                                                                        <i class="fa-solid fa-check text-lg"></i>
                                                                    </button>
                                                                @elseif($complaint->status == 'ditolak')
                                                                    <button
                                                                        class="flex justify-center items-center gap-2 w-7 h-7 text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                                                        <i class="fa-solid fa-xmark text-lg"></i>
                                                                    </button>
                                                                @endif
                                                                <img class="" src="{{ asset('assets/images/Aduan/testaduan.jpeg') }}"
                                                                    alt="">
                                                                <p class="">
                                                                    {{ $complaint->konten_aduan }}
                                                                </p>
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
                                    @if ($complaint->status == 'diproses')
                                        <button
                                            class="flex justify-center items-center gap-2 w-10 h-10 @text-white bg-[#FFDE68] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-minus text-lg"></i>
                                        </button>
                                    @elseif($complaint->status == 'selesai')
                                        <button
                                            class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-check text-lg"></i>
                                        </button>
                                    @elseif($complaint->status == 'ditolak')
                                        <button
                                            class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-xmark text-lg"></i>
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    {{-- @for ($i = 0; $i < 4; $i++)
                        <tr
                            class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                Fasilitas pada daerah RT 3 kurang memadai
                            </td>
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                Maulidin Zakaria
                            </td>
                            <td class="">
                                <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
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
                                    <button
                                        class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-check text-lg"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endfor
                    @for ($i = 0; $i < 3; $i++)
                        <tr
                            class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                Jalanan rusak di sekitar jl. kudus
                            </td>
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                Raihan Fazzaufa Rasendriya
                            </td>
                            <td class="">
                                <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
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
                                    <button
                                        class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#FFDE68] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-minus text-lg"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endfor
                    @for ($i = 0; $i < 3; $i++)
                        <tr
                            class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                Permintaan Pembangunan TPS daerah RT 4
                            </td>
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                Sony Febri Hari Widodo
                            </td>
                            <td class="">
                                <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
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
                                    <button
                                        class="flex justify-center items-center gap-2 w-10 h-10 text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-xmark text-lg"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endfor --}}
                </tbody>
            </table>
            <div class="px-8 py-5">
                {{ $complaints->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
