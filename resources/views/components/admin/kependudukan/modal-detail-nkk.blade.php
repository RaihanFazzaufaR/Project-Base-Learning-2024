<div x-show="detailModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
    <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
    <div class="relative z-[1000] sm:p-4 w-full sm:w-[85vw] sm:max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
        <!-- Modal content -->
        <div class="relative bg-white rounded-t-2xl sm:rounded-lg shadow dark:bg-[#2F363E]">
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
                <div class="p-4 md:p-5 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl crollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                    <div class="relative overflow-y-auto shadow-md rounded-lg w-full max-h-[360px]">
                        <table class="w-full text-center dark:shadow-[#57BA47] shadow-2">
                            <thead class="sm:text-sm text-xs font-bold text-[#34662C] bg-[#91DF7D] dark:bg-[#428238] dark:text-white">
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
                                <!-- <tr class="bg-white border-b text-xs sm:text-sm font-medium text-[#7F7F7F] dark:bg-[#2F363E] dark:text-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"></tr> -->
                                <tr class="border-b text-sm font-medium hover:bg-gray-50 bg-white dark:bg-[#2F363E] dark:border-gray-700 dark:hover:bg-gray-600  {{ $pnd->nik === $usr->kepalaKeluarga ? 'text-[#57BA47]' : 'text-[#7F7F7F] dark:text-white' }}">
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
                                        <form action="{{ route('daftar-penduduk') }}">
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
                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 h-[65px] sm:h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                    <button @click="detailModal = false" class="text-white inline-flex px-30 sm:px-4 py-2 text-sm font-bold rounded-xl sm:rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                        Keluar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>