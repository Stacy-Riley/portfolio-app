@extends('layouts.public')

@section('content')
    <!-- PORTFOLIO -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="portfolio">
        <div class="erling_tm_portfolio w-full bg-[#f7f7f7] py-[143px] px-0 swiper-section">
            <div class="container">
                <div class="erling_tm_title w-full mb-[70px] wow fadeInLeft">
                    <span class="inline-block mb-[10px] uppercase relative pl-[60px]" data-wow-duration="1s">Portfolio</span>
                    <h3 class="text-[45px] font-bold">Creative Portfolio</h3>
                </div>
                <div class="portfolio_list w-full h-auto clear-both gallery_zoom wow fadeInLeft" data-wow-duration="1s">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="list_inner w-full h-auto clear-both relative overflow-hidden">
                                    <div class="image relative overflow-hidden">
                                        <img class="relative min-w-full opacity-0" src="assets/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="assets/img/portfolio/1.jpg"></div>
                                    </div>
                                    <div class="details absolute z-[2] bottom-[-100px] left-[20px] right-[20px] bg-white px-[20px] pt-[8px] pb-[13px]">
                                        <span class="text-[12px] uppercase mb-[5px] text-[#868a9b] font-medium">Vimeo</span>
                                        <h3 class="text-black text-[20px] mb-[2px]">Web Design</h3>
                                    </div>
                                    <a class="erling_tm_full_link popup-vimeo" href="https://vimeo.com/321091335"></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="list_inner w-full h-auto clear-both relative overflow-hidden">
                                    <div class="image relative overflow-hidden">
                                        <img class="relative min-w-full opacity-0" src="assets/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="assets/img/portfolio/2.jpg"></div>
                                    </div>
                                    <div class="details absolute z-[2] bottom-[-100px] left-[20px] right-[20px] bg-white px-[20px] pt-[8px] pb-[13px]">
                                        <span class="text-[12px] uppercase mb-[5px] text-[#868a9b] font-medium">Youtube</span>
                                        <h3 class="text-black text-[20px] mb-[2px]">Code Editor</h3>
                                    </div>
                                    <a class="erling_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=toClS5fCudA"></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="list_inner w-full h-auto clear-both relative overflow-hidden">
                                    <div class="image relative overflow-hidden">
                                        <img class="relative min-w-full opacity-0" src="assets/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="assets/img/portfolio/3.jpg"></div>
                                    </div>
                                    <div class="details absolute z-[2] bottom-[-100px] left-[20px] right-[20px] bg-white px-[20px] pt-[8px] pb-[13px]">
                                        <span class="text-[12px] uppercase mb-[5px] text-[#868a9b] font-medium">Soundcloud</span>
                                        <h3 class="text-black text-[20px] mb-[2px]">Graphic Design</h3>
                                    </div>
                                    <a class="erling_tm_full_link soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="list_inner w-full h-auto clear-both relative overflow-hidden">
                                    <div class="image relative overflow-hidden">
                                        <img class="relative min-w-full opacity-0" src="assets/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="assets/img/portfolio/4.jpg"></div>
                                    </div>
                                    <div class="details absolute z-[2] bottom-[-100px] left-[20px] right-[20px] bg-white px-[20px] pt-[8px] pb-[13px]">
                                        <span class="text-[12px] uppercase mb-[5px] text-[#868a9b] font-medium">Modalbox</span>
                                        <h3 class="text-black text-[20px] mb-[2px]">Hello Phone</h3>
                                    </div>
                                    <a class="erling_tm_full_link portfolio_popup" href="#"></a>


                                    <!-- Modalbox Info Start -->
                                    <div class="hidden_content_portfolio">
                                        <div class="popup_details">
                                            <div class="main_details">
                                                <div class="textbox">
                                                    <p>Web designing is the process of planning, conceptualizing, and implementing the plan for designing a website in a way that is functional and offers a good user experience. User experience is central to the web designing process. Websites have an array of elements presented in ways that make them easy to navigate.</p>
                                                    <p>Web designing essentially involves working on every attribute of the website that people interact with, so that the website is simple and efficient, allows users to quickly find the information they need, and looks visually pleasing. All these factors, when combined, decide how well the website is designed.</p>
                                                </div>
                                                <div class="detailbox">
                                                    <ul>
                                                        <li>
                                                            <span class="first">Client</span>
                                                            <span>David Parker</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Category</span>
                                                            <span><a href="#">Modalbox</a></span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Date</span>
                                                            <span>November 22, 2024</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Share</span>
                                                            <ul class="share">
                                                                <li><a href="#"><img class="svg" src="assets/img/svg/social/facebook.svg" alt="" /></a></li>
                                                                <li><a href="#"><img class="svg" src="assets/img/svg/social/twitter.svg" alt="" /></a></li>
                                                                <li><a href="#"><img class="svg" src="assets/img/svg/social/instagram.svg" alt="" /></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="additional_images">
                                                <ul>
                                                    <li>
                                                        <div class="list_inner">
                                                            <div class="my_image">
                                                                <img src="assets/img/thumbs/4-2.jpg" alt="" />
                                                                <div class="main" data-img-url="assets/img/portfolio/5.jpg"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list_inner">
                                                            <div class="my_image">
                                                                <img src="assets/img/thumbs/4-2.jpg" alt="" />
                                                                <div class="main" data-img-url="assets/img/portfolio/6.jpg"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list_inner">
                                                            <div class="my_image">
                                                                <img src="assets/img/thumbs/4-2.jpg" alt="" />
                                                                <div class="main" data-img-url="assets/img/portfolio/7.jpg"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Modalbox Info Start -->

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="list_inner w-full h-auto clear-both relative overflow-hidden">
                                    <div class="image relative overflow-hidden">
                                        <img class="relative min-w-full opacity-0" src="assets/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="assets/img/portfolio/8.jpg"></div>
                                    </div>
                                    <div class="details absolute z-[2] bottom-[-100px] left-[20px] right-[20px] bg-white px-[20px] pt-[8px] pb-[13px]">
                                        <span class="text-[12px] uppercase mb-[5px] text-[#868a9b] font-medium">Popup</span>
                                        <h3 class="text-black text-[20px] mb-[2px]">SEO Mockup</h3>
                                    </div>
                                    <a class="erling_tm_full_link zoom" href="assets/img/portfolio/8.jpg"></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="list_inner w-full h-auto clear-both relative overflow-hidden">
                                    <div class="image relative overflow-hidden">
                                        <img class="relative min-w-full opacity-0" src="assets/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="assets/img/portfolio/9.jpg"></div>
                                    </div>
                                    <div class="details absolute z-[2] bottom-[-100px] left-[20px] right-[20px] bg-white px-[20px] pt-[8px] pb-[13px]">
                                        <span class="text-[12px] uppercase mb-[5px] text-[#868a9b] font-medium">Popup</span>
                                        <h3 class="text-black text-[20px] mb-[2px]">Part Notebook</h3>
                                    </div>
                                    <a class="erling_tm_full_link zoom" href="assets/img/portfolio/9.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="erling_tm_swiper_progress fill">
                            <div class="my_pagination_in">
                                <span class="current"></span>
                                <span class="pagination_progress"><span class="all"><span></span></span></span>
                                <span class="total"></span>
                            </div>
                            <div class="my_navigation">
                                <ul>
                                    <li><a class="my_prev" href="#"><i class="icon-left-open-1"></i></a></li>
                                    <li><a class="my_next" href="#"><i class="icon-right-open-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /PORTFOLIO -->
@endsection
