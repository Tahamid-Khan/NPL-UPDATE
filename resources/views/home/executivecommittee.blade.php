<!DOCTYPE html>
<html lang="en">

<head>
 @include('home.css')

</head>

<body>
    <!-- header area start -->
    @include('home.headertwo')
    <!-- header area end -->


    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg" style="background-image: url({{asset('bibm/assets/images/event/04.jpg')}});">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faculty</li>
                        </ul>
                        <h2 class="section-title">Faculty Directory</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->


    <!-- faculty directory -->
 <!-- faculty directory -->
<section class="rts-faculty rts-section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="rts-section mb--50">
                    <h3 class="rts-section-title">Faculty & Staff Directory</h3>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 g-4">
            <!-- single staff item -->
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <a href="faculty-detailsinvalid link">
                                <img src="{{asset('bibm/assets/images/faculty/kamrul-sir.jpg')}}"  alt="staff-image">
                            </a>
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Kamrul Hasan Khan</h5>
                            <span class="designation">President</span>
                            <a href="nor:jenni@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>kamrul@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Bold, visionary, or youth-focused</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- single staff item -->
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/monirul-sir.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Monirul Alam</h5>
                            <span class="designation">Vice President</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:marc@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>monirul@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Supporting leadership, Strengthening unity, Ready to serve</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- single staff item -->
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/abu.png')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Abu Bakar</h5>
                            <span class="designation">Vice President</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:barry@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>abubakar@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Supporting leadership, Strengthening unity, Ready to serve</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- single staff item -->
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/tanim-sir.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">A.N.M. Tanim</h5>
                            <span class="designation">General Secretary</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:tanim@binm.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>tanim@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Organizing progress, Leading with purpose, Serving the people.</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- single staff item -->
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/fahmida-mam.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Fahmida Rahman</h5>
                            <span class="designation">Treasurer</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:wu@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>fahmida@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Trust in transparency, Accountability first, Securing every cent.</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- single staff item -->
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/jewel-sir.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">M G K Jewel</h5>
                            <span class="designation">Publication Secretary</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:nancy@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>jewel@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Voice of the people, Power through words, Transparency in every page.</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- single staff item -->
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/dev-sir.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Deb Proshad Das</h5>
                            <span class="designation">Sports &amp; Cultural Secretary</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:michael@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>dev@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Fueling passion, Uniting through culture, Championing every talent.</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- single staff item -->
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/kazi-sir.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Kazi Bayezid Hasan</h5>
                            <span class="designation">IT &amp; Social Network Secretary</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:hannah@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>hannah@Unipixuni.edu</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Connecting ideas, Innovating solutions, Empowering the digital future.</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/pradip-sir.jpeg')}}"  alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Pradip Paul</h5>
                            <span class="designation">Academic &amp; Research Secretary</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:hannah@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>pradip@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Fostering knowledge, Advancing research, Shaping academic excellence.</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/fouzia-mam.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Fouzia Parvin Sultana</h5>
                            <span class="designation">Executive Member</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:hannah@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>Parvin@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Driving strategic vision with purpose and impact</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/om-sir.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Om Prokash Dey</h5>
                            <span class="designation">Executive Member</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:hannah@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>deb@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Empowering teams, accelerating innovation forward</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/sabbir-sir.jpeg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Mohi Uddin Sabbir</h5>
                            <span class="designation">Executive Member</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:hannah@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>sabbir@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Leading with integrity, inspiring lasting change</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/nure.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Md. Nure Alam</h5>
                            <span class="designation">Executive Member</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:hannah@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>nure@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Setting the standard, elevating the future</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/tania.jpeg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Nazmun Nahar Tania</h5>
                            <span class="designation">Executive Member</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:hannah@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>tania@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Turning ambition into actionable progress</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/masud.jpeg')}}"  alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Abdullah Al Masud</h5>
                            <span class="designation">Executive Member</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:hannah@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>masud@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Steering transformation with bold leadership</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="single-staff h-100">
                    <div class="single-staff__content">
                        <div class="staf-image">
                            <img src="{{asset('bibm/assets/images/faculty/chowdhury.jpg')}}" alt="staff-image">
                        </div>
                        <div class="staf-info">
                            <h5 class="name">Atiqul Islam Chowdhury</h5>
                            <span class="designation">Executive Member</span>
                            <div class="staf-info__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-medium"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <a href="nor:hannah@Unipixuni.edu" class="email-contact"><span><i class="fa-light fa-envelope"></i></span>atiqul@bibm.com</a>
                            <a href="calltto:121" class="phone-contact"><span><i class="fa-light fa-phone"></i></span>+1 2245 1247 241</a>
                            <div class="staf-info__speciality">
                                <p>Leading forward with purpose and precision</p>
                            </div>
                            <!-- <a href="faculty-detailsinvalid link" class="rts-theme-btn border-btn">More Details</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="rts-load-more-btn rt-center mt--60">
            <a href="faculty-detailsinvalid link" class="rts-theme-btn primary lh-100">Load More</a>
        </div> -->
    </div>
</section>
<!-- faculty directory end -->

    <!-- faculty directory end -->


    <!-- footer -->
      <!-- newsletter -->
      <div class="rts-newsletter v_1 rts-cta-background">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="rts-newsletter-box" style="background-image: url({{asset('bibm/assets/images/newsletter/bg-1.jpg')}});">
                        <div class="rts-newsletter-box-content">
                            <h4 class="newsletter-title">Don’t Miss Awesome Story From Our Alumni
                            </h4>
                            <div class="newsletter-form w-530">
                                <form action="#">
                                    <input type="email" name="subscription" id="subscription" placeholder="Enter Your mail" required>
                                    <button type="submit" class="rts-nbg-btn btn-arrow">Subscribe <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@include('home.footer')