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
                <x-admin.kependudukan.modal-filter-penduduk />
            </div>
        </div>
        <x-admin.kependudukan.modal-tambah-penduduk />
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
                                        <x-admin.kependudukan.modal-detail-penduduk idPenduduk="{{ $id_penduduk }}" idUsr="{{ $usr->id_penduduk }}" />
                                    </div>
                                </div>
                                <div x-data="{ 'editModal': false }" @keydown.escape="editModal = false">
                                    <button @click="editModal = true" class="flex justify-center items-center gap-2 w-fit text-white bg-[#FFDE68]  rounded-full sm:rounded-lg shadow-xl font-bold h-full sm:px-3 sm:py-2 p-2 hover:bg-[#B39C49] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        <div class="hidden sm:inline-flex">Edit</div>
                                    </button>
                                    <!-- Edit modal -->
                                    <x-admin.kependudukan.modal-edit-penduduk idUsr="{{ $usr->id_penduduk }}" />
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