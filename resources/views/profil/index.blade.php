<x-header menu='{{ $menu }}'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</x-header>

<div class="w-[100%] relative flex justify-center items-center">
    <img src="{{ asset('assets/images/profil-cover.jpg') }}" alt="" class="w-full h-[80vh]">
    <div class="bg-white/[0.73] w-[571px] h-[185px] z-10 absolute flex justify-center rounded-[105px] flex-col text-center shadow-2xl items-center">
        <p class="text-[#2d5523] font-bold text-[36px] w-[500px]">Profil Perangkat RT dan RW di RW 03</p>
        <!-- <p class="text-[#2d5523] font-sans text-[32px] text-center">“Profil Perangkat RW & RT di RW 3”</p> -->
    </div>
    <div class="absolute bg-white -bottom-[60vh] w-[75vw] h-[70vh] mx-auto rounded-md shadow-2xl flex flex-col gap-10 text-[#236612]">
        <div class="w-full h-fit flex flex-col justify-center items-center px-12">
            <h1 class="font-bold text-5xl py-12">Deskripsi Singkat RW 03</h1>
            <p class="font-normal text-lg text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum blanditiis at quis quisquam sed accusantium quia expedita excepturi neque rerum alias non quas sapiente quaerat, suscipit consequatur, cupiditate nisi iste?
                Neque vero aliquid minus libero reprehenderit commodi provident, harum assumenda repellendus, enim ipsum dolores ea! Deleniti fugiat inventore quaerat beatae, minus quos asperiores facere odio possimus nemo. Sequi, praesentium commodi!</p>
        </div>
        <div class="flex w-full h-fit px-12 items-center justify-around">
            <div class="w-fit h-fit">
                <h2 class="mb-2 text-lg font-bold ">Visi :</h2>
                <ol class="max-w-md space-y-1  list-decimal list-inside ">
                    <li>
                        At least 10 characters (and up to 100 characters)
                    </li>
                    <li>
                        At least one lowercase character
                    </li>
                    <li>
                        Inclusion of at least one special character, e.g., ! @ # ?
                    </li>
                </ol>
            </div>
            <div class="w-fit h-fit">
                <h2 class="mb-2 text-lg font-bold ">Misi :</h2>
                <ol class="max-w-md space-y-1  list-decimal list-inside">
                    <li>
                        At least 10 characters (and up to 100 characters)
                    </li>
                    <li>
                        At least one lowercase character
                    </li>
                    <li>
                        Inclusion of at least one special character, e.g., ! @ # ?
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- <div class="h-fit w-full mt-[75vh] flex justify-center  bg-[#E4F7DF] py-22"> -->
<div class="h-fit w-full mt-[75vh] flex justify-center  bg-white py-22">
    <div class="w-[75vw] mx-auto gap-16 flex flex-col">
        <div class="flex justify-center items-center">
            <h1 class="font-bold text-5xl text-[#236612]">Profil Ketua RW</h1>
        </div>
        <div class="h-[60vh] w-full flex gap-14 px-10 justify-center">
            <div class="w-[50%] h-full flex flex-col gap-8">
                <div class="w-full h-full flex flex-col justify-between">
                    <div class="w-full min-h-15 flex relative justify-end">
                        <div class="h-full w-full bg-green-500 flex items-center justify-center mr-7 rounded-2xl shadow-xl">
                            <div class="text-lg font-bold text-white">Maulidin Zakaria</div>
                        </div>
                        <div class="h-15 w-15 rounded-full bg-yellow-500 border-4 border-white absolute right-0 top-0 flex justify-center items-center">
                            <i class="fa-solid fa-file-signature text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="w-full min-h-15 flex relative justify-end">
                        <div class="h-full w-full bg-green-500 flex items-center justify-center mr-7 rounded-2xl shadow-xl">
                            <div class="text-lg font-bold text-white">085236183248</div>
                        </div>
                        <div class="h-15 w-15 rounded-full bg-yellow-500 border-4 border-white absolute right-0 top-0 flex justify-center items-center">
                            <i class="fa-solid fa-phone text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="w-full min-h-15 flex relative justify-end">
                        <div class="h-full w-full bg-green-500 flex items-center justify-center mr-7 rounded-2xl shadow-xl">
                            <div class="text-lg font-bold text-white">Jombang, 29 April 2004</div>
                        </div>
                        <div class="h-15 w-15 rounded-full bg-yellow-500 border-4 border-white absolute right-0 top-0 flex justify-center items-center">
                            <i class="fa-solid fa-calendar-days text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="w-full min-h-15 flex relative justify-end">
                        <div class="h-full w-full bg-green-500 flex items-center justify-center mr-7 rounded-2xl px-8 py-4">
                            <div class="text-lg font-bold text-white text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis omnis vero laudantium non, at nobis! Laborum dignissimos sint delectus rem corporis</div>
                        </div>
                        <div class="h-15 w-15 rounded-full bg-yellow-500 border-4 border-white absolute right-0 top-0 flex justify-center items-center">
                            <i class="fa-solid fa-location-dot text-white text-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[35%] h-full flex justify-center relative items-center">
                <img src="{{ asset('assets/images/contoh-foto-rw.jpg') }}" alt="" class="h-[400px] w-[300px] absolute z-10 shadow-2xl rounded-full border-6 border-white">
                <div class="absolute h-[400px] w-[300px] z-9 bg-green-500 top-10 left-4 rounded-full shadow-2xl border-6 border-white"></div>
                <div class="absolute h-[400px] w-[300px] z-9 bg-yellow-500 -top-2 right-4 rounded-full shadow-2xl border-6 border-white"></div>
            </div>
        </div>
    </div>
</div>


<div class="w-full mt-[15vh] flex justify-center  bg-white">
    <div class="w-[80vw] mx-auto gap-16 flex flex-col">
        <div class="flex justify-center items-center">
            <h1 class="font-bold text-5xl text-[#236612]">Profil Ketua RT</h1>
        </div>
        <div class="swiper mySwiper w-full !px-[220px]">
            <div class="swiper-wrapper w-full !py-10">
                <div class="swiper-slide relative !h-[400px] !w-[240px] flex flex-col transition-all group">
                    <img src="{{ asset('assets/images/contoh-foto-rw.jpg') }}" alt="" class="h-[320px] w-[240px] mx-auto relative z-10 shadow-2xl rounded-full border-6 border-white">
                    <div class="absolute h-[320px] w-[240px] z-8 bg-green-500 top-4 left-7 rounded-full shadow-2xl border-6 border-white group-hover:-left-18 group-hover:top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-34 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Maulidin Zakaria</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-file-signature text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-39 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Jombang, 29 April 2004</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-calendar-days text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[320px] w-[240px] z-9 bg-yellow-500 -top-4 right-7  rounded-full shadow-2xl border-6 border-white group-hover:-right-19 group-hover:-top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-13 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">085236183248</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-18 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="relative -bottom-14 w-fit h-fit py-2 px-8 mx-auto bg-green-500 border-y-4 border-yellow-500 flex justify-center items-center rounded-xl shadow-lg">
                        <p class="font-bold text-lg text-white">Ketua RT 01</p>
                    </div>
                </div>
                <div class="swiper-slide relative !h-[400px] !w-[240px] flex flex-col transition-all group">
                    <img src="{{ asset('assets/images/contoh-foto-rw.jpg') }}" alt="" class="h-[320px] w-[240px] mx-auto relative z-10 shadow-2xl rounded-full border-6 border-white">
                    <div class="absolute h-[320px] w-[240px] z-8 bg-green-500 top-4 left-7 rounded-full shadow-2xl border-6 border-white group-hover:-left-18 group-hover:top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-34 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Maulidin Zakaria</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-file-signature text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-39 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Jombang, 29 April 2004</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-calendar-days text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[320px] w-[240px] z-9 bg-yellow-500 -top-4 right-7  rounded-full shadow-2xl border-6 border-white group-hover:-right-19 group-hover:-top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-13 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">085236183248</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-18 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="relative -bottom-14 w-fit h-fit py-2 px-8 mx-auto bg-green-500 border-y-4 border-yellow-500 flex justify-center items-center rounded-xl shadow-lg">
                        <p class="font-bold text-lg text-white">Ketua RT 02</p>
                    </div>
                </div>
                <div class="swiper-slide relative !h-[400px] !w-[240px] flex flex-col transition-all group">
                    <img src="{{ asset('assets/images/contoh-foto-rw.jpg') }}" alt="" class="h-[320px] w-[240px] mx-auto relative z-10 shadow-2xl rounded-full border-6 border-white">
                    <div class="absolute h-[320px] w-[240px] z-8 bg-green-500 top-4 left-7 rounded-full shadow-2xl border-6 border-white group-hover:-left-18 group-hover:top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-34 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Maulidin Zakaria</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-file-signature text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-39 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Jombang, 29 April 2004</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-calendar-days text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[320px] w-[240px] z-9 bg-yellow-500 -top-4 right-7  rounded-full shadow-2xl border-6 border-white group-hover:-right-19 group-hover:-top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-13 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">085236183248</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-18 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="relative -bottom-14 w-fit h-fit py-2 px-8 mx-auto bg-green-500 border-y-4 border-yellow-500 flex justify-center items-center rounded-xl shadow-lg">
                        <p class="font-bold text-lg text-white">Ketua RT 03</p>
                    </div>
                </div>
                <div class="swiper-slide relative !h-[400px] !w-[240px] flex flex-col transition-all group">
                    <img src="{{ asset('assets/images/contoh-foto-rw.jpg') }}" alt="" class="h-[320px] w-[240px] mx-auto relative z-10 shadow-2xl rounded-full border-6 border-white">
                    <div class="absolute h-[320px] w-[240px] z-8 bg-green-500 top-4 left-7 rounded-full shadow-2xl border-6 border-white group-hover:-left-18 group-hover:top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-34 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Maulidin Zakaria</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-file-signature text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-39 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Jombang, 29 April 2004</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-calendar-days text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[320px] w-[240px] z-9 bg-yellow-500 -top-4 right-7  rounded-full shadow-2xl border-6 border-white group-hover:-right-19 group-hover:-top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-13 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">085236183248</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-18 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="relative -bottom-14 w-fit h-fit py-2 px-8 mx-auto bg-green-500 border-y-4 border-yellow-500 flex justify-center items-center rounded-xl shadow-lg">
                        <p class="font-bold text-lg text-white">Ketua RT 04</p>
                    </div>
                </div>
                <div class="swiper-slide relative !h-[400px] !w-[240px] flex flex-col transition-all group">
                    <img src="{{ asset('assets/images/contoh-foto-rw.jpg') }}" alt="" class="h-[320px] w-[240px] mx-auto relative z-10 shadow-2xl rounded-full border-6 border-white">
                    <div class="absolute h-[320px] w-[240px] z-8 bg-green-500 top-4 left-7 rounded-full shadow-2xl border-6 border-white group-hover:-left-18 group-hover:top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-34 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Maulidin Zakaria</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-file-signature text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-8 pr-13 bg-green-500 rounded-2xl flex justify-center items-center shadow-md top-39 -left-36 border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Jombang, 29 April 2004</div>
                            <div class="h-9 w-9 rounded-full bg-yellow-500 border-4 border-white absolute -right-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-calendar-days text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[320px] w-[240px] z-9 bg-yellow-500 -top-4 right-7  rounded-full shadow-2xl border-6 border-white group-hover:-right-19 group-hover:-top-6 transition-all">
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-13 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">085236183248</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="relative w-[200px] h-fit py-2 pl-13 pr-8 bg-yellow-500 rounded-2xl flex justify-center items-center shadow-md top-18 -right-[170px] border-2 border-white opacity-0 group-hover:opacity-100 transition-all">
                            <div class="text-sm font-bold text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                            <div class="h-9 w-9 rounded-full bg-green-500 border-4 border-white absolute -left-2 top-0 flex justify-center items-center">
                                <i class="fa-solid fa-phone text-white text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div class="relative -bottom-14 w-fit h-fit py-2 px-8 mx-auto bg-green-500 border-y-4 border-yellow-500 flex justify-center items-center rounded-xl shadow-lg">
                        <p class="font-bold text-lg text-white">Ketua RT 05</p>
                    </div>
                </div>
                
            </div>
            <div class="swiper-button-next !top-10 !right-7 after:!text-lg !font-extrabold !text-white !h-10 !w-10 bg-yellow-500 hover:bg-[#E2A229] rounded-full hover:scale-105 transition ease-in-out duration-300"></div>
            <div class="swiper-button-prev !top-10 !left-7 after:!text-lg !font-extrabold !text-white !h-10 !w-10 bg-yellow-500 hover:bg-[#E2A229] rounded-full hover:scale-105 transition ease-in-out duration-300"></div>
            <div class="swiper-pagination !absolute !bottom-0"></div>
        </div>
    </div>
</div>


<!-- <div class="h-[200vh]"></div> -->
<x-footer>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 310,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</x-footer>