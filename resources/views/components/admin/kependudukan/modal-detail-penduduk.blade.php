<!-- Detail modal -->
<div x-show="detailModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
    <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
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
            <div class="w-full h-full text-[#34662C] dark:text-white text-left">
                <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold">NIK</label>
                        <input type="text" name="nik" id="nik" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->nik }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold">NKK</label>
                        <input type="text" name="nkk" id="nkk" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->kartuKeluarga->niKeluarga }}" readonly>
                    </div>
                    <div class="col-span-2">
                        <label class="block mb-2 text-sm font-bold">Nama</label>
                        <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->nama }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold ">No Telepon</label>
                        <input type="number" name="noHp" id="noHp" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->noTelp }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold">Agama</label>
                        <input type="text" name="agama" id="agama" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->agama }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold ">Tempat Lahir</label>
                        <input type="text" name="tempatLahir" id="tempatLahir" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->tempatLahir }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold ">Tanggal Lahir</label>
                        <input type="date" name="tanggalLahir" id="tanggalLahir" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->tanggalLahir }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold ">Status Penduduk</label>
                        <input type="text" name="statusPenduduk" id="statusPenduduk" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->statusPenduduk }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold ">Status Pernikahan</label>
                        <input type="text" name="statusPernikahan" id="statusPernikahan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->statusNikah }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold ">Pekerjaan</label>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->pekerjaan }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold ">Gaji</label>
                        <input type="number" name="gaji" id="gaji" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->gaji }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                        <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->warganegara }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold ">Jenis Kelamin</label>
                        <select id="jenisKelamin" name="jenisKelamin" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" disabled>
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="L" @if ($usr->jenisKelamin == 'L') selected @endif>Laki-Laki</option>
                            <option value="P" @if ($usr->jenisKelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->jabatan }}" readonly>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label class="block mb-2 text-sm font-bold ">RT</label>
                        <input type="text" name="rt" id="rt" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->kartuKeluarga->rt }}" readonly>
                    </div>
                </div>
                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 h-[65px] sm:h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                    @if ($idPenduduk != 0)
                    <form action="{{ route('daftar-nkk') }}">
                        @csrf
                        <input type="hidden" name="id_kk" value="{{ $usr->id_kartuKeluarga }}">
                        <button type="submit" @click="detailModal = false" class="inline-flex sm:px-4 px-8 py-2 text-sm font-bold rounded-xl sm:rounded-lg shadow-md items-center bg-white text-[#34662C] border-2 border-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                            Kembali
                        </button>
                    </form>
                    @endif
                    <button @click="detailModal = false" class="text-white inline-flex sm:px-4 px-8 py-2 text-sm font-bold rounded-xl sm:rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                        Keluar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>