<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative md:flex justify-center items-center hidden">
    <img src="{{ asset('assets/images/penduduk-cover.webp') }}" alt="" class="w-full dark:brightness-[85%]">
    <div
        class="bg-white/[0.73] dark:bg-[#24292d]/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] font-bold text-[36px] dark:text-white">Daftar Penduduk RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center dark:text-white">Tingkatkan Persaudaraan di Lingkungan
            Warga</p>
    </div>
</div>
<div class=" min-h-[100vh] mx-auto py-[34px] w-[90%]">
    <div class="flex sm:flex-row flex-col-reverse static justify-between  w-full pb-10">
        <div class="gap-4 flex sm:w-fit w-full justify-end my-auto h-fit items-center pt-5 sm:pt-0">
            <div for="filterRT"
                class="text-base text-[#2d5523] font-semibold dark:text-white w-fit justify-center  sm:flex items-center">RT</div>
            <select id="filterRT" name="filterRT" onchange="window.location.href = this.value"
                class="w-fit sm:block h-fit py-3 text-center border-[3px] border-[#2d5523] text-[#2d5523] text-sm sm:text-base rounded-lg bg-gray-50 dark:bg-[#30373F] focus:ring-yellow-500 focus:border-yellow-500  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500 shadow-xl dark:shadow-gray-900">
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
            </select>
        </div>
        <form action="{{ route('penduduk-search') }}" method="GET" class="md:w-96 w-full my-auto ">
            <label for="default-search"
                class="text-sm font-medium text-[#2d5523] sr-only dark:text-white">Search</label>
            <div class="relative mx-auto flex h-fit">
                <div
                    class="absolute md:inset-y-0 start-0 text-lg bottom-6  flex justify-center  text-[#58a444]  dark:text-gray-300 pr-5 items-center px-3 pointer-events-none ">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <input type="search" id="default-search" name="search"
                    class=" block w-full p-4 h-fit ps-10  border-[3px] border-[#2d5523] text-[#2d5523] text-base rounded-lg bg-[#fff] focus:ring-yellow-500 focus:border-yellow-500 dark:bg-[#30373F] dark:border-gray-600 dark:placeholder-gray-300 dark:text-white dark:focus:ring-yellow-500 placeholder:text-[#58a444] dark:focus:border-yellow-500 placeholder:text-base shadow-xl dark:shadow-gray-900"
                    placeholder="Cari Warga RW 03" required />
            </div>
        </form>
    </div>
    <div class="relative overflow-x-auto rounded-lg shadow-xl dark:shadow-gray-900">
        <table class="w-full text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400 ">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-[#428238] dark:text-white">
                <tr>
                    <th scope="col" class="px-6 w-[23%] py-3 hidden sm:inline-block sm:w-full ">
                        NIK
                    </th>
                    <th scope="col" class="px-6 w-[23%] py-3 ">
                        Nama
                    </th>
                    <th scope="col" class="px-6 w-[23%] py-3 hidden sm:inline-block sm:w-full">
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
                        class="bg-white border-b hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E]  dark:border-gray-700 font-medium md:text-base text-sm text-center text-[#2d5523]  dark:text-white">
                        <td scope="row"
                            class="px-6 py-4  hidden md:inline-flex">
                            {{ $warga->nik }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 ">
                            {{ $warga->nama }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4  hidden md:inline-flex">
                            {{ $warga->statusPenduduk }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 ">
                            {{ $warga->rt }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 ">
                            {{ $warga->alamat }}
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <div class="px-8 py-5 dark:bg-[#4f5966] rounded-b-lg">
            {{ $penduduks->links() }}
        </div>
    </div>

</div>

<x-footer>

</x-footer>
