<!-- resources/views/welcome.blade.php (or just index.html if outside Laravel) -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orion One Page</title>
  <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
</head>

<body class="bg-black text-white">
    <div class="">
        <section class="w-full h-screen bg-cover bg-center " style="background-image: url('/images/Background_Image.png')">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center z-10 text-center">
            <button class="px-6 py-3 border-none  bg-gray-500  opacity-50  text-white text-lg  font-semibold  mb-4  md:mb-6">COMING SOON</button>
            <p class="text-white text-xl md:text-2xl font-medium ">Map out installation <br>  with ease</p>
            </div>
        </section>
        <section class="relative  md:h-[500px] lg:h-full xl:h-full">
            <img src="{{asset('images/Group_15.png')}}" alt="worker" class="w-full h-full object-cover">
        </section>
        <section class="relative  md:h-[500px]">
            <img src="{{asset('images/Container.png')}}" alt="worker" class="w-full h-full object-cover">
        </section>
        <section class="relative  md:h-[500px]">
            <img src="{{asset('images/Main_Frame.png')}}" alt="worker" class="w-full h-full object-cover">
        </section>
        <section class="relative  md:h-[500px]">
            <img src="{{asset('images/Group_7.png')}}" alt="person" class="w-full h-full object-cover">
        </section>
        <footer class="bg-black text-center py-12  md:h-[500px]">
            <img src="{{asset('images/Group_18.png')}}" alt="map" class="mx-auto">
            <p class="mt-4 text-sm text-gray-400">Orion</p>
        </footer>
    </div>
</body>

</html>
