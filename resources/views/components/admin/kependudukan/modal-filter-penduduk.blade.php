<!-- Main modal -->
<div x-show="filterModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
    <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
    <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="filterModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                    Filter Data Penduduk
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="filterModal = false">
                    <i class="fa-solid fa-xmark text-xl"></i>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="w-full h-full text-[#34662C]" action="{{ route('daftar-penduduk') }}">
                @csrf
                <div class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="agama" class="block mb-2 text-sm font-bold">Agama</label>
                        <select id="agama" name="agama" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Agama</option>
                            <option value="islam">Islam</option>
                            <option value="katolik">Katolik</option>
                            <option value="kristen">Kristen</option>
                            <option value="buddha">Buddha</option>
                            <option value="khonghucu">Khonghucu</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="statusPenduduk" class="block mb-2 text-sm font-bold ">Status Penduduk</label>
                        <select id="statusPenduduk" name="statusPenduduk" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Status Penduduk</option>
                            <option value="penduduk tetap">Penduduk Tetap</option>
                            <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="statusPernikahan" class="block mb-2 text-sm font-bold ">Status Pernikahan</label>
                        <select id="statusPernikahan" name="statusPernikahan" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Status Pernikahan</option>
                            <option value="belum">Belum Menikah</option>
                            <option value="sudah">Sudah Menikah</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="kewarganegaraan" class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                        <select id="kewarganegaraan" name="kewarganegaraan" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Kewarganegaraan</option>
                            <option value="WNI">Indonesia</option>
                            <option value="WNA">Luar</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jabatan" class="block mb-2 text-sm font-bold ">Jabatan</label>
                        <select id="jabatan" name="jabatan" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Jabatan</option>
                            <option value="Ketua RW">Ketua RW</option>
                            <option value="Ketua RT">Ketua RT</option>
                            <option value="Bendahara">Bendahara</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                    <div class="col-span-1 grid grid-cols-2 gap-2">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="jenisKelamin" class="block mb-2 text-sm font-bold ">Jenis Kelamin</label>
                            <select id="jenisKelamin" name="jenisKelamin" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                <option selected="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="rt" class="block mb-2 text-sm font-bold ">RT</label>
                            <select id="rt" name="rt" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                <option selected="">Pilih RT</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                    <button type="submit" @click="filterModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                        Batal
                    </button>
                    <button type="submit" @click="filterModal = false" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                        Filter
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>