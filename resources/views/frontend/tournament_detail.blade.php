@extends('frontend.layout.app')

@section('content')

<main class="main">
    <div class="category-banner-container bg-gray">
        <div class="category-banner banner text-uppercase" style="background: #E6EFD2;">
            <div class="container-fluid position-relative">
                <div class="row">
                    <div class="col-md-2 pr-5">
                        <div class="jusity-content-end float-right">
                            <div class="d-flex flex-row">
                                <div class="tournament-date-card tournament-start box-shadow-5 bg-white">
                                    <div class="tournament-date-card-header text-center">
                                        {{ date('M Y', strtotime($tournament->fromDate)) }}
                                    </div>
                                    <div class="tournament-date-day">
                                        {{ date('d', strtotime($tournament->fromDate)) }}
                                    </div>
                                    <div class="tournament-date-time">
                                        <span>{{$tournament->fromTime}}</span>
                                    </div>
                                </div>
                                <div class="tournament-date-card tournament-end ml-4 box-shadow-5 bg-white">
                                    <div class="tournament-date-card-header text-center">
                                        <span>{{ date('M Y', strtotime($tournament->toDate)) }}</span>
                                    </div>
                                    <div class="tournament-date-day">
                                        {{ date('d', strtotime($tournament->toDate)) }}
                                    </div>
                                    <div class="tournament-date-time">
                                        <span>{{$tournament->toTime}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 tournament-detail-title-wrapper">
                        <h2 class="tournament-detail-title">{{$tournament->tournament_name}}</h2>
                        <div class="mt-3">
                            <span class="avatar-number active mr-3">{{$tournament->gender}}</span>
                            <span class="avatar-number active mr-3">{{$tournament->group}}</span>
                            <span class="avatar-number mr-3">{{$tournament->number_fo_teams}}T</span>
                            <span class="avatar-number mr-3"><i class="sicon-lock-open"></i></span>
                        </div>
                    </div>
                    <div class="col-md-2 pr-5">
                        <div class="tournament-detail-social float-right pr-5">
                            <div class="social-icons">
                                <a href="http://www.google.com/" target="_blank" title="Google Plus" class="px-2"><i class="fas fa-share-alt"></i></a>
                                <a href="http://www.facebook.com/" target="_blank" title="Facebook" class="px-2"><i class="fab fa-facebook-square"></i></a>
                                <a href="http://www.instagram.com/" target="_blank" title="Instagram" class="px-2"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 100%;">
                    <div style="position: absolute; bottom: -100px; text-align: center; width: 100%;">
                    	@auth
                    	<a class="btn btn-primary btn-md mr-0 custom-primary-button" href="" style="text-decoration: none; font-size: 20px; padding-left: 80px; padding-right: 80px;">
                            Request
                        </a>
                    	@else
                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; font-size: 20px; padding-left: 80px; padding-right: 80px;">
                            Log in to request
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brands-section mt-5 mb-5 appear-animate" data-animation-delay="200" data-animation-name="fadeIn" data-animation-duration="1000">
        <div class="container-fluid" style="padding: 100px;">
            <div class="brands-slider owl-carousel owl-theme images-center" data-owl-options="{'margin': 0}">
                <a href="{{ route('teams.detail', ['slug' => '1']) }}"><img src="{{ asset('assets/img/teams/image 1.png') }}" width="180" alt="brand"></a>
            </div>
            <!-- End .brands-slider -->
        </div>
    </div>
	@foreach($tournament->tournament_teams as $tournament_team)
		@foreach($tournament_team as $team)
		
		@endforeach
	@endforeach
    @auth
    <div class="pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-3 px-4">
                    <img src="{{ asset('tournaments-img/'.$tournament->image) }}" style="margin: 0 auto;" />
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <h2 class="heading-custom py-5 mb-0">Tournament Details</h2>
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                    </div>
                    <table class="tournament-deatail-table">
                        <tbody>
                            <tr>
                                <td width="40%">Address</td>
                                <td>{{$tournament->street}} {{$tournament->city}} {{$tournament->zip_code}}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>@isset($tournament->country_name->name) {{$tournament->country_name->name}} @endisset</td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>{{$tournament->website}}</td>
                            </tr>
                            <tr>
                                <td>Number of groups</td>
                                <td>{{$tournament->number_of_groups}}</td>
                            </tr>
                            <tr>
                                <td>Participants</td>
                                <td>{{$tournament->number_fo_teams}}</td>
                            </tr>
                            <tr>
                                <td>Playtime</td>
                                <td>{{$tournament->playtime}} min</td>
                            </tr>
                            <tr>
                                <td>Pitches</td>
                                <td>{{$tournament->pitch}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4 py-3">
                            <img src="{{ asset('organiser-img/'.$tournament->organiser->image) }}" class="organiser-avatar mx-auto" />
                        </div>
                        <div class="col-md-8">
                            <h2 class="heading-custom py-5 mb-0">Organiser</h2>
                        </div>
                    </div>

                    <table class="tournament-deatail-table">
                        <tbody>
                            <tr>
                                <td width="40%">Name</td>
                                <td>{{$tournament->organiser->organiser_name}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{$tournament->organiser->street}} {{$tournament->organiser->city}} {{$tournament->organiser->zip_code}}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{$tournament->organiser->country_name->name}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{$tournament->organiser->users->phone}}</td>
                            </tr>
                            <tr>
                                <td>Email Address</td>
                                <td>{{$tournament->organiser->users->email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container mt-5 tournament-info pt-5 pb-5">
            <h1>Info</h1>
            <p>The winner qualifies for the 36th international EuroCup 2024 from February 4-6, 2024 with the following participating teams:</p>
            <p>Vfl Bochum, Beyern Munchen, Borussia Dortmund, Burnley FC Eintracht Frankfurt, FC Basel, Legia Warsaw, PSV Eindhoven, Union Berlin, TSG Hoffenheim, RB Leipzig, RW Essen, FC St. Pauli, FC Utrecht, Az Almaar, 1. FC Nurnberg , Fortuna Dusseldorf, Spvgg. Unterhaching, 1 FC Koin, Hansa Rostock Feyenoord Rotterdam, Vitesse Arnheim, Manchester City, Juventus Turin...</p>
            <p>We are looking forward to your application...</p>
            <img src="{{ asset('assets/img/map-example.png') }}" width="100%" class="mt-3 mb-5" />
        </div>
    </div>
    @endauth

    <div class="section-receommend" style="background: #18CD3D; padding-top: 100px; padding-bottom: 100px;">
        <div class="container">
            <h2 style="color: #FFF; font-size: 26px;">Recommendations</h2>
            <hr class="mt-2">
            <div class="row">
                @if($tournaments)
                @foreach($tournaments as $tournament)
                <div class="col-md-6">
                    <div class="card bg-color-light border-0 box-shadow-5 tournament-box mb-2">
                        <div class="card-body p-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-row">
                                    <div class="tournament-date-card tournament-start">
                                        <div class="tournament-date-card-header text-center">
                                            <span>Feb 2024</span>
                                        </div>
                                        <div class="tournament-date-day">
                                            {{ date('d', strtotime($tournament->fromDate)) }}
                                        </div>
                                        <div class="tournament-date-time">
                                            <span>{{$tournament->fromTime}}</span>
                                        </div>
                                    </div>
                                    <div class="tournament-date-card tournament-end ml-4">
                                        <div class="tournament-date-card-header text-center">
                                            <span>{{ date('M Y', strtotime($tournament->toDate)) }}</span>
                                        </div>
                                        <div class="tournament-date-day">
                                            {{ date('d', strtotime($tournament->toDate)) }}
                                        </div>
                                        <div class="tournament-date-time">
                                            <span>{{$tournament->toTime}}</span>
                                        </div>
                                    </div>
                                    <div class="pl-5">
                                        <a class="tournament-title" href="{{ route('tournaments.detail', ['slug' => 1]) }}" style="font-size: 22px;">1. U9 Herbst Cup</a>
                                        <div class="tournament-location d-flex flex-row align-items-center">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="pl-3">
                                                <h4 class="mb-0">{{$tournament->street}} {{$tournament->city}} {{$tournament->zip_code}} @isset($tournament->country_name->name) {{$tournament->country_name->name}} @endisset</h4>
                                                <span>15 km away</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tournament-detail text-right">
                                    <div class="float-right mb-3">
                                        <span class="avatar-number active">{{$tournament->gender}}</span>
                                        <span class="avatar-number active">{{$tournament->group}}</span>
                                        <span class="avatar-number">{{$tournament->number_fo_teams}}T</span>
                                        <span class="avatar-number"><i class="sicon-lock-open"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('tournaments') }}" style="border-radius: 5px;">View All</a>
                </div>
            </div>
        </div>

        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="mb-4"></div>
    <!-- margin -->

    @include('frontend.components.sponsor_section', array('position'=>'Bottom', 'page'=>'Tournaments'))

</main>

@endsection
