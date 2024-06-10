<div class="sm:h-full sm:w-fit sm:py-2 absolute sm:static" x-data="{ 'tambahModal': false }" @keydown.escape="tambahModal = false">
    <button @click="tambahModal = true" class="fixed sm:static right-5 bottom-5 flex z-99 w-10 h-10 sm:w-34 bg-[#57BA47] sm:h-full text-white justify-center sm:justify-between items-center px-4 rounded-full sm:rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out animate-bounce sm:animate-none">
        <i class="fa-solid fa-plus sm:text-2xl text-xl"></i>
        <div class="text-xl font-semibold hidden sm:block">Tambah</div>
    </button>

    <!-- Main modal -->
    <div x-show="tambahModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
        <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
        <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="tambahModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
            <!-- Modal content -->
            <div class="relative bg-white rounded-t-2xl sm:rounded-lg shadow dark:bg-[#2F363E]">
                <!-- Modal header -->
                <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                        Tambah Data Penduduk
                    </h3>
                    <button type="button" onclick="resetCounter()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="tambahModal = false">
                        <i class="fa-solid fa-xmark text-xl"></i>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="w-full h-full text-[#34662C] dark:text-white" method="POST" action="{{ route('storePenduduk') }}">
                    @csrf
                    <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-bold">Nomor Kartu Keluarga</label>
                            <input type="text" name="nkk" id="nkk" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan No KK" required="" value="{{ old('nkk') }}">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label class="block mb-2 text-sm font-bold">NIK Kepala Keluarga</label>
                            <input type="text" name="kepalaKeluarga" id="kepalaKeluarga" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK Kepala Keluarga" required="" value="{{ old('kepalaKeluarga') }}">
                        </div>
                        <div class="col-span-2 sm:col-span-1 grid grid-cols-2 gap-4">
                            <div class="col-span-1">
                                <label class="block mb-2 text-sm font-bold">Jumlah Keluarga</label>
                                <input type="number" min="1" name="jumlahAnggota" id="jumlahAnggota" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" readonly value="1">
                            </div>
                            <div class="col-span-1">
                                <label class="block mb-2 text-sm font-bold">RT</label>
                                <select name="rt" id="rt" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                    <option value="" selected>Pilih RT</option>
                                    @foreach ($rt as $dt)
                                        <option value="{{$dt->rt}}">{{ $dt->rt }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-bold">Alamat</label>
                            <textarea id="alamat" name="alamat" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan Alamat ..."></textarea>
                        </div>
                        <div class="col-span-2 flex items-center justify-between pt-5 pb-3 px-2">
                            <div class="font-bold text-base">Data Anggota Keluarga</div>
                            <button type="button" onclick="tambahBaris()" class="bg-[#57BA47] rounded-full size-10 shadow-lg flex justify-center items-center hover:bg-[#336E2A] transition ease-in-out duration-300 hover:scale-105">
                                <i class="fa-solid fa-user-plus text-white"></i>
                            </button>
                        </div>
                        <div class="w-full col-span-2 flex-col gap-4" id="listPenduduk">
                            <div class="w-full col-span-2 grid grid-cols-2 h-fit gap-4 border-t-2 border-[#34662C] dark:border-gray-500 py-5 mb-4">
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">NIK</label>
                                    <input type="text" name="penduduk[0][nik]" id="nik" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block  p-2 placeholder-[#34662C]" placeholder="Masukkan NIK" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Nama</label>
                                    <input type="text" name="penduduk[0][nama]" id="nama" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Nama" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Email</label>
                                    <input type="text" name="penduduk[0][email]" id="email" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Email" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Agama</label>
                                    <select id="agama" name="penduduk[0][agama]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Agama</option>
                                        <option value="islam">Islam</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="khonghucu">Khonghucu</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Tempat Lahir</label>
                                    <input type="text" name="penduduk[0][tempatLahir]" id="tempatLahir" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Tempat Lahir" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Tanggal Lahir</label>
                                    <input type="date" name="penduduk[0][tanggalLahir]" id="tanggalLahir" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Status Pernikahan</label>
                                    <select id="statusPernikahan" name="penduduk[0][statusPernikahan]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Status Pernikahan</option>
                                        <option value="belum">Belum Menikah</option>
                                        <option value="sudah">Sudah Menikah</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Jenis Kelamin</label>
                                    <select id="jenisKelamin" name="penduduk[0][jenisKelamin]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Pekerjaan</label>
                                    <input type="text" name="penduduk[0][pekerjaan]" id="pekerjaan" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Pekerjaan" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Gaji</label>
                                    <input type="number" name="penduduk[0][gaji]" id="gaji" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Gaji" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Status Penduduk</label>
                                    <select id="statusPenduduk" name="penduduk[0][statusPenduduk]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Status Penduduk</option>
                                        <option value="penduduk tetap">Penduduk Tetap</option>
                                        <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                                    <select id="kewarganegaraan" name="penduduk[0][kewarganegaraan]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Kewarganegaraan</option>
                                        <option value="WNI">Indonesia</option>
                                        <option value="WNA">Luar</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">No Telepon</label>
                                    <input type="tel" name="penduduk[0][noHp]" id="noHp" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan No Telepon" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Jabatan</label>
                                    <select id="jabatan" name="penduduk[0][jabatan]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Jabatan</option>
                                        <option value="Ketua RW">Ketua RW</option>
                                        <option value="Ketua RT">Ketua RT</option>
                                        <option value="Bendahara">Bendahara</option>
                                        <option value="Sekretaris">Sekretaris</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                        <button type="button" @click="tambahModal = false" class="hidden hover:text-white sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                            Batal
                        </button>
                        <button type="submit" class="text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-xl sm:rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>