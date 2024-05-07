<x-header menu='{{ $menu }}'>

</x-header>

<div class="w-[100%]  relative flex justify-center items-center ">
    <img src="{{ asset('assets/images/bg-index-UMKM.png') }}" alt="" class="w-full">
    <div
        class="bg-white/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl">
        <p class="text-[#2d5523] font-bold text-[36px]">UMKM DI RW 3</p>
        <p class="text-[#2d5523] font-sans text-[32px] text-center">“Bangun Ekonomi Berkelanjutan di Setiap Sudut
            RW”</p>
    </div>

</div>
<div class="bg-[#Fff] min-h-[100vh] px-[65px] py-[34px] w-[100%]">
    <div class="w-full flex h-fit gap-10 flex-row mt-7">
        <div class="basis-1/3 w-full border-[3px] h-fit rounded-lg border-[#2d5523]">
            <div class="text-[#2d5523] pb-6 ">
                <img src="{{ asset('assets/images/'.$umkm->foto) }}" alt="" class="w-full mb-3">
                <div class="text-3xl px-3 pb-3 font-semibold text-[#2d5523]">
                    {{ $umkm->nama }}
                </div>
                <div class="w-full flex  justify-center pt-6 pb-3 items-start gap-2 px-2">
                    @foreach ($umkmKategoris as $uk)
                        @foreach($categories as $kat)
                            @if($uk->kategori_id == $kat->kategori_id)
                                @if($kat->nama_kategori === 'Makanan')
                                <div class="flex justify-center flex-col  items-center flex-1 ">
                                    <div class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                        <i class="fa-solid fa-utensils text-xl text-yellow-500"></i>
                                    </div>                      
                                    <div class="w-full flex items-center h-fit justify-center text-base text-yellow-500 font-semibold text-center">
                                        Makanan
                                    </div>
                                </div>
                                @elseif($kat->nama_kategori === 'Minuman')
                                <div class="flex justify-center flex-col  items-center flex-1">
                                    <div class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                        <i class="fa-solid fa-wine-glass text-xl text-yellow-500"></i>
                                    </div>                      
                                    <div class="w-full flex items-center h-fit justify-center text-base text-yellow-500 font-semibold text-center">
                                        Minuman
                                    </div>
                                </div>
                                @elseif($kat->nama_kategori === 'Kebutuhan Pokok')
                                <div class="flex justify-center flex-col  items-center flex-1">
                                    <div class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                        <i class="fa-solid fa-basket-shopping text-xl text-yellow-500"></i>
                                    </div>                      
                                    <div class="w-full flex items-center h-fit justify-center text-base text-yellow-500 font-semibold text-center">
                                        Kebutuhan Pokok
                                    </div>
                                </div>
                                @elseif($kat->nama_kategori === 'Peralatan rumah tangga')
                                <div class="flex justify-center flex-col  items-center flex-1">
                                    <div class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                        <i class="fa-solid fa-kitchen-set text-xl text-yellow-500"></i>
                                    </div>                      
                                    <div class="w-full h-fit flex items-center justify-center text-base text-yellow-500 font-semibold text-center ">
                                        Perabotan
                                    </div>
                                </div>
                                @elseif($kat->nama_kategori === 'Jasa')
                                <div class="flex justify-center flex-col  items-center flex-1">
                                    <div class="flex items-center justify-center w-12 h-12 border-[3px] border-yellow-500 rounded-full">
                                        <i class="fa-solid fa-people-arrows text-xl text-yellow-500"></i>
                                    </div>                      
                                    <div class="w-full flex items-center h-fit justify-center text-base text-yellow-500 font-semibold text-center">
                                        Jasa
                                    </div>
                                </div>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </div>
               
                <div class="pb-6 pt-3 px-2 ">

                    <table class="text-[#2d5523] px-[20px]">
                        <tr>
                            <td class="pl-3 py-1 flex items-start">
                                <i class="fa-solid fa-map-location-dot text-2xl"></i>
                            </td>
                            <td class="pl-4 pb-3">
                                <span class="text-lg font-normal">
                                    {{$umkm->lokasi}}
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

                    <a href="https://wa.me/{{ $umkm->no_wa }}" class="w-full shadow-2xl h-[57px] text-[20px] px-15 bg-yellow-500 flex rounded-lg  justify-center  font-bold text-[#2d5523] hover:bg-[#E2A229] hover:text-white active:bg-yellow-500 mx-auto">
                        <div class="flex gap-3 justify-center items-center">
                            <i class="fa-brands fa-whatsapp"></i>
                            Pesan Sekarang
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="basis-2/3 w-full border-[3px] rounded-lg border-[#2d5523]">
            <div class="text-[#2d5523] w-full h-full" id="map">
                
            </div>
        </div>
        
    </div>
</div>

<x-footer>
   
        
    
        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -7.983908, lng: 112.621391}, // Pusat peta
                    zoom: 10 // Tingkat zoom awal
                });
    
                var lokasi = [
                    { nama: 'Lokasi', lat: {!! $latitude !!}, lng: {!! $longtitude !!} }

                ];

                // Membuat marker untuk lokasi
                var marker = new google.maps.Marker({
                    position: {lat: lokasi[0].lat, lng: lokasi[0].lng},
                    map: map,
                    title: lokasi[0].nama
                });
            }
        </script>
        <!-- Memuat Google Maps API dengan kunci API Anda -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyfAneKMs4sfR81HzM1Mf0aWAAylsyBKI&callback=initMap"></script>
   
</x-footer>