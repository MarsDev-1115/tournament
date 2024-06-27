@extends('frontend.layout.app')

@section('content')

<main class="main">
    @include('frontend.components.sponsor_section', array('position'=>'Top', 'page'=>'Tournaments'))
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="text-primary mb-5">Tournaments</h1>
                <div>
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
                                        <a class="tournament-title" href="{{ route('tournaments.detail', ['slug' => $tournament->id]) }}">{{$tournament->tournament_name}}</a>
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
            <div class="sidebar-overlay"></div>
            <aside class="sidebar-shop col-lg-4 mobile-sidebar">
            	<form role="form" action="{{ route('tournaments') }}" class="login-box" id="login-box" method="GET" enctype="multipart/form-data">
                @csrf
                	<h2 style="font-size: 30px; color: #6B6565;"><i class="fas fa-filter"></i> All filters</h2>
                    <div class="sidebar-wrapper">
                        <div class="widget widget-block">
                            <div class="input-group">
                                <div class="input-group-prepend align-items-center">
                                  <span style="font-size: 20px"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" value="@isset($request->tournament_name){{$request->tournament_name}}@endisset" name="tournament_name" placeholder="Search by name" aria-label="" aria-describedby="basic-addon1" style="border: none;">
                              </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Tournament Cagtegory</a>
                            </h3>
    
                            <div class="collapse show" id="widget-body-2">
                                <div class="widget-body pl-5">
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="Standard" name="category2[]" value="Standard" @isset($request->category2) @if(in_array('Standard', $request->category2)) checked @endif @endisset />
                                        <label class="custom-control-label mb-0" for="Standard">Standard</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="Premium" name="category2[]" value="Premium" @isset($request->category2) @if(in_array('Premium', $request->category2)) checked @endif @endisset />
                                        <label class="custom-control-label mb-0" for="Premium">Premium</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="Public" name="privacy[]" value="Public" @isset($request->privacy) @if(in_array('Public', $request->privacy)) checked @endif @endisset />
                                        <label class="custom-control-label mb-0" for="Public">Public</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="Private" name="privacy[]" value="Private" @isset($request->privacy) @if(in_array('Private', $request->privacy)) checked @endif @endisset />
                                        <label class="custom-control-label mb-0" for="Private">Private</label>
                                    </div>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->
    
                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Gender & Group</a>
                            </h3>
    
                            <div class="collapse show" id="widget-body-3">
                                <div class="widget-body pl-5">
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="Man" name="gender[]" value="M" @isset($request->gender) @if(in_array('M', $request->gender)) checked @endif @endisset />
                                        <label class="custom-control-label mb-0" for="Man">Man (M)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input" id="Woman" name="gender[]" value="W" @isset($request->gender) @if(in_array('W', $request->gender)) checked @endif @endisset />
                                        <label class="custom-control-label mb-0" for="Woman">Woman (W)</label>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="Hobby" name="group[]" value="H" @isset($request->group) @if(in_array('H', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="Hobby">Hobby</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U6" name="group[]" value="U6" @isset($request->group) @if(in_array('U6', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U6">U6</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U7" name="group[]" value="U7" @isset($request->group) @if(in_array('U7', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U7">U7</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U8" name="group[]" value="U8" @isset($request->group) @if(in_array('U8', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U8">U8</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U9" name="group[]" value="U9" @isset($request->group) @if(in_array('U9', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U9">U9</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U10" name="group[]" value="U10" @isset($request->group) @if(in_array('U10', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U10">U10</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U11" name="group[]" value="U11" @isset($request->group) @if(in_array('U11', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U11">U11</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U12" name="group[]" value="U12" @isset($request->group) @if(in_array('U12', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U12">U12</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U13" name="group[]" value="U13" @isset($request->group) @if(in_array('U13', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U13">U13</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U14" name="group[]" value="U14" @isset($request->group) @if(in_array('U14', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U14">U14</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U15" name="group[]" value="U15" @isset($request->group) @if(in_array('U15', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U15">U15</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U16" name="group[]" value="U16" @isset($request->group) @if(in_array('U16', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U16">U16</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U17" name="group[]" value="U17" @isset($request->group) @if(in_array('U17', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U17">U17</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U18" name="group[]" value="U18" @isset($request->group) @if(in_array('U18', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U18">U18</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-0">
                                                <input type="checkbox" class="custom-control-input" id="U19" name="group[]" value="U19" @isset($request->group) @if(in_array('U19', $request->group)) checked @endif @endisset />
                                                <label class="custom-control-label mb-0" for="U19">U19</label>
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
                                        	<input class="form-control" type="text" name="fromDate" placeholder="" id="from" value="@isset($request->fromDate){{$request->fromDate}}@endisset" />
                                        </div>
                                        <div class="col-md-5">
                                        	<input class="form-control" type="text" name="toDate" placeholder="" id="to" value="@isset($request->toDate){{$request->toDate}}@endisset" />
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
                                        <div class="col-md-6">
                                          <input type="text" class="form-control" id="zip_code" placeholder="Enter a zip code..." name="zip_code" value="@isset($request->zip_code){{$request->zip_code}}@endisset" />
                                        </div>
                                        <div class="input-group col-md-5">
                                            <input type="text" class="form-control" placeholder="100" aria-label="" aria-describedby="basic-addon1" name="km" value="@isset($request->km){{$request->km}}@endisset" />
                                            <div class="input-group-append">
                                                <span class="input-group-text px-4" id="basic-addon2">km</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-11">
                                            <div class="separator text-dark mb-1"> OR </div>
                                            <select class="form-control selectpicker" name="country" data-live-search="true">
                                            	<option value="">Select Country</option>
                                            	@foreach($countries as $country)
                                          		<option value="{{$country->id}}" @if($country->id == $request->country) selected @endif>{{$country->name}}</option>
                                              	@endforeach
                                            </select>
                                        </div>
                                      </div>
    
    
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->
                        <button type="submit" class="btn btn-primary btn-md custom-primary-button w-100 mt-4">Save</button>
    
    
    
                        <!-- End .widget -->
                    </div>
                </form>
                <!-- End .sidebar-wrapper -->
            </aside>
        </div>
    </div>
</main>
@include('frontend.components.sponsor_section', array('position'=>'Bottom', 'page'=>'Tournaments'))
@endsection

@push('custom-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
$(function () {
    $("#from").datepicker({
        dateFormat: 'yy/mm/dd',
        timeFormat:  "hh:mm:ss",
        changeMonth: true,
        yearRange: new Date().getFullYear().toString() + ':' + new Date().getFullYear().toString(),
        onClose: function (selectedDate) {
            $("#to").datepicker("option", "minDate", selectedDate);
        }
    });
    $("#to").datepicker({
        dateFormat: 'yy/mm/dd',
        timeFormat:  "hh:mm:ss",
        changeMonth: true,
        yearRange: new Date().getFullYear().toString() + ':' + new Date().getFullYear().toString(),
        onClose: function (selectedDate) {
            $("#from").datepicker("option", "maxDate", selectedDate);
        }
    });
});

$('select').selectpicker();
</script>
@endpush
