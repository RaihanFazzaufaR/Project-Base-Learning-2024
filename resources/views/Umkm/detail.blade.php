<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%]  relative  justify-center items-center hidden md:flex ">
    <img src="{{ asset('assets/images/bg-index-UMKM.webp') }}" alt="" class="w-full dark:brightness-[85%]">
    <div
        class="bg-white/[0.73] dark:bg-[#24292d]/[0.73]  w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] dark:text-white font-bold text-[36px]">UMKM DI RW 3</p>
        <p class="text-[#2d5523] dark:text-white font-sans text-[32px] text-center">Bangun Ekonomi Berkelanjutan di Setiap Sudut
            RW</p>
    </div>

</div>
<div class=" min-h-[100vh]   md:px-[65px]  md:py-[34px] w-[100%]">
    <div class="w-full  h-fit gap-10 flex-row mt-7 hidden md:flex">
        <div class="basis-1/3 w-full  dark:bg-[#505c6a] border-[3px] h-fit rounded-lg border-[#2d5523] dark:border-gray-500">
            <div class="text-[#2d5523] pb-6 dark:text-white overflow-hidden">
                <img src="{{ asset('assets/images/'.$umkm->foto) }}" alt="" class="w-full mb-3 ">
                {{-- <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="w-full mb-3  "> --}}
                <div class="text-3xl px-3 pb-3 font-semibold ">
                    {{ $umkm->nama }}
                </div>
                <div class="w-full  hidden md:flex justify-center pt-6 pb-3 items-start gap-2 px-2">
                    @foreach ($umkmKategoris as $uk)
                        @foreach ($categories as $kat)
                            @if ($uk->kategori_id == $kat->kategori_id)
                                @if ($kat->nama_kategori === 'Makanan')
                                    <div class="flex justify-center flex-col  items-center flex-1 ">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                            <i class="fa-solid fa-utensils text-xl text-yellow-500"></i>
                                        </div>
                                        <div
                                            class="w-full flex items-center h-fit justify-center text-base text-yellow-500 font-semibold text-center">
                                            Makanan
                                        </div>
                                    </div>
                                @elseif($kat->nama_kategori === 'Minuman')
                                    <div class="flex justify-center flex-col  items-center flex-1">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                            <i class="fa-solid fa-wine-glass text-xl text-yellow-500"></i>
                                        </div>
                                        <div
                                            class="w-full flex items-center h-fit justify-center text-base text-yellow-500 font-semibold text-center">
                                            Minuman
                                        </div>
                                    </div>
                                @elseif($kat->nama_kategori === 'Kebutuhan Pokok')
                                    <div class="flex justify-center flex-col  items-center flex-1">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                            <i class="fa-solid fa-basket-shopping text-xl text-yellow-500"></i>
                                        </div>
                                        <div
                                            class="w-full flex items-center h-fit justify-center text-base text-yellow-500 font-semibold text-center">
                                            Kebutuhan Pokok
                                        </div>
                                    </div>
                                @elseif($kat->nama_kategori === 'Peralatan Rumah Tangga')
                                    <div class="flex justify-center flex-col  items-center flex-1">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                            <i class="fa-solid fa-kitchen-set text-xl text-yellow-500"></i>
                                        </div>
                                        <div
                                            class="w-full h-fit flex items-center justify-center text-base text-yellow-500 font-semibold text-center ">
                                            Perabotan
                                        </div>
                                    </div>
                                @elseif($kat->nama_kategori === 'Jasa')
                                    <div class="flex justify-center flex-col  items-center flex-1">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                            <i class="fa-solid fa-people-arrows text-xl text-yellow-500"></i>
                                        </div>
                                        <div
                                            class="w-full flex items-center h-fit justify-center text-base text-yellow-500 font-semibold text-center">
                                            Jasa
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </div>



                <div class="pb-6 pt-3 px-2 ">

                    <table class="text-[#2d5523] dark:text-white px-[20px]">
                        <tr>
                            <td class="pl-3 py-1 flex items-start">
                                <i class="fa-solid fa-map-location-dot text-2xl"></i>
                            </td>
                            <td class="pl-4 pb-3">
                                <span class="text-lg font-normal">
                                    {{ $umkm->lokasi }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3 py-1 flex items-start">
                                <i class="fa-solid fa-clock text-2xl "></i>
                            </td>
                            <td class="pl-4 pb-3">
                                <span class="text-lg font-normal">
                                    {{ $umkm->buka_waktu }} - {{ $umkm->tutup_waktu }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pl-3 py-1 flex items-start">
                                <i class="fa-solid fa-circle-info text-2xl"></i>
                            </td>
                            <td class="pl-4 pb-3">
                                <span class="text-lg font-normal">
                                    {{ $umkm->deskripsi }}
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="w-full px-[20px]">

                    <a href="https://wa.me/{{ $umkm->no_wa }}"
                        class="w-full shadow-2xl h-[57px] text-[20px] px-15 bg-yellow-500 flex rounded-lg  justify-center  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 mx-auto">
                        <div class="flex gap-3 justify-center items-center">
                            <i class="fa-brands fa-whatsapp"></i>
                            Pesan Sekarang
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="basis-2/3 hidden md:block w-full border-[3px] rounded-lg border-[#2d5523]">
            <div class="text-[#2d5523] w-full h-full" id="map">

            </div>
        </div>

    </div>
    {{-- tampilan mobile --}}
    <div class="w-full  md:hidden flex  justify-center flex-col h-fit  rounded-lg">
        <div class="flex items-start">
            <img src="{{ asset('assets/images/toko-kelontong.jpg') }}" alt="" class="w-full  mb-3  fixed">
        </div>
        <div class="w-full h-fit mt-40 bg-white border z-10">

            <div class="text-3xl px-3 py-3 font-semibold text-[#2d5523]">
                {{ $umkm->nama }}
            </div>
            <div class="w-full flex pb-3 px-4 ">
                @php
                    $categoriesList = [];
                @endphp
                @foreach ($umkmKategoris as $uk)
                    @foreach ($categories as $kat)
                        @if ($uk->kategori_id == $kat->kategori_id)
                            @php
                                $categoriesList[] = $kat->nama_kategori;
                            @endphp
                        @endif
                    @endforeach
                @endforeach

                <div class="flex justify-start text-left w-full flex-wrap">
                    @php
                        $categoriesList = [];
                    @endphp
                    @foreach ($umkmKategoris as $uk)
                        @foreach ($categories as $kat)
                            @if ($uk->kategori_id == $kat->kategori_id)
                                @php
                                    $categoriesList[] = $kat->nama_kategori;
                                @endphp
                            @endif
                        @endforeach
                    @endforeach
                
                    @foreach ($categoriesList as $index => $category)
                        @if ($index > 0)
                            <pre class="comma inline-block text-yellow-500 font-semibold">, </pre>
                        @endif
                        <div class="category-item inline text-left text-base text-yellow-500 font-semibold">
                            @if ($category === 'Makanan')
                                Makanan
                            @elseif($category === 'Minuman')
                                Minuman
                            @elseif($category === 'Kebutuhan Pokok')
                                Kebutuhan Pokok
                            @elseif($category === 'Peralatan Rumah Tangga')
                                Perabotan
                            @elseif($category === 'Jasa')
                                Jasa
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pb-6 pt-3 px-2 ">

                <table class="text-[#2d5523] px-[20px]">
                    <tr>
                        <td class="pl-3 py-1 flex items-start">
                            <i class="fa-solid fa-map-location-dot text-2xl"></i>
                        </td>
                        <td class="pl-4 pb-3">
                            <span class="text-lg font-normal">
                                {{ $umkm->lokasi }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-3 py-1 flex items-start">
                            <i class="fa-solid fa-clock text-2xl "></i>
                        </td>
                        <td class="pl-4 pb-3">
                            <span class="text-lg font-normal">
                                {{ $umkm->buka_waktu }} - {{ $umkm->tutup_waktu }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-3 py-1 flex items-start">
                            <i class="fa-solid fa-circle-info text-2xl"></i>
                        </td>
                        <td class="pl-4 pb-3">
                            <span class="text-lg font-normal">
                                {{ $umkm->deskripsi }}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="w-full px-[20px] flex flex-col gap-y-5">
                <a href="https://wa.me/{{ $umkm->no_wa }}"
                    class="w-full shadow-2xl h-[57px] text-[20px] px-15 bg-yellow-500 flex rounded-lg  justify-center  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white border-[3px] border-yellow-500 hover:border-[#e2a229] active:bg-yellow-500 mx-auto">
                    <div class="flex gap-3 justify-center items-center">
                        <i class="fa-brands fa-whatsapp"></i>
                        Pesan Sekarang
                    </div>
                </a>
                <a href="https://www.google.com/maps?q={{ $umkm->lokasi_map }}"
                    class="w-full shadow-2xl h-[57px] text-[20px] px-15 bg-white flex rounded-lg  justify-center  font-bold text-yellow-500 hover:bg-[#E2A229] hover:text-white border-[3px] border-yellow-500 hover:border-[#e2a229] active:bg-yellow-500 mx-auto">
                    <div class="flex gap-3 justify-center items-center">
                        <i class="fa-solid fa-map-location-dot text-2xl"></i>
                        Lihat Lokasi
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<x-footer>



    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -7.983908,
                    lng: 112.621391
                }, // Pusat peta
                zoom: 10 // Tingkat zoom awal
            });

            var lokasi = [{
                    nama: 'Lokasi',
                    lat: {!! $latitude !!},
                    lng: {!! $longtitude !!}
                }

            ];

            // Membuat marker untuk lokasi
            var marker = new google.maps.Marker({
                position: {
                    lat: lokasi[0].lat,
                    lng: lokasi[0].lng
                },
                map: map,
                title: lokasi[0].nama
            });
        }
    </script>
    <!-- Memuat Google Maps API dengan kunci API Anda -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyfAneKMs4sfR81HzM1Mf0aWAAylsyBKI&callback=initMap"></script>

</x-footer>
