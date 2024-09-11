@extends('layouts.public')

@section('content')
    <!-- SERVICE -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="service">
        <div class="erling_tm_service w-full px-0 pt-[143px] pb-[110px]">
            <div class="container">
                <div class="erling_tm_title w-full mb-[70px] wow fadeInLeft">
                    <span class="inline-block mb-[10px] uppercase relative pl-[60px]" data-wow-duration="1s">Services</span>
                    <h3 class="text-[45px] font-bold">Quality Services</h3>
                </div>
                <div class="service_list w-full">
                    <ul class="flex flex-wrap ml-[-40px]">
                        <li class="w-1/3 pl-[40px] mb-[40px] wow fadeInLeft" data-wow-duration="1s">
                            <div class="list_inner w-full h-full relative bg-[#f7f7f7] py-[70px] px-[50px]">
                                <img class="svg w-[53px] h-[53px] text-[#999] mb-[20px] transition-all duration-300" src="assets/img/svg/anchor.svg" alt="" />
                                <h3 class="title text-[20px]">Creative Design</h3>
                                <div class="list w-full mt-[30px] pt-[30px]">
                                    <ul>
                                        <li class="w-full mb-[5px] relative pl-[18px]"><span>Figma Design</span></li>
                                        <li class="w-full mb-[5px] relative pl-[18px]"><span>PSD Design</span></li>
                                        <li class="w-full relative pl-[18px]"><span>Sketch Design</span></li>
                                    </ul>
                                </div>
                                <div class="erling_progress">
                                    <div class="progress_inner" data-value="90">
                                        <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="w-1/3 pl-[40px] mb-[40px] wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="list_inner w-full h-full relative bg-[#f7f7f7] py-[70px] px-[50px]">
                                <img class="svg w-[53px] h-[53px] text-[#999] mb-[20px] transition-all duration-300" src="assets/img/svg/web.svg" alt="" />
                                <h3 class="title text-[20px]">Web Development</h3>
                                <div class="list w-full mt-[30px] pt-[30px]">
                                    <ul>
                                        <li class="w-full mb-[5px] relative pl-[18px]"><span>HTML Websites</span></li>
                                        <li class="w-full mb-[5px] relative pl-[18px]"><span>Wordpress Websites</span></li>
                                        <li class="w-full relative pl-[18px]"><span>NFT &amp; AI Websites</span></li>
                                    </ul>
                                </div>
                                <div class="erling_progress">
                                    <div class="progress_inner" data-value="80">
                                        <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="w-1/3 pl-[40px] mb-[40px] wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="list_inner w-full h-full relative bg-[#f7f7f7] py-[70px] px-[50px]">
                                <img class="svg w-[53px] h-[53px] text-[#999] mb-[20px] transition-all duration-300" src="assets/img/svg/physics.svg" alt="" />
                                <h3 class="title text-[20px]">Mobile Application</h3>
                                <div class="list w-full mt-[30px] pt-[30px]">
                                    <ul>
                                        <li class="w-full mb-[5px] relative pl-[18px]"><span>Android Apps</span></li>
                                        <li class="w-full mb-[5px] relative pl-[18px]"><span>IOS Apps</span></li>
                                        <li class="w-full relative pl-[18px]"><span>Huawei Apps</span></li>
                                    </ul>
                                </div>
                                <div class="erling_progress">
                                    <div class="progress_inner" data-value="70">
                                        <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /SERVICE -->
@endsection
