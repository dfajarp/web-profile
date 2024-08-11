@extends('layouts.app')

@section('title', 'Web Profile')

@section('content')

    {{-- <div class="grid grid-cols-2">
            <div class="col-md-6 flex items-center justify-center">
                <div>
                    <h1 class="text-4xl font-bold">Dikdik Fajar Permadi</h1>
                    <h4 class="text-xl">Web Developer</h4>
                    
                    <p class="mt-2">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
            <div class="col-md-6 flex items-center justify-center">
                <img src="{{ asset('assets/images/profile.png') }}" alt="" srcset="">
            </div>
        </div> --}}
    <div id="home" class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
                class="max-w-sm rounded-lg shadow-2xl" />
            <div>
                <h1 class="text-5xl font-bold">Dikdik Fajar Permadi</h1>
                <p class="py-6">
                    Halo, saya Fajar, seorang pengembang web berpengalaman dengan lebih dari 3 tahun pengalaman dalam
                    membangun aplikasi web yang inovatif dan berkinerja tinggi.
                </p>
                <a href="{{ asset('assets/files/ats_cv.pdf') }}"  class="btn btn-primary" target="_blank">Unduh CV</a>
            </div>
        </div>
    </div>

    <div id="about" class="min-h-screen m-12 md:m-24 pt-24">
        <div class="">
            <h1 class="text-5xl font-bold">Tentang Saya</h1>
            <p class="mt-6">Sebagai web developer yang berpengalaman, saya menggabungkan keterampilan teknis dengan
                kreativitas untuk menciptakan solusi digital yang efisien dan menarik. Dengan keahlian dalam PHP, Laravel,
                CodeIgniter, ReactJS, dan NextJS, serta pengalaman dalam menggunakan Nginx dan Docker, saya mampu
                mengembangkan aplikasi web yang responsif dan berkualitas tinggi. Saya terampil dalam HTML, CSS, dan
                JavaScript, serta berpengalaman dalam pengujian API dan manajemen versi menggunakan Git. Saya siap untuk
                mengubah visi Anda menjadi aplikasi web yang inovatif dan efektif.</p>


            <h5 class="text-2xl mt-4">Pendidikan</h5>

            <div class="grid md:grid-cols-2 sm:grid-cols-1 mt-6 gap-8">
                {{-- @for ($i = 0; $i < 2; $i++) --}}
                <div>
                    <div class="md:flex">
                        <div class="text-xl md:px-8 text-green-700 font-bold text-nowrap">2016 - 2019</div>
                        <div class="">
                            <span class="text-2xl font-bold text-nowrap">SMK Negeri 4 Padalarang</span>
                            <span class="block">Rekayasa Perangkat Lunak (RPL)</span>
                            <span class="block mt-2">Saya lulus dengan jurusan Rekayasa Perangkat Lunak, di mana saya
                                memperoleh
                                dasar yang kuat dalam pemrograman, jaringan komputer, dan ilmu komputer dasar. Studi saya
                                mencakup pengalaman praktis dengan berbagai bahasa pemrograman, memahami infrastruktur
                                jaringan, dan mempelajari dasar-dasar operasi serta pemeliharaan komputer.</span>
                        </div>
                    </div>
                </div>
                {{-- <div>
                    <div class="flex">
                        <div class="text-xl px-4 text-green-700 font-bold">2020</div>
                        <div class="">
                            <span class="text-2xl font-bold">Fullstack Web Developer</span>
                            <span class="block">PT xxx xxx</span>
                            <span class="block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur,
                                provident velit. Enim ipsam qui exercitationem nulla. Tempore odit velit corrupti illum
                                est ad at rem, magni eos aspernatur temporibus asperiores.</span>
                        </div>
                    </div>
                </div> --}}
                {{-- @endfor --}}
            </div>
            <div>
                <h5 class="text-2xl mt-6">Pengalaman Kerja</h5>

                <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                    <li>
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-start mb-10 md:text-end">
                            <time class="font-mono italic">2023</time>
                            <div class="text-lg font-black">PT Satustop Finansial Solusi - Web Developer</div>
                            Mengembangkan dan memelihara aplikasi web dengan PHP dan framework seperti CodeIgniter, serta
                            merancang dan mengelola database MySQL termasuk pengembangan skema, optimasi query, dan
                            integrasi data. Mengintegrasikan sistem dan layanan eksternal melalui RESTful API, serta
                            mengelola sistem kontrol versi dengan Git sambil berkolaborasi dengan tim pengembang untuk hasil
                            yang optimal. Memastikan keamanan aplikasi dengan menerapkan prinsip keamanan terbaik dan
                            melakukan audit keamanan secara berkala.
                        </div>
                        <hr />
                    </li>
                    <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-end mb-10">
                            <time class="font-mono italic">2019 - 2023</time>
                            <div class="text-lg font-black">PT Tech Mayantara Asia - Web Developer</div>
                            Merancang dan mengembangkan aplikasi web dengan berbagai teknologi seperti PHP, CodeIgniter,
                            Laravel, ReactJS/NextJS, HTML, CSS, dan JavaScript untuk menciptakan pengalaman pengguna yang
                            optimal. Mengelola dan merancang basis data menggunakan MySQL untuk memastikan integritas data
                            dan efisiensi aplikasi, serta mengembangkan dan mengintegrasikan REST API untuk meningkatkan
                            fungsionalitas aplikasi dan komunikasi antar sistem. Desain responsif diterapkan menggunakan
                            CSS, Tailwind CSS, dan Bootstrap untuk memastikan tampilan yang konsisten di berbagai perangkat
                            dan ukuran layar.

                        </div>
                        <hr />
                    </li>
                    {{-- <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-start mb-10 md:text-end">
                            <time class="font-mono italic">2001</time>
                            <div class="text-lg font-black">iPod</div>
                            The iPod is a discontinued series of portable media players and multi-purpose mobile devices
                            designed and marketed by Apple Inc. The first version was released on October 23, 2001, about
                            8+1⁄2 months after the Macintosh version of iTunes was released. Apple sold an estimated 450
                            million iPod products as of 2022. Apple discontinued the iPod product line on May 10, 2022. At
                            over 20 years, the iPod brand is the oldest to be discontinued by Apple
                        </div>
                        <hr />
                    </li> --}}
                    {{-- <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-end mb-10">
                            <time class="font-mono italic">2007</time>
                            <div class="text-lg font-black">iPhone</div>
                            iPhone is a line of smartphones produced by Apple Inc. that use Apple's own iOS mobile
                            operating system. The first-generation iPhone was announced by then-Apple CEO Steve Jobs on
                            January 9, 2007. Since then, Apple has annually released new iPhone models and iOS updates. As
                            of November 1, 2018, more than 2.2 billion iPhones had been sold. As of 2022, the iPhone
                            accounts for 15.6% of global smartphone market share
                        </div>
                        <hr />
                    </li> --}}
                    {{-- <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-start mb-10 md:text-end">
                            <time class="font-mono italic">2015</time>
                            <div class="text-lg font-black">Apple Watch</div>
                            The Apple Watch is a line of smartwatches produced by Apple Inc. It incorporates fitness
                            tracking, health-oriented capabilities, and wireless telecommunication, and integrates with
                            iOS and other Apple products and services
                        </div>
                    </li> --}}
                </ul>
            </div>


        </div>

        <div class="">
            <h5 class="text-2xl mt-6">Keahlian</h5>
            <p class="mt-4">
                Berikut adalah daftar keahlian yang saya kuasai dan pengalaman saya dalam bidang teknologi dan
                pengembangan perangkat lunak.
            </p>


            <div class="flex items-center justify-center">
                <div class="grid grid-cols-3 lg:grid-cols-5 sm:gap-8 md:gap-16 gap-4 mt-12">
                    <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32 justify-center"><img
                                src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32"><img src="{{ asset('assets/images/laravel_logo.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32"><img src="{{ asset('assets/images/js_logo.png') }}"
                                alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32"><img src="{{ asset('assets/images/ci_logo.png') }}"
                                alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32"><img src="{{ asset('assets/images/react_logo.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32"><img src="{{ asset('assets/images/mysql_logo.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32"><img src="{{ asset('assets/images/git_logo.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32"><img src="{{ asset('assets/images/nginx_logo.png') }}"
                                alt="">
                        </div>
                    </div>
                    {{-- <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32"><img src="{{ asset('assets/images/laravel_logo.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="p-4 flex items-center justify-center rouded-xl drop-shadow-md">
                        <div class="w-28 h-28 md:w-32 md:h-32"><img src="{{ asset('assets/images/laravel_logo.png') }}"
                                alt="">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>


    </div>


    <div id="portofolio" class="min-h-screen m-12 md:m-24 pt-24">

        <h1 class="text-5xl font-bold ">Portofolio</h1>
        <p class="py-8">Berikut ini adalah daftar riwayat proyek yang pernah saya kerjakan, lengkap dengan deskripsi
            singkat tentang peran saya dan kontribusi saya dalam setiap proyek tersebut.</p>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-12">

            {{-- @for ($i = 0; $i < 6; $i++) --}}
            <div class="card bg-base-100 md:w-45 lg:96 shadow-xl">
                <figure>
                    <img src="{{ asset('assets/images/portofolio/sme_sanders.png') }}" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Loan Management System
                        {{-- <div class="badge badge-secondary">NEW</div> --}}
                    </h2>
                    <p>Loan Management System (LMS) adalah perangkat lunak yang dirancang untuk mengelola berbagai aspek
                        pinjaman dalam sebuah organisasi, seperti bank atau lembaga keuangan. Sistem ini biasanya mencakup
                        fitur-fitur Pendaftaran Pinjaman, Pengelolaan Akun, Perhitungan Bunga, Jadwal Pembayaran, Pelaporan,
                        Manajemen Risiko</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">PHP</div>
                        <div class="badge badge-outline">Javascript</div>
                        <div class="badge badge-outline">MySQL</div>
                        <div class="badge badge-outline">Tailwind</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 md:w-45 lg:96 shadow-xl">
                <figure>
                    <img src="{{ asset('assets/images/portofolio/indihome_addon.png') }}" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Indihome Addon
                        {{-- <div class="badge badge-secondary">NEW</div> --}}
                    </h2>
                    <p>IndiHome Addon di STB (Set-Top Box) adalah fitur tambahan yang memungkinkan pengguna IndiHome untuk
                        mengakses berbagai konten atau aplikasi tambahan melalui STB mereka. IndiHome adalah layanan
                        internet dan TV dari Telkom Indonesia, dan STB adalah perangkat yang digunakan untuk mengakses
                        layanan TV digital.</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">PHP</div>
                        <div class="badge badge-outline">Javascript</div>
                        <div class="badge badge-outline">MySQL</div>
                        <div class="badge badge-outline">Bootstrap</div>
                    </div>
                </div>
            </div>
            {{-- @endfor --}}
        </div>

    </div>


@endsection
