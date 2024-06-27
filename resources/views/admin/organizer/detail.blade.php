@extends('admin.layout.app')

@section('content')

<div class="container-fluid">
    <div class="pl-5"><a href="#" style="color: #005B25; font-size: 20px; font-weight: 700;"><i class="sicon-home"></i> &nbsp;> Organizers > Organizer Detail</a></div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="row mt-5">

                <div class="col-md-8 pr-5">
                    <div class="row">
                        <div class="col-md-10">
                            <div style="font-size: 50px; font-weight: 700; color: #005B25; ">Danny Berdsen | Borsussia M.</div>
                        </div>
                        <div class="col-md-2 pt-5">
                            <a href="#" class="box-shadow-4 mr-1" style="color: #FFFFFF; background: #2CC374; font-size: 10px; padding: 10px; border-radius: 20px;"><i class="fas fa-comment"></i></a>
                                                    <a href="#" class="box-shadow-4" style="color: #FFFFFF; background: #2CC374; font-size: 10px; padding: 10px; border-radius: 20px;"><i class="fas fa-phone"></i></a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 p-5 box-shadow-4" style="border: 1px solid #e8e8e8; border-radius: 10px;">
                            <div class="d-flex align-items-center">
                                <div class="text-center pr-5">
                                    <h4 style="color: #6B6565; font-size: 30px;">All</h4>
                                    <div class="custom-bubble-big-light mx-auto">10</div>
                                </div>
                                <div class="text-center px-5">
                                    <h4 style="color: #6B6565; font-size: 30px;">Ended</h4>
                                    <div class="custom-bubble-big-dark mx-auto">7</div>
                                </div>
                                <div class="text-center pr-5">
                                    <h4 style="color: #6B6565; font-size: 30px;">New</h4>
                                    <div class="custom-bubble-big-dark mx-auto" style="background: #89A998">2</div>
                                </div>
                                <div class="text-center pr-5">
                                    <h4 style="color: #6B6565; font-size: 30px;">Cancelled</h4>
                                    <div class="custom-bubble-big-dark mx-auto" style="background: #12AA58">1</div>
                                </div>
                                <div class="justify-content-center">
                                    <div><canvas id="acquisitions"></canvas></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 p-5 box-shadow-4" style="border: 1px solid #e8e8e8; border-radius: 10px;">
                            <h4  style="font-size: 25px; font-weight: 700; color: #109555;">Tournaments</h4>
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
                                                <a class="tournament-title" href="{{ route('admin.tournament.detail', ['slug' => 1]) }}">1. U9 Herbst Cup</a>
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
                                            <div style="color: #109545; font-size: 26px; font-weight: 500;">
                                                16 Requests
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div>
                                <a href="{{ route('admin.organizer.detail', ['slug' => "1"]) }}" class="btn btn-ellipse btn-md px-5 py-2 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 16px;">
                                    View All
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-4 p-5 box-shadow-4 mt-3" style="border: 1px solid #E8E8E8; border-radius: 10px;">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4  style="font-size: 25px; font-weight: 700; color: #109555;">Total Ranking #17</h4>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="user-pic mx-auto">

                                <img src="{{ asset('assets/img/demo_avatar.png') }}" id="profile" class="img-fluid">

                                <img src="{{ asset('assets/img/teams/image 2.png') }}" class="img-fluid" style="    position: absolute;
                                width: 60px;
                                height: 59px;
                                object-fit: contain;
                                top: 0px;
                                right: 0px;">

                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12" style="padding-left: 60px;">
                            <h4 style="color: #02B256; font-size: 21px;">Contact Details</h4>
                            <table class="tournament-deatail-table">
                                <tbody>
                                    <tr>
                                        <td width="40%">Team</td>
                                        <td>Borussia Monchengladbach</td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>Coach</td>
                                    </tr>
                                    <tr>
                                        <td>Club</td>
                                        <td>Borussia M.</td>
                                    </tr>
                                    <tr>
                                        <td>Team</td>
                                        <td>F Junior 19</td>

                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>Backumer Str. 299. 45701 Herson</td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td>Deutschland</td>
                                    </tr>

                                    <tr>
                                        <td>Phone Number</td>
                                        <td>049 09 203 187</td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td><a href="#">eurocup@atlantaunitedfc.com</a></td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td><a href="#">www.atlantaunitedfc.com</a></td>
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

@push('custom-scripts')

<script type="text/javascript">

$(document).ready( function(){
    const DATA_COUNT = 5;
const NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};

const data = {
  labels: ['Red', 'Orange', 'Yellow', 'Green', 'Blue'],
  datasets: [
    {
      label: 'Dataset 1',
      data: [8, 1, 2],
      backgroundColor: ['#6B6565', '#89A998', '#12AA58'],
    }
  ]
};

  new Chart(
    document.getElementById('acquisitions'),
    {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            cutout: 80,
            legend: {
                display: false,
            },
            plugins: {
            title: {
                display: true,
                text: 'Chart.js Doughnut Chart'
            },
            outlabels: {
        text: '%l %p',
        color: 'white',
        stretch: 35,
        font: {
          resizable: true,
          minSize: 12,
          maxSize: 18,
        },
      },
            }
        },
    }
  );
});

</script>

@endpush
