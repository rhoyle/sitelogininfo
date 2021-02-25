
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Richard A. Hoyle">
    <meta name="description" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Tailwind -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body class="bg-white font-family-karla">

<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-blue-800 shadow">

    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

        <div class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
            <a href="/"><h1>Iron Man Recycling</h1></a>
        </div>

        <div class="flex items-center text-lg no-underline text-white pr-6">
            <a class="hover:text-gray-200 hover:underline px-4" href="/">Home</a>
            <a class="hover:text-gray-200 hover:underline px-4" href="{{ route('front.about-us') }}">About Us</a>
            <a class="hover:text-gray-200 hover:underline px-4" href="{{ route('front.blog') }}">Blog</a>
            <a class="hover:text-gray-200 hover:underline px-4" href="{{ route('front.contact-us') }}">Contact Us</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-white-700 ">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="ml-4 text-sm text-white-700 ">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-white-700 ">Register</a>
                    @endif
                @endauth
            @endif

        </div>
    </div>

</nav>

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="/">
            Iron Man Recycling
        </a>
        <p class="text-lg text-gray-600">
            Listings
        </p>
    </div>
</header>

@yield('content')

<footer class="w-full border-t bg-white pb-12">

    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">

            <a href="/" class="uppercase px-3">Home</a>
            <a href="{{ route('front.about-us') }}" class="uppercase px-3">About Us</a>
            <a href="{{ route('front.blog') }}" class="uppercase px-3">Blog</a>
            <a href="#" class="uppercase px-3">Privacy Policy</a>
            <a href="#" class="uppercase px-3">Terms & Conditions</a>
            <a href="{{ route('front.contact-us') }}" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6">Copyright &copy; 2021 &nbsp;&nbsp; Iron Man Recycling. &nbsp;&nbsp; | &nbsp;&nbsp; All Rights Reserved.</div>
    </div>
</footer>

<script>
    function getCarouselData() {
        return {
            currentIndex: 0,
            images: [
                'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                'https://source.unsplash.com/collection/1346951/800x800?sig=9',
            ],
            increment() {
                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
            },
            decrement() {
                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
            },
        }
    }
</script>

</body>
</html>


