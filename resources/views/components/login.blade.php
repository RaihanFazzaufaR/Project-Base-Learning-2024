<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="flex w-[100vw] h-[100vh] justify-center items-center">
        <div class="lg:basis-[30%] sm:w-[450px] sm:h-[550px] lg:h-full lg:w-full h-[500px] w-[300px] lg:bg-white backdrop-blur-lg shadow-md lg:shadow-none lg:backdrop-blur-none bg-white/70 flex justify-center items-center absolute z-999 lg:static rounded-lg lg:rounded-none">
            <div class="flex w-[70%] justify-center items-center flex-col gap-8">
                {{ $slot }}
            </div>
        </div>
        <div class="lg:basis-[70%] relative w-full h-full">
            <div class="h-full w-full absolute z-[0] imgBg">
                <img src="{{ asset('assets/images/bg-login-1.jpg') }}" alt="" class="h-full w-full absolute z-1 brightness-[0.6] object-cover">
                <img src="{{ asset('assets/images/bg-login-2.jpg') }}" alt="" class="h-full w-full absolute z-1 brightness-[0.6] object-cover">
            </div>

            <div class="absolute z-[3] h-full w-full flex justify-center items-center flex-col gap-12">
                <p class="2xl:w-[50%] w-[60%] gradient-text animate-gradient text-transparent font-bold text-7xl text-center transform-gpu hidden lg:block">PORTAL RW 3 DESA BUMIAYU</p>
                <p class=" hidden lg:block text-center w-[60%] font-semibold text-lg text-white">Website for easier and more comfortable social life. Provides various access with just one click. Provide fast and practical service. And the most importantly, easy to use by everyone, both residents and others.</p>
            </div>
            <div class="absolute z-[4] h-full w-full flex justify-around">
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#57BA47]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#57BA47]/[0.5] rain rounded-b-lg"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#57BA47]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#57BA47]/[0.5] rain rounded-b-lg"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#57BA47]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#57BA47]/[0.5] rain rounded-b-lg"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#57BA47]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#57BA47]/[0.5] rain rounded-b-lg"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#57BA47]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#57BA47]/[0.5] rain rounded-b-lg"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#57BA47]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#57BA47]/[0.5] rain rounded-b-lg"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#57BA47]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#57BA47]/[0.5] rain rounded-b-lg"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#57BA47]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#57BA47]/[0.5] rain rounded-b-lg"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const rain = document.querySelectorAll('.rain');
        let index = [];

        const setRainAnimation = () => {
            let random = Math.floor(Math.random() * 8);
            if (index.includes(random))
                setRainAnimation();
            index.push(random);
            rain[random].classList.add('animate-rain');

            if (index.length == 8) {
                clearInterval(intervalRain);
            }
        }

        let intervalRain = setInterval(setRainAnimation, 1000);

        let counter = 0;
        const imgBg = document.querySelector('.imgBg');

        const setImageAnimation = () => {
            imgBg.lastElementChild.classList.add('animate-fadeOut');
            setTimeout(() => {
                imgBg.lastElementChild.classList.remove('animate-fadeOut');
                let child = imgBg.lastElementChild.cloneNode(true);
                imgBg.removeChild(imgBg.lastElementChild);
                imgBg.prepend(child);
            }, 5000);

        }
        setInterval(setImageAnimation, 10000);
    </script>
</body>

</html>