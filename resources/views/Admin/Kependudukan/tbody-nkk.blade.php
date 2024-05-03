@foreach ($user as $usr)
                    <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $usr->niKeluarga }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $usr->jmlAnggota }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $usr->penduduk->first()->noRt }}
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
                                                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
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
                                                                <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                                                                        Aksi
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
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

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="{{ route('destroyPenduduk', $usr->niKeluarga) }}" method="POST">
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