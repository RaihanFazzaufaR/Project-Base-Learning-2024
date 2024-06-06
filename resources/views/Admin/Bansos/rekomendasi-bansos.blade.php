<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-sm rounded-lg">
            <table class="w-[650px] sm:w-full text-center table-fixed relative">
                <thead class="sm:text-sm text-xs font-bold text-[#34662C] bg-[#91DF7D] dark:bg-[#428238] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Rank
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            No Kartu Keluarga
                        </th>
                        <th scope="col" class="px-6 py-3 w-[25%]">
                            Kepala Keluarga
                        </th>
                        <th scope="col" class="px-6 py-3 w-[15%]">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $hasil)
                    @if($hasil['data']['status']=='diproses')
                    
                    {{-- @for ($i=0; $i<10; $i++)  --}}
                    <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-[#2F363E] dark:text-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $hasil['rank'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $hasil['data']['niKeluarga'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $hasil['data']['nama_kepala_keluarga'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $hasil['data']['created_at'] }}
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
                                                                {{ $hasil['data']['niKeluarga'] }}
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Status Rumah</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                {{ $hasil['data']['status_rumah']['original'] }}
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Tanggungan</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                {{ $hasil['data']['tanggungan']['original'] }} orang
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Penghasilan Keluarga</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                 {{ $hasil['data']['penghasilan_keluarga']['original'] }}
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Luas Tempat Tinggal</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                {{ $hasil['data']['luas_tempat_tinggal']['original'] }}
                                                            </div>
                                                        </div>
                                                        <div class="col-span-2 sm:col-span-1">
                                                            <label class="block mb-2 text-sm font-bold">Pengeluaran Listrik</label>
                                                            <div class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                                                {{ $hasil['data']['pengeluaran_listrik']['original'] }}
                                                            </div>
                                                        </div>
                                                        <div x-data="{ showModal: false }" class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Foto Rumah</label>
                                                            <div @click="showModal = true" class="cursor-pointer relative w-fit mx-auto flex justify-center items-center group">
                                                                <img src="{{ asset('assets/images/' . $hasil['data']['foto_rumah']) }}" alt="Foto Rumah" class="w-[300px] h-[200px] object-cover rounded-lg shadow-md cursor-pointer group-hover:brightness-50 transition-all duration-300" />
                                                                <div class="cursor-pointer absolute group-hover:block hidden px-3 py-2 bg-[#446DFF] rounded-xl shadow-md hover:bg-[#273E91] font-semibold transition-all duration-300 text-base text-white">Lihat Foto</div>
                                                            </div>
                                                            <!-- Modal -->
                                                            <div x-show="showModal" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="showModal = false" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75">
                                                                <div class="relative">
                                                                    <img src="{{ asset('assets/images/' . $hasil['data']['foto_rumah']) }}" alt="Foto Rumah" class="max-h-[85vh] max-w-[80vw] rounded-lg shadow-lg" />
                                                                    <button @click="showModal = false" class="absolute -top-10 -right-10 text-white text-3xl font-bold">&times;</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div x-data="{ showSktm: false }" class="col-span-2">
                                                            <label class="block mb-2 text-sm font-bold">Foto SKTM</label>

                                                            <div @click="showSktm = true" class="cursor-pointer relative w-fit mx-auto flex justify-center items-center group">
                                                                <img src="{{ asset('assets/images/' . $hasil['data']['SKTM']) }}" alt="Foto Sktm" class="h-[300px] object-cover rounded-lg shadow-md cursor-pointer group-hover:brightness-50 transition-all duration-300" />
                                                                <div class="cursor-pointer absolute group-hover:block hidden px-3 py-2 bg-[#446DFF] rounded-xl shadow-md hover:bg-[#273E91] font-semibold transition-all duration-300 text-base text-white">Lihat Foto</div>
                                                            </div>
                                                            <!-- Modal -->
                                                            <div x-show="showSktm" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300 transform" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="showSktm = false" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75">
                                                                <div class="relative">
                                                                    <img src="{{ asset('assets/images/' . $hasil['data']['SKTM']) }}" alt="Foto Sktm" class="max-h-[85vh] max-w-[80vw] rounded-lg shadow-lg" />
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
                                {{-- @if($hasil['data']['status']=='diproses') --}}
                                    <form action="{{ route('acc') }}" method="GET" style="display:inline;">
                                        <input type="hidden" name="id" value="{{ $hasil['data']['id_ajuanBansos'] }}">
                                        <button class="hover:bg-[#34662C] p-2 shadow-lg rounded-full text-white sm:text-2xl text-xl sm:size-10 size-8 flex items-center justify-center bg-[#52A245] hover:scale-105 transition ease-in-out duration-500">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </form>
                                    
                                    <form action="{{ route('rjct') }}" method="GET" style="display:inline;">
                                        <input type="hidden" name="id" value="{{ $hasil['data']['id_ajuanBansos'] }}">
                                        <button class="bg-[#FF5E5E] p-2 shadow-lg rounded-full text-white sm:text-2xl text-xl sm:size-10 size-8 flex items-center justify-center hover:bg-[#913535] hover:scale-105 transition ease-in-out duration-500">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                        </tr>
                        @endforeach
                        {{-- @endfor --}}
                </tbody>
            </table>
        </div>
        <div class="px-8 py-5 dark:bg-[#343b44] rounded-b-lg shadow-md">
            {{-- {{ $user->links() }} --}}
        </div>
    </div>
</x-admin-layout>