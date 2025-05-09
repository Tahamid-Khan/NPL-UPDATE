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
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg" style="background-image: url(bibm/assets/images/banner/02.webp);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ul>
                        <h2 class="section-title">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->


    <!-- rts contact info -->
    <section class="rts-contact-info rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--40">
                    <h2 class="rts__section--title text-capitalize">General Contact Information</h2>
                </div>
            </div>
            <div class="contact-information">
                <div class="row justify-content-md-start justify-content-sm-center g-5">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="single-contact h-100">
                            <div class="single-contact__single">
                                <div class="icon">
                                    <i class="fa-thin fa-map-location-dot"style="color: #007FAA;"></i>
                                </div>
                                <p class="--p-m">
                                    (South), Section# 2, Mirpur, Dhaka.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="single-contact h-100">
                            <div class="single-contact__single">
                                <div class="icon">
                                    <i class="fa-thin fa-phone"style="color: #007FAA;"></i>
                                </div>
                                <div class="method">
                                    <a href="callto:+442041542541" class="phone">+8801730704988</a>
                                    <a href="callto:+442041542542" class="phone">+8801676537288</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- rts contact info end -->


    <!-- other contact method -->
    <section class="rts-campus-tour p-0">
        <div class="container">
            <div class="row justify-content-center">
               
                <div class="col-12">
                    <div class="rts-video-section height-500 mb--50">
                        <a href="https://www.youtube.com/watch?v=Uwq1uiuM_9w" class="rts-video-section-player popup-video video-btn">
                            <i class="fa-sharp fa-solid fa-play"></i>
                        </a>
                        <img src="bibm/assets/images/event/07.jpg" alt="video-bg">
                    </div>
                </div>
                <div class="col-lg-8">
                 
                </div>
            </div>
        </div>
    </section>



@include('home.footer')