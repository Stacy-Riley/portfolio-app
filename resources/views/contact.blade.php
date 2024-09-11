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
                                <h3 class="text-[17px] uppercase">Working Days</h3>
                            </div>
                            <div class="accordion_content w-full p-[40px] bg-white">
                                <p>Our company provides services for our customers between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday. You can visit or call during these days.</p>
                                <p><strong>Weekends:</strong> Saturday and Sunday.</p>
                            </div>
                        </div>
                        <div class="accordion w-full mb-[10px] wow fadeInLeft" data-wow-duration="1s">
                            <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                <h3 class="text-[17px] uppercase">Social Profiles</h3>
                            </div>
                            <div class="accordion_content w-full p-[40px] bg-white">
                                <div class="social w-full">
                                    <ul class="flex flex-wrap ml-[-20px]">
                                        <li class="w-1/2 mb-[14px] pl-[20px]"><a class="text-black line_effect" href="#">Facebook</a></li>
                                        <li class="w-1/2 mb-[14px] pl-[20px]"><a class="text-black line_effect" href="#">Instagram</a></li>
                                        <li class="w-1/2 mb-[14px] pl-[20px]"><a class="text-black line_effect" href="#">Behance</a></li>
                                        <li class="w-1/2 mb-[14px] pl-[20px]"><a class="text-black line_effect" href="#">Dribbble</a></li>
                                        <li class="w-1/2 mb-[14px] pl-[20px]"><a class="text-black line_effect" href="#">YouTube</a></li>
                                        <li class="w-1/2 pl-[20px]"><a class="text-black line_effect" href="#">Linkedin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion w-full mb-[10px] wow fadeInLeft" data-wow-duration="1s">
                            <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                <h3 class="text-[17px] uppercase">Extra Info</h3>
                            </div>
                            <div class="accordion_content w-full p-[40px] bg-white">
                                <div class="info_list w-full">
                                    <ul>
                                        <li class="w-full mb-[14px]">
                                            <span class="inline-block min-w-[135px] pr-[20px]">Address:</span>
                                            <span class="inline-block">177 Ave street New York, USA</span>
                                        </li>
                                        <li class="w-full mb-[14px]">
                                            <span class="inline-block min-w-[135px] pr-[20px]">Email:</span>
                                            <span class="inline-block"><a class="text-black line_effect" href="#">yourmail@gmail.com</a></span>
                                        </li>
                                        <li class="w-full mb-[14px]">
                                            <span class="inline-block min-w-[135px] pr-[20px]">Phone:</span>
                                            <span class="inline-block"><a class="text-black line_effect" href="#">+77 022 777 66 99</a></span>
                                        </li>
                                        <li class="w-full">
                                            <span class="inline-block min-w-[135px] pr-[20px]">Website:</span>
                                            <span class="inline-block"><a class="text-black line_effect" href="#">www.yourdomain.com</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion w-full mb-[10px] wow fadeInLeft" data-wow-duration="1s">
                            <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                <h3 class="text-[17px] uppercase">Fill the Form</h3>
                            </div>
                            <div class="accordion_content w-full p-[40px] bg-white">
                                <div class="form_wrapper w-full">
                                    <form id="contactForm">
                                        <div class="error_box" id="empty-form">
                                            <p>Please Fill Required Fields</p>
                                        </div>
                                        <div class="error_box" id="subject-alert">
                                            <p>Please Select Subject</p>
                                        </div>
                                        <div class="error_box" id="security-alert">
                                            <p>Security code does not match !</p>
                                        </div>
                                        <div class="error_box" id="email-invalid">
                                            <p>Please enter a valid email address. Exp. example@gmail.com</p>
                                        </div>
                                        <div class="error_box" id="phone-invalid">
                                            <p>Please enter a valid phone number.Exp. +998991774433</p>
                                        </div>
                                        <div class="error_box" id="error_mail">
                                            <p></p>
                                        </div>
                                        <div class="success_box" id="success_mail">
                                            <p>Your message has been sent. We will contact you as soon as possible.</p>
                                        </div>
                                        <ul>
                                            <li>
                                                <input type="text" placeholder="Name" name="contact_name" class="cf-form-control"/>
                                                <span></span>
                                            </li>
                                            <li>
                                                <input type="text" placeholder="Email" name="contact_email" class="cf-form-control" />
                                                <span></span>
                                            </li>
                                            <li>
                                                <input type="text" placeholder="Phone" name="contact_phone" class="cf-form-control"/>
                                                <span></span>
                                            </li>
                                            <li>
                                                <select name="contact_subject" class="cf-form-control">
                                                    <option value="Choose Services">Choose Service</option>
                                                    <option value="Web Development">Web Development</option>
                                                    <option value="Mobile Application">Mobile Application</option>
                                                    <option value="UI/UX Design">UI/UX Design</option>
                                                </select>
                                            </li>
                                            <li id="text-area-w">
                                                <textarea placeholder="Message" name="contact_message" class="cf-form-control"></textarea>
                                            </li>
                                            <li id="enter_code">
                                                <span id="txtCaptchaSpan"></span>
                                                <input type="text" class="cf-form-control" name="contact_question" id="txtInput" autocomplete="off" placeholder="Please Enter Code *">
                                                <input type="hidden" id="txtCaptcha">
                                            </li>
                                        </ul>
                                        <div class="erling_tm_button">
                                            <button id="send_message" href="#">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion w-full mb-[10px] wow fadeInLeft" data-wow-duration="1s">
                            <div class="accordion_header w-full bg-[#eaeaea] px-[40px] py-[25px] cursor-pointer">
                                <h3 class="text-[17px] uppercase">Location</h3>
                            </div>
                            <div class="accordion_content w-full p-[40px] bg-white">
                                <div class="my_map">
                                    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=Broadway,%20New%20York&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-i.net"></a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:100%;}</style><a href="https://www.embedgooglemap.net">embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:100%;}</style></div></div>

                                    <!--  You can get your location here https://www.embedgooglemap.net  -->

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
