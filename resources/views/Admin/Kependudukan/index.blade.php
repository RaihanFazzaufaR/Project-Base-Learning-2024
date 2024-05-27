<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" action="{{ route('daftar-penduduk') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search" class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl bg-gray-50 rounded-xl border border-[#34662C] focus:outline-none focus:border-[3px]" placeholder="Cari ..." required />
                        <button type="submit" class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C] hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="h-full w-fit py-2" x-data="{ 'filterModal': false }" @keydown.escape="filterModal = false">
                <button @click="filterModal = true" class="flex w-29 bg-[#57BA47] h-full text-white justify-between items-center px-4 rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                    <i class="fa-solid fa-sliders text-2xl"></i>
                    <div class="text-xl font-semibold">Filter</div>
                </button>
                <x-admin.kependudukan.modal-filter-penduduk />
            </div>
        </div>
        <x-admin.kependudukan.modal-tambah-penduduk />
    </div>

    <div class="mt-10">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-center">
                <thead class="text-sm font-bold text-[#34662C] bg-[#91DF7D] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py- w-[20%]">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 w-[20%]">
                            Tempat Tanggal Lahir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            RT
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $usr)
                    <tr class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                                        <button @click="detailModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                            <i class="fa-solid fa-circle-info"></i>
                                            <div>Detail</div>
                                        </button>
                                        <x-admin.kependudukan.modal-detail-penduduk idPenduduk="{{ $id_penduduk }}" idUsr="{{ $usr->id_penduduk }}" />
                                    </div>
                                </div>
                                <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                                    <button @click="editModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <div>Edit</div>
                                    </button>
                                    <!-- Edit modal -->
                                    <x-admin.kependudukan.modal-edit-penduduk idUsr="{{ $usr->id_penduduk }}" />
                                </div>

                                <form action="{{ route('destroyPenduduk', $usr->id_penduduk) }}" method="POST">
                                    @csrf
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-trash-can"></i>
                                        <div>Hapus</div>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="px-8 py-5">
                {{ $user->links() }}
            </div>
        </div>
    </div>


    <script>
        let tablePenduduk = document.getElementById('table-penduduk');
        let counter = 1;

        const templateBaris = () => {
            return `
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-sm">
                    <td class="p-4">
                        <input type="text" name="nik[]" id="nik" class="bg-white shadow-md border border-[#34662C] rounded-lg focus:outline-none focus:border-2 block  p-2 placeholder-[#34662C]" placeholder="Masukkan NIK" required="">
                    </td>
                    <td class="p-4">
                        <input type="text" name="nama[]" id="nama" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Nama" required="">
                    </td>
                    <td class="p-4">
                        <input type="text" name="tempatLahir[]" id="tempatLahir" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Tempat Lahir" required="">
                    </td>
                    <td class="p-4">
                        <input type="date" name="tanggalLahir[]" id="tanggalLahir" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" required="">
                    </td>
                    <td class="p-4">
                        <select id="jenisKelamin" name="jenisKelamin[]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                            <option selected="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </td>
                    <td class="p-4">
                        <select id="agama" name="agama[]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                            <option selected="">Pilih Agama</option>
                            <option value="islam">Islam</option>
                            <option value="katolik">Katolik</option>
                            <option value="kristen">Kristen</option>
                            <option value="buddha">Buddha</option>
                            <option value="khonghucu">Khonghucu</option>
                        </select>
                    </td>
                    <td class="p-4">
                        <input type="text" name="pekerjaan[]" id="pekerjaan" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Pekerjaan" required="">
                    </td>
                    <td class="p-4">
                        <select id="statusPernikahan" name="statusPernikahan[]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                            <option selected="">Pilih Status Pernikahan</option>
                            <option value="belum">Belum Menikah</option>
                            <option value="sudah">Sudah Menikah</option>
                        </select>
                    </td>
                    <td class="p-4">
                        <select id="kewarganegaraan" name="kewarganegaraan[]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                            <option selected="">Pilih Kewarganegaraan</option>
                            <option value="WNI">Indonesia</option>
                            <option value="WNA">Luar</option>
                        </select>
                    </td>
                    <td class="p-4">
                        <select id="statusPenduduk" name="statusPenduduk[]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                            <option selected="">Pilih Status Penduduk</option>
                            <option value="penduduk tetap">Penduduk Tetap</option>
                            <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                        </select>
                    </td>
                    <td class="p-4">
                        <select id="jabatan" name="jabatan[]" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]">
                            <option selected="">Pilih Jabatan</option>
                            <option value="Ketua RW">Ketua RW</option>
                            <option value="Ketua RT">Ketua RT</option>
                            <option value="Bendahara">Bendahara</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </td>
                    <td class="p-4">
                        <input type="number" name="gaji[]" id="gaji" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan Gaji" required="">
                    </td>
                    <td class="p-4">
                        <input type="number" name="noHp[]" id="noHp" class="bg-white shadow-md border border-[#34662C]  rounded-lg focus:outline-none focus:border-2 block p-2 placeholder-[#34662C]" placeholder="Masukkan No Telepon" required="">
                    </td>
                    <td class="p-4 flex justify-center items-center">
                        <button type="button" onclick="hapusBaris(${tablePenduduk.rows.length})" class="button-hapus size-7 flex items-center justify-center bg-[#FF5E5E] hover:bg-[#B34242] shadow-md transition-all hover:scale-105 rounded-full">
                            <i class="fa-solid fa-minus text-white"></i>
                        </button>
                    </td>
                </tr>
            `
        }

        const tambahBaris = () => {
            tablePenduduk.insertAdjacentHTML('beforeend', templateBaris());
            updateValueJumlahAnggota();
        }

        const hapusBaris = (index) => {
            tablePenduduk.deleteRow(index);
            let button = document.querySelectorAll('.button-hapus');
            button.forEach((btn, idx) => {
                btn.setAttribute('onclick', `hapusBaris(${idx + 1})`);
            });
            updateValueJumlahAnggota();
        }

        const updateValueJumlahAnggota = () => {
            let jumlahAnggota = document.getElementById('jumlahAnggota');
            jumlahAnggota.value = tablePenduduk.rows.length;
        }
    </script>
</x-admin-layout>