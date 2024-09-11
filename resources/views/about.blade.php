@extends('layouts.public')

@section('content')
    <!-- ABOUT -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="about">
        <div class="erling_tm_about w-full bg-[#f7f7f7] px-0 py-[143px]">
            <div class="container">
                <div class="about_inner w-full flex">
                    <div class="left wow fadeInLeft w-1/2 pr-[50px]" data-wow-duration="1s">
                        <div class="erling_tm_title w-full mb-[30px]">
                            <span class="inline-block mb-[10px] uppercase relative pl-[60px]">Erling Walton</span>
                            <h3 class="text-[45px] font-bold">UI Designer based in NYC, USA since 2020</h3>
                        </div>
                        <div class="text w-full mb-[40px]">
                            <p>My name is Erling Walton and I am a UI Designer, and I'm very passionate and dedicated to my work. With 3 years experience as a professional UI designer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration.</p>
                        </div>
                        <div class="erling_tm_button">
                            <a href="assets/img/cv/1.jpg" download>Download CV</a>
                        </div>
                    </div>
                    <div class="right wow fadeInLeft w-1/2 pl-[50px]" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="list w-full">
                            <div class="accordion_wrap ready w-full">
                                <div class="accordion active w-full mb-[10px]">
                                    <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                        <h3 class="text-[17px] uppercase">Personal Details</h3>
                                    </div>
                                    <div class="accordion_content w-full p-[40px] bg-white">
                                        <div class="info_list w-full">
                                            <ul>
                                                <li class="w-full mb-[14px]">
                                                    <span class="inline-block min-w-[135px] pr-[20px]">Name:</span>
                                                    <span class="inline-block">Erling Walton</span>
                                                </li>
                                                <li class="w-full mb-[14px]">
                                                    <span class="inline-block min-w-[135px] pr-[20px]">Email:</span>
                                                    <span class="inline-block"><a class="line_effect text-black" href="#">yourmail@gmail.com</a></span>
                                                </li>
                                                <li class="w-full">
                                                    <span class="inline-block min-w-[135px] pr-[20px]">Phone:</span>
                                                    <span class="inline-block"><a class="line_effect text-black" href="#">+77 022 777 66 99</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion w-full mb-[10px]">
                                    <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                        <h3 class="text-[17px] uppercase">Programming Skills</h3>
                                    </div>
                                    <div class="accordion_content w-full p-[40px] bg-white">
                                        <div class="info_list w-full">
                                            <div class="my_skills w-full">
                                                <ul>
                                                    <li class="w-full mb-[14px] flex items-center">
                                                        <span class="title min-w-[135px] pr-[20px]">WordPress</span>
                                                        <div class="erling_progress">
                                                            <div class="progress_inner" data-value="90">
                                                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="w-full mb-[14px] flex items-center">
                                                        <span class="title min-w-[135px] pr-[20px]">PHP</span>
                                                        <div class="erling_progress">
                                                            <div class="progress_inner" data-value="70">
                                                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="w-full mb-[14px] flex items-center">
                                                        <span class="title min-w-[135px] pr-[20px]">Tweenmax</span>
                                                        <div class="erling_progress">
                                                            <div class="progress_inner" data-value="80">
                                                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion w-full mb-[10px]">
                                    <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                        <h3 class="text-[17px] uppercase">Language Skills</h3>
                                    </div>
                                    <div class="accordion_content w-full p-[40px] bg-white">
                                        <div class="info_list w-full">
                                            <div class="my_skills">
                                                <ul>
                                                    <li class="w-full mb-[14px] flex items-center">
                                                        <span class="title min-w-[135px] pr-[20px]">English</span>
                                                        <div class="erling_progress">
                                                            <div class="progress_inner" data-value="95">
                                                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="w-full mb-[14px] flex items-center">
                                                        <span class="title min-w-[135px] pr-[20px]">Italian</span>
                                                        <div class="erling_progress">
                                                            <div class="progress_inner" data-value="80">
                                                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="w-full mb-[14px] flex items-center">
                                                        <span class="title min-w-[135px] pr-[20px]">Japanese</span>
                                                        <div class="erling_progress">
                                                            <div class="progress_inner" data-value="60">
                                                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ABOUT -->
@endsection
