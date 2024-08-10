{{-- <!-- resources/views/components/navbar.blade.php -->
<nav class="sticky w-full p-4">
    <div class="white-trans container mx-auto flex justify-between items-center p-4 " style="background-color :rgba(255, 255, 255, 0.20)">
        <!-- Logo or Brand -->
        <a href="/" class="text-black text-xl font-bold">dfajar</a>
        <!-- Navigation Links -->
        <div class="space-x-4">
            <a href="/" class= "btn">Home</a>
            <a href="/about" class="text-black hover:bg-black hover:text-white font-bold px-3 py-2 rounded-full">About</a>
            <a href="/porto" class="text-black hover:bg-black hover:text-white font-bold px-3 py-2 rounded-full">Portofolio</a>
            <a href="/contact" class="text-black hover:bg-black hover:text-white font-bold px-3 py-2 rounded-full">Contact</a>
        </div>
    </div>
</nav> --}}

<div class="navbar bg-base-100 sticky top-0 z-50 shadow-md">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a href="#home">Beranda</a></li>
                <li>
                    <a href="#about">Tentang</a>
                </li>
                <li>
                    <a href="#portofolio">Portofolio</a>
                </li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl">dfajar</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="#home">Beranda</a></li>
            <li>
                <a href="#about">Tentang</a>
            </li>
            <li>
                <a href="#portofolio">Portofolio</a>
            </li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <a href="https://wa.link/w9si27" class="btn">Kontak Saya</a>
    </div>
</div>
