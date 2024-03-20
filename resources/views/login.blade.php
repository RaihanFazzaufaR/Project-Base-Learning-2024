<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="flex w-[100vw] h-[100vh]">
        <div class="basis-[30%] bg-white flex justify-center items-center">
            <div class="flex w-[70%] h-[70%] justify-center items-center flex-col gap-8">
                <div class="flex flex-col justify-center items-center gap-3">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-14 h-14">
                    <p class="font-bold text-2xl text-[#1C4F0F]">SIGN IN</p>
                </div>
                <form method="post" action="{{ URL('/') }}" class="flex flex-col w-full gap-6">
                    <p class="font-bold text-normal text-[#1C4F0F] text-left">Select Role</p>
                    <div class="flex items-center justify-around">
                        <label class="cursor-pointer">
                            <input type="radio" class="peer sr-only" name="user" value="warga">
                            <div class="relative flex flex-col text-black/50 justify-center items-center p-4 bg-white shadow-lg rounded-lg hover:shadow-xl ring-2 ring-slate-400 peer-checked:text-green-600 peer-checked:ring-green-500 peer-checked:ring-offset-2 group">
                                <img src="{{ asset('assets/images/warga.jpg') }}" alt="" class="w-16 h-16">
                                <p class="font-bold text-sm">WARGA</p>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" class="peer sr-only" name="user" value="admin">
                            <div class="relative flex flex-col text-black/50 justify-center items-center p-4 bg-white shadow-lg rounded-lg hover:shadow-xl ring-2 ring-slate-400 peer-checked:text-green-600 peer-checked:ring-green-500 peer-checked:ring-offset-2 group">
                                <img src="{{ asset('assets/images/admin.jpg') }}" alt="" class="w-16 h-16">
                                <p class="font-bold text-sm">ADMIN</p>
                            </div>
                        </label>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="username" class="font-bold text-normal text-[#1C4F0F]">Username</label>
                        <input type="text" name="username" id="username" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="Username">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="password" class="font-bold text-normal text-[#1C4F0F]">Password</label>
                        <input type="password" name="password" id="password" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="Password">
                    </div>
                    <a href="{{ URL('/') }}" class="-mt-3 text-right text-[#1C4F0F] font-medium">forgot password?</a>
                    <a href="{{ URL('/') }}" class="w-full"><button class="bg-[#81B076] py-3 rounded-lg w-full text-white font-bold hover:bg-[#607f59] hover:shadow-xl">LOGIN</button></a>
                </form>
            </div>
        </div>
        <div class="basis-[70%] relative">
            <img src="{{ asset('assets/images/loginBg.jpg') }}" alt="" class="h-full w-full absolute z-1 brightness-[0.6]">
            <div class="absolute z-[2] h-full w-full flex justify-center items-center flex-col gap-12">
                <p class="w-[50%] gradient-text animate-gradient text-transparent font-bold text-7xl text-center transform-gpu">PORTAL RW 3 DESA BUMIAYU</p>
                <p class="text-center w-[60%] font-semibold text-lg text-white">Website for easier and more comfortable social life. Provides various access with just one click. Provide fast and practical service. And the most importantly, easy to use by everyone, both residents and others.</p>
            </div>
            <div class="absolute z-[3] h-full w-full flex justify-around">
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.2] rain"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.2] rain"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.2] rain"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.2] rain"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.2] rain"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const rain = document.querySelectorAll('.rain');
        let index = [];

        const setRainAnimation = () => {
            let random = Math.floor(Math.random() * 5);
            if (index.includes(random))
                setRainAnimation();
            index.push(random);
            rain[random].classList.add('animate-rain');
        }

        setInterval(setRainAnimation, 1000)
    </script>
</body>

</html>