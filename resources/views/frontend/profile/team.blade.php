@extends('frontend.layout.app')

@section('content')

<main class="main">

    <div class="" style="background: #C4F2B4; height: 80px; margin-top: 30px;">
        <div class="container-fluid">
            <div class="float-right d-flex pt-3">
                <a href="{{ route('profile.team.edit') }}" class="header-icon d-inline-block pt-2" title="Wishlist">
                    <img src="{{ asset('assets/img/icons/options.png') }}" />
                </a>
                <a href="#" class="header-icon d-inline-block pt-3 mr-5" title="Wishlist">
                    <img src="{{ asset('assets/img/icons/off.png') }}" />
                </a>
            </div>
        </div>

    </div>
    <div class="mt-5 pt-5 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-5">
                    <img src="{{ asset('assets/img/teams/image 2.png') }}" class="team-profile-logo mx-auto" />
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8  text-center">
                            <h2 style="font-size: 55px; color: #005B25;">Borrusia Monchengladbach</h2>
                        </div>
                        <div class="col-md-2">
                            <div class="team-profile-title-social float-right pr-5">
                                <div class="social-icons">
                                    <a href="http://www.google.com/" target="_blank" title="Google Plus" class="px-3"><i class="fas fa-share-alt"></i></a>
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook" class="px-3"><i class="fab fa-facebook-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr class="w-100">
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <span class="custom-badge">Confirmed</span>
                            <div class="team-point py-5 text-light-dark">6</div>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="custom-badge">Requested</span>
                            <div class="team-point py-5 text-light-dark">2</div>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="custom-badge">Waiting List</span>
                            <div class="team-point py-5 text-light-dark">8</div>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="custom-badge">Declined</span>
                            <div class="team-point py-5 text-light-dark">8</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <div class="sponsor-container container-fluid px-5 py-5">
        <div class="row">
            <div class="col-md-4 col-6">
                <div class="banner overlay-effect1 mb-3">
                    <figure>
                        <img src="{{ asset('assets/img/sponsors/sponsor logo 1.png') }}" alt="element-banner"></figure>
                    <div class="banner-layer banner-layer-middle text-center">
                        <h3 class=" text-white mb-0">Effect 1</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="banner overlay-opacity overlay-zoom mb-3">
                    <figure>
                        <img src="{{ asset('assets/img/sponsors/sponsor logo 2.png') }}" alt="element-banner"></figure>
                    <div class="banner-layer banner-layer-middle text-center">
                        <h3 class=" text-white mb-0">Opacity and Zoom</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="banner overlay-effect3 mb-3">
                    <figure>
                        <img src="{{ asset('assets/img/sponsors/sponsor logo 3.png') }}" alt="element-banner"></figure>
                    <div class="banner-layer banner-layer-middle text-center">
                        <h3 class=" text-white mb-0">Effect 3</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 mb-5 pb-5">
        <div class="container box-shadow-4 pt-5 pb-5" style="border-radius: 10px;">
            <div class="row pb-5">
                <div class="col-md-12">
                    <div class="row my-5">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-center">
                            <h2 style="color: #02B256; font-size: 40px;">Next Tournament</h2>
                        </div>
                        <div class="col-md-4 pt-3">
                            <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-primary-button" style="color: #FFF; border-color: #FFF; font-size: 18px;">
                                Next
                            </a>
                            <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-light-button" style="color: #555555; border-color: #555555; font-size: 18px;">
                                Old
                            </a>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="mx-auto px-4" style="height: 600px; overflow-y: scroll; ">
                            @for ($i=0; $i<10; $i++)
                                <div class="card bg-color-light border-0 box-shadow-5 tournament-box mb-2 py-3">
                                    <div class="card-body">
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <div class="tournament-date-card tournament-start">
                                                    <div class="tournament-date-card-header text-center">
                                                        <span>Feb 2024</span>
                                                    </div>
                                                    <div class="tournament-date-day">
                                                        12
                                                    </div>
                                                    <div class="tournament-date-time">
                                                        <span>10:30 AM</span>
                                                    </div>
                                                </div>
                                                <div class="tournament-date-card tournament-end ml-4">
                                                    <div class="tournament-date-card-header text-center">
                                                        <span>Feb 2024</span>
                                                    </div>
                                                    <div class="tournament-date-day">
                                                        12
                                                    </div>
                                                    <div class="tournament-date-time">
                                                        <span>10:30 AM</span>
                                                    </div>
                                                </div>
                                                <div class="pl-5">
                                                    <a class="tournament-title" href="{{ route('tournaments.detail', ['slug' => 1]) }}">1. U9 Herbst Cup</a>
                                                    <div class="tournament-location d-flex flex-row align-items-center">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <div class="pl-3">
                                                            <h4 class="mb-0">Deutschland, Essen</h4>
                                                            <span>15 km away</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tournament-detail text-right">
                                                <div class="float-right mb-3">
                                                    <span class="avatar-number active">W</span>
                                                    <span class="avatar-number active">U11</span>
                                                    <span class="avatar-number">16T</span>
                                                    <span class="avatar-number"><i class="sicon-lock-open"></i></span>
                                                </div>
                                                @auth
                                                <a class="btn btn-primary btn-md mr-0 custom-primary-button request" href="#" style="text-decoration: none;">
                                                    Request
                                                </a>
                                                @else
                                                <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none;">
                                                    Log in to join
                                                </a>
                                                @endauth
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @endfor
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>

@endsection
