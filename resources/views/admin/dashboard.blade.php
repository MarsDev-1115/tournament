@extends('admin.layout.app')

@section('content')

<div class="container-fluid">
    <div class="pl-5"><a href="#" style="color: #005B25; font-size: 20px; font-weight: 700;"><i class="sicon-home"></i> &nbsp; Dashboard</a></div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="row">
                <div class="col-md-6 pr-5">
                    <div class="row">
                        <div class="col-md-12 p-5 box-shadow-4 mt-3" style="border: 1px solid #E8E8E8; border-radius: 10px;">
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
                                <div class="col-md-4 pr-0">
                                    <div class="w-100 py-4 px-5 d-flex justify-content-center" style="font-size: 14px; font-weight: 700; color: #FFFFFF; background: #2CC374; border: 1px solid #E8E8E8;padding: 15px 2px !important;">
                                        <div><i class="fas fa-users"></i> Teams</div>
                                    </div>

                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="w-100 py-4 px-5 d-flex justify-content-center" style="font-size: 14px; font-weight: 700; color: #FFFFFF; background: #2CC374; border: 1px solid #E8E8E8;padding: 15px 2px !important;">
                                        <div><i class="fas fa-user-friends"></i> Organizers</div>
                                    </div>

                                </div>
                                <div class="col-md-4 pl-0">
                                    <div class="w-100 py-4 px-5 d-flex justify-content-center" style="font-size: 14px; font-weight: 700; color: #FFFFFF; background: #2CC374; border: 1px solid #E8E8E8;padding: 15px 2px !important;">
                                        <div><i class="fas fa-chess-queen"></i> Tournaments</div>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="w-100 py-4 px-5 d-flex justify-content-end" style="font-size: 15px; font-weight: 700; color: #FFFFFF; background: #2CC374; border: 1px solid #E8E8E8;">
                                        <div>Confirmed torunaments count <i class="fas fa-filter"></i> </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <table class="w-100">
                                        <tbody>
                                            @for ($i = 0; $i < 10; $i++)
                                            <tr>
                                                <td width="8%" class="text-center"><div class="d-flex justify-content-center align-items-center" style="background: #2CC374; border-color: #2CC374; color: #FFFFFF;">{{ $i+1 }}</div></td>
                                                <td >
                                                    <div class="d-flex justify-content-between py-1 pl-2" style="border: 1px solid #E8E8E8;">
                                                        <div class="d-flex">
                                                            <img src="{{ asset('assets/img/team-image.png')}}" width="76px" />
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
                                                <td class="text-center" width="20%"><div class="d-flex justify-content-center align-items-center" style="border: 1px solid #E8E8E8;">112</div></td>
                                            </tr>
                                            @endfor


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="w-100 py-4 px-5 d-flex justify-content-between box-shadow-4" style="font-size: 16px; font-weight: 700; color: #FFFFFF; background: #2CC374; border-radius: 5px;">
                                <div>Visitors Online</div>
                                <div style="font-size: 20px; font-weight: 700;">2</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="w-100 py-4 px-5 d-flex justify-content-between box-shadow-4" style="font-size: 16px; font-weight: 700; color: #FFFFFF; background: #2CC374; border-radius: 5px;">
                                <div>Visitors Today</div>
                                <div style="font-size: 20px; font-weight: 700;">2</div>
                            </div>
                        </div>
                        <div class="col-md-12 p-5 box-shadow-4 mt-3" style="border: 1px solid #E8E8E8; border-radius: 10px;">
                            <h4  style="font-size: 20px; font-weight: 700; color: #555555;">Recent registrations</h4>
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="w-100 py-4 px-5 d-flex justify-content-center" style="font-size: 16px; font-weight: 700; color: #FFFFFF; background: #2CC374; border: 1px solid #E8E8E8;">
                                        <div><i class="fas fa-user-friends"></i> Organizers</div>
                                    </div>
                                    <table class="w-100 admin-table">
                                        <tbody>
                                            <tr>
                                                <td width="40%"><div>This week</div></td>
                                                <td class="text-center"><div>0</div></td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><div>This month</div></td>
                                                <td class="text-center"><div>4</div></td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><div>This year</div></td>
                                                <td class="text-center"><div>17</div></td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><div>Total</div></td>
                                                <td class="text-center"><div>56</div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <div class="w-100 py-4 px-5 d-flex justify-content-center" style="font-size: 16px; font-weight: 700; color: #FFFFFF; background: #2CC374; border: 1px solid #E8E8E8;">
                                        <div><i class="fas fa-users"></i> Teams</div>
                                    </div>
                                    <table class="w-100 admin-table">
                                        <tbody>
                                            <tr>
                                                <td width="40%"><div>This week</div></td>
                                                <td class="text-center"><div>0</div></td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><div>This month</div></td>
                                                <td class="text-center"><div>4</div></td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><div>This year</div></td>
                                                <td class="text-center"><div>17</div></td>
                                            </tr>
                                            <tr>
                                                <td width="40%"><div>Total</div></td>
                                                <td class="text-center"><div>56</div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-5 box-shadow-4 mt-3" style="border: 1px solid #E8E8E8; border-radius: 10px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4  style="font-size: 25px; font-weight: 700; color: #109555;">Tournaments</h4>
                                </div>
                                <div class="col-md-8 text-right">
                                    <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 14px;">
                                        All
                                    </a>
                                    <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-light-button" style="color: #109545; border-color: #109545; font-size: 14px;">
                                        Day
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
                                <div class="col-md-12 mx-auto">
                                    <div class="w-100 py-4 d-flex justify-content-between tourn-stats-cont" >
                                        <div class="box-shadow-4 text-center tournament-stats" style="background: #FFFFFF; border: 1px solid #e8e8e8;">
                                            <div class="stats-text">All</div>
                                            <div class="stats-value">295</div>
                                        </div>
                                        <div class="box-shadow-4 text-center tournament-stats" style="background: #18cd3d; border: 1px solid #E8E8e8;">
                                            <div class="stats-text">Running</div>
                                            <div class="stats-value">20</div>
                                        </div>
                                        <div class="box-shadow-4 text-center tournament-stats" style="background: #11AA58; border: 1px solid #E8E8e8;">
                                            <div class="stats-text">New</div>
                                            <div class="stats-value">61</div>
                                        </div>
                                        <div class="box-shadow-4 text-center tournament-stats" style="background: #89A998; border: 1px solid #E8E8e8;">
                                            <div class="stats-text">Ended</div>
                                            <div class="stats-value">199</div>
                                        </div>
                                        <div class="box-shadow-4 text-center tournament-stats" style="background: #FF5858; border: 1px solid #E8E8e8;">
                                            <div class="stats-text">Canceled</div>
                                            <div class="stats-value">15</div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
