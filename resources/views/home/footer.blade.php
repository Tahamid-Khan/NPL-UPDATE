    <!-- footer start -->
    <footer class="rts-footer v_2 pt--100 pb--100">
        <div class="container">
            <div class="row gy-5 gy-lg-0">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts-footer-widget w-320">
                        <a 
href="{{route('home') }}"
 class="d-block rts-footer-logo mb--50">
                            <img src="{{asset('bibm/assets/images/logo/logo__two2.svg')}}" alt="Unipix">
                        </a>
                        <p class="rts__description">
                            The MBM Alumni Society (MAS) brings together graduates of the Masters in Bank Management program, fostering connections and professional growth within our community.
                        </p>
                        <div class="rts-contact-link">
                            <a href="#"><i class="fa-sharp fa-light fa-location-dot"></i> Bangladesh Institute Of Bank Management, Mirpur, Dhaka</a>
                            <a href="callto:+8801730704988"><i class="fa-thin fa-phone"></i> +8801730704988</a>
                            <div class="social__links" style="display: flex; gap: 20px;">
                                <a href="#" class="fb"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts-footer-widget pt--150">
                        <h6 class="rt-semi">Quick Links</h6>
                        <div class="rts-footer-menu">
                            <ul>
                                <li><a  href="{{route('about') }}">About Us</a></li>
                                <li><a href="{{ route('newsevent') }}">News & Events</a></li>
                                <li><a href="{{ route('executivecommittee') }}">Executive Committee</a></li>
                                <li><a  href="{{ route('contactus') }}" >Contact</a></li>
                                <li><a href="{{route('home') }}">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="rts-footer-widget ml--30 pt--150">
                        <h6 class="rt-semi">Events</h6>
                        <div class="rts-post-widget">
                            <ul class="list-unstyled">
                                <li class="single-post">
                                    <a  href="#clickevent" class="blog-thumb">
                                        <img src="{{asset('bibm/assets/images/event/01.jpg')}}"  alt="latest event">
                                    </a>
                                    <div class="post-content">
                                        <span class="rt-date">April 18, Friday, 2025</span>
                                        <a  href="#clickevent">
                                        Celebrating 25 Years of Excellence – MBM Silver Jubilee
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    <div class="rts-footer-copy-right v_1">
        <div class="container">
            <div class="row">
                <div class="rt-center">
                    <p class="--p-xs">Copyright &copy; 2025 All Rights Reserved by <a href="#">BIBM</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
    <!-- offcanvase menu -->
    <!-- header style two -->
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="{{asset('bibm/assets/images/logo/logo__two2.svg')}}" alt="Unipix-university">
            </div>
            <div class="inner-content">
                <p class="disc">
                    MBM Alumni Society (MAS) is established by the MBM alumni of Bangladesh Institute of Bank Management (BIBM), affiliated with University of Dhaka, Bangladesh.
                </p>
                <!-- offcanvase banner -->
                <div class="offcanvase__banner mt--50">
                    <div class="offcanvase__banner--content">
                  
                     
                    </div>
                </div>
                <div class="offcanvase__info">
                    <div class="offcanvase__info--content">
                        <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>+8801730704988</a>
                        <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Bangladesh Institute Of Bank Management, Room# 416 (3rd Floor), Plot# 4, Road# 1 (South), Section# 2, Mirpur, Dhaka.</a>
                        <div class="offcanvase__info--content--social">
                            <p class="title">Follow Us:</p>
                            <div class="social__links">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">

                    <li class="">
                        <a href="{{route('home') }}" class="main">Home</a>
                    </li>
                    <li>
                        <a  href="{{route('about') }}" class="main">About Us</a>
                    </li>
                      <li>
                        <a href="{{ route('newsevent') }}" class="main">News & Events</a>
                    </li>
                      <li>
                        <a href="{{ route('executivecommittee') }}" class="main">Executive Committee</a>
                    </li>
                     <li>
                        <a href="{{ route('contactus') }}"  class="main">Contact</a>
                    </li>
                    <li>
                        <a href="{{url('/login') }}"  class="main">Login</a>
                    </li>
                </ul>
            </nav>

            <div class="offcanvase__info--content mt--30">
                <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>+8801730704988</a>
                <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Bangladesh Institute Of Bank Management, Room# 416 (3rd Floor), Plot# 4, Road# 1 (South), Section# 2, Mirpur, Dhaka.</a>
                <div class="offcanvase__info--content--social">
                    <p class="title">Follow Us:</p>
                    <div class="social__links">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete ui-autocomplete-input" type="text" placeholder="Search by keyword or #" autocomplete="off">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- rts back to top end -->
    <div id="anywhere-home" class="">
    </div>


    <!-- scripts -->
    <!-- jquery js -->
    <script src="{{asset('bibm/assets/js/vendor/jquery.min.js')}}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{asset('bibm/assets/js/plugins/bootstrap.min.js')}}"></script>
    <!-- jquery ui js -->
    <script src="{{asset('bibm/assets/js/vendor/jquery-ui.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('bibm/assets/js/vendor/waw.js')}}"></script>
    <!-- mobile menu -->
    <script src="{{asset('bibm/assets/js/vendor/metismenu.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('bibm/assets/js/vendor/magnifying-popup.js')}}"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="{{asset('bibm/assets/js/plugins/swiper.js')}}"></script>
    <!-- counterup -->
    <script src="{{asset('bibm/assets/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('bibm/assets/js/vendor/waypoint.js')}}"></script>
    <!-- isotop mesonary -->
    <script src="{{asset('bibm/assets/js/plugins/isotop.js')}}"></script>
    <script src="{{asset('bibm/assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('bibm/assets/js/plugins/sticky-sidebar.js')}}"></script>
    <script src="{{asset('bibm/assets/js/plugins/resize-sensor.js')}}"></script>
    <script src="{{asset('bibm/assets/js/plugins/twinmax.js')}}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{asset('bibm/assets/js/plugins/contact.form.js')}}"></script>
    <script src="{{asset('bibm/assets/js/plugins/nice-select.min.js')}}"></script>
    <!-- main Js -->
    <script src="{{asset('bibm/assets/js/main.js')}}"></script>

</body>

</html>