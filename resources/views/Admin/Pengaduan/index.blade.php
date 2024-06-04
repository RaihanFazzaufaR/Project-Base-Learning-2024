<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full sm:w-fit w-full gap-8 items-center justify-between">
            <form class="lg:w-[25vw] w-[100%] sm:w-[400px]" action="{{ route('pengaduan-admin') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search"
                            class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl bg-gray-50 dark:bg-[#2F363E] rounded-xl border border-[#34662C] focus:outline-none focus:border-[3px]"
                            placeholder="Cari ..." required />
                        <button type="submit"
                            class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C] hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="absolute sm:static h-full w-fit py-2" x-data="{ 'filterModal': false }"
                @keydown.escape="filterModal = false">
                <button @click="filterModal = true"
                    class="fixed sm:static flex bottom-5 animate-bounce sm:animate-none z-99 right-5 w-10 h-10 sm:w-29 bg-[#57BA47] sm:h-full text-white justify-center sm:justify-between items-center px-4 rounded-full sm:rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                    <i class="fa-solid fa-sliders sm:text-2xl text-xl"></i>
                    <div class="text-xl font-semibold hidden sm:inline-flex">Filter</div>
                </button>
                <div x-show="filterModal"
                    x-transition:enter="md:transition-none transition ease-out duration-300 transform"
                    x-transition:enter-start="md:transition-none translate-y-full"
                    x-transition:enter-end="md:transition-none translate-y-0"
                    x-transition:leave="md:transition-none transition ease-in duration-300 transform"
                    x-transition:leave-start="md:transition-none translate-y-0"
                    x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true"
                    class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]"
                        @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                            <!-- Modal header -->
                            <div
                                class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                    Filter Data Penduduk
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    @click="filterModal = false">
                                    <i class="fa-solid fa-xmark text-xl"></i>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="w-full h-full text-[#34662C] dark:text-white"
                                action="{{ route('pengaduan-admin') }}">
                                @csrf
                                <div
                                    class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="status" class="block mb-2 text-sm font-bold">Status</label>
                                        <select id="status" name="status"
                                            class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="" value="">Semua Status</option>
                                            <option value="diproses">Diproses</option>
                                            <option value="ditolak">Ditolak</option>
                                            <option value="selesai">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="prioritas" class="block mb-2 text-sm font-bold ">Prioritas</label>
                                        <select id="prioritas" name="prioritas"
                                            class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="" value="">Semua Prioritas</option>
                                            <option value="biasa">Biasa</option>
                                            <option value="penting">Penting</option>
                                            <option value="darurat">Darurat</option>
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                    <button type="submit" @click="filterModal = false"
                                        class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Batal
                                    </button>
                                    <button type="submit" @click="filterModal = false"
                                        class="text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Filter
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div class="relative shadow-sm rounded-lg overflow-x-auto">
            <table class="w-[600px] sm:w-full text-center table-fixed relative">
                <thead class="text-sm font-bold text-[#34662C] bg-[#91DF7D] dark:bg-[#428238] dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Judul Aduan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pembuat Aduan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prioritas
                        </th>
                        <th scope="col" class="px-6 py-3 w-[30%] lg:w-[30%]">
                            Aksi
                        </th>
                        <th scope="col" class="px-6 py-3 w-[10%] sm:w-[8%]">
                        </th>
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

                    @foreach ($complaints as $complaint)
                        <tr
                            class="text-xs bg-white border-b sm:text-sm font-medium text-[#7F7F7F] dark:bg-[#2F363E] dark:text-white dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                {{ $complaint->judul }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                {{ $complaint->penduduk->nama }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                {{ $complaint->prioritas }}
                            </td>
                            <td class="modal">
                                <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                                    <div x-data="{ 'idAduan': {{ $aduan_id }} }">
                                        <div x-data="{ 'detailModal': idAduan === {{ $complaint->aduan_id }} }" @keydown.escape="detailModal = false">
                                            <button @click="detailModal = true"
                                                class="btn-modal flex justify-center items-center gap-2 w-fit text-white bg-[#446DFF] rounded-full sm:rounded-lg shadow-xl font-bold h-full px-3 py-3 sm:py-2 hover:bg-[#273E91] hover:scale-105 transition-all">
                                                <i class="fa-solid fa-circle-info"></i>
                                                <div class="hidden sm:inline-flex">Detail</div>
                                            </button>
                                            <!-- Detail modal -->
                                            <div x-show="detailModal"
                                                x-transition:enter="md:transition-none transition ease-out duration-300 transform"
                                                x-transition:enter-start="md:transition-none translate-y-full"
                                                x-transition:enter-end="md:transition-none translate-y-0"
                                                x-transition:leave="md:transition-none transition ease-in duration-300 transform"
                                                x-transition:leave-start="md:transition-none translate-y-0"
                                                x-transition:leave-end="md:transition-none translate-y-full"
                                                tabindex="-1" aria-hidden="true"
                                                class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                                                <div
                                                    class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block">
                                                </div>
                                                <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px] rounded-lg"
                                                    @click.away="detailModal = false"
                                                    x-transition:enter="motion-safe:ease-out duration-300"
                                                    x-transition:enter-start="opacity-0 scale-90"
                                                    x-transition:enter-end="opacity-100 scale-100">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative bg-[#f4f4f4] rounded-lg shadow dark:bg-[#2F363E]">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                                            <h3
                                                                class="text-xl font-bold text-[#34662C] dark:text-white">
                                                                {{ $complaint->judul }}
                                                            </h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                @click="detailModal = false">
                                                                <i class="fa-solid fa-xmark text-xl"></i>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="w-full h-full text-[#34662C] text-left">
                                                            <div class="p-5  w-full sm:w-150">
                                                                @if (array_key_exists($complaint->status, $stat))
                                                                    <button
                                                                        class="flex justify-center items-center gap-2 w-8 h-8 {{ $stat[$complaint->status]['classContent'] }}">
                                                                        <i
                                                                            class="fa-solid text-lg {{ $stat[$complaint->status]['icon'] }}"></i>
                                                                    </button>
                                                                @endif
                                                            </div>
                                                            <div
                                                                class="max-h-[450px] overflow-y-auto scrollbar-thin pt-3 scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] chat-div">
                                                                @if ($complaint->image != null)
                                                                    <div class="flex w-full justify-center">
                                                                        <img class="w-[60%] rounded-lg dark:shadow-md"
                                                                            src="{{ asset('assets/images/Aduan/' . $complaint->image) }}">
                                                                    </div>
                                                                @endif
                                                                <div
                                                                    class="flex w-full p-4 {{ Auth::user()->penduduk->id_penduduk == $complaint->pengadu_id ? 'justify-end' : '' }}">
                                                                    <div
                                                                        class="p-4 w-fit rounded-lg max-w-[75%] shadow-lg {{ Auth::user()->penduduk->id_penduduk == $complaint->pengadu_id ? 'bg-[#cdffc5] text-black dark:text-white dark:bg-[#005c4b]' : 'bg-white text-black dark:text-white dark:bg-gray-700' }}">
                                                                        <p class="text-sm font-semibold">
                                                                            {{ $complaint->penduduk->nama }}
                                                                        </p>
                                                                        <p class="font-normal pt-3">
                                                                            {{ $complaint->konten_aduan }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @foreach ($complaint->respon as $response)
                                                                    <div
                                                                        class="flex w-full p-4 {{ Auth::user()->penduduk->id_penduduk == $response->perespon_id ? 'justify-end' : '' }}">
                                                                        <div
                                                                            class="p-4 w-fit rounded-lg max-w-[75%] shadow-lg {{ Auth::user()->penduduk->id_penduduk == $response->perespon_id ? 'bg-[#cdffc5] text-black dark:text-white dark:bg-[#005c4b]' : 'bg-white text-black dark:text-white dark:bg-gray-700' }}">
                                                                            <p class="text-sm font-semibold">
                                                                                {{ $response->penduduk->nama }}
                                                                            </p>
                                                                            <br>
                                                                            @if ($response->image != null)
                                                                                <div class="">
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
                                                            <div
                                                                class="w-full bg bg-[#e9e9e9] dark:bg-[#3e4852] min-h-10 rounded-b-lg">
                                                                @if ($complaint->status != 'selesai' && $complaint->status != 'ditolak')
                                                                    <form action="{{ route('add-response-admin') }}"
                                                                        method="post" enctype="multipart/form-data"
                                                                        class="response-form">
                                                                        @csrf
                                                                        <div
                                                                            class="flex px-4 py-3 justify-around w-full items-start bg-[#e9e9e9] dark:bg-[#3e4852] rounded-b-lg">
                                                                            <input type="hidden" name="perespon_id"
                                                                                id="perespon_id"
                                                                                value="{{ Auth::user()->penduduk->id_penduduk }}">
                                                                            <input type="hidden" name="aduan_id"
                                                                                id="aduan_id"
                                                                                value="{{ $complaint->aduan_id }}">
                                                                            <input type="hidden" name="page"
                                                                                id="page"
                                                                                value="{{ request()->page ? request()->page : null }}">
                                                                            <input type="hidden" name="search"
                                                                                id="search"
                                                                                value="{{ request()->search ? request()->search : null }}">
                                                                            <input type="hidden" name="status"
                                                                                id="status"
                                                                                value="{{ request()->status ? request()->status : null }}">
                                                                            <input type="hidden" name="prioritas"
                                                                                id="prioritas"
                                                                                value="{{ request()->prioritas ? request()->prioritas : null }}">
                                                                            <input type="hidden" name="_token"
                                                                                id="_token"
                                                                                value="{{ csrf_token() }}">

                                                                            <div
                                                                                class="absolute w-full h-fit py-4 px-6 flex opacity-0 flex-col justify-between items-center bg-[#e9e9e9] dark:bg-[#3e4852] bottom-16 image-preview">
                                                                                <div class="flex w-full justify-end">
                                                                                    <button type="button"
                                                                                        class="delete-image">
                                                                                        <i
                                                                                            class="fa-solid fa-trash text-lg dark:text-white"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <img src="" alt=""
                                                                                    class="w-[300px] h-[150px] object-cover rounded-lg imgFile mx-auto">
                                                                            </div>
                                                                            <div
                                                                                class="relative w-[80%] sm:w-[90%] flex justify-center items-center">
                                                                                <button type="button"
                                                                                    class="w-fit absolute left-2 clip-button">
                                                                                    <i
                                                                                        class="fa-solid fa-paperclip text-lg dark:text-white"></i>
                                                                                </button>
                                                                                <input type="text"
                                                                                    name="konten_respon"
                                                                                    class="pl-8 konten_respon flex flex-col w-full min-h-10 max-h-20 p-2 border border-[#34662C] rounded-lg focus:outline-none dark:bg-[#505c6a] dark:border-gray-500 dark:text-white">
                                                                                <input type="file" name="image"
                                                                                    class="hidden file-input">
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="submit text-white inline-flex px-4 py-4 h-10 w-10 text-sm font-bold rounded-full shadow-md items-center justify-center bg-[#57BA47] hover:bg-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                                                <i id="sendicon"
                                                                                    class="text-lg fa-regular fa-paper-plane"></i>
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center h-full gap-4 justify-center">
                                        <form id="delete-aduan-admin-form-{{ $complaint->aduan_id }}"
                                            action="{{ route('destroy-aduan-admin', $complaint->aduan_id) }}"
                                            method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="perespon_id" id="perespon_id"
                                                value="{{ Auth::user()->penduduk->id_penduduk }}">
                                            <input type="hidden" name="aduan_id" id="aduan_id"
                                                value="{{ $complaint->aduan_id }}">
                                            <input type="hidden" name="page" id="page"
                                                value="{{ request()->page ? request()->page : null }}">
                                            <input type="hidden" name="search" id="search"
                                                value="{{ request()->search ? request()->search : null }}">
                                            <input type="hidden" name="prioritas" id="prioritas"
                                                value="{{ request()->prioritas ? request()->prioritas : null }}">
                                            <input type="hidden" name="_token" id="_token"
                                                value="{{ csrf_token() }}">
                                        </form>
                                        <button type="button"
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-full sm:rounded-lg shadow-xl font-bold h-full px-3 py-3 sm:py-2 hover:bg-[#B34242] hover:scale-105 transition-all"
                                            onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus aduan ini?')) document.getElementById('delete-aduan-admin-form-{{ $complaint->aduan_id }}').submit();">
                                            <i class="fa-solid fa-trash-can"></i>
                                            <div class="hidden sm:inline-flex">Hapus</div>
                                        </button>
                                    </div>
                                    <div class="relative h-fit" x-data="{ 'outsideStatusModal': false }"
                                        @keydown.escape="outsideStatusModal = false">

                                        @if (array_key_exists($complaint->status, $stat))
                                            <button @click="outsideStatusModal = true"
                                                class="flex justify-center items-center gap-2 w-8 h-8 {{ $stat[$complaint->status]['classContent'] }}"
                                                value="{{ $stat[$complaint->status]['value'] }}">
                                                <i
                                                    class="fa-solid text-lg {{ $stat[$complaint->status]['icon'] }}"></i>
                                            </button>
                                        @endif
                                        <div x-show="outsideStatusModal" tabindex=-1 aria-hidden="true"
                                            class="flex overflow-hidden absolute -left-45 lg:-left-40 2xl:-left-35 -bottom-20 z-999 justify-center items-center w-fit h-fit">
                                            <div class="relative z-[1000] p-4 w-fit max-w-3x1 max-h-[700px]"
                                                @click.away="outsideStatusModal = false"
                                                x-transition:enter="motion-safe:ease-out duration-300"
                                                x-transition:enter-start="opacity-0 scale-90"
                                                x-transition:enter-end="opacity-100 scale-100">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <form class="flex"
                                                        action="{{ route('update-status-outside', $complaint->aduan_id) }}"
                                                        method="post">
                                                        @csrf
                                                        {{ method_field('PUT') }}
                                                        <input type="hidden" name="page" id="page"
                                                            value="{{ request()->page ? request()->page : null }}">
                                                        <input type="hidden" name="search" id="search"
                                                            value="{{ request()->search ? request()->search : null }}">
                                                        <input type="hidden" name="status" id="status"
                                                            value="{{ request()->status ? request()->status : null }}">
                                                        <input type="hidden" name="prioritas" id="prioritas"
                                                            value="{{ request()->prioritas ? request()->prioritas : null }}">
                                                        <input type="hidden" name="_token" id="_token"
                                                            value="{{ csrf_token() }}">

                                                        <input type="hidden" name="aduan_id"
                                                            value="{{ $complaint->aduan_id }}">
                                                        <div class="items-center p-4">
                                                            <button type="submit" name="statusAduan"
                                                                class="flex justify-center items-center gap-2 w-8 h-8 text-white bg-[#FFDE68] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B39C49] hover:scale-105 transition-all"
                                                                value="diproses">
                                                                <i class="fa-solid text-lg fa-minus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="items-center p-4">
                                                            <button type="submit" name="statusAduan"
                                                                class="flex justify-center items-center gap-2 w-8 h-8 text-white bg-[#76D75D] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#38682D] hover:scale-105 transition-all"
                                                                value="selesai">
                                                                <i class="fa-solid text-lg fa-check"></i>
                                                            </button>
                                                        </div>
                                                        <div class="items-center p-4">
                                                            <button type="submit" name="statusAduan"
                                                                class="flex justify-center items-center gap-2 w-8 h-8 text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all"
                                                                value="ditolak">
                                                                <i class="fa-solid text-lg fa-xmark"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if (Auth::user()->penduduk->kartuKeluarga->rt == $complaint->penduduk->kartuKeluarga->rt && Auth::user()->penduduk->jabatan == 'Ketua RT' && $complaint->status == 'diproses')
                                    <div class="items-center p-4">
                                        <div
                                            class="flex justify-center items-center gap-2 w-8 h-8 text-white bg-[#FF5E5E] rounded-full shadow-xl font-bold px-3 py-2">
                                            <i class="fa-solid fa-exclamation"></i>
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-8 py-5 dark:bg-[#343b44] rounded-b-lg shadow-md">
            {{ $complaints->links() }}
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".response-form").forEach((form, idx) => {
                const fileClip = form.querySelector(".clip-button");
                const inputFile = form.querySelector(".file-input");
                const image = form.querySelector(".imgFile");
                const imagePreview = form.querySelector(".image-preview");
                const deleteImage = form.querySelector(".delete-image");

                fileClip.addEventListener("click", () => {
                    inputFile.click();
                });

                inputFile.addEventListener("change", (e) => {
                    let file = e.target.files[0];
                    if (file) {
                        image.src = URL.createObjectURL(file);
                        image.onload = function() {
                            URL.revokeObjectURL(image.src);
                        }
                        if (imagePreview.classList.contains('opacity-0'))
                            imagePreview.classList.add('opacity-0');
                        imagePreview.classList.remove('opacity-0');
                    }
                });

                deleteImage.addEventListener("click", () => {
                    inputFile.value = '';
                    imagePreview.classList.add('opacity-0');
                    image.src = '';
                });
            });

            document.querySelectorAll('.modal').forEach((modal) => {
                const btn = modal.querySelector('.btn-modal');
                const div = modal.querySelector('.chat-div');

                if (btn && div) {
                    btn.addEventListener('click', () => {
                        setTimeout(() => {
                            const bottomElement = div.lastElementChild;
                            if (bottomElement) {
                                bottomElement.scrollIntoView({
                                    block: 'end'
                                });
                            }
                        }, 0);
                    });
                }
            });

            const div = document.querySelectorAll('.chat-div');
            div.forEach((d) => {
                d.lastElementChild.scrollIntoView({
                    block: 'end'
                });
            });
        });
    </script>
</x-admin-layout>
