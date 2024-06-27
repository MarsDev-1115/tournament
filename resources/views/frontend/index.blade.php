@extends('frontend.layout.app2')

@section('content')

<main class="main home">
    <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase" data-owl-options="{
		'loop': true, 'dots': true
	}">
        <div class="home-slide home-slide1 banner">
            <div style="position: absolute; height: 415px; width:100%; background-image: linear-gradient(to right, #2B503D , rgba(255, 255, 255, 0));"></div>
            <img class="slide-bg" src="{{ asset('assets/img/slides/slide1.png') }}" width="1903" height="499" alt="slider image">

            <div class="container-fluid d-flex align-items-center">
                <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                    <h4 class="text-transform-none m-b-3 text-white text-uppercase">Welcome to Tournament Manager</h4>
                    <h2 class="text-transform-none mb-3">Enjoy our Tournament Exchange<br> and a lots of specials</h2>
                    <h4 class="text-transform-none m-b-3 text-white">Probably the best tournament exchange</h4>
                </div>
                <!-- End .banner-layer -->
            </div>
        </div>
        <!-- End .home-slide -->

        <div class="home-slide home-slide2 banner banner-md-vw">
            <img class="slide-bg" style="background-color: #ccc;" width="1903" height="499" src="assets/images/demoes/demo4/slider/slide-2.jpg" alt="slider image">
            <div class="container d-flex align-items-center">
                <div class="banner-layer d-flex justify-content-center appear-animate" data-animation-name="fadeInUpShorter">
                    <div class="mx-auto">
                        <h4 class="m-b-1">Extra</h4>
                        <h3 class="m-b-2">20% off</h3>
                        <h3 class="mb-2 heading-border">Accessories</h3>
                        <h2 class="text-transform-none m-b-4">Summer Sale</h2>
                        <a href="category.html" class="btn btn-block btn-dark">Shop All Sale</a>
                    </div>
                </div>
                <!-- End .banner-layer -->
            </div>
        </div>
        <!-- End .home-slide -->
    </div>
	@include('frontend.components.sponsor_section', array('position'=>'Top', 'page'=>'Home'))
    <!-- End .container -->
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-8">
                <div class="" style="height: 800px; background: #F3F1ED">

                </div>
            </div>
            <div class="col-4">
                <div class="" style="height: 800px;">
                    <img src="{{ asset('assets/img/official_sponsor.png') }}" />
                </div>
            </div>
        </div>
    </div>
    @include('frontend.components.sponsor_section', array('position'=>'Bottom', 'page'=>'Home'))
</main>

@endsection
<!-- End .main -->