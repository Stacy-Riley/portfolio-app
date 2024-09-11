@extends('layouts.public')

@section('content')
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->
    <!-- HERO -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="home">
        <div class="erling_tm_hero w-full min-h-[100vh] relative">
            <div class="container">
                <div class="content w-full h-[100vh] relative flex items-center">
                    <div class="details flex items-center">
                        <div class="image rounded relative">
                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="assets/img/about/1.jpg"></div>
                        </div>
                        <div class="text pl-[70px]">
                            <h3 class="stroke text-[130px] font-extrabold leading-[1.1] uppercase font-archivo">Erling</h3>
                            <h3 class="text-[130px] font-extrabold leading-[1.1] uppercase font-archivo">Walton</h3>
                            <div class="job inline-block bg-[#f5f5f5] py-[15px] px-[40px] mt-[30px]">
                                <span>UI Designer</span><span>Web Developer</span><span>SEO Optimizer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /HERO -->
@endsection
