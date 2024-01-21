<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'Koperasi') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Inter:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        #check-img li::before {
            background-image: '<i class="fa-regular fa-circle-check"></i>';
        }
    </style>

</head>

<body class="antialiased">
    <nav class="w-screen bg-white border-gray-200 dark:bg-gray-900 fixed ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <x-application-logo />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                    {{ env('APP_NAME') }}
                </span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#home"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#tentang"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang</a>
                    </li>
                    <li>
                        <a href="#berita"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Berita</a>
                    </li>
                    <li>
                        <a href="#faq"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">FAQ</a>
                    </li>
                    <li>
                        <a href="#kontak"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="h-screen flex flex-col items-center justify-center text-center">
            <h1 class="text-5xl md:text-7xl leading-normal mb-4 " data-aos="fade-right" data-aos-delay="20">
                Tumbuh bersama kami membangun <br>
                <span class="font-bold">Ekosistem</span> digital dalam dunia koperasi
            </h1>
            <h1 class="text-xl md:text-2xl max-w-6xl mb-10" data-aos="fade-right" data-aos-delay="100">
                Kami membangun ekosistem digital yang memberikan Solusi bagi Koperasi dengan mengintegrasikan semua
                platform sehingga memberi kemudahan bagi pengurus dan anggotanya untuk menjalankan pengawasan &
                aktifitas harian.
            </h1>
            <div class="md:block flex flex-col gap-2">
                <a href="{{ route('login') }}"
                    class="mx-2 px-5 py-3 rounded-full bg-[#020266] text-white hover:bg-[#f1d51e] transition-all"
                    data-aos="fade-right" data-aos-delay="200">Masuk
                    Sebagai Anggota <i class="fa-solid fa-chevron-right ml-2"></i></a>
                <a href="{{ route('register') }}"
                    class="px-5 py-3 rounded-full border border-[#020266] hover:bg-[#020266] hover:text-white transition-all"
                    data-aos="fade-right" data-aos-delay="300">Daftar
                    Sekarang !</a>
            </div>
        </div>
    </section>

    <section id="why" class="relative h-[40rem] bg-[#020266] text-white">
        <div class="grid grid-cols-1 xl:grid-cols-2 h-full px-5 lg:px-72">
            <div class="flex flex-col gap-2 items-center xl:items-start justify-center">
                <h4 class="text-lg text-[#f1d51e] font-bold" data-aos="fade-right" data-aos-delay="100"
                    data-aos-duration="1000">Kenapa Pilih
                    Kami ?</h4>
                <h2 class="text-8xl font-bold" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    {{ env('APP_NAME') }}</h2>
                <h2 class="text-lg" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                    {{ env('APP_NAME') }} mendukung bisnis di
                    era digitalisasi.</h2>
            </div>
            <div class="flex flex-col gap-6 justify-center text-2xl">
                <div class="flex items-center gap-6" data-aos="fade-right" data-aos-delay="100"
                    data-aos-duration="2000">
                    <i class="fa-regular fa-circle-check"></i>
                    <span>Mengelola simpanan menjadi mudah, cepat dan transparan</span>
                </div>
                <div class="flex items-center gap-6" data-aos="fade-right" data-aos-delay="200"
                    data-aos-duration="2000">
                    <i class="fa-regular fa-circle-check"></i>
                    <span>Integrasi Ekosistem Koperasi</span>
                </div>
                <div class="flex items-center gap-6" data-aos="fade-right" data-aos-delay="300"
                    data-aos-duration="2000">
                    <i class="fa-regular fa-circle-check"></i>
                    <span>Efisiensi dan Transparansi</span>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="min-h-[40rem] py-10">
        <div class="h-full flex flex-col items-center">
            <h3 class="text-4xl font-bold mb-10 text-[#020266]" data-aos="fade-up" data-aos-delay="200">Berita
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 p-5 lg:p-0">
                <div class="md:max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    data-aos="fade-right" data-aos-delay="200">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('assets/landing/berita 1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, perspiciatis</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Sequi odio ratione veritatis odit, hic beatae voluptatem.
                            Delectus officia ipsum esse?</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#020266] rounded-lg hover:bg-[#f1d51e] focus:ring-4 focus:outline-none transition-all">
                            Read more
                            <i class="fa-solid fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="md:max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    data-aos="fade-right" data-aos-delay="300">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('assets/landing/berita 1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, perspiciatis</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Sequi odio ratione veritatis odit, hic beatae voluptatem.
                            Delectus officia ipsum esse?</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#020266] rounded-lg hover:bg-[#f1d51e] focus:ring-4 focus:outline-none transition-all">
                            Read more
                            <i class="fa-solid fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="md:max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    data-aos="fade-right" data-aos-delay="400">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('assets/landing/berita 1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, perspiciatis</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Sequi odio ratione veritatis odit, hic beatae voluptatem.
                            Delectus officia ipsum esse?</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#020266] rounded-lg hover:bg-[#f1d51e] focus:ring-4 focus:outline-none transition-all">
                            Read more
                            <i class="fa-solid fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="md:max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
                    data-aos="fade-right" data-aos-delay="500">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('assets/landing/berita 1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, perspiciatis</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Sequi odio ratione veritatis odit, hic beatae voluptatem.
                            Delectus officia ipsum esse?</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#020266] rounded-lg hover:bg-[#f1d51e] focus:ring-4 focus:outline-none transition-all">
                            Read more
                            <i class="fa-solid fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <x-application-logo class="" />
                        <span
                            class="self-center mx-2 text-2xl font-semibold whitespace-nowrap dark:text-white">{{ env('APP_NAME') }}</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Berita</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline ">Facebook</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Twitter</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Instagram</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#"
                        class="hover:underline">{{ env('APP_NAME') }}™</a>. All Rights
                    Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa-brands fa-facebook"></i>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <i class="fa-brands fa-x-twitter"></i>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <i class="fa-brands fa-instagram"></i>
                        <span class="sr-only">Intagram page</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
</body>

</html>
