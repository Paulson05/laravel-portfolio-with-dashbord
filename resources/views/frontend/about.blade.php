<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body class="contact">
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    @include('frontend.partials.switcher')
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    @include('frontend.partials.fixnavbar')
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        @include('frontend.partials.navbar')
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>ABOUT <span>ME</span></h1>
    <span class="title-bg">Resume</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Personal Info Starts -->
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                        <img src="{{asset('img/myimg.jpg')}}" class="img-fluid main-img-mobile" alt="my picture" />
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Okofu Onyebuchi</span> </li>
                           
                            <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">onyebuchiokofu@mail.com</span> </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">gravity fm igboho oyo state</span> </li>
                            <li> <span class="title">phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">09152406809, 07068420039</span> </li>

                            <li> <span class="title">Github :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><a href="https://github.com/Paulson05?tab=repositories">github.com/Paulson05</a></span> </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-3">
                        <a class="button" href="#">
                            <span class="button-text">Download CV</span>
                            <span class="button-icon fa fa-download"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Personal Info Ends -->
            <!-- Boxes Starts -->
            <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">2</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">9</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase"> laravel completed <span class="d-block">projects</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">0</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span class="d-block">customers</span></p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- Boxes Ends -->
        </div>
        <hr class="separator">
        <!-- Skills Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p25">
                    <span>55%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html/css</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p89">
                    <span>89%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">bootstrap</h6>
            </div>

            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p66">
                    <span>66%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php(laravel)</h6>
            </div>

            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p50">
                    <span>50%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
            </div>

        </div>

    </div>
        <!-- Skills Ends -->
        <hr class="separator mt-1">
        <!-- Experience & Education Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">October 2019-January2020</span>
                            <h5 class="poppins-font text-uppercase">Web Developer <span class="place open-sans-font">3months remote internship(Frontend Development) code360</span></h5>
                            <p class="open-sans-font">Build website layout, clone website with Htmls and css3.
                                Deploy website with free hosting servies like netlify.</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">May 2020-July2020</span>
                            <h5 class="poppins-font text-uppercase">Backend Development <span class="place open-sans-font">3months remote internship(HNG8)</span></h5>
                            <p class="open-sans-font">Designing of full stack wen application primarily with Html3, css3
                                Bootstrap4 jqery laravel and mysql</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">May 2021-july2021</span>
                            <h5 class="poppins-font text-uppercase">Fullstack web developmet) <span class="place open-sans-font">4months internship</span></h5>
                            <p class="open-sans-font">Intergrating third-party api and building of api.
                                Seeking to broaden knowledge of databases and deliver the
                                highest standards of web design
                                Developed an inventry Manament system(Pos), school
                                portal, hopital manament systems primarily Html, Css3
                                Boostrap4, jquery, ajax, Php(laravel), Mysql.
                                PERSONAL SKILLS
                                Html5 and Css3,
                                Vanila javascript,
                                Boostrap4,
                                2</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2012</span>
                            <h5 class="poppins-font text-uppercase">H.N.D <span class="place open-sans-font">Federal Polytechnic Auchi, Edo</span></h5>
                            <p class="open-sans-font">Higher National Diploma Electrical Eletronics Engineering</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2009</span>
                            <h5 class="poppins-font text-uppercase">O.N.D <span class="place open-sans-font">Delta State Polytechnic, Delta State</span></h5>
                            <p class="open-sans-font">Ordinary National Diploma Electrical Eletronics Engineering</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Experience & Education Ends -->
    </div>
</section>
<!-- Template JS Files -->
@include('frontend.partials.scripts')

</body>

</html>
