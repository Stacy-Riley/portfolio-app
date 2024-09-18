@extends('layouts.public')

@section('content')

    <!-- ABOUT -->
@foreach($profiles as $profile)
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="about">
        <div class="erling_tm_about w-full bg-[#f7f7f7] py-[143px]">
            <div class="container">
                <div class="about_inner w-full flex">
                    <div class="left wow fadeInLeft w-1/2 pr-[20px]" data-wow-duration="1s">
                        <div class="erling_tm_title w-full mb-[30px]">
                            <span class="inline-block mb-[10px] uppercase relative pl-[60px]">{{ $profile->first_name }} {{ $profile->last_name }}</span>
                            <h3 class="text-[45px] font-bold">{{ $profile->subtitle }}</h3>
                        </div>
                        <div class="text w-full mb-[40px]">
                            <p>{!! $profile->body !!} </p>
                        </div>
                    </div>
                    <div class="right wow fadeInLeft w-1/2 pl-[50px]" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="list w-full">
                            <div class="accordion_wrap ready w-full">
                                <div class="accordion w-full mb-[10px]">
                                    <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                        <h3 class="text-[17px] uppercase">Programming Skills</h3>
                                    </div>
                                    <div class="accordion_content w-full p-[40px] bg-white">
                                        <div class="info_list w-full">
                                            <div class="my_skills w-full">
                                                <ul class="flex flex-wrap">
                                                    @php
                                                        $programmingSkillsArray = explode(',', $profile->programming_skills)
                                                    @endphp
                                                    @foreach($programmingSkillsArray as $programmingSkill)
                                                        <li class=".w-1/2 mb-[10px]">
                                                            <span class="title min-w-[135px] pr-[20px]">
                                                                {{ trim($programmingSkill) }}
                                                            </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion w-full mb-[10px]">
                                    <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                        <h3 class="text-[17px] uppercase">Web Development Tools</h3>
                                    </div>
                                    <div class="accordion_content w-full p-[40px] bg-white">
                                        <div class="info_list w-full">
                                            <div class="my_skills">
                                                <ul class="flex flex-wrap">
                                                    @php
                                                    $webdevToolsArray= explode(',', $profile->webdev_tools)
                                                    @endphp

                                                    @foreach($webdevToolsArray as $webdevTool)
                                                        <li class=".w-1/2 mb-[10px]">
                                                            <span class="title min-w-[135px] pr-[20px]">
                                                                {{ trim($webdevTool) }}
                                                            </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion w-full mb-[10px]">
                                    <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                        <h3 class="text-[17px] uppercase">Key Strengths</h3>
                                    </div>
                                    <div class="accordion_content w-full p-[40px] bg-white">
                                        <div class="info_list w-full">
                                            <div class="my_skills">
                                                <ul class="flex flex-wrap">
                                                    @php
                                                        $softSkillsArray= explode(',', $profile->soft_skills)
                                                    @endphp

                                                    @foreach($softSkillsArray as $softSkill)
                                                        <li class=".w-1/2 mb-[10px]">
                                                            <span class="title min-w-[135px] pr-[20px]">
                                                                {{ trim($softSkill) }}
                                                            </span>
                                                        </li>
                                                    @endforeach
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
@endforeach
    <!-- /ABOUT -->
@endsection
