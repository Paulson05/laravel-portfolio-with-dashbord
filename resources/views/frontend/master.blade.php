<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.head')
</head>

<body class="home">
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <!--   @include('frontend.partials.switcher')-->
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
<!-- Main Content Starts -->
@yield('body')
<!-- Main Content Ends -->

<!-- Template JS Files -->
@include('frontend.partials.scripts')

</body>

</html>
