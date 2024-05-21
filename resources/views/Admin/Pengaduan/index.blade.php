<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">
    <div class="flex w-full h-15 justify-between items-center">
        <div class="flex h-full w-fit gap-8 items-center justify-between">
            <form class="w-[22vw]" action="{{ route('pengaduan-admin') }}">
                @csrf
                <div class="flex h-full items-center">
                    <div class="relative w-full">
                        <input type="search" id="location-search" name="search"
                            class="block py-2 px-4 h-11 w-full z-20 text-sm text-[#34662C] shadow-xl bg-gray-50 rounded-xl border border-[#34662C] focus:outline-none focus:border-[3px]"
                            placeholder="Cari ..." required />
                        <button type="submit"
                            class="absolute top-0 end-0 h-11 py-2 px-4 text-sm font-medium text-white bg-[#57BA47] rounded-xl border border-[#34662C] hover:bg-[#336E2A] transition duration-300 ease-in-out">
                            <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="h-full w-fit py-2" x-data="{ 'filterModal': false }" @keydown.escape="filterModal = false">
                <button @click="filterModal = true"
                    class="flex w-29 bg-[#57BA47] h-full text-white justify-between items-center px-4 rounded-lg shadow-xl hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
                    <i class="fa-solid fa-sliders text-2xl"></i>
                    <div class="text-xl font-semibold">Filter</div>
                </button>
                <div x-show="filterModal" tabindex="-1" aria-hidden="true"
                    class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-full">
                    <div class="absolute z-999 bg-black/25 h-[100vh] w-full"></div>
                    <div class="relative z-[1000] p-4 w-fit max-w-3xl max-h-[700px]" @click.away="detailModal = false"
                        x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                            <form class="w-full h-full text-[#34662C]" action="{{ route('pengaduan-admin') }}">
                                @csrf
                                <div
                                    class="p-4 md:p-5 grid w-150 gap-4 grid-cols-2 max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="status" class="block mb-2 text-sm font-bold">Status</label>
                                        <select id="status" name="status"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="" value="">Semua Status</option>
                                            <option value="diproses">Diproses</option>
                                            <option value="ditolak">Ditolak</option>
                                            <option value="selesai">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="prioritas" class="block mb-2 text-sm font-bold ">Prioritas</label>
                                        <select id="prioritas" name="prioritas"
                                            class="bg-white shadow-md border border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]">
                                            <option selected="" value="">Semua Prioritas</option>
                                            <option value="biasa">Biasa</option>
                                            <option value="penting">Penting</option>
                                            <option value="darurat">Darurat</option>
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-end bg-[#F2F2F2] gap-4 h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8]">
                                    <button type="submit" @click="filterModal = false"
                                        class="hover:text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                        Batal
                                    </button>
                                    <button type="submit" @click="filterModal = false"
                                        class="text-white inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
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
        <div class="relative shadow-md sm:rounded-lg overflow-hidden">
            <table class="w-full text-center">
                <thead class="text-sm font-bold text-[#34662C] bg-[#91DF7D] dark:bg-gray-700 dark:text-gray-400">
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
                        <th scope="col" class="px-6 py-3 w-[30%]">
                            Aksi
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
                            class="bg-white border-b text-sm font-medium text-[#7F7F7F] dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                {{ $complaint->judul }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                {{ $complaint->penduduk->nama }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-[15px]">
                                {{ $complaint->prioritas }}
                            </td>
                            <td class="">
                                <div class="px-6 py-4 flex items-center h-full gap-4 justify-center">
                                    <div x-data="{ 'idAduan': {{ $aduan_id }} }">
                                        <div x-data="{ 'detailModal': idAduan === {{ $complaint->aduan_id }} }" @keydown.escape="detailModal = false">
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
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                                            <div
                                                                class="flex p-4 w-full max-h-[450px] justify-end bg-[#F2F2F2]">
                                                                @if (array_key_exists($complaint->status, $stat))
                                                                    <button
                                                                        class="flex justify-center items-center gap-2 w-8 h-8 {{ $stat[$complaint->status]['classContent'] }}">
                                                                        <i
                                                                            class="fa-solid text-lg {{ $stat[$complaint->status]['icon'] }}"></i>
                                                                    </button>
                                                                @endif
                                                            </div>
                                                            <div
                                                                class="max-h-[450px] overflow-y-auto scrollbar-thin pt-3">
                                                                @if ($complaint->image != null)
                                                                    <div class="flex w-full justify-center">
                                                                        <img class="w-[60%] rounded-lg"
                                                                            src="{{ asset('assets/images/Aduan/' . $complaint->image) }}">
                                                                    </div>
                                                                @endif
                                                                <div class="flex w-full p-4 {{ Auth::user()->penduduk->id_penduduk == $complaint->pengadu_id ? 'justify-end' : '' }}">
                                                                    <div class="p-4 w-fit rounded-lg max-w-[75%] {{ Auth::user()->penduduk->id_penduduk == $complaint->pengadu_id ? 'bg-[#cdffc5]' : 'bg-gray-300' }}">
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
                                                                            class="p-4 w-fit rounded-lg max-w-[75%] {{ Auth::user()->penduduk->id_penduduk == $response->perespon_id ? 'bg-[#cdffc5]' : 'bg-gray-300' }}">
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
                                                            <div class="w-full bg bg-[#F2F2F2] min-h-10">
                                                                @if ($complaint->status != 'selesai' && $complaint->status != 'ditolak')
                                                                    <form action="{{ route('add-response-admin') }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div
                                                                            class="flex px-4 py-3 justify-around w-full items-start bg-[#F2F2F2] rounded-b-lg">
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
                                                                                id = "_token"
                                                                                value="{{ csrf_token() }}">

                                                                            <div class="relative w-[90%]">
                                                                                <input type="text"
                                                                                    name="konten_respon"
                                                                                    class="konten_respon flex flex-col w-full min-h-10 max-h-20 p-2 border border-[#34662C] rounded-lg focus:outline-none dark:bg-gray-800 dark:text-gray-400"
                                                                                    {{-- oninput="formCheck(this)" --}}>
                                                                                <br>
                                                                                <input type="file" name="image"
                                                                                    class="image flex flex-col file:border-0 file:px-4 file:py-1 file:bg-[#57BA47] file:text-white file:hover:bg-[#34662C] file:transition file:duration-300 file:ease-in-out file:rounded-lg"
                                                                                    {{-- onchange="formCheck(this)" --}}>
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
                                            action="{{ route('destroy-aduan-admin', $complaint->aduan_id) }}" method="POST"
                                            style="display: none;">
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
                                            <input type="hidden" name="_token" id = "_token"
                                                value="{{ csrf_token() }}">
                                        </form>
                                        <button type="button"
                                            class="flex justify-center items-center gap-2 w-fit text-white bg-[#FF5E5E] rounded-lg shadow-xl font-bold h-full px-3 py-2 hover:bg-[#B34242] hover:scale-105 transition-all"
                                            onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus aduan ini?')) document.getElementById('delete-aduan-admin-form-{{ $complaint->aduan_id }}').submit();">
                                            <i class="fa-solid fa-trash-can"></i>
                                            <div>Hapus</div>
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
                                            class="flex overflow-hidden absolute -left-24 -bottom-20 z-999 justify-center items-center w-fit h-fit">
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
                                                        <input type="hidden" name="_token" id = "_token"
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="px-8 py-5">
                {{ $complaints->links() }}
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
</x-admin-layout>
