<!DOCTYPE html>
<html lang="en">

<head>
 @include('home.css')

</head>

<body>
    <!-- header area start -->
    @include('home.headertwo')
    </header>
    <!-- header area end -->

    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg" style="background-image: url({{asset('bibm/assets/images/event/12.jpeg')}});">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="indexinvalid link">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events</li>
                        </ul>
                        <h2 class="section-title">News & Events</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->

    <!-- university event list -->
    <div class="rts-blog rts-section-padding v_2 no-bg">
        <div class="container">
             <!-- research content -->
             <div class="row g-5">
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="researchinvalid link">
                                <img src="{{asset('bibm/assets/images/research/01.png')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="researchinvalid link">Congratulation Mr. Kamrul Hasan Khan for joining as the Deputy Managing Director of Modhumoti Bank Limited</a>
                            <p class="rts__research--single--meta--excerpt">
                                The Executive Committee of MBM Alumni Society congratulated Mr. Kamrul Hasan Khan for joining as the Deputy Managing Director of Modhumoti Bank Limited recently. Prior to joining Modhumoti Bank, he also worked for MTBL, Prime Bank, HSBC and EBL.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="researchinvalid link">
                                <img src="{{asset('bibm/assets/images/research/02.png')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="research2invalid link">Congratulations Mr. Nazmul Haque Kiron for being elected as the President of Bangladesh Bank Club.</a>
                            <p class="rts__research--single--meta--excerpt">
                                Congratulations Mr. Nazmul Haque Kiron for being elected as the President of Bangladesh Bank Club. Executive Committee of MBM Alumni Society on behalf of the Alumni, Congratulated him today at his office. It is mentionable that Mr. Nazmul is also the Sports &...
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="researchinvalid link">
                                <img src="{{asset('bibm/assets/images/research/03.png')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="research3invalid link">Congratulations Mr. Muhommad Badiuzzaman Dider to the post of Director,  Bangladesh Bank.</a>
                            <p class="rts__research--single--meta--excerpt">
                                Congratulations to Mr. Nazmul Haque Kiron for being elected as the President of Bangladesh Bank Club. Executive Committee of MBM Alumni Society on behalf of the Alumni, Congratulated him today at his office. It is mentionable that Mr. Nazmul is also the Sports &...
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </div>
    <!-- university event list end -->

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
    <!-- newsletter end -->
  @include('home.footer')