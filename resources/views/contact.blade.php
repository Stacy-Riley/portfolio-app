@extends('layouts.public')

@section('content')
    <!-- CONTACT -->
    <div class="erling_tm_section w-full h-auto clear-both clearfix" id="contact">
        <div class="erling_tm_contact w-full pt-[143px] px-0 pb-[140px] bg-[#f5f5f5]">
            <div class="container">
                <div class="erling_tm_title w-full mb-[70px] wow fadeInLeft">
                    <span class="inline-block mb-[10px] uppercase relative pl-[60px]" data-wow-duration="1s">Contact</span>
                    <h3 class="text-[45px] font-bold">Get in Touch</h3>
                </div>
                <div class="contact_inner w-full ">
                    <div class="accordion_wrap ready w-full">
                        <div class="accordion active w-full mb-[10px] wow fadeInLeft" data-wow-duration="1s">
                            <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                <h3 class="text-[17px] uppercase">Working Hours</h3>
                            </div>
                            <div class="accordion_content w-full p-[40px] bg-white">
                                <p>Our company provides services for our customers between 9:00 a.m. and 6:00 p.m. ET, Monday through Friday.</p>
                                <p>Feel free to reach out to us through our contact form below and we will respond within 24 business hours.</p>
                            </div>
                        </div>
                        <div class="accordion w-full mb-[10px] wow fadeInLeft" data-wow-duration="1s">
                            <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                <h3 class="text-[17px] uppercase">Social Profiles</h3>
                            </div>
                            <div class="accordion_content w-full p-[40px] bg-white">
                                <div class="social w-full">
                                    <ul class="flex flex-wrap ml-[-20px]">
                                        <li class="w-1/2 pl-[20px]"><a class="text-black line_effect" href="https://www.linkedin.com/in/stacyrileywebdeveloper/">Linkedin</a></li>
                                        <li class="w-1/2 mb-[14px] pl-[20px]"><a class="text-black line_effect" href="https://github.com/Stacy-Riley">GitHub</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion w-full mb-[10px] wow fadeInLeft" data-wow-duration="1s">
                            <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                <h3 class="text-[17px] uppercase">Contact Form</h3>
                            </div>
                            <div class="accordion_content w-full p-[40px] bg-white">
                                <div class="form_wrapper w-full">
                                    <form id="contactForm" action="{{ route('contactForm') }}" method="POST">
                                        @csrf
                                        <ul>
                                            <li>
                                                <input type="text" placeholder="Name" name="name" class="cf-form-control" required/>
                                                <span></span>
                                            </li>
                                            <li>
                                                <input type="email" placeholder="Email" name="email" class="cf-form-control" required/>
                                                <span></span>
                                            </li>
                                            <li>
                                                <input type="text" placeholder="Phone" name="phone" class="cf-form-control"/>
                                                <span></span>
                                            </li>
                                            <li>
                                                <select name="subject" class="cf-form-control required">
                                                    <option value="Choose Services">Choose Service</option>
                                                    <option value="Custom Website Development">Custom Website Development</option>
                                                    <option value="Web Application Development">Web Application Development</option>
                                                    <option value="Ongoing Maintenance & Support">Ongoing Maintenance & Support</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </li>
                                            <li id="text-area-w">
                                                <textarea placeholder="Message" name="message" class="cf-form-control"></textarea>
                                            </li>
                                            <li>
                                                <input type="text" name="my_extra_field" style="display:none" value="">
                                            </li>
                                        </ul>
                                        <div class="erling_tm_button">
                                            <button type="submit" id="send_message" href="#">Send Message</button>
                                        </div>
                                    </form>
                                    @if(session('success'))
                                        <p role="alert">{{ session('success') }}</p>
                                    @endif

                                    @if(session('error'))
                                        <p role="alert">{{ session('error') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /CONTACT -->
@endsection

@section('custom_scripts')
    {{--Sweetalert for newsletter signup popups--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var successMessage = "{{ session('success') }}";
            var errorMessage = "{{ session('error') }}";

            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: successMessage,
                    confirmButtonColor: '#A5DC86',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.scrollTo(0, 0);
                });
            }

            if (errorMessage) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: errorMessage,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.scrollTo(0, 0);
                });
            }
        });
    </script>
@endsection
