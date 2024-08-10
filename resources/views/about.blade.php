@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="h-screen text-black pt-28">
        <div class="">
            <h1 class="text-5xl font-bold">About Me</h1>
            <p class="mt-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis debitis iure cupiditate aliquam sit quisquam, impedit reiciendis illo consequatur tempora accusantium maxime? Laboriosam, qui. Eos ea minus exercitationem blanditiis tempora!</p>

            <p class="text-2xl mt-4">Experience</p>

            <div class="grid grid-cols-2 mt-6 gap-8">
                @for ($i=0; $i< 4; $i++)
                <div>
                    <div class="flex">
                        <div class="text-xl px-4 text-green-700 font-bold">2020</div>
                        <div class="">
                            <span class="text-2xl font-bold">Fullstack Web Developer</span>
                            <span class="block">PT xxx xxx</span>
                            <span class="block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, provident velit. Enim ipsam qui exercitationem nulla. Tempore odit velit corrupti illum est ad at rem, magni eos aspernatur temporibus asperiores.</span>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        <div class="mt-28">
            <h1 class="text-6xl font-bold text-center">Skill</h1>
            <div class="flex items-center justify-center">
                <div class="grid grid-cols-5 gap-16  mt-12">
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                    <div class="p-4 flex items-center justify-center">
                        <div class="w-32"><img src="{{ asset('assets/images/logo_php.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
