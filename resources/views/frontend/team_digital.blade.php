@extends('frontend.layout.app2')

@section('content')

<main class="main home">
    <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase team-digital" data-owl-options="{
		'loop': true, 'dots': true
	}">
        <div class="home-slide home-slide1 banner">
            <div style="position: absolute; height: 1000px; width:100%; background-image: linear-gradient(to right, #2B503D , rgba(255, 255, 255, 0));"></div>
            <img class="slide-bg" src="{{ asset('assets/img/slides-2/slide-1.png') }}" width="1903" height="1000" alt="slider image">

            <div class="container-fluid d-flex align-items-center">
                <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                    <h4 class="text-transform-none m-b-3 text-white text-uppercase">Welcome to Tournament Manager</h4>
                    <h2 class="text-transform-none mb-3">Enjoy our Tournament Exchange <br />and a lots of specials</h2>
                    <h4 class="text-transform-none m-b-3 text-white">Probably the best tournament exchange</h4>
                </div>
                <!-- End .banner-layer -->
            </div>
        </div>
        <!-- End .home-slide -->
        
        <div class="home-slide home-slide1 banner">
            <div style="position: absolute; height: 1000px; width:100%; background-image: linear-gradient(to right, #2B503D , rgba(255, 255, 255, 0));"></div>
            <img class="slide-bg" src="{{ asset('assets/img/slides-2/slide-1.png') }}" width="1903" height="1000" alt="slider image">

            <div class="container-fluid d-flex align-items-center">
                <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                    <h4 class="text-transform-none m-b-3 text-white text-uppercase">Welcome to Tournament Manager</h4>
                    <h2 class="text-transform-none mb-3">Enjoy our Tournament Exchange <br />and a lots of specials</h2>
                    <h4 class="text-transform-none m-b-3 text-white">Probably the best tournament exchange</h4>
                </div>
                <!-- End .banner-layer -->
            </div>
        </div>
        <!-- End .home-slide -->
    </div>
	@include('frontend.components.sponsor_section', array('position'=>'Top', 'page'=>'Team Digital'))

    @include('frontend.components.sponsor_section', array('position'=>'Bottom', 'page'=>'Team Digital'))
</main>

@endsection
<!-- End .main -->