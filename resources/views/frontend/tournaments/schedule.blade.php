@extends('frontend.layout.app')

@section('content')

<main class="main">
    <div class="category-banner-container bg-gray">
        <div class="category-banner banner text-uppercase" style="background: #E6EFD2;">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-9" style="border-right: 1px solid #6B6565;">
                        <div class="d-flex justify-content-between">
                            <div class="pr-5 mt-1">
                                <div class="jusity-content-end float-right">
                                    <div class="d-flex flex-row">
                                        <div class="tournament-date-card tournament-start box-shadow-5 bg-white">
                                            <div class="tournament-date-card-header text-center">
                                                <span>Jun 2024</span>
                                            </div>
                                            <div class="tournament-date-day">
                                                9
                                            </div>
                                            <div class="tournament-date-time">
                                                <span>10:30 AM</span>
                                            </div>
                                        </div>
                                        <div class="tournament-date-card tournament-end ml-4 box-shadow-5 bg-white">
                                            <div class="tournament-date-card-header text-center">
                                                <span>Jun 2024</span>
                                            </div>
                                            <div class="tournament-date-day">
                                                10
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
                                <div class="tournament-detail-title" style="font-size: 45px;">1. int. Dinkelcup SV Heek Hauptrunde</div>
                            <div class="tournament-location d-flex flex-row align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="pl-3">
                                            <h4 class="mb-0">Dinkelstadion, Am Dinkelstadion 3, 48619 Heek</h4>
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="mt-1 pt-1">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 style="font-size: 40px; font-weight: 700; color: #02B256;">Tournament Schedule</h2>
                </div>
            </div>
            <div class="row mt-4">
            	<div class="col-lg-8 col-md-12">
                	<h2 style="font-size: 30px; color: #6B6565;">Preliminary Round</h2>
                	<h2 style="font-size: 30px; color: #6B6565;">&nbsp;</h2>
                	<div class="shadow bg-white rounded table-responsive">
                    <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th class="text-center" scope="col">No</th>
                          <th class="text-center" scope="col">F</th>
                          <th class="text-center" scope="col">Start</th>
                          <th class="text-center" scope="col">Gr</th>
                          <th class="text-center" scope="col" colspan="4">Match</th>
                          <th class="text-center" scope="col">Result</th>
                        </tr>
                      </thead>
                      <tbody>
                      @for ($i=1; $i<=20; $i++)
                        <tr>
                          <td class="text-center">{{$i}}</td>
                          <td class="text-center">21</td>
                          <td class="text-center">10:00</td>
                          <td class="text-center">A</td>
                          <td class="text-center"><img src="{{ asset('assets/img/team-image.png') }}" style="max-height: 50px;max-width: 50px;" alt="Team Logo" /></td>
                          <th class="text-center">Fortuna Gronau II</th>
                          <th class="text-center">DSVD Deurningen</th>
                          <td class="text-center"><img src="{{ asset('assets/img/team-image.png') }}" style="max-height: 50px;max-width: 50px;" alt="Team Logo" /></td>
                          <td class="text-center">2 : 0</td>
                        </tr>
                        @endfor
                      </tbody>
                    </table>
                    </div>
                    <h2 style="font-size: 30px; color: #6B6565;">Final Round</h2>
                	<div class="shadow bg-white rounded table-responsive">
                    <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th class="text-center" scope="col">No</th>
                          <th class="text-center" scope="col">F</th>
                          <th class="text-center" scope="col">Start</th>
                          <th class="text-center" scope="col">Gr</th>
                          <th class="text-center" scope="col" colspan="5">Match</th>
                          <th class="text-center" scope="col">Result</th>
                        </tr>
                      </thead>
                      <tbody>
                      @for ($i=21; $i<=28; $i++)
                        <tr>
                          <td class="text-center align-bottom">{{$i}}</td>
                          <td class="text-center align-bottom">21</td>
                          <td class="text-center align-bottom">10:00</td>
                          <td class="text-center align-bottom">A</td>
                          <td class="text-center align-bottom"><img src="{{ asset('assets/img/team-image.png') }}" style="max-height: 50px;max-width: 50px;" alt="Team Logo" /></td>
                          <td class="text-center align-bottom">Fortuna Gronau II</td>
                          <th class="text-center" style="padding-bottom: 25px;">4th Quarterfinal</th>
                          <td class="text-center align-bottom">DSVD Deurningen</td>
                          <td class="text-center align-bottom"><img src="{{ asset('assets/img/team-image.png') }}" style="max-height: 50px;max-width: 50px;" alt="Team Logo" /></td>
                          <td class="text-center align-bottom">2 : 0</td>
                        </tr>
                        @endfor
                      </tbody>
                    </table>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                	<h2 style="font-size: 30px; color: #6B6565;">Rankings Preliminary Round</h2>
                	<h2 style="font-size: 30px; color: #6B6565;">Group A</h2>
                	<div class="shadow bg-white rounded">
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th class="text-center" scope="col">PL</th>
                              <th class="text-center" scope="col" colspan="2">Participants</th>
                              <th class="text-center" scope="col">M</th>
                              <th class="text-center" scope="col">G</th>
                              <th class="text-center" scope="col">GD</th>
                              <th class="text-center" scope="col">Pts</th>
                            </tr>
                          </thead>
                          <tbody>
                          @for ($i=1; $i<=4; $i++)
                            <tr>
                              <td class="text-center">{{$i}}</td>
                              <td class="text-center"><img src="{{ asset('assets/img/team-image.png') }}" style="max-height: 50px;max-width: 50px;" alt="Team Logo" /></td>
                              <th class="text-center">Fortuna Gronau II</th>
                              <td class="text-center">3</td>
                              <td class="text-center">2 : 0</td>
                              <td class="text-center">4</td>
                              <th class="text-center">7</th>
                            </tr>
                            @endfor
                          </tbody>
                        </table>
                    </div>
                	<h2 style="font-size: 30px; color: #6B6565;">Group B</h2>
                	<div class="shadow bg-white rounded">
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th class="text-center" scope="col">PL</th>
                              <th class="text-center" scope="col" colspan="2">Participants</th>
                              <th class="text-center" scope="col">M</th>
                              <th class="text-center" scope="col">G</th>
                              <th class="text-center" scope="col">GD</th>
                              <th class="text-center" scope="col">Pts</th>
                            </tr>
                          </thead>
                          <tbody>
                          @for ($i=1; $i<=4; $i++)
                            <tr>
                              <td class="text-center">{{$i}}</td>
                              <td class="text-center"><img src="{{ asset('assets/img/team-image.png') }}" style="max-height: 50px;max-width: 50px;" alt="Team Logo" /></td>
                              <th class="text-center">Fortuna Gronau II</th>
                              <td class="text-center">3</td>
                              <td class="text-center">2 : 0</td>
                              <td class="text-center">4</td>
                              <th class="text-center">7</th>
                            </tr>
                            @endfor
                          </tbody>
                        </table>
                    </div>
                	<h2 style="font-size: 30px; color: #6B6565;">Group C</h2>
                	<div class="shadow bg-white rounded">
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th class="text-center" scope="col">PL</th>
                              <th class="text-center" scope="col" colspan="2">Participants</th>
                              <th class="text-center" scope="col">M</th>
                              <th class="text-center" scope="col">G</th>
                              <th class="text-center" scope="col">GD</th>
                              <th class="text-center" scope="col">Pts</th>
                            </tr>
                          </thead>
                          <tbody>
                          @for ($i=1; $i<=4; $i++)
                            <tr>
                              <td class="text-center">{{$i}}</td>
                              <td class="text-center"><img src="{{ asset('assets/img/team-image.png') }}" style="max-height: 50px;max-width: 50px;" alt="Team Logo" /></td>
                              <th class="text-center">Fortuna Gronau II</th>
                              <td class="text-center">3</td>
                              <td class="text-center">2 : 0</td>
                              <td class="text-center">4</td>
                              <th class="text-center">7</th>
                            </tr>
                            @endfor
                          </tbody>
                        </table>
                    </div>
                	<h2 style="font-size: 30px; color: #6B6565;">Group D</h2>
                	<div class="shadow bg-white rounded">
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th class="text-center" scope="col">PL</th>
                              <th class="text-center" scope="col" colspan="2">Participants</th>
                              <th class="text-center" scope="col">M</th>
                              <th class="text-center" scope="col">G</th>
                              <th class="text-center" scope="col">GD</th>
                              <th class="text-center" scope="col">Pts</th>
                            </tr>
                          </thead>
                          <tbody>
                          @for ($i=1; $i<=4; $i++)
                            <tr>
                              <td class="text-center">{{$i}}</td>
                              <td class="text-center"><img src="{{ asset('assets/img/team-image.png') }}" style="max-height: 50px;max-width: 50px;" alt="Team Logo" /></td>
                              <th class="text-center">Fortuna Gronau II</th>
                              <td class="text-center">3</td>
                              <td class="text-center">2 : 0</td>
                              <td class="text-center">4</td>
                              <th class="text-center">7</th>
                            </tr>
                            @endfor
                          </tbody>
                        </table>
                    </div>
                	<h2 style="font-size: 30px; color: #6B6565;">Final Ranking</h2>
                	<div class="shadow bg-white rounded">
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th class="text-center" scope="col">PL</th>
                              <th class="text-center" scope="col" colspan="2">Participants</th>
                              <th class="text-center" scope="col">M</th>
                              <th class="text-center" scope="col">G</th>
                              <th class="text-center" scope="col">GD</th>
                              <th class="text-center" scope="col">Pts</th>
                            </tr>
                          </thead>
                          <tbody>
                          @for ($i=1; $i<=4; $i++)
                            <tr>
                              <td class="text-center">{{$i}}</td>
                              <td class="text-center"><img src="{{ asset('assets/img/team-image.png') }}" style="max-height: 50px;max-width: 50px;" alt="Team Logo" /></td>
                              <th class="text-center">Fortuna Gronau II</th>
                              <td class="text-center">3</td>
                              <td class="text-center">2 : 0</td>
                              <td class="text-center">4</td>
                              <th class="text-center">7</th>
                            </tr>
                            @endfor
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mb-4"></div>

</main>

@endsection
