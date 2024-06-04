<div x-show="editModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
    <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
        <!-- Modal content -->
        <div class="relative bg-white  rounded-t-2xl sm:rounded-lg shadow dark:bg-[#2F363E]">
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
            <form class="w-full h-full text-[#34662C] dark:text-white text-left" method="POST" action="{{ route('updatePenduduk', $usr->id_penduduk ) }}">
                @csrf
                {!! method_field('PUT') !!}

                <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="nik" class="block mb-2 text-sm font-bold">NIK</label>
                        <input type="text" name="nik" id="nik" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->nik }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="nkk" class="block mb-2 text-sm font-bold">NKK</label>
                        <input type="text" name="nkk" id="nkk" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->kartuKeluarga->niKeluarga }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="nama" class="block mb-2 text-sm font-bold">Nama</label>
                        <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->nama }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="noHp" class="block mb-2 text-sm font-bold">No Telepon</label>
                        <input type="tel" name="noHp" id="noHp" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->noTelp }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="agama" class="block mb-2 text-sm font-bold">Agama</label>
                        <select id="agama" name="agama" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Agama</option>
                            <option value="islam" @if ($usr->agama == 'islam') selected @endif>Islam</option>
                            <option value="katolik" @if ($usr->agama == 'katolik') selected @endif>Katolik</option>
                            <option value="kristen" @if ($usr->agama == 'kristen') selected @endif>Kristen</option>
                            <option value="buddha" @if ($usr->agama == 'buddha') selected @endif>Buddha</option>
                            <option value="khonghucu" @if ($usr->agama == 'khonghucu') selected @endif>Khonghucu</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tempatLahir" class="block mb-2 text-sm font-bold ">Tempat Lahir</label>
                        <input type="text" name="tempatLahir" id="tempatLahir" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->tempatLahir }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tanggalLahir" class="block mb-2 text-sm font-bold ">Tanggal Lahir</label>
                        <input type="date" name="tanggalLahir" id="tanggalLahir" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->tanggalLahir }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="statusPenduduk" class="block mb-2 text-sm font-bold ">Status Penduduk</label>
                        <select id="statusPenduduk" name="statusPenduduk" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Status Penduduk</option>
                            <option value="penduduk tetap" @if ($usr->statusPenduduk == 'penduduk tetap') selected @endif>Penduduk Tetap</option>
                            <option value="penduduk tidak tetap" @if ($usr->statusPenduduk == 'penduduk tidak tetap') selected @endif>Penduduk Tidak Tetap</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="statusPernikahan" class="block mb-2 text-sm font-bold ">Status Pernikahan</label>
                        <select id="statusPernikahan" name="statusPernikahan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Status Pernikahan</option>
                            <option value="belum" @if ($usr->statusNikah == 'belum') selected @endif>Belum Menikah</option>
                            <option value="sudah" @if ($usr->statusNikah == 'sudah') selected @endif>Sudah Menikah</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="pekerjaan" class="block mb-2 text-sm font-bold ">Pekerjaan</label>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->pekerjaan }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="gaji" class="block mb-2 text-sm font-bold ">Gaji</label>
                        <input type="number" name="gaji" id="gaji" min="0" step="0.01" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $usr->gaji }}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jabatan" class="block mb-2 text-sm font-bold">Jabatan</label>
                        <select id="jabatan" name="jabatan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Jabatan</option>
                            <option value="Ketua RW" @if ($usr->jabatan == 'Ketua RW') selected @endif>Ketua RW</option>
                            <option value="Ketua RT" @if ($usr->jabatan == 'Ketua RT') selected @endif>Ketua RT</option>
                            <option value="Bendahara" @if ($usr->jabatan == 'Bendahara') selected @endif>Bendahara</option>
                            <option value="Sekretaris" @if ($usr->jabatan == 'Sekretaris') selected @endif>Sekretaris</option>
                            <option value="Tidak Ada" @if ($usr->jabatan == 'Tidak ada') selected @endif>Tidak Ada</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="kewarganegaraan" class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                        <select id="kewarganegaraan" name="kewarganegaraan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Kewarganegaraan</option>
                            <option value="WNI" @if ($usr->warganegara == 'WNI') selected @endif>Indonesia</option>
                            <option value="WNA" @if ($usr->warganegara == 'WNA') selected @endif>Luar</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jenisKelamin" class="block mb-2 text-sm font-bold ">Jenis Kelamin</label>
                        <select id="jenisKelamin" name="jenisKelamin" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="L" @if ($usr->jenisKelamin == 'L') selected @endif>Laki-Laki</option>
                            <option value="P" @if ($usr->jenisKelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 h-[65px] sm:h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                    <button type="button" @click="editModal = false" class="hidden hover:text-white sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
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