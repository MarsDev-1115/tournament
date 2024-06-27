@extends('admin.layout.app')

@section('content')

<div class="container-fluid">
    <div class="pl-5"><a href="#" style="color: #005B25; font-size: 20px; font-weight: 700;"><i class="sicon-home"></i> &nbsp;> Teams</a></div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="row mt-5">

                <div class="col-md-4 p-5 box-shadow-4 mt-3" style="border: 1px solid #E8E8E8; border-radius: 10px;">
                    <div class="row">
                        <div class="col-md-4">
                            <h4  style="font-size: 25px; font-weight: 700; color: #109555;">Ranking</h4>
                        </div>
                        <div class="col-md-8 text-right">
                            <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 14px;">
                                All
                            </a>
                            <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-light-button" style="color: #109545; border-color: #109545; font-size: 14px;">
                                Week
                            </a>
                            <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-light-button" style="color: #109545; border-color: #109545; font-size: 14px;">
                                Month
                            </a>
                            <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-light-button" style="color: #109545; border-color: #109545; font-size: 14px;">
                                Year
                            </a>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="w-100 py-4 px-5 d-flex justify-content-center" style="font-size: 15px; font-weight: 700; color: #FFFFFF; background: #109545  ; border: 1px solid #E8E8E8;">
                                <div><i class="fas fa-users"></i> Teams</div>
                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="w-100 py-4 px-5 d-flex justify-content-end" style="font-size: 15px; font-weight: 700; color: #FFFFFF; background: #2CC374; border: 1px solid #E8E8E8;">
                                <div>Number of tournaments <i class="fas fa-filter"></i> </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <table class="w-100">
                                <tbody>
                                    @for ($i = 0; $i < 10; $i++)
                                    <tr>
                                        <td width="8%" class="text-center"><div class="d-flex justify-content-center align-items-center" style="background: #2CC374; border-color: #2CC374; color: #FFFFFF;">{{ $i+1 }}</div></td>
                                        <td >
                                            <div class="d-flex justify-content-between py-1 pl-2 pr-2" style="border: 1px solid #E8E8E8;">
                                                <div class="d-flex">
                                                    <img src="{{ asset('assets/img/team-image.png')}}" width="67px" />
                                                    <div class="pl-2">
                                                        <div style="color: #2B503D; font-size: 15px; font-weight: 700;">Atlanta United FC</div>
                                                        <div style="color: #555555; font-size: 8px; font-weight: 500;">Coach: Adam Nowak, +48 765 432 100</div>
                                                        <div class="tournament-location d-flex flex-row align-items-center">
                                                            <i class="fas fa-map-marker-alt" style="font-size: 10px;"></i>
                                                            <div class="pl-1 pt-2">
                                                                <h4 class="mb-0" style="font-size: 8px;">Deutschland</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pt-4">
                                                    <a href="#" class="box-shadow-4 mr-1" style="color: #FFFFFF; background: #2CC374; font-size: 10px; padding: 10px; border-radius: 20px;"><i class="fas fa-comment"></i></a>
                                                    <a href="#" class="box-shadow-4" style="color: #FFFFFF; background: #2CC374; font-size: 10px; padding: 10px; border-radius: 20px;"><i class="fas fa-phone"></i></a>
                                                </div>

                                            </div>
                                        </td>

                                    </tr>
                                    @endfor


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 text-right  pl-5">
                    <div class="row">

                        <div class="col-md-12">
                            <h4 class="text-left" style="color: #1BD741; font-size: 30px; font-weight: 700;">Recently registered</h4>
                            <div class="box-shadow-4 w-100 p-4 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                                        <div class="pl-5 w-100">
                                            <div class="d-flex">
                                                <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                                    Atlanta United FC
                                                </div>
                                                <div class="pl-5 pt-1" style="color: #555555; font-size: 14px; font-weight: 500;">
                                                    Coach: Adam Nowak, +48 765 432 100
                                                </div>
                                            </div>
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
                                    <div>

                                        <div class="col-md-12 d-flex">
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">All</h4>
                                                <div class="custom-bubble-light mx-auto">10</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">Ended</h4>
                                                <div class="custom-bubble-light mx-auto">7</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">New</h4>
                                                <div class="custom-bubble-light mx-auto" style="background: #89A998">2</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">Cancelled</h4>
                                                <div class="custom-bubble-light mx-auto" style="background: #12AA58">1</div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">

                                {{-- <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-light-button" style="color: #109545; border-color: #109545; font-size: 16px;">
                                <i class="far fa-comment-dots"></i> &nbsp; Message All
                            </a> --}}
                            <a href="{{ route('admin.organizer.detail', ['slug' => "1"]) }}" class="btn btn-ellipse btn-md px-5 py-2 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 16px;">
                                View All
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5">

                        <div class="col-md-12">
                            <h4 class="text-left" style="color: #1BD741; font-size: 30px; font-weight: 700;">All Teams</h4>
                            <div class="box-shadow-4 w-100 p-4 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                                        <div class="pl-5 w-100">
                                            <div class="d-flex">
                                                <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                                    Atlanta United FC
                                                </div>
                                                <div class="pl-5 pt-1" style="color: #555555; font-size: 14px; font-weight: 500;">
                                                    Coach: Adam Nowak, +48 765 432 100
                                                </div>
                                            </div>
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
                                    <div>

                                        <div class="col-md-12 d-flex">
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">All</h4>
                                                <div class="custom-bubble-light mx-auto">10</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">Ended</h4>
                                                <div class="custom-bubble-light mx-auto">7</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">New</h4>
                                                <div class="custom-bubble-light mx-auto" style="background: #89A998">2</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">Cancelled</h4>
                                                <div class="custom-bubble-light mx-auto" style="background: #12AA58">1</div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="box-shadow-4 w-100 p-4 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                                        <div class="pl-5 w-100">
                                            <div class="d-flex">
                                                <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                                    Atlanta United FC
                                                </div>
                                                <div class="pl-5 pt-1" style="color: #555555; font-size: 14px; font-weight: 500;">
                                                    Coach: Adam Nowak, +48 765 432 100
                                                </div>
                                            </div>
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
                                    <div>

                                        <div class="col-md-12 d-flex">
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">All</h4>
                                                <div class="custom-bubble-light mx-auto">10</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">Ended</h4>
                                                <div class="custom-bubble-light mx-auto">7</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">New</h4>
                                                <div class="custom-bubble-light mx-auto" style="background: #89A998">2</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">Cancelled</h4>
                                                <div class="custom-bubble-light mx-auto" style="background: #12AA58">1</div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="box-shadow-4 w-100 p-4 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{ asset('assets/img/team-avatar.png') }}" width="90" />
                                        <div class="pl-5 w-100">
                                            <div class="d-flex">
                                                <div class="pr-5" style="color: #005B25; font-size: 22px; font-weight: 700; border-right: 1px solid #555555;">
                                                    Atlanta United FC
                                                </div>
                                                <div class="pl-5 pt-1" style="color: #555555; font-size: 14px; font-weight: 500;">
                                                    Coach: Adam Nowak, +48 765 432 100
                                                </div>
                                            </div>
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
                                    <div>

                                        <div class="col-md-12 d-flex">
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">All</h4>
                                                <div class="custom-bubble-light mx-auto">10</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">Ended</h4>
                                                <div class="custom-bubble-light mx-auto">7</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">New</h4>
                                                <div class="custom-bubble-light mx-auto" style="background: #89A998">2</div>
                                            </div>
                                            <div class="text-center pr-2">
                                                <h4 style="color: #6B6565; font-size: 19px;">Cancelled</h4>
                                                <div class="custom-bubble-light mx-auto" style="background: #12AA58">1</div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-right">

                                <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-light-button" style="color: #109545; border-color: #109545; font-size: 16px;">
                                <i class="far fa-comment-dots"></i> &nbsp; Message All
                            </a>
                            <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md px-5 py-2 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 16px;">
                                View All
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

</div>

@endsection
