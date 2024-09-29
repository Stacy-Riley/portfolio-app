@extends('layouts.public')

@section('content')
    <!-- TESTIMONIALS -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="testimonial">
        <div class="erling_tm_testimonials w-full bg-[#f7f7f7] px-0 py-[143px]">
            <div class="container ">
                <div class="erling_tm_title w-full mb-[70px] wow fadeInLeft">
                    <span class="inline-block mb-[10px] uppercase relative pl-[60px]" data-wow-duration="1s">Testimonial</span>
                    <h3 class="text-[45px] font-bold">Valuable Feedback</h3>
                </div>
                <div class="wrapper w-full flex">
                    @foreach($testimonials as $testimonial)
                        @if($testimonial->is_published)
                        <div class="box w-full bg-white relative wow fadeInLeft overflow-hidden" data-wow-duration="1s" >
                        <div class="short w-full bg-[#eaeaea] py-[25px] px-[40px] flex items-center justify-between">
                            <div class="title">
                                <h3 class="text-[17px] uppercase"> {{ $testimonial->author }}</h3>
                                <span>
                                    {{ $testimonial->job_title }}
                                </span>
                            </div>
                        </div>
                        <div class="desc w-full px-[40px] pt-[40px] pb-[60px]">
                            <ul class="rating flex mb-[20px]">
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                            </ul>
                            <p class="relative z-[1]">
                                {!! $testimonial->body !!}
                            </p>
                        </div>
                        <img class="svg absolute bottom-[-130px] right-[-100px] w-[500px] h-[500px] opacity-[.07]" src="{{env('APP_URL')}}/assets/images/svg/quote.svg" alt="" />
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /TESTIMONIALS -->
@endsection

