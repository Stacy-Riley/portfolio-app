@php use Illuminate\Support\Str; @endphp
@extends('layouts.public')

@section('content')
    <!-- NEWS -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="news">
        <div class="erling_tm_news w-full px-0 pt-[143px] pb-[150px]">
            <div class="container">
                <div class="erling_tm_title w-full mb-[70px] wow fadeInLeft">
                    <span class="inline-block mb-[10px] uppercase relative pl-[60px]" data-wow-duration="1s">Blog</span>
                    <h3 class="text-[45px] font-bold">Recent Posts</h3>
                </div>
                <div class="news_list w-full">
                    <ul class="ml-[-40px] flex flex-wrap">
                        @foreach($blogs as $blog)
                            {{--  Images must be sized to 1300px width x 850px height before uploading--}}
                            @php
                                $isOldImage = Str::startsWith($blog->cover_image, '/assets/images/blog');
                            @endphp
                        <li class="mb-[40px] pl-[40px] w-1/3 wow fadeInLeft" data-wow-duration="1s">
                            <div class="list_inner w-full h-full clear-both relative">
                                <div class="image relative mb-[10px] overflow-hidden">
                                    <img class="relative min-w-full opacity-0" src="{{asset($blog->cover_image)}}" alt="" />
                                    <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="{{asset($blog->cover_image)}}"></div>
                                    <span class="date absolute z-[1] top-[20px] left-[20px] bg-white inline-block py-[5px] px-[20px]">{{ $blog->publish_date }}</span>
                                    <a class="erling_tm_full_link" href="#"></a>
                                </div>
                                <div class="details w-full bg-[#f5f5f5]">
                                    <div class="meta w-full bg-[#eaeaea] px-[30px] py-[15px] flex items-center">
                                        <span>By: </span><span class="admin">{{ $blog->author }}</span>
                                        <span>|</span>
                                        <span>In: </span><span class="category">{{ $blog->category }}</span>
                                    </div>
                                    <div class="title blog-title-container w-full p-[30px]">
                                        <h3 class="text-[20px]"><a class="text-black text_hover_effect" href="#">{{ $blog->title }}</a></h3>
                                    </div>
                                </div>

                                <!-- Modalbox Info Start -->
                                <div class="news_hidden_details">
                                    <div class="news_popup_informations">
                                        <div class="text">
                                            {!! $blog->body !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- /Modalbox Info End -->

                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /NEWS -->
@endsection
