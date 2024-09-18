@php use Illuminate\Support\Str; @endphp
@extends('layouts.public')

@section('content')
    <!-- PORTFOLIO -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="portfolio">
        <div class="erling_tm_portfolio w-full bg-[#f7f7f7] py-[143px] px-0 swiper-section">
            <div class="container ">
                <div class="erling_tm_title w-full wow fadeInLeft">
                    <span class="inline-block mb-[10px] uppercase relative pl-[60px]" data-wow-duration="1s">Portfolio</span>
                    <h3 class="text-[45px] font-bold">Creative Portfolio</h3>
                </div>
                <div class="portfolio_list w-full h-auto clear-both gallery_zoom wow fadeInLeft" data-wow-duration="1s">
                    <div class="swiper-container">
                        <div class="swiper-wrapper h-auto">
                            @foreach($projects as $project)
                                <div class="swiper-slide">
                                {{--  Images must be sized to 1300px width x 850px height before uploading--}}
                                    @php
                                        $isOldImage = Str::startsWith($project->cover_image, '/assets/images/projects');
                                    @endphp
                                <div class="list_inner w-full h-auto clear-both relative overflow-hidden">
                                    <div class="image relative overflow-hidden">
                                        @if($isOldImage)
                                        <img class="relative min-w-full opacity-0" src="{{asset($project->cover_image) }}" alt="{{$project->title}}" />
                                        <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover " data-img-url="{{asset($project->cover_image) }}"></div>
                                        @else
                                            <img class="relative min-w-full opacity-0" src="{{Storage::url($project->cover_image) }}" alt="{{$project->title}}" />
                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="{{Storage::url($project->cover_image) }}"></div>
                                        @endif
                                    </div>
                                    <div class="details absolute z-[2] bottom-[-100px] left-[20px] right-[20px] bg-white px-[20px] pt-[8px] pb-[13px]">
                                        <span class="text-[12px] uppercase mb-[5px] text-[#868a9b] font-medium">{{ $project->category }}</span>
                                        <h3 class="text-black text-[20px] mb-[2px]">{{ $project->title }}</h3>
                                    </div>
                                    <a class="erling_tm_full_link portfolio_popup" href="#"></a>


                                    <!-- Modalbox Info Start -->
                                    <div class="hidden_content_portfolio">

                                        <div class="popup_details">
                                            <div class="main_details">
                                                <span class="subtitle" data-subtitle="{{ $project->subtitle }}"></span>

                                                <div class="textbox">
                                                    {!! $project->body !!}
                                                </div>
                                                <div class="detailbox">
                                                    <ul>
                                                        <li>
                                                            <span class="first">Client</span>
                                                            <span>{{ $project->client }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Category</span>
                                                            <span><a href="#">{{ $project->category }}</a></span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Date</span>
                                                            <span>{{ \Carbon\Carbon::parse($project->publish_date)->format('F j, Y') }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">See More</span>
                                                            <ul class="share modal-see-more-container">
                                                                @if($project->project_url)
                                                                <li><a href="{{ $project->project_url }}">View Site</a></li>
                                                                @endif
                                                                @if($project->code_url)
                                                                <li><a href="{{ $project->code_url }}">View Code</a></li>
                                                                @endif
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Modalbox Info Start -->
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="erling_tm_swiper_progress fill">
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
