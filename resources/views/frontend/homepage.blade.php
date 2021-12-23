@extends('frontend.master')
@section('title', '| home')
@section('body')
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="img/myimg.jpg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h1 class="text-uppercase poppins-font">I'm Okofu onyebuchi t.<span>Back-end Developer</span></h1>
                <p class="open-sans-font">I'm a Nigeria based Web developer & Backend‑end developer focused on crafting clean & user‑friendly experiences, I am passionate about building excellent software that improves the lives of those around me.</p>
                <a class="button" href="{{route('home.about')}}">
                    <span class="button-text">more about me</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
