@extends('layouts.public')

@section('content')
    <!-- TESTIMONIALS -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="testimonial">
        <div class="erling_tm_testimonials w-full bg-[#f7f7f7] px-0 pt-[143px] pb-[150px]">
            <div class="container">
                <div class="erling_tm_title w-full mb-[70px] wow fadeInLeft">
                    <span class="inline-block mb-[10px] uppercase relative pl-[60px]" data-wow-duration="1s">Testimonial</span>
                    <h3 class="text-[45px] font-bold">Valuable Feedback</h3>
                </div>
                <div class="wrapper w-full flex">
                    <div class="box w-full bg-white relative wow fadeInLeft" data-wow-duration="1s">
                        <div class="short w-full bg-[#eaeaea] py-[25px] px-[40px] flex items-center justify-between">
                            <div class="title">
                                <h3 class="text-[17px] uppercase">Albert Kennedy</h3>
                                <span>Graphic Designer</span>
                            </div>
                            <img class="w-[60px] h-[60px] rounded-full object-cover" src="assets/img/testimonials/1.jpg" alt="" />
                        </div>
                        <div class="desc w-full px-[40px] pt-[40px] pb-[60px]">
                            <ul class="rating flex mb-[20px]">
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                                <li><i class="icon-star-1 text-[18px]"></i></li>
                            </ul>
                            <p class="relative z-[1]">I generally begin with what people are doing well. It’s too deflating for them if you start by immediately identifying all the things that are wrong. There’s a tipping point when any more negative feedback could shatter their confidence. If it’s really bad work, I ask them to stop and have a different kind of discussion. There are times where you may need just to say, ‘Stop, we need to reset. I generally begin with what people are doing well. It’s too deflating for them if you start by immediately identifying all the things that are wrong.</p>
                        </div>
                        <img class="svg absolute bottom-[-130px] right-[-100px] w-[500px] h-[500px] opacity-[.07]" src="assets/img/svg/quote.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /TESTIMONIALS -->
@endsection
