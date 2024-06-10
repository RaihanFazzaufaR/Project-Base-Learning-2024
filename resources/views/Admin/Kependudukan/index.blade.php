<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-full sm:w-fit gap-8 items-center justify-between">
            <form class="lg:w-[22vw] w-[100%] sm:w-[300px]" action="{{ route('daftar-penduduk') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search" class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl bg-gray-50 dark:border-[#57BA47] dark:bg-[#2F363E] dark:text-white rounded-xl border border-[#34662C] focus:outline-none focus:sm:border-[3px] focus:border-[2px]" placeholder="Cari ..." required />
                        <button type="submit" class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C] hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-xl sm:text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="sm:h-full sm:w-fit sm:py-2 absolute sm:static" x-data="{ 'filterModal': false }" @keydown.escape="filterModal = false">
                <button @click="filterModal = true" class="fixed sm:static flex bottom-20 animate-bounce sm:animate-none z-99 right-5 w-10 h-10 sm:w-29 bg-[#57BA47] sm:h-full text-white justify-center sm:justify-between items-center px-4 rounded-full sm:rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                    <i class="fa-solid fa-sliders sm:text-2xl text-xl"></i>
                    <div class="text-xl font-semibold hidden sm:block">Filter</div>
                </button>
                <!-- Main modal -->
                <div x-show="filterModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="filterModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-t-2xl sm:rounded-lg shadow dark:bg-[#2F363E]">
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
                            <form class="w-full h-full text-[#34662C] dark:text-white" action="{{ route('daftar-penduduk') }}">
                                @csrf
                                <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="agama" class="block mb-2 text-sm font-bold">Agama</label>
                                        <select id="agama" name="agama" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] ">
                                            <option selected="" value="">Pilih Agama</option>
                                            <option value="islam">Islam</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="buddha">Buddha</option>
                                            <option value="khonghucu">Khonghucu</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="statusPenduduk" class="block mb-2 text-sm font-bold ">Status Penduduk</label>
                                        <select id="statusPenduduk" name="statusPenduduk" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                            <option selected="" value="">Pilih Status Penduduk</option>
                                            <option value="penduduk tetap">Penduduk Tetap</option>
                                            <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="statusPernikahan" class="block mb-2 text-sm font-bold ">Status Pernikahan</label>
                                        <select id="statusPernikahan" name="statusPernikahan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                            <option selected="" value="">Pilih Status Pernikahan</option>
                                            <option value="belum">Belum Menikah</option>
                                            <option value="sudah">Sudah Menikah</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="kewarganegaraan" class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                                        <select id="kewarganegaraan" name="kewarganegaraan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                            <option selected="" value="">Pilih Kewarganegaraan</option>
                                            <option value="WNI">Indonesia</option>
                                            <option value="WNA">Luar</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jabatan" class="block mb-2 text-sm font-bold ">Jabatan</label>
                                        <select id="jabatan" name="jabatan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                            <option selected="" value="">Pilih Jabatan</option>
                                            <option value="Ketua RW">Ketua RW</option>
                                            <option value="Ketua RT">Ketua RT</option>
                                            <option value="Bendahara">Bendahara</option>
                                            <option value="Sekretaris">Sekretaris</option>
                                            <option value="Tidak Ada">Tidak Ada</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jenisKelamin" class="block mb-2 text-sm font-bold ">Jenis Kelamin</label>
                                        <select id="jenisKelamin" name="jenisKelamin" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                                            <option selected="" value="">Pilih Jenis Kelamin</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 h-[65px] sm:h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                    <button type="button" @click="filterModal = false" class="hidden hover:text-white sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Batal
                                    </button>
                                    <button type="submit" class="text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-xl sm:rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Filter
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    </div>

    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-sm rounded-t-lg">
            <table class="sm:w-[1000px] w-[700px] lg:w-full text-center table-fixed relative">
                <thead class="sm:text-sm text-xs font-bold text-[#34662C] bg-[#91DF7D] dark:bg-[#428238] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3 w-[25%] sm:w-[20%]">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 w-[25%] sm:w-[20%]">
                            Tempat Tanggal Lahir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            RT
                        </th>
                        <th scope="col" class="px-6 py-3 w-[25%] sm:w-[35%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $usr)
                    <tr class="bg-white border-b text-xs sm:text-sm font-medium text-[#7F7F7F] dark:bg-[#2F363E] dark:text-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $usr->nik }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $usr->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $usr->tempatLahir }}, {{ $usr->tanggalLahir }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $usr->kartuKeluarga->rt }}
                        </td>
                        <td>
                            <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                                <div x-data="{ 'idPenduduk': {{ $id_penduduk }} }">
                                    <div x-data="{ 'detailModal': idPenduduk === {{ $usr->id_penduduk }} }" @keydown.escape="detailModal = false">
                                        <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF]  rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <div class="hidden sm:inline-flex">Detail</div>
                                        </button>
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
                                                            @if ($id_penduduk != 0)
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
                                    </div>
                                </div>
                                <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                                    <button @click="editModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68]  rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <div class="hidden sm:inline-flex">Edit</div>
                                    </button>
                                    <!-- Edit modal -->
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
                                </div>

                                <form action="{{ route('destroyPenduduk', $usr->id_penduduk) }}" method="POST" id="deleteForm-{{ $usr->id_penduduk }}" class="deleteForm">
                                    @csrf
                                    {!! method_field('DELETE') !!}
                                    <button type="button" onclick="showConfirm('{{$usr->id_penduduk}}')" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E]  rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <div class="hidden sm:inline-flex">Hapus</div>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($user->total() == 0)
        <div class="flex flex-col w-full h-[100%] justify-center items-center gap-4 py-5 dark:bg-[#343b44] shadow-sm border-b-2 dark:border-gray-600">
            <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
            <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[200px] h-[100px] object-cover">
            <p class="text-base font-semibold text-green-900 dark:text-white">Tidak terdapat data</p>
        </div>
        @endif
        <div class="px-8 py-5 dark:bg-[#343b44] rounded-b-lg shadow-md">
            {{ $user->onEachSide(1)->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let listPenduduk = document.getElementById('listPenduduk');
        let counter = 1;

        const templateBaris = (index) => {
            return `
                            <div class="w-full col-span-2 grid grid-cols-2 h-fit gap-4 border-t-2 border-[#34662C] dark:border-gray-500 py-5 mb-4">
                                <div class="col-span-2 w-full flex justify-end items-center">
                                    <button type="button" onclick="hapusBaris(${counter})" class="button-hapus size-9 flex items-center justify-center bg-[#FF5E5E] hover:bg-[#B34242] shadow-md transition-all hover:scale-105 rounded-full">
                                        <i class="fa-solid fa-minus text-white"></i>
                                    </button>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">NIK</label>
                                    <input type="text" name="penduduk[${counter}][nik]" id="nik" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block  p-2 placeholder-[#34662C]" placeholder="Masukkan NIK" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Nama</label>
                                    <input type="text" name="penduduk[${counter}][nama]" id="nama" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Nama" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Email</label>
                                    <input type="text" name="penduduk[${counter}][email]" id="email" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Email" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Agama</label>
                                    <select id="agama" name="penduduk[${counter}][agama]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
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
                                    <input type="text" name="penduduk[${counter}][tempatLahir]" id="tempatLahir" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Tempat Lahir" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Tanggal Lahir</label>
                                    <input type="date" name="penduduk[${counter}][tanggalLahir]" id="tanggalLahir" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Status Pernikahan</label>
                                    <select id="statusPernikahan" name="penduduk[${counter}][statusPernikahan]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Status Pernikahan</option>
                                        <option value="belum">Belum Menikah</option>
                                        <option value="sudah">Sudah Menikah</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Jenis Kelamin</label>
                                    <select id="jenisKelamin" name="penduduk[${counter}][jenisKelamin]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Pekerjaan</label>
                                    <input type="text" name="penduduk[${counter}][pekerjaan]" id="pekerjaan" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Pekerjaan" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Gaji</label>
                                    <input type="number" name="penduduk[${counter}][gaji]" id="gaji" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Gaji" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Status Penduduk</label>
                                    <select id="statusPenduduk" name="penduduk[${counter}][statusPenduduk]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Status Penduduk</option>
                                        <option value="penduduk tetap">Penduduk Tetap</option>
                                        <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                                    <select id="kewarganegaraan" name="penduduk[${counter}][kewarganegaraan]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Kewarganegaraan</option>
                                        <option value="WNI">Indonesia</option>
                                        <option value="WNA">Luar</option>
                                    </select>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">No Telepon</label>
                                    <input type="number" name="penduduk[${counter}][noHp]" id="noHp" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan No Telepon" required="">
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label class="block mb-2 text-sm font-bold">Jabatan</label>
                                    <select id="jabatan" name="penduduk[${counter}][jabatan]" class="bg-white shadow-md border border-[#34662C]  rounded-lg dark:border-gray-500 dark:bg-[#505c6a] w-full dark:placeholder-white focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                        <option value="" selected>Pilih Jabatan</option>
                                        <option value="Ketua RW">Ketua RW</option>
                                        <option value="Ketua RT">Ketua RT</option>
                                        <option value="Bendahara">Bendahara</option>
                                        <option value="Sekretaris">Sekretaris</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
            `
        }

        const tambahBaris = () => {
            listPenduduk.insertAdjacentHTML('beforeend', templateBaris(counter));
            updateValueJumlahAnggota();
            counter++;
        }

        const hapusBaris = (index) => {
            listPenduduk.removeChild(listPenduduk.children[parseInt(index)]);
            let button = document.querySelectorAll('.button-hapus');
            button.forEach((btn, idx) => {
                btn.setAttribute('onclick', `hapusBaris(${idx + 1})`);
            });

            for (let index = 0; index <= button.length; index++) {
                listPenduduk.children[index].querySelector('#nik').setAttribute('name', `penduduk[${index}][nik]`);
                listPenduduk.children[index].querySelector('#nama').setAttribute('name', `penduduk[${index}][nama]`);
                listPenduduk.children[index].querySelector('#email').setAttribute('name', `penduduk[${index}][email]`);
                listPenduduk.children[index].querySelector('#agama').setAttribute('name', `penduduk[${index}][agama]`);
                listPenduduk.children[index].querySelector('#tempatLahir').setAttribute('name', `penduduk[${index}][tempatLahir]`);
                listPenduduk.children[index].querySelector('#tanggalLahir').setAttribute('name', `penduduk[${index}][tanggalLahir]`);
                listPenduduk.children[index].querySelector('#statusPernikahan').setAttribute('name', `penduduk[${index}][statusPernikahan]`);
                listPenduduk.children[index].querySelector('#jenisKelamin').setAttribute('name', `penduduk[${index}][jenisKelamin]`);
                listPenduduk.children[index].querySelector('#pekerjaan').setAttribute('name', `penduduk[${index}][pekerjaan]`);
                listPenduduk.children[index].querySelector('#gaji').setAttribute('name', `penduduk[${index}][gaji]`);
                listPenduduk.children[index].querySelector('#statusPenduduk').setAttribute('name', `penduduk[${index}][statusPenduduk]`);
                listPenduduk.children[index].querySelector('#kewarganegaraan').setAttribute('name', `penduduk[${index}][kewarganegaraan]`);
                listPenduduk.children[index].querySelector('#noHp').setAttribute('name', `penduduk[${index}][noHp]`);
                listPenduduk.children[index].querySelector('#jabatan').setAttribute('name', `penduduk[${index}][jabatan]`);
            }

            updateValueJumlahAnggota();
            counter = button.length + 1;
        }

        const updateValueJumlahAnggota = () => {
            let jumlahAnggota = document.getElementById('jumlahAnggota');
            jumlahAnggota.value = listPenduduk.children.length;
        }
    </script>
    <script>
        const showConfirm = (id) => {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: 'Data ini akan dihapus dan tidak bisa dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`deleteForm-${id}`).submit();
                }
            });
        }
    </script>
</x-admin-layout>