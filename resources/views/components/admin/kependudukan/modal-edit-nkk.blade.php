<div x-show="editModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
    <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
        <!-- Modal content -->
        <div class="relative bg-white rounded-t-2xl sm:rounded-lg shadow dark:bg-[#2F363E]">
            <!-- Modal header -->
            <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                    Edit Data Kartu Keluarga
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="editModal = false">
                    <i class="fa-solid fa-xmark text-xl"></i>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="w-full h-full text-[#34662C] dark:text-white text-left" method="POST" action="{{ route('updateKartuKeluarga', $usr->id_kartuKeluarga ) }}">
                @csrf
                {!! method_field('PUT') !!}

                <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="nkk" class="block mb-2 text-sm font-bold">NKK</label>
                        <input type="text" name="nkk" id="nkk" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" placeholder="Masukkan NKK" required="" value="{{ $usr->niKeluarga }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jumlahAnggota" class="block mb-2 text-sm font-bold">Jumlah Anggota Keluarga</label>
                        <input type="number" min="1" name="jumlahAnggota" id="jumlahAnggota" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" placeholder="Masukkan Jumlah Anggota Keluarga" required="" value="{{ $usr->jmlAnggota }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="kepalaKeluarga" class="block mb-2 text-sm font-bold">NIK Kepala Keluarga</label>
                        <input type="text" name="kepalaKeluarga" id="kepalaKeluarga" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" placeholder="Masukkan NIK Kepala Keluarga" required="" value="{{ $usr->kepalaKeluarga }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="rt" class="block mb-2 text-sm font-bold">RT</label>
                        <select name="rt" id="rt" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required>
                            <option selected="">Pilih RT</option>
                            <option value="01" @if ($usr->rt === '01') selected @endif>01</option>
                            <option value="02" @if ($usr->rt === '02') selected @endif>02</option>
                            <option value="03" @if ($usr->rt === '03') selected @endif>03</option>
                            <option value="04" @if ($usr->rt === '04') selected @endif>04</option>
                            <option value="05" @if ($usr->rt === '05') selected @endif>05</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="alamat" class="block mb-2 text-sm font-bold">Alamat</label>
                        <textarea id="alamat" name="alamat" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" placeholder="Masukkan Alamat...">{{ $usr->alamat }}</textarea>
                    </div>
                </div>
                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 h-[65px] sm:h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                    <button type="button" @click="editModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                        Batal
                    </button>
                    <button type="submit" class="text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-xl sm:rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>