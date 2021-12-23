<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>onyebuchi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('assets3/img/favicon.png')}}" rel="icon">
    <link href="{{url('assets3/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets3/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets3/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('assets3/vendor/ionicons/css/ionicons.min.css" rel="stylesheet')}}">
    <link href="{{url('assets3/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('assets3/vendor/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('assets3/css/style.css')}}" rel="stylesheet">


</head>

<body id="page-top">


<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">3UCC!</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll active" href="frontend/homepage.blade.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#work">Porfolio</a>
                </li>
                {{--          <li class="nav-item">--}}
                    {{--            <a class="nav-link js-scroll" href="#blog">Blog</a>--}}
                    {{--          </li>--}}
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#contact">My contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ======= Intro Section ======= -->
<div id="" class="intro route bg-image" style="background:red;">
    <div class="overlay-intro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="intro-title mb-4">I am {{$homes->first()->title}}</h1>
                <p class="intro-subtitle"><span class="text-slider-items">{{$homes->first()->sub_title}}</span><strong class="text-slider"></strong></p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
    </div>
</div><!-- End Intro Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="assets3/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>{{$about->first()->name}}</span></p>
                                            <p><span class="title-s">Profile: </span> <span>{{$about->first()->profile}}</span></p>
                                            <p><span class="title-s">Email: </span> <span>{{$about->first()->email}}</span></p>
                                            <p><span class="title-s">Phone: </span> <span>{{$about->first()->phone_number}}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Skill</p>

                                    @foreach($skills as $skill)
                                    <span>{{$skill->language}}</span> <span class="pull-right">{{$skill->percentage}}%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{$skill->bar}}%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>

                                    <p class="lead">
                                        {{$about->first()->about_me}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Services
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="{{$service->ion_ico}}"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title"> {{$service->title}}</h2>
                            <p class="s-description text-center">
                                {{$service->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter"> {{$counter->first()->counter}}</p>
                            <span class="counter-text">WORKS COMPLETED</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">{{$counter->first()->years_of_experience}}</p>
                            <span class="counter-text">YEARS OF EXPERIENCE</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-people"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">{{$counter->first()->total_client}}</p>
                            <span class="counter-text">TOTAL CLIENTS</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">{{$counter->first()->certificate}}</p>
                            <span class="counter-text">certificate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($portfolios as $portfolio)
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets3/img/work-1.jpg" data-gall="portfolioGallery" class="venobox">
                            <div class="work-img">
                                <img src="assets3/img/work-1.jpg" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">{{$portfolio->title}}</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">{{$portfolio->category}}</span> / <span class="w-date">{{$portfolio->date}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    {{--    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets3/img/overlay-bg.jpg)">--}}
        {{--      <div class="overlay-mf"></div>--}}
        {{--      <div class="container">--}}
            {{--        <div class="row">--}}
                {{--          <div class="col-md-12">--}}
                    {{--            <div id="testimonial-mf" class="owl-carousel owl-theme">--}}
                        {{--              <div class="testimonial-box">--}}
                            {{--                <div class="author-test">--}}
                                {{--                  <img src="assets3/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">--}}
                                {{--                  <span class="author">Xavi Alonso</span>--}}
                                {{--                </div>--}}
                            {{--                <div class="content-test">--}}
                                {{--                  <p class="description lead">--}}
                                    {{--                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,--}}
                                    {{--                    consectetur adipiscing elit.--}}
                                    {{--                  </p>--}}
                                {{--                  <span class="comit"><i class="fa fa-quote-right"></i></span>--}}
                                {{--                </div>--}}
                            {{--              </div>--}}
                        {{--              <div class="testimonial-box">--}}
                            {{--                <div class="author-test">--}}
                                {{--                  <img src="assets3/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">--}}
                                {{--                  <span class="author">Marta Socrate</span>--}}
                                {{--                </div>--}}
                            {{--                <div class="content-test">--}}
                                {{--                  <p class="description lead">--}}
                                    {{--                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,--}}
                                    {{--                    consectetur adipiscing elit.--}}
                                    {{--                  </p>--}}
                                {{--                  <span class="comit"><i class="fa fa-quote-right"></i></span>--}}
                                {{--                </div>--}}
                            {{--              </div>--}}
                        {{--            </div>--}}
                    {{--          </div>--}}
                {{--        </div>--}}
            {{--      </div>--}}
        {{--    </div><!-- End Testimonials Section -->--}}

    {{--    <!-- ======= Blog Section ======= -->--}}
    {{--    <section id="blog" class="blog-mf sect-pt4 route">--}}
        {{--      <div class="container">--}}
            {{--        <div class="row">--}}
                {{--          <div class="col-sm-12">--}}
                    {{--            <div class="title-box text-center">--}}
                        {{--              <h3 class="title-a">--}}
                            {{--                Blog--}}
                            {{--              </h3>--}}
                        {{--              <p class="subtitle-a">--}}
                            {{--                Lorem ipsum, dolor sit amet consectetur adipisicing elit.--}}
                            {{--              </p>--}}
                        {{--              <div class="line-mf"></div>--}}
                        {{--            </div>--}}
                    {{--          </div>--}}
                {{--        </div>--}}
            {{--        <div class="row">--}}
                {{--          <div class="col-md-4">--}}
                    {{--            <div class="card card-blog">--}}
                        {{--              <div class="card-img">--}}
                            {{--                <a href="blog-single.html"><img src="assets3/img/post-1.jpg" alt="" class="img-fluid"></a>--}}
                            {{--              </div>--}}
                        {{--              <div class="card-body">--}}
                            {{--                <div class="card-category-box">--}}
                                {{--                  <div class="card-category">--}}
                                    {{--                    <h6 class="category">Travel</h6>--}}
                                    {{--                  </div>--}}
                                {{--                </div>--}}
                            {{--                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>--}}
                            {{--                <p class="card-description">--}}
                                {{--                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis--}}
                                {{--                  a pellentesque nec,--}}
                                {{--                  egestas non nisi.--}}
                                {{--                </p>--}}
                            {{--              </div>--}}
                        {{--              <div class="card-footer">--}}
                            {{--                <div class="post-author">--}}
                                {{--                  <a href="#">--}}
                                    {{--                    <img src="assets3/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">--}}
                                    {{--                    <span class="author">Morgan Freeman</span>--}}
                                    {{--                  </a>--}}
                                {{--                </div>--}}
                            {{--                <div class="post-date">--}}
                                {{--                  <span class="ion-ios-clock-outline"></span> 10 min--}}
                                {{--                </div>--}}
                            {{--              </div>--}}
                        {{--            </div>--}}
                    {{--          </div>--}}
                {{--          <div class="col-md-4">--}}
                    {{--            <div class="card card-blog">--}}
                        {{--              <div class="card-img">--}}
                            {{--                <a href="blog-single.html"><img src="assets3/img/post-2.jpg" alt="" class="img-fluid"></a>--}}
                            {{--              </div>--}}
                        {{--              <div class="card-body">--}}
                            {{--                <div class="card-category-box">--}}
                                {{--                  <div class="card-category">--}}
                                    {{--                    <h6 class="category">Web Design</h6>--}}
                                    {{--                  </div>--}}
                                {{--                </div>--}}
                            {{--                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>--}}
                            {{--                <p class="card-description">--}}
                                {{--                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis--}}
                                {{--                  a pellentesque nec,--}}
                                {{--                  egestas non nisi.--}}
                                {{--                </p>--}}
                            {{--              </div>--}}
                        {{--              <div class="card-footer">--}}
                            {{--                <div class="post-author">--}}
                                {{--                  <a href="#">--}}
                                    {{--                    <img src="assets3/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">--}}
                                    {{--                    <span class="author">Morgan Freeman</span>--}}
                                    {{--                  </a>--}}
                                {{--                </div>--}}
                            {{--                <div class="post-date">--}}
                                {{--                  <span class="ion-ios-clock-outline"></span> 10 min--}}
                                {{--                </div>--}}
                            {{--              </div>--}}
                        {{--            </div>--}}
                    {{--          </div>--}}
                {{--          <div class="col-md-4">--}}
                    {{--            <div class="card card-blog">--}}
                        {{--              <div class="card-img">--}}
                            {{--                <a href="blog-single.html"><img src="assets3/img/post-3.jpg" alt="" class="img-fluid"></a>--}}
                            {{--              </div>--}}
                        {{--              <div class="card-body">--}}
                            {{--                <div class="card-category-box">--}}
                                {{--                  <div class="card-category">--}}
                                    {{--                    <h6 class="category">Web Design</h6>--}}
                                    {{--                  </div>--}}
                                {{--                </div>--}}
                            {{--                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>--}}
                            {{--                <p class="card-description">--}}
                                {{--                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis--}}
                                {{--                  a pellentesque nec,--}}
                                {{--                  egestas non nisi.--}}
                                {{--                </p>--}}
                            {{--              </div>--}}
                        {{--              <div class="card-footer">--}}
                            {{--                <div class="post-author">--}}
                                {{--                  <a href="#">--}}
                                    {{--                    <img src="assets3/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">--}}
                                    {{--                    <span class="author">Morgan Freeman</span>--}}
                                    {{--                  </a>--}}
                                {{--                </div>--}}
                            {{--                <div class="post-date">--}}
                                {{--                  <span class="ion-ios-clock-outline"></span> 10 min--}}
                                {{--                </div>--}}
                            {{--              </div>--}}
                        {{--            </div>--}}
                    {{--          </div>--}}
                {{--        </div>--}}
            {{--      </div>--}}
        {{--    </section><!-- End Blog Section -->--}}

    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Send Message Us
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="{{route('postemail')}}" method="post"  >
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  />

                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  />

                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  />

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"  placeholder="Message"></textarea>

                                                    </div>
                                                </div>

                                                <div class="col-md-12 text-left">
                                                    <button type="submit" class="button button-a button-sm button-rouded">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Get in Touch
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                                            expedita aperiam aliquid at.
                                            Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                                            mollitia inventore?
                                        </p>
                                        <ul class="list-ico">
                                            <li><span class="ion-ios-location"></span> 329 WASHINGTON ST BOSTON, MA 02108</li>
                                            <li><span class="ion-ios-telephone"></span> (617) 557-0089</li>
                                            <li><span class="ion-email"></span> contact@example.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright-box">
                    <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                    <div class="credits">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                      -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets3/vendor/jquery/jquery.min.js"></script>
<script src="assets3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets3/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets3/vendor/php-email-form/validate.js"></script>
<script src="assets3/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets3/vendor/counterup/jquery.counterup.min.js"></script>
<script src="assets3/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets3/vendor/typed.js/typed.min.js"></script>
<script src="assets3/vendor/venobox/venobox.min.js"></script>

<!-- Template Main JS File -->
<script src="assets3/js/main.js"></script>

</body>

</html>
