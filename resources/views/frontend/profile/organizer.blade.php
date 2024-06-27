@extends('frontend.layout.app')

@section('content')

<main class="main">
	@if($organiser)
    <div class="" style="background: #C4F2B4; height: 80px; margin-top: 30px;">
        <div class="container-fluid">
            <div class="float-right d-flex pt-3">
                <a href="{{ route('profile.organizer.edit') }}" class="header-icon d-inline-block pt-2" title="Edit">
                    <img src="{{ asset('assets/img/icons/options.png') }}" />
                </a>
                <a href="{{ route('tournaments.add') }}" class="header-icon d-inline-block header-btn-1" title="Add Tournament" style="margin-top: 10px;margin-bottom: 10px;">
                    Add Tournament
                </a>
            </div>
        </div>
    </div>
    <div class="mt-5 pt-5 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-5">
                    <img src="{{ asset('organiser-img/'.$organiser->image) }}" class="team-profile-logo mx-auto" />
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8  text-center">
                            <h2 style="font-size: 55px; color: #005B25;">{{$organiser->organiser_name}}</h2>
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
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <span class="custom-badge">Contact</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <a href="{{ route('tournaments.requests', ['slug' => '1']) }}">
                            <span class="custom-badge">Requests</span></a>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="custom-badge">Next | Old Tournaments</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <span class="custom-badge">Sponsors</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5 mt-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <h4 style="color: #6B6565; font-size: 30px;">All</h4>
                <div class="custom-bubble-big-light mx-auto">10</div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="text-center px-5">
                    <h4 style="color: #6B6565; font-size: 30px;">Ended</h4>
                    <div class="custom-bubble-big-dark mx-auto">7</div>
                </div>
                <div class="text-center px-5">
                    <h4 style="color: #6B6565; font-size: 30px;">New</h4>
                    <div class="custom-bubble-big-dark mx-auto" style="background: #89A998">2</div>
                </div>
                <div class="text-center px-5">
                    <h4 style="color: #6B6565; font-size: 30px;">Cancelled</h4>
                    <div class="custom-bubble-big-dark mx-auto" style="background: #12AA58">1</div>
                </div>
            </div>
            <div class="col-md-4 justify-content-center">
                <div><canvas id="acquisitions"></canvas></div>
            </div>

        </div>
    </div>
    <div class="container px-5 py-5">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-end align-items-center pr-5" style="border-right: 1px solid #555555;">
                <img src="{{ asset('user-img/' . $organiser->users->image) }}" id="profile" class="mr-5" width="200" height="200">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 60px;">
                        <h4 style="color: #02B256; font-size: 21px;">Contact Details</h4>
                        <table class="tournament-deatail-table">
                            <tbody>
                                <tr>
                                    <td>Address</td>
                                    <td>{{$organiser->street}}, {{$organiser->city}}, {{$organiser->zip_code}}</td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td>@isset($organiser->country_name->name) {{$organiser->country_name->name}} @endisset</td>
                                </tr>
                            </tbody>
                        </table>
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
                            <h2 style="color: #02B256; font-size: 40px;">Old Tournaments</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="mx-auto px-4" style="height: 600px; overflow-y: scroll; ">
                        	@if($tournaments)
                            @foreach($tournaments as $tournament)
                                <div class="card bg-color-light border-0 box-shadow-5 tournament-box mb-2 py-3">
                                    <div class="card-body">
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <div class="tournament-date-card tournament-start">
                                                    <div class="tournament-date-card-header text-center">
                                                        <span>{{ date('M Y', strtotime($tournament->fromDate)) }}</span>
                                                    </div>
                                                    <div class="tournament-date-day">
                                                        {{ date('d', strtotime($tournament->fromDate)) }}
                                                    </div>
                                                    <div class="tournament-date-time">
                                                        <span>{{$tournament->fromTime}}</span>
                                                    </div>
                                                </div>
                                                <div class="tournament-date-card tournament-end ml-3">
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
                                                <div class="pl-4">
                                                    <a class="tournament-title" href="{{ route('tournaments.detail', ['slug' => 1]) }}">{{$tournament->tournament_name}}</a>
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
                                                <div class="float-right mb-1">
                                                    <span class="avatar-number active">{{$tournament->gender}}</span>
                                                    <span class="avatar-number active">{{$tournament->group}}</span>
                                                    <span class="avatar-number">{{$tournament->number_fo_teams}}T</span>
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
                                @endforeach
                                @else
                                <div class="card bg-color-light border-0 box-shadow-5 tournament-box mb-2 py-3">
                                No Tournament Scheduled.
                                </div>
            					@endif
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @else
   	@include('frontend.profile.organiser_edit_comp')
    @endif
</main>

@include('frontend.components.sponsor_section', array('position'=>'Bottom', 'page'=>'Organiser Profile'))


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
