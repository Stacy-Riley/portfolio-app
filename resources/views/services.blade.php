@extends('layouts.public')

@section('content')
    <!-- SERVICE -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="service">
        <div class="erling_tm_service w-full px-0 py-[143px]">
            <div class="container">
                <div class="erling_tm_title w-full mb-[70px] wow fadeInLeft">
                    <span class="inline-block mb-[10px] uppercase relative pl-[60px]" data-wow-duration="1s">Services</span>
                    <h3 class="text-[45px] font-bold">Quality Services</h3>
                </div>
                <div class="service_list w-full">
                    <ul class="flex flex-wrap ml-[-40px]">
                        @foreach($services as $service)
                            <li class="w-1/3 pl-[40px] mb-[40px] wow fadeInLeft" data-wow-duration="1s">
                                <div class="list_inner w-full h-full relative bg-[#f7f7f7] py-[50px] px-[50px]">

                                    <h3 class="title text-[20px]">{{ $service->title }}</h3>
                                    <div class="list w-full mt-[20px] pt-[20px]">
                                        <ul>
                                            @php
                                            $listServicesArray = explode(',', $service->body);
                                            @endphp
                                            @foreach($listServicesArray as $listService)
                                            <li class="w-full mb-[5px] relative pl-[18px]">
                                                <span>{{ trim($listService) }}</span>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
{{--                                    <div class="erling_progress">--}}
{{--                                        <div class="progress_inner" data-value="100">--}}
{{--                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /SERVICE -->
@endsection
