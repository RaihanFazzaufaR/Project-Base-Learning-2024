<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="flex w-[100vw] h-[100vh]">
        <div class="basis-2/5 bg-white"></div>
        <div class="basis-3/5 relative">            
            <img src="{{ asset('assets/images/cover.jpg') }}" alt="" class="h-full w-full absolute z-1 brightness-[0.6]">
            <div class="absolute z-[3] h-full w-full flex justify-center items-center flex-col">
                <p class="gradient-text text-transparent font-bold text-6xl text-center">SELAMAT DATANG DI PORTAL RW 3</p>
                <p class="text-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit corporis vel reiciendis voluptate quo pariatur maxime nemo, maiores dignissimos nostrum illo sapiente iusto, temporibus voluptatibus aliquid esse ipsam cumque quae!</p>
            </div>
            <div class="absolute z-[2]"></div>
        </div>
    </div>

    <!-- <div class="flex w-[100vw] h-[100vh]">
        <div class="basis-2/5 bg-white"></div>
        <div class="basis-3/5 relative">
            <div class="absolute -z-40 flex justify-between items-center h-full overflow-hidden w-full">
                <div class="h-[100%] w-[17vh] bg-blue-800 animate-infinite-slide transition-all"></div>
                <div class="h-[100%] w-[17vh] bg-blue-800 animate-infinite-slide transition-all"></div>
                <div class="h-[100%] w-[17vh] bg-blue-800 animate-infinite-slide transition-all"></div>
            </div>
            <div class="absolute z-1 w-full flex text-[60px] bg-white h-full font-black justify-center items-center mix-blend-screen">
                SELAMAT DATANG DI RW 03
            </div>
            <img src="{{ asset('assets/images/cover.jpg') }}" alt="" class="absolute z-10 opacity-50 w-full h-full mix-blend-multiply">
        </div>
    </div> -->

    <script>
    </script>
</body>

</html>