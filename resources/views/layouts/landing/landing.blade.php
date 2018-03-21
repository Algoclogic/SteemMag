<?php
/**
 * Created by PhpStorm.
 * User: danishmmir
 * Date: 2/3/18
 * Time: 11:06 PM
 */
?>
<!DOCTYPE html>

<html lang="en-US">

<head>

<!-- Page meta, page css, page js files, page title etc... -->
    @include('layouts.landing.head')


</head>

<body>


    <!-- MAIN WRAPPER -->
    <div class="wrapper" id="wrapper">

        {{--<!-- TOP NAVBAR -->--}}
        {{--<div id="topbar" class="visible-md visible-lg">--}}
            {{--<div class="container">--}}
                {{--@include('layouts.includes.topbar')--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- END: TOP NAVBAR -->--}}


        <!-- HEADER -->
        <header id="header" class="header-transparent header-fullwidth">
            @include('layouts.includes.header')
        </header>
        <!-- END: HEADER -->

        <!-- SECTION -->
        <section id="slider">
            @yield('slider')
        </section>
        <!-- END: SECTION -->

        {{--<!-- SECTION -->--}}
        {{--<section class="p-t-60 p-b-40">--}}
            {{--<div class="container">--}}
                {{--@yield('boxes')--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<!-- END: SECTION -->--}}

        {{--<!-- SECTION -->--}}
        {{--<section class="background-dark">--}}
            {{--<div class="container">--}}
                {{--@yield('carousel')--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<!-- END: SECTION -->--}}

        {{--<!-- SECTION -->--}}
        {{--<section class="p-t-20 p-b-40">--}}
            {{--<div class="container">--}}
                {{--@yield('promotions-top')--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<!-- END: SECTION -->--}}

        {{--<!-- SECTION -->--}}
        {{--<section class="p-t-0 p-b-40">--}}
            {{--<div class="container">--}}
                {{--@yield('categories-top')--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<!-- END: SECTION -->--}}

        {{--<!-- SECTION -->--}}
        {{--<section class="p-t-0 p-b-40">--}}
            {{--<div class="container">--}}
                {{--@yield('promotions-bottom')--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<!-- END: SECTION -->--}}

        {{--<!-- SECTION -->--}}
        {{--<section class="p-t-0 p-b-40">--}}
            {{--<div class="container">--}}
                {{--@yield('categories-bottom')--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<!-- END: SECTION -->--}}

        {{--<!-- CALL TO ACTION -->--}}
        {{--@yield('call-to-action')--}}
        {{--<!-- END: CALL TO ACTION -->--}}

        <!-- FOOTER -->
        <footer class="light" id="footer">
            <div class="footer-content">
                <div class="container">
                    @include('layouts.includes.footer')
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    @include('layouts.includes.cr-content')
                </div>
            </div>
        </footer>
        <!-- END: FOOTER -->

    </div>
    <!-- END: MAIN WRAPPER -->

    <!-- GO TO TOP -->
        @yield('go2top')
    <!-- END: GO TO TOP -->

    <!-- FOOT -->

    @include('layouts.landing.foot')

    <!-- END: FOOT -->


</body>

</html>