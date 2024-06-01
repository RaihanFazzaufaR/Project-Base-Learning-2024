<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%] relative flex justify-center items-center">
    <img src="{{ asset('assets/images/aduan-cover.webp') }}" alt="" class="w-full dark:hidden block">
    <img src="{{ asset('assets/images/dark-aduan-cover.webp') }}" alt="" class="w-full dark:block hidden">
    <div class=" w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center ">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">Aduan Warga RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Laporkan Segala Permasalahan di Lingkungan RW</p>
    </div>
</div>

{{-- content --}}
<div class="w-[90%] mx-auto h-fit flex justify-between items-center mt-15">
    <form action="{{ route('aduan') }}" class="w-fit h-full flex items-center justify-center mb-0">
        <div
            class="flex shadow-md rounded-xl w-full bg-white dark:bg-[#30373F] border-2 border-[#2d5523] dark:border-gray-600 items-center justify-between py-2 h-fit">
            <div class="flex w-full">
                <div class="w-fit px-4">
                    <label for="search"
                        class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 text-[#58a444] dark:text-white h-4 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" name="search" id="search"
                            class="block w-full p-2 ps-10 text-sm dark:bg-[#30373F] text-gray-900 rounded-lg dark:border-gray-600 placeholder:text-[#58a444] dark:placeholder-white dark:text-white" rounded-lg" placeholder="Cari Aduan..."
                            />
                    </div>
                </div>
                <div class="border-x-2 border-gray-400 dark:border-white px-4 w-fit">
                    <div class="relative">
                        <select name="prioritas" id="prioritas"
                            class="block py-2.5 px-9 w-full text-sm  bg-white dark:bg-[#30373F] appearance-none text-[#58a444] dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected value="">Semua Prioritas</option>
                            <option value="biasa">Biasa</option>
                            <option value="penting">Penting</option>
                            <option value="darurat">Darurat</option>
                        </select>
                        <i class="fa-solid fa-regular fa-star absolute left-2 -top-1 pt-4  text-sm text-[#58a444] dark:text-white"></i>
                        <i class="fa-solid fa-angle-down text-[#58a444] dark:text-white absolute right-2 top-0 pt-4  text-sm"></i>
                    </div>
                </div>
            </div>
            <div class="w-fit flex justify-end items-center px-4">
                <button type="submit">
                    <i class="fa-solid fa-circle-chevron-right text-3xl text-yellow-500"></i>
                </button>
            </div>
        </div>
    </form>
</div>

<div class="min-h-[100vh] w-[90%] py-5 mx-auto mt-10">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
        <table class="w-full text-sm text-left rtl:text-right table-fixed text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-[#436c39] text-center dark:bg-[#428238] dark:text-white">
                <tr>
                    <th scope="col" class="px-6 w-[25%] py-3 ">
                        Judul Aduan
                    </th>
                    <th scope="col" class="px-6 w-[25%] py-3 ">
                        Pembuat Aduan
                    </th>
                    <th scope="col" class="px-6 w-[25%] py-3 ">
                        Prioritas
                    </th>
                    <th scope="col" class="px-6 w-[25%] py-3">
                        Aksi
                    </th>
                    {{-- <th scope="col" class="px-6 w-[10%] py-3">
                        Status
                    </th> --}}
                </tr>
            </thead>
            <tbody>
               
                @php
                    $stat = [
                        'diproses' => [
                            'classContent' =>
                                'text-white bg-[#FFDE68] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all',
                            'icon' => 'fa-minus',
                            'value' => 'diproses',
                        ],
                        'selesai' => [
                            'classContent' =>
                                'text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all',
                            'icon' => 'fa-check',
                            'value' => 'selesai',
                        ],
                        'ditolak' => [
                            'classContent' =>
                                'text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all',
                            'icon' => 'fa-xmark',
                            'value' => 'ditolak',
                        ],
                    ];
                @endphp

                @foreach ($aduans as $aduan)
                    <tr
                    
                        class=" border-b  hover:bg-gray-50 dark:hover:bg-gray-600 dark:bg-[#2F363E] dark:text-white dark:border-gray-700 ">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            {{ $aduan->judul }}
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            Anonymous
                        </td>
                        <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            {{ $aduan->prioritas }}
                        </td>
                        <td class="">
                            <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                                <div x-data="{ 'detailModal': false }" @keydown.escape="detailModal = false">
                                    <button @click="detailModal = true"
                                        class="flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                        <i class="fa-solid fa-circle-info"></i>
                                        <div>Detail</div>
                                    </button>
                                    <!-- Detail modal -->
                                    <div x-show="detailModal" tabindex="-1" aria-hidden="true"
                                        class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                                        <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                                        <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]"
                                            @click.away="detailModal = false"
                                            x-transition:enter="motion-safe:ease-out duration-300"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow  dark:bg-[#30373F]">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t dark:border-white border-[#2d5523] ">
                                                    <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                                        {{ $aduan->judul }}
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        @click="detailModal = false">
                                                        <i class="fa-solid fa-xmark text-xl"></i>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="w-full h-fit text-[#34662C] text-left rounded-b-lg bg-[#f2f2f2] dark:bg-[#2F363E]">
                                                    <div class="flex p-4 w-full max-h-[450px] justify-end bg-[#dcdcdc] dark:bg-[#4f5966]">
                                                        <div class="flex justify-end my-auto gap-3 w-full h-full items-center">
                                                            @if($aduan->status == 'selesai')
                                                                <div class="h-2.5 w-2.5 rounded-full bg-green-500"></div>
                                                            @endif
                                                            <div class="text-base text-[#2d5523] font-semibold dark:text-white">{{$aduan->status}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="max-h-[450px]  overflow-y-scroll scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin pt-3">
                                                        @if ($aduan->image != null)
                                                            <div class="flex w-full justify-center">
                                                                <img class="w-[60%] rounded-lg"
                                                                    src="{{ asset('assets/images/Aduan/' . $aduan->image) }}">
                                                            </div>
                                                        @endif
                                                        <div class="flex w-full p-4  {{ Auth::user()->penduduk->id_penduduk == $aduan->pengadu_id ? 'justify-end' : '' }}">
                                                            <div class="p-4 w-fit rounded-lg max-w-[75%] {{ Auth::user()->penduduk->id_penduduk == $aduan->pengadu_id ? 'bg-[#cdffc5] text-black dark:text-white dark:bg-[#005c4b]' : 'bg-white text-black dark:text-white dark:bg-gray-700' }}">
                                                                <p class="text-sm font-semibold">
                                                                    Anonymous
                                                                </p>
                                                                <p class="font-normal pt-3">
                                                                    {{ $aduan->konten_aduan }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        @foreach ($aduan->respon as $response)
                                                            <div
                                                                class="flex w-full p-4 {{ Auth::user()->penduduk->id_penduduk == $response->perespon_id ? 'justify-end' : '' }}">
                                                                <div
                                                                    class="p-4 w-fit rounded-lg max-w-[75%] {{ Auth::user()->penduduk->id_penduduk == $response->perespon_id ? 'bg-[#cdffc5] text-black dark:text-white dark:bg-[#005c4b]' : 'bg-white text-black dark:text-white dark:bg-gray-700' }}">
                                                                    <p class="text-sm font-semibold">
                                                                        Admin
                                                                    </p>
                                                                    @if ($response->image != null)
                                                                        <div class="pt-3">
                                                                            <img class="w-fit rounded-lg"
                                                                                src="{{ asset('assets/images/Respon/' . $response->image) }}">
                                                                        </div>
                                                                    @endif
                                                                    @if ($response->konten_respon != null)
                                                                        <p class="font-normal pt-3">
                                                                            {{ $response->konten_respon }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="w-full bg bg-[#dcdcdc] dark:bg-[#4f5966] min-h-10 rounded-b-lg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        {{-- <td scope="row"
                            class="px-6 py-4 font-medium text-base text-center text-[#2d5523]  dark:text-white">
                            <div class="flex justify-center items-center">
                                @if (array_key_exists($aduan->status, $stat))
                                    <div
                                        class="flex justify-center items-center gap-2 w-8 h-8 {{ $stat[$aduan->status]['classContent'] }}">
                                        <i class="fa-solid text-lg {{ $stat[$aduan->status]['icon'] }}"></i>
                                    </div>
                                @endif
                            </div>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-8 py-5 dark:bg-[#4f5966]">
            {{ $aduans->links() }}
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        @if (session('aduan_id'))
            $('#detailModal').modal('show');
        @endif
    });
</script>

<x-footer>

</x-footer>
