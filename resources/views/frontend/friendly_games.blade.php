@extends('frontend.layout.app')

@section('content')

<main class="main">
    @include('frontend.components.sponsor_section', array('position'=>'Top', 'page'=>'Friendly Games'))
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="row friendly-games">
                        <div class="custom-tabs">
                            <a href="">
                            <span class="custom-badge">All</span></a>
                        </div>
                        <div class="custom-tabs">
                            <a href="">
                            <span class="custom-badge">New</span></a>
                        </div>
                        <div class="custom-tabs">
                            <a href="">
                            <span class="custom-badge">Requested</span></a>
                        </div>
                        <div class="custom-tabs">
                            <a href="">
                            <span class="custom-badge">Confirmed</span></a>
                        </div>
                        <div class="custom-tabs">
                            <a href="">
                            <span class="custom-badge">Declined</span></a>
                        </div>
                </div>
                <div class="row">
                	<div class="col-lg-12">
                    @for ($i=0; $i<10; $i++)
                    <div class="card bg-color-light border-0 box-shadow-5 tournament-box mb-2 py-3">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="d-flex flex-row">
                                    <div class="tournament-date-card tournament-end ml-3">
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
                                    <div class="pl-4">
                                        <a class="tournament-title" href="{{ route('tournaments.detail', ['slug' => 1]) }}">Atlanta United FC</a>
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
                                    <div class="float-right mb-1">
                                        <span class="avatar-number active">W</span>
                                        <span class="avatar-number active">U11</span>
                                        <span class="avatar-number">16T</span>
                                    </div>
                                    <br />
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
            </div>
            <div class="sidebar-overlay"></div>
            <aside class="sidebar-shop col-lg-4 mobile-sidebar">
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
</main>
@include('frontend.components.sponsor_section', array('position'=>'Bottom', 'page'=>'Friendly Games'))
@endsection
