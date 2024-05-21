<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative pb-3 flex justify-center items-center">
    <img src="{{ asset('assets/images/penduduk-cover.png') }}" alt="" class="w-full">
    <div
        class="bg-white/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] font-bold text-[36px]">Daftar Penduduk RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center">Tingkatkan Persaudaraan di Lingkungan Warga</p>
    </div>
</div>
<div class="bg-[#Fff] min-h-[100vh] px-[65px] py-5 w-[100%]">
    <div class="flex gap-7 justify-between pb-3 w-full px-5">
        <div x-data>
            <div class="gap-x-4 flex w-fit my-auto">
                <label for="filterRT"
                    class="text-base text-[#2d5523] font-semibold dark:text-white w-fit justify-center flex items-center">RT</label>
                <select id="filterRT" name="filterRT" onchange="window.location.href = this.value"
                    class="w-full h-fit py-3 text-center border-[3px] border-[#2d5523] text-[#2d5523] text-base rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500">
                    {{-- <a href="{{ route('umkm.category', $category->kategori_id) }}"></a>
            <a href=""></a> --}}

                    <option value="{{ route('penduduk') }}" {{ request('rt') == '' ? 'selected' : '' }}>Pilih RT
                    </option>
                    <option value="{{ route('penduduk-rt', '01') }}" {{ request('rt') == '01' ? 'selected' : '' }}>01
                    </option>
                    <option value="{{ route('penduduk-rt', '02') }}" {{ request('rt') == '02' ? 'selected' : '' }}>02
                    </option>
                    <option value="{{ route('penduduk-rt', '03') }}" {{ request('rt') == '03' ? 'selected' : '' }}>03
                    </option>
                    <option value="{{ route('penduduk-rt', '04') }}" {{ request('rt') == '04' ? 'selected' : '' }}>04
                    </option>
                    <option value="{{ route('penduduk-rt', '05') }}" {{ request('rt') == '05' ? 'selected' : '' }}>05
                    </option>
                    {{-- <a href="{{ route('penduduk-rt','02') }}"><option value="02">02</option></a>
            <a href="{{ route('penduduk-rt','03') }}"><option value="03">03</option></a>
            <a href="{{ route('penduduk-rt','04') }}"><option value="04">04</option></a>
            <a href="{{ route('penduduk-rt','05') }}"><option value="05">05</option></a> --}}

                    {{-- <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option> --}}
                </select>
            </div>
        </div>
        <form action="{{ route('penduduk-search') }}" method="GET" class="w-96 my-auto ">
            <label for="default-search"
                class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
            <div class="relative  h-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-[#2d5523] dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" name="search"
                    class="block w-full p-4 ps-10 border-[3px] border-[#2d5523] text-[#2d5523] text-base rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                    placeholder="Cari" required />
            </div>
        </form>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 w-[23%] py-3 ">
                        NIK
                    </th>
                    <th scope="col" class="px-6 w-[23%] py-3 ">
                        Nama
                    </th>
                    <th scope="col" class="px-6 w-[23%] py-3 ">
                        Status Penduduk
                    </th>
                    <th scope="col" class="px-6 w-[8%] py-3">
                        RT
                    </th>
                    <th scope="col" class="px-6 w-[23%] py-3">
                        Alamat
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penduduks as $warga)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            {{ $warga->nik }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            {{ $warga->nama }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            {{ $warga->statusPenduduk }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            {{ $warga->rt }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            {{ $warga->alamat }}
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <div class="px-8 py-5">
            {{ $penduduks->links() }}
        </div>
    </div>

</div>

<x-footer>

</x-footer>
