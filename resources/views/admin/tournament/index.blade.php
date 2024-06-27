@extends('admin.layout.app')

@section('content')

<div class="container-fluid">
    <div class="pl-5"><a href="#" style="color: #005B25; font-size: 20px; font-weight: 700;"><i class="sicon-home"></i> &nbsp;> Tournaments</a></div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row mt-5">
                <div class="col-md-4">
                    <h4  style="font-size: 25px; font-weight: 700; color: #109555;">Tournaments</h4>
                </div>
                <div class="col-md-8 text-right">
                    <a href="{{ route('profile.team') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 14px;">
                        All
                    </a>
                    <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-light-button" style="color: #109545; border-color: #109545; font-size: 14px;">
                        New
                    </a>
                    <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-light-button" style="color: #109545; border-color: #109545; font-size: 14px;">
                        Running
                    </a>
                    <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-light-button" style="color: #109545; border-color: #109545; font-size: 14px;">
                        Waiting
                    </a>
                    <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-light-button" style="color: #109545; border-color: #109545; font-size: 14px;">
                        Ended
                    </a>
                    <a href="{{ route('profile.organizer') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-light-button" style="color: #109545; border-color: #109545; font-size: 14px;">
                        Canceled
                    </a>

                </div>
            </div>
        </div>
        <div class="col-md-11 mx-auto" style="border-top: 1px solid #555555;">
            <div class="row mt-5">
                <div class="col-lg-8 p-5 box-shadow-4" style="border: 1px solid #e8e8e8; border-radius: 20px;">
                    <h1 class="text-primary mb-5" style="font-size: 25px; font-weight: 700; color: #109555;">All Tournaments</h1>
                    <div>
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
                                        <div class="pl-lg-3 pl-md-3">
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
                                        <div style="color: #109545; font-size: 15px; font-weight: 500;clear:both;">
                                            16 Requests
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        @endfor


                    </div>
                </div>
                <div class="sidebar-overlay"></div>
                <aside class="sidebar-shop col-lg-4 mobile-sidebar" style="padding-left: 30px;">
                    <h2 style="font-size: 30px; color: #6B6565;"><i class="fas fa-filter"></i> All filters</h2>
                    <div class="sidebar-wrapper">
                        <div class="widget widget-block">
                            <div class="input-group">
                                <div class="input-group-prepend align-items-center">
                                  <span style="font-size: 20px"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search by name" aria-label="" aria-describedby="basic-addon1" style="border: none;">
                              </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Tournament Cagtegory</a>
                            </h3>

                            <div class="collapse show" id="widget-body-2">
                                <div class="widget-body pl-5">
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                        <label class="custom-control-label mb-0" for="lost-password">Standard</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" />
                                        <label class="custom-control-label mb-0" for="lost-password">Premium</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                        <label class="custom-control-label mb-0" for="lost-password">Public</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" />
                                        <label class="custom-control-label mb-0" for="lost-password">Private</label>
                                    </div>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->

                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Age & Gender Group</a>
                            </h3>

                            <div class="collapse show" id="widget-body-3">
                                <div class="widget-body pl-5">
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                        <label class="custom-control-label mb-0" for="lost-password">Man (M)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                        <label class="custom-control-label mb-0" for="lost-password">Woman (W)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                        <label class="custom-control-label mb-0" for="lost-password">Hobby</label>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U6</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U7</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U8</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U9</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" />
                                                <label class="custom-control-label mb-0" for="lost-password">U10</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U11</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U12</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U13</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U14</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U15</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U16</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U17</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U18</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="lost-password" checked />
                                                <label class="custom-control-label mb-0" for="lost-password">U19</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->

                        <div class="widget widget-color">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Date (from - to)</a>
                            </h3>

                            <div class="collapse show" id="widget-body-4">
                                <div class="widget-body pl-5 mt-3">
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-5">
                                          <input type="text" class="form-control" id="password" placeholder="From" name="password">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="password" placeholder="To" name="password">
                                          </div>
                                      </div>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->

                        <div class="widget widget-size">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Location</a>
                            </h3>

                            <div class="collapse show" id="widget-body-5">
                                <div class="widget-body pl-5">
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-5">
                                          <input type="text" class="form-control" id="password" placeholder="Enter a zip code..." name="zip_code">
                                        </div>
                                        <div class="input-group col-md-6">
                                            <div class="input-group-prepend">
                                              <button class="btn btn-outline" type="button">+</button>
                                            </div>
                                            <input type="text" class="form-control" placeholder="100" aria-label="" aria-describedby="basic-addon1">
                                            <div class="input-group-append">
                                                <span class="input-group-text px-4" id="basic-addon2">km</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-11">
                                            <div class="separator text-dark mb-1"> OR </div>
                                            <select class="form-select form-control form-select-lg" aria-label="Default select example">
                                                <option selected>Germany</option>
                                                <option value="1">Switzerland</option>
                                                <option value="2">Austria</option>
                                                <option value="3">Spain</option>
                                              </select>
                                        </div>
                                      </div>


                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->
                        <a href="#" class="btn btn-primary btn-md custom-primary-button w-100 mt-4">Search</a>



                        <!-- End .widget -->
                    </div>
                    <!-- End .sidebar-wrapper -->
                </aside>

            </div>
        </div>
    </div>

</div>

@endsection
