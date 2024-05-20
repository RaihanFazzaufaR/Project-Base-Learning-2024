<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative flex justify-center items-center">
    <img src="{{ asset('assets/images/bansos-cover.jpg') }}" alt="" class="w-full ">
    <div
        class="bg-white/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] font-bold text-[36px]">Bantuan Sosial di RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center">“Salurkan Bantuan Sosial di Lingkungan RW 3”</p>
    </div>
</div>
<div class="bg-[#Fff] min-h-[100vh] px-[65px] py-5 w-[100%] mt-10">
    {{-- select option --}}
    {{-- opsi yang dipilih berdasarkan kategori bansos yg diterima --}}
    <form class=" flex items-center gap-5  ">
        <label for="countries" class="block text-sm items-center h-full  font-medium text-gray-900 dark:text-white">Kategori</label>
        <select id="countries" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>Pilih Kategori</option>
          <option value="US">PKH</option>
          <option value="CA">PKH</option>
          <option value="FR">BPNT</option>
          <option value="DE">BPNT</option>
        </select>
      </form>
      

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
        <table class="w-full text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 w-[30%] py-3 ">
                        Nama Kepala Keluarga
                    </th>
                    <th scope="col" class="px-6 w-[20%] py-3 ">
                        Nomor Kartu Keluarga
                    </th>
                    <th scope="col" class="px-6 w-[20%] py-3 ">
                        Jenis Bansos
                    </th>
                    <th scope="col" class="px-6 w-[10%] py-3">
                        status
                    </th>
                    <th scope="col" class="px-6 w-[20%] py-3">
                        periode
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525091638192547
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        PKH
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        YA
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Mei 2024
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525091638192547
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        PKH
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        YA
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Mei 2024
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525091638192547
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        PKH
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        YA
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Mei 2024
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525091638192547
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        PKH
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        YA
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Mei 2024
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525091638192547
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        PKH
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        YA
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Mei 2024
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525091638192547
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        PKH
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        YA
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Mei 2024
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525091638192547
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        PKH
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        YA
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Mei 2024
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Lucky Kurniawan Langoday
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        3525091638192547
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        PKH
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        YA
                    </td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                        Mei 2024
                    </td>
                </tr>



            </tbody>
        </table>
        {{-- <div class="px-8 py-5">
            {{ $penduduks->links() }}
        </div> --}}
    </div>

</div>

<x-footer>

</x-footer>
