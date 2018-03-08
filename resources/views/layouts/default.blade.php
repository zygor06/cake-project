<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.codeopus.net/cakesdream/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Mar 2018 20:41:57 GMT -->
@include('includes.head')
<body class="demo-1">
<div class="ip-container" id="ip-container">
    <!--initial header-->
    <header class="ip-header">
        <div class="ip-loader">
            <svg class="ip-inner" height="60px" viewbox="0 0 80 80" width="60px"><path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path><path class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" id="ip-loader-circle"></path></svg>
        </div>
    </header>
    <!--main content-->
    <div class="ip-main">
        <div class="top-highlight hide">
            &nbsp;
        </div>
        <!-- Start Header Cake -->
        @yield('header')
        <!-- End Header Cake -->
        <!-- Start Content Cake -->
        @yield('content')
        <!-- End Content Cake -->
        @include('includes.footer')
    </div>
</div>
@include('includes.scripts')
</body>
</html>
