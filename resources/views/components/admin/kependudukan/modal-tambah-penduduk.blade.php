<div class="h-full w-fit py-2" x-data="{ 'tambahModal': false }" @keydown.escape="tambahModal = false">
    <button @click="tambahModal = true" class="flex w-34 bg-[#57BA47] h-full text-white justify-between items-center px-4 rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
        <i class="fa-solid fa-plus text-2xl"></i>
        <div class="text-xl font-semibold">Tambah</div>
    </button>

    <!-- Main modal -->
    <div x-show="tambahModal" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="tambahModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                <form class="w-full h-full text-[#34662C]" method="POST" action="{{ route('storePenduduk') }}">
                    @csrf
                    <div class="p-4 md:p-5 grid w-full gap-4 grid-cols-2 max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                        <div class="col-span-2">
                            <label for="nkk" class="block mb-2 text-sm font-bold">Nomor Kartu Keluarga</label>
                            <input type="text" name="nkk" id="nkk" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan No KK" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="kepalaKeluarga" class="block mb-2 text-sm font-bold">NIK Kepala Keluarga</label>
                            <input type="text" name="kepalaKeluarga" id="kepalaKeluarga" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan NIK Kepala Keluarga" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1 grid grid-cols-2 gap-4">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="jumlahAnggota" class="block mb-2 text-sm font-bold">Jumlah Keluarga</label>
                                <input type="number" min="1" name="jumlahAnggota" id="jumlahAnggota" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" readonly value="1">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="rt" class="block mb-2 text-sm font-bold">RT</label>
                                <select name="rt" id="rt" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                    <option value="" selected>Pilih RT</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="alamat" class="block mb-2 text-sm font-bold">Alamat</label>
                            <textarea id="alamat" name="alamat" rows="4" class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" placeholder="Masukkan Alamat ..."></textarea>
                        </div>
                        <div class="col-span-2 flex items-center justify-between pt-5 pb-3 px-2">
                            <div class="font-bold text-base">Data Anggota Keluarga</div>
                            <button type="button" onclick="tambahBaris()" class="bg-[#57BA47] rounded-full size-10 shadow-lg flex justify-center items-center hover:bg-[#336E2A] transition ease-in-out duration-300 hover:scale-105">
                                <i class="fa-solid fa-user-plus text-white"></i>
                            </button>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg col-span-2 mb-5">
                            <table class="w-full text-center">
                                <thead class="text-sm font-bold text-[#34662C] bg-[#91DF7D] dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            NIK
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tempat Lahir
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tanggal Lahir
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Jenis Kelamin
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Agama
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Pekerjaan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status Pernikahan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Kewarganegaraan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status Penduduk
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Jabatan
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Gaji
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            No Telepon
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table-penduduk">
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-sm">
                                        <td class="p-4">
                                            <input type="text" name="penduduk[0][nik]" id="nik" class="bg-white shadow-md border border-[#34662C] rounded-lg focus:outline-none focus:border-2 block  p-2 placeholder-[#34662C]" placeholder="Masukkan NIK" required="">
                                        </td>
                                        <td class="p-4">
                                            <input type="text" name="penduduk[0][nama]" id="nama" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Nama" required="">
                                        </td>
                                        <td class="p-4">
                                            <input type="text" name="penduduk[0][tempatLahir]" id="tempatLahir" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Tempat Lahir" required="">
                                        </td>
                                        <td class="p-4">
                                            <input type="date" name="penduduk[0][tanggalLahir]" id="tanggalLahir" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" required="">
                                        </td>
                                        <td class="p-4">
                                            <select id="jenisKelamin" name="penduduk[0][jenisKelamin]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                                <option value="" selected>Pilih Jenis Kelamin</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </td>
                                        <td class="p-4">
                                            <select id="agama" name="penduduk[0][agama]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                                <option value="" selected>Pilih Agama</option>
                                                <option value="islam">Islam</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="buddha">Buddha</option>
                                                <option value="khonghucu">Khonghucu</option>
                                            </select>
                                        </td>
                                        <td class="p-4">
                                            <input type="text" name="penduduk[0][pekerjaan]" id="pekerjaan" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Pekerjaan" required="">
                                        </td>
                                        <td class="p-4">
                                            <select id="statusPernikahan" name="penduduk[0][statusPernikahan]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                                <option value="" selected>Pilih Status Pernikahan</option>
                                                <option value="belum">Belum Menikah</option>
                                                <option value="sudah">Sudah Menikah</option>
                                            </select>
                                        </td>
                                        <td class="p-4">
                                            <select id="kewarganegaraan" name="penduduk[0][kewarganegaraan]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                                <option value="" selected>Pilih Kewarganegaraan</option>
                                                <option value="WNI">Indonesia</option>
                                                <option value="WNA">Luar</option>
                                            </select>
                                        </td>
                                        <td class="p-4">
                                            <select id="statusPenduduk" name="penduduk[0][statusPenduduk]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                                <option value="" selected>Pilih Status Penduduk</option>
                                                <option value="penduduk tetap">Penduduk Tetap</option>
                                                <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                                            </select>
                                        </td>
                                        <td class="p-4">
                                            <select id="jabatan" name="penduduk[0][jabatan]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                                                <option value="" selected>Pilih Jabatan</option>
                                                <option value="Ketua RW">Ketua RW</option>
                                                <option value="Ketua RT">Ketua RT</option>
                                                <option value="Bendahara">Bendahara</option>
                                                <option value="Sekretaris">Sekretaris</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </td>
                                        <td class="p-4">
                                            <input type="number" name="penduduk[0][gaji]" id="gaji" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Gaji" required="">
                                        </td>
                                        <td class="p-4">
                                            <input type="number" name="penduduk[0][noHp]" id="noHp" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan No Telepon" required="">
                                        </td>
                                        <td class="p-4 flex justify-center items-center">
                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                        <button type="button" onclick="resetCounter()" @click="tambahModal = false" class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                            Batal
                        </button>
                        <button type="submit" onclick="resetCounter()" @click="tambahModal = false" class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>