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
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg" style="background-image: url({{asset('bibm/assets/images/event/11.jpg')}});">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
    <a href="{{ route('about') }}">About</a>
</li>

                        </ul>
                        <h2 class="section-title">About MBM Alumni Society</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->


    <!-- about university -->
    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">About MBM Alumni</h3>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <p class="rts-section-description">
                            Bangladesh Institute of Bank Management (‘BIBM’) is a national Training, Research, Consultancy and Education Institute on banking and finance, collectively owned by the Banking sector of the country. Registered under the Societies Act 1860, BIBM was established in 1974 with primary focus of providing training to the officials of banks and financial institutions of Bangladesh. Over the years, BIBM has broadened its operation to cover other areas of activities like providing professional post-graduate degree – MBM and Evening MBM, carrying out research on banking & finance, holding seminars and roundtable discussions, offering training and research related consultancy services or aiding the banks in their recruitments.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-md-center justify-content-start">
                <div class="col-lg-7 col-xl-8 col-md-11">
                    <div class="rts-about-section">
                        <img src="{{asset('bibm/assets/images/event/09.jpg')}}" alt=""style="height: 103%;">
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-md-11">
                    <div class="rts-about-details">
                        <div class="single-about-info"style="background-color: #007FAA;">
                            <div class="content">
                                <h3 class="title">ESTD 1997</h3>
                                <img alt="">
                            </div>
                            <div class="desc">
                                <p>Establishment year of Bangladesh Institute of Bank Management (BIBM)</p>
                            </div>
                        </div>
                        <div class="single-about-info"style="background-color: #007FAA;">
                            <div class="content">
                                <h3 class="title">1800+</h3>
                                <img src="" alt="">
                            </div>
                            <div class="desc">
                                <p>MBM graduates students</p>
                            </div>
                        </div>
                        <div class="single-about-info"style="background-color: #007FAA;">
                            <div class="content">
                                <h3 class="title">25</h3>
                                <img src="" alt="">
                            </div>
                            <div class="desc">
                                <p>Years of Excellence in MBM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about university end -->

  <!-- history -->
<div class="rts-history">
    <div class="container">
        <div class="row g-5 justify-content-between align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="rts-history-image">
                    <img src="{{asset('bibm/assets/images/event/08.jpeg')}}" alt="history" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="rts-history-section" style="margin-top: 47px;">
                    <h4 class="rts-section-title mb--40">BIBM History</h4>
                    <p>
                        This 2025 marks a significant milestone as MBM Alumni Society(MAS) celebrates 25 years of success of MBM (Masters in Bank Management) Program since its inception. We are proud to acknowledge that the MBM Program, spearheaded by the Dhaka School of Bank Management (DSBM) of the Bangladesh Institute of Bank Management (BIBM) and affiliated with the University of Dhaka, has been pivotal in enriching the banking sector of Bangladesh.To date, showcasing the program’s vast influence and commitment to excellence, approximately 1800+ graduates have ventured into various leadership roles within the Central Banks, Commercial Banks and Financial Institutions both domestically and internationally. The Silver Jubilee is not only a time to celebrate the achievements of the past 25 years but also an opportunity to look forward to the future.
                        <span class="d-block mb--30"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- history end-->



  



    <section class="rts-campus-tour p-0">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="section-title rt-center mb--50 mt--50">About MAS</h2>
                <div class="col-12">
                    <div class="rts-video-section height-500 mb--50">
                        <a href="https://www.youtube.com/watch?v=Uwq1uiuM_9w" class="rts-video-section-player popup-video video-btn">
                            <i class="fa-sharp fa-solid fa-play"></i>
                        </a>
                        <img src="{{asset('bibm/assets/images/event/07.jpg')}}" alt="video-bg">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="rts-video-section-text rt-center mx-3">
                        <p>MBM Alumni Society ('MAS') is a voluntary non-profit social organization, registered under the Societies Registration Act, 1860 whose programs foster a lifelong connection with BIBM. MAS strives to promote and influence professional networking. MAS provides alumni with the means to serve the campus and enrolling students through conducting various research, workshop and seminars on issues related to financial sectors. So far, around 1,700 graduates completed their degree and almost all of them are now working in different banks and financial institutions at home and abroad. Some of them have already reached the top-level management of the banks and financial institutions.</p>
                        <a href="campus-lifeinvalid link" class="mt--15  "><span><i class=""></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


      <!-- newsletter -->
      <div class="rts-newsletter v_1 rts-cta-background">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-newsletter-box" style="background-image: url(assets/images/newsletter/bg-1.jpg);">
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










