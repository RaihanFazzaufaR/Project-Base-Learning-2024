<x-header menu="{{ $menu }}">
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</x-header>
@php
    use Illuminate\Support\Str;
@endphp
<div class=" min-h-[100vh] lg:px-50 lg:py-12 lg:w-[100%] w-[90%] mx-auto py-14">
    <div class="w-full   h-fit">
        <div id="accordion-flush" data-accordion="collapse"
            data-active-classes="bg-white dark:bg-[#24292d] text-[#2d5523] dark:text-white"
            data-inactive-classes="text-[#4c8540] dark:text-gray-400">
            <div class="flex flex-col lg:flex-row justify-center lg:justify-start items-center lg:items-start gap-8 w-full h-full">
                <div class="basis-1/3">

                    <div class="size-80 rounded-full overflow-hidden">
                        <button onclick="showInput()"
                            class="absolute size-15 bg-[#2d5523] dark:bg-[#57ba47] dark:hover:bg-[#4ea840] hover:bg-[#1d3018] flex justify-center items-center rounded-full text-2xl         lg:left-[430px] lg:top-[372px] sm:left-[480px] sm:top-[390px] left-[290px] top-[390px] text-white ">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <input type="file" name="" id="" class="hidden">
                        <img src="{{ asset('assets/images/UserAccount/' . (auth()->user()->penduduk->userAccount->image ?? 'default.jpg')) }}"
                            alt="profile" class="w-full h-full object-cover">

                    </div>
                </div>
                <div class="basis-2/3 my-auto">

                    <div class="flex flex-col  h-full my-auto items-center justify-center">
                        <div class="py-5 flex flex-col gap-2  h-full">
                            <p class="text-3xl text-[#2d5523] font-bold dark:text-white">{{ $penduduk->nama }}</p>
                            <p class="text-[#4c8540] text-lg font-semibold dark:text-gray-500">
                                {{ $penduduk->userAccount->username }}</p>
                            @if ($penduduk->jabatan == 'Tidak ada')
                                <p class="text-[#2d5523] text-2xl  dark:text-white">Warga RT.
                                    {{ $penduduk->kartuKeluarga->rt }} RW. 03 Desa Bumiayu Kecamatan Kedungkandang
                                    Kota Malang </p>
                            @elseif ($penduduk->jabatan == 'Ketua RT')
                            <p class="text-[#2d5523] text-2xl  dark:text-white">Ketua RT.
                                {{ $penduduk->kartuKeluarga->rt }} RW. 03 Desa Bumiayu Kecamatan Kedungkandang
                                Kota Malang </p>
                            @elseif ($penduduk->jabatan == 'Ketua RW')
                            <p class="text-[#2d5523] text-2xl  dark:text-white">Ketua RW. 03 Desa Bumiayu Kecamatan Kedungkandang
                                Kota Malang </p>
                            @endif
                            <div class="h-full flex items-start pt-5 " x-data="{ 'editModal': false }"
                                @keydown.escape="editModal = false">
                                <button @click="editModal = true"
                                    class="bg-[#2d5523] dark:bg-[#57ba47] dark:hover:bg-[#4ea840] hover:bg-[#1d3018] text-white px-5 py-2 rounded-md">
                                    Edit Akun
                                </button>
                                <div x-show="editModal" x-cloak tabindex="-1" aria-hidden="true"
                                    class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                    <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                        @click.away="editModal = false"
                                        x-transition:enter="motion-safe:ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-90"
                                        x-transition:enter-end="opacity-100 scale-100">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#2d5523] dark:border-white">
                                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                    Edit Akun
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    @click="editModal = false">
                                                    <i class="fa-solid fa-xmark text-xl"></i>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <form class="w-full h-fit text-[#34662C] dark:text-white" method="POST"
                                                action="{{ route('update') }}">
                                                @csrf
                                                <div
                                                    class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl">
                                                    <div class="col-span-2 relative">
                                                        <label class="block mb-2 text-sm font-bold">Username</label>
                                                        <input name="username"
                                                            class="bg-white dark:bg-[#505c6a] shadow-md border border-[#34662C] dark:border-gray-600 text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]"
                                                            placeholder="Masukkan Username"
                                                            value="{{ $penduduk->userAccount->username }}">
                                                    </div>
                                                    <div class="col-span-2 relative">
                                                        <label for="level"
                                                            class="block mb-2 text-sm font-bold">Password Lama</label>
                                                        <input id="pw-lama" name="pw-lama" type="password"
                                                            class="bg-white dark:text-white dark:bg-[#505c6a] shadow-md border border-[#34662C] dark:border-gray-600 text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white"
                                                            placeholder="Masukkan password lama" value="">
                                                        <button type="button" id="pw-lama-show"
                                                            onclick="showPassword('pw-lama')"
                                                            class="absolute right-3 bottom-3">
                                                            <i class=" fa-solid fa-eye-slash text-lg"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-span-2 relative">
                                                        <label for="level"
                                                            class="block mb-2 text-sm font-bold">Password Baru</label>
                                                        <input id="pw-baru" name="pw-baru" type="password"
                                                            class="bg-white dark:text-white dark:bg-[#505c6a] shadow-md border border-[#34662C] dark:border-gray-600 text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white"
                                                            placeholder="Kosongkan jika tidak ada perubahan password"
                                                            value="">
                                                        <button type="button" id="pw-baru-show"
                                                            class="absolute right-3 bottom-3"
                                                            onclick="showPassword('pw-baru')">
                                                            <i class=" fa-solid fa-eye-slash text-lg"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex items-center justify-end bg-[#F2F2F2] dark:bg-[#343b44] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                                    <button @click="editModal = false"
                                                        class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out dark:bg-white dark:hover:bg-white dark:text-[#2d5523]">
                                                        Batal
                                                    </button>
                                                    <button type="submit"
                                                        class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out dark:hover:bg-[#4ea840] dark:bg-[#57ba47]">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <h2 id="accordion-flush-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 text-2xl rtl:text-right text-[#4c8540] font-bold border-b-2 border-gray-200  dark:border-gray-500 dark:text-gray-400 gap-3"
                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                        aria-controls="accordion-flush-body-2">
                        <span>Informasi Pribadi</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b-2 border-gray-200 dark:border-gray-500">
                        <section class="">
                            <form action="#" class="flex sm:gap-8 flex-col sm:flex-row">
                                <div class="basis-1/2 ">
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="nama"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Nama</label>
                                            <input type="text" name="nama" id="nama"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{ $penduduk->nama }}">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="nik"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">NIK</label>
                                            <input type="text" name="nik" id="nik"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{ $penduduk->nik }}">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="nkk"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">NKK</label>
                                            <input type="text" name="nkk" id="nkk"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{  $penduduk->kartuKeluarga->niKeluarga }}">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Email</label>
                                            <input type="text" name="email" id="email"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{ $penduduk->userAccount->email }}">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="ttl"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Tempat,
                                                Tanggal Lahir</label>
                                            <input type="text" name="ttl" id="ttl"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{ $penduduk->tempatLahir }}, {{ $penduduk->tanggalLahir }}">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="jenis-kelamin"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Jenis
                                                Kelamin</label>
                                            <input type="text" name="jenis-kelamin" id="jenis-kelamin"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{ $penduduk->jenisKelamin == 'L' ? 'Laki-laki' : ($penduduk->jenisKelamin == 'P' ? 'Perempuan' : '') }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="basis-1/2">
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="agama"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Agama</label>
                                            <input type="text" name="agama" id="agama"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{ Str::ucfirst($penduduk->agama) }}">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="pekerjaan"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Pekerjaan</label>
                                            <input type="text" name="pekerjaan" id="pekerjaan"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{ Str::ucfirst($penduduk->pekerjaan) }}">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="kewarganegaraan"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Kewarganegaraan</label>
                                            <input type="text" name="kewarganegaraan" id="kewarganegaraan"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{ $penduduk->warganegara }}">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="status-pernikahan"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Status
                                                pernikahan</label>
                                            <input type="text" name="status-pernikahan" id="status-pernikahan"
                                                class="bg-gray-50 border text-base border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type product name" required="" readonly
                                                value="{{ Str::ucfirst($penduduk->statusNikah) }} Menikah">
                                        </div>
                                    </div>
                                    <div class="grid gap-4 sm:grid-cols-2 pb-3 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="alamat"
                                                class="block mb-2 text-sm font-medium text-[#2d5523] dark:text-white">Alamat</label>
                                            <textarea name="alamat" id="alamat" rows="5"
                                                class="bg-gray-50 border text-base  border-[#518742]  text-[#2f5724] rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#505c6a] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required="" readonly>{{ $penduduk->kartuKeluarga->alamat }}</textarea>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer>
        <script>
            const showInput = () => {
                const input = document.querySelector('input[type="file"]');
                input.click();
            }
        </script>
        <script>
            const showPassword = (id) => {
                const password = document.getElementById(id);
                const show = document.querySelector(`#${id}-show`);
                const isShow = password.getAttribute('data-show') === 'true';

                if (isShow) {
                    password.type = 'password';
                    show.innerHTML = '<i class="fa-solid fa-eye-slash text-lg"></i>';
                } else {
                    password.type = 'text';
                    show.innerHTML = '<i class="fa-solid fa-eye text-lg"></i>';
                }
                password.setAttribute('data-show', !isShow);
            }

            document.querySelectorAll('input[type="password"]').forEach(input => {
                input.setAttribute('data-show', 'false');
            });
        </script>
    </x-footer>
