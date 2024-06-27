@extends('frontend.layout.app')

@section('content')

<main class="main">
    <div class="category-banner-container bg-gray">
        <div class="category-banner banner text-uppercase" style="background: #E6EFD2;">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-9" style="border-right: 1px solid #6B6565;">
                        <h2 class="py-5" style="color: #737373; font-size: 45px; font-weight: 700;">Manange Requests</h2>
                        <div class="d-flex justify-content-between">
                            <div class="pr-5 mt-1">
                                <div class="jusity-content-end float-right">
                                    <div class="d-flex flex-row">
                                        <div class="tournament-date-card tournament-start box-shadow-5 bg-white">
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
                                        <div class="tournament-date-card tournament-end ml-4 box-shadow-5 bg-white">
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
                                    </div>
                                    <div class="tournament-stand box-shadow-5 py-3 mt-1">
                                        Stand 10.10.2023
                                    </div>
                                </div>
                            </div>

                            <div class="tournament-detail-title-wrapper">
                                <div class="tournament-detail-title" style="font-size: 45px;">U8 Qualifikationsturnier für den U8 REWE Richrath Pfingstcup</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 text-center pt-5">
                        <a href="#" style="background: #109555; text-transform: uppercase; font-size: 26px; color: #FFFFFF; border-radius: 5px; padding: 10px 20px;">Fully Booked</a>
                        <div class="row mt-5">
                            <div class="col-md-4"><div class="custom-bubble-light float-right">16</div></div>
                            <div class="col-md-8"><div class="custom-bubble-light" style="width: 100%;">Confirmed</div></div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4"><div class="custom-bubble-light float-right">16</div></div>
                            <div class="col-md-8"><div class="custom-bubble-light" style="width: 100%;">Planned</div></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 style="font-size: 40px; font-weight: 700; color: #02B256;">Team's Requests</h2>
                </div>
            </div>
            <div class="row mt-4">

                <div class="col-md-3 text-center">
                    <span style="font-size: 30px; color: #6B6565; font-weight: 500;">Confirmed</span>
                    <div class="team-point py-2 mt-5" style="background: #12AA58; border-radius: 5px; color: #FFFFFF;">4</div>
                </div>
                <div class="col-md-3 text-center">
                    <span style="font-size: 30px; color: #6B6565; font-weight: 500;" >Requested</span>
                    <div class="team-point py-2 mt-5" style="background: #FFE500; border-radius: 5px; color: #FFFFFF;">4</div>
                </div>
                <div class="col-md-3 text-center">
                    <span style="font-size: 30px; color: #6B6565; font-weight: 500;" >Waiting List</span>
                    <div class="team-point py-2 mt-5" style="background: #1BD741; border-radius: 5px; color: #FFFFFF;">11</div>
                </div>
                <div class="col-md-3 text-center">
                    <span style="font-size: 30px; color: #6B6565; font-weight: 500;">Declined</span>
                    <div class="team-point py-2 mt-5" style="background: #B5182C; border-radius: 5px; color: #FFFFFF;">2</div>
                </div>

            </div>
        </div>
    </section>

    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h4 style="color: #1BD741; font-size: 30px; font-weight: 700;">Requests (17)</h4>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #1BD741; border: none;">
                                            Confirm
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #FFE500; border: none;">
                                            Waiting list
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none;">
                                            Decline
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #1BD741; border: none;">
                                            Confirm
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #FFE500; border: none;">
                                            Waiting list
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none;">
                                            Decline
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #1BD741; border: none;">
                                            Confirm
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #FFE500; border: none;">
                                            Waiting list
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none;">
                                            Decline
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto text-right">

                        <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-light-button" style="color: #109545; border-color: #109545; font-size: 16px;">
                        <i class="far fa-comment-dots"></i> &nbsp; Message All
                    </a>
                    <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 16px;">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h4 style="color: #FFE500; font-size: 30px; font-weight: 700;">Waiting List (4)</h4>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #1BD741; border: none;">
                                            Confirm
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none;">
                                            Decline
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #1BD741; border: none;">
                                            Confirm
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none;">
                                            Decline
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #1BD741; border: none;">
                                            Confirm
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none;">
                                            Decline
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto text-right">

                        <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-light-button" style="color: #109545; border-color: #109545; font-size: 16px;">
                        <i class="far fa-comment-dots"></i> &nbsp; Message All
                    </a>
                    <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 16px;">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h4 style="color: #02B256; font-size: 30px; font-weight: 700;">Confirmed (4)</h4>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #19BB6D; border: none; border-radius: 3px;">
                                            Confirmed
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none;">
                                            Decline
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #19BB6D; border: none; border-radius: 3px;">
                                            Confirmed
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none;">
                                            Decline
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #19BB6D; border: none; border-radius: 3px;">
                                            Confirmed
                                        </a>
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none;">
                                            Decline
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto text-right">

                        <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-light-button" style="color: #109545; border-color: #109545; font-size: 16px;">
                        <i class="far fa-comment-dots"></i> &nbsp; Message All
                    </a>
                    <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 16px;">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h4 style="color: #B5182C; font-size: 30px; font-weight: 700;">Declined (4)</h4>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">

                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none; border-radius: 3px;">
                                            Declined
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none; border-radius: 3px;">
                                            Declined
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="box-shadow-4 w-100 p-4 mb-3">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                            <div class="pl-5 w-100">
                                <div class="d-flex">
                                    <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                        Atlanta United FC
                                    </div>
                                    <div class="pl-5 pt-1" style="color: #555555; font-size: 18px; font-weight: 500;">
                                        Coach: Adam Nowak, +48 765 432 100
                                    </div>
                                </div>
                                <div class="pt-1" style="color: #555555; font-size: 16px; font-weight: 500;">31.12.2023</div>
                                <div class="d-flex justify-content-between">
                                    <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Deutschland</h4>
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <a class="btn btn-primary btn-md mr-0 custom-primary-button" href="{{ route('login') }}" style="text-decoration: none; background: #B5182C; border: none; border-radius: 3px;">
                                            Declined
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto text-right">

                        <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-light-button" style="color: #109545; border-color: #109545; font-size: 16px;">
                        <i class="far fa-comment-dots"></i> &nbsp; Message All
                    </a>
                    <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 16px;">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </section>




    <div class="mb-4"></div>

</main>

@endsection
