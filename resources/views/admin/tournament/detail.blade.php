@extends('admin.layout.app')

@section('content')

<div class="container-fluid">
    <div class="pl-5"><a href="#" style="color: #005B25; font-size: 20px; font-weight: 700;"><i class="sicon-home"></i> &nbsp;> Tournaments > Tournament Details</a></div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="row mt-5">
                <div class="col-md-8 pr-5">
                    <div class="category-banner-container bg-gray">
                        <div class="category-banner banner text-uppercase" style="background: #FFFFFF;">
                            <div class="container-fluid position-relative">
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="jusity-content-end pr-5">
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

                                        </div>
                                        <div class="tournament-detail-title-wrapper">
                                            <h2 class="tournament-detail-title" style="font-size: 30px;">U8 Qualifikationsturnier für den U8 REWE Richrath Pfingstcup</h2>
                                            <div class="mt-3">
                                                <span class="avatar-number active mr-3">W</span>
                                                <span class="avatar-number active mr-3">U11</span>
                                                <span class="avatar-number mr-3">16T</span>
                                                <span class="avatar-number mr-3"><i class="sicon-lock-open"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="tournament-location d-flex flex-row align-items-center">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="pl-3">
                                                <h4 class="mb-0">Deutschland, Essen</h4>
                                                <span>15 km away</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 p-5 box-shadow-4" style="border: 1px solid #e8e8e8; border-radius: 10px;">
                            <h4  style="font-size: 25px; font-weight: 700; color: #109555;">Requests</h4>
                            <img src="{{ asset('assets/img/chart.png') }}" />
                        </div>
                        <div class="col-md-12">
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
                        </div>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class="row  p-5 box-shadow-4" style="border: 1px solid #e8e8e8; border-radius: 10px;">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 py-3">
                                    <img src="{{ asset('assets/img/team-user-1.png') }}" class="organiser-avatar mx-auto" />
                                </div>
                                <div class="col-md-8">
                                    <h2 class="heading-custom py-5 mb-0">Organiser</h2>
                                </div>
                            </div>

                            <table class="tournament-deatail-table">
                                <tbody>
                                    <tr>
                                        <td width="40%">Name</td>
                                        <td>Bastian Propper</td>
                                    </tr>
                                    <tr>
                                        <td>Team Name</td>
                                        <td>RW Essen</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>Backumer Str. 29</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>0172/9301840</td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td>eurocup@bwwlangenbochum.de</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <h2 class="heading-custom py-5 mb-0">Tournament Details</h2>
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                            </div>
                            <table class="tournament-deatail-table">
                                <tbody>
                                    <tr>
                                        <td width="40%">Address</td>
                                        <td>Backumer Str. 299. 45701 Herten</td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td>Deutschland</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>Deutschland</td>
                                    </tr>
                                    <tr>
                                        <td>Group Games</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Participants</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <td>Playtime</td>
                                        <td>12 min</td>
                                    </tr>
                                    <tr>
                                        <td>Pitches</td>
                                        <td>Grass</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

</div>

@endsection
