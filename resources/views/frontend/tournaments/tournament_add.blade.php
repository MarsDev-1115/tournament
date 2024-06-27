@extends('frontend.layout.app')

@section('content')

<main class="main">

    <section class="text-center" style="background: #E6FFD2; padding-top: 100px; padding-bottom: 100px;">
        <h1 style="color: #1B9267; font-size: 45px; font-weight: 700;"><i class="sicon-plus"></i> New Tournament</h1>
    </section>

    <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 p-5 box-shadow-4" style="border-radius: 10px;">
                    <div class="wizard tournament-wizard mt-5 px-5">
                        <div class="wizard-inner pb-5">
                            <ul class="nav nav-tabs" id="progressbar" role="tablist" style="display: flex;">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span></a>
                                </li>
                            </ul>
                        </div>

                        <form role="form" action="{{ route('tournaments.create') }}" class="tournament_create" id="tournament_create" method="POST" enctype="multipart/form-data">
                        	@csrf
              				@method('PUT')
                            <div class="tab-content" id="main_form">
                              	@if($errors->any())
                            	<div class="alert alert-danger" role="alert">
                                    {!! implode('', $errors->all(':message<br />')) !!}
								</div>
                                @endif
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="tab-panel-title py-2"> </h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color: #109555; font-size: 33px; font-weight: 700;">Full name of the Tournament *</label>
                                                <input class="form-control" type="text" name="tournament_name" placeholder="" value="{{ old('tournament_name') }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="color: #02B256; font-size: 26px; font-weight: 700;">Date (From - To)  *</label>
                                                <input class="form-control" type="text" name="fromDate" placeholder="" id="from" value="{{ old('fromDate') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="color: #02B256; font-size: 26px; font-weight: 700;"> &nbsp;</label>
                                                <input class="form-control" type="text" name="toDate" placeholder="" id="to" value="{{ old('toDate') }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="color: #02B256; font-size: 26px; font-weight: 700;">Time (From - To)  *</label>
                                                <select name="fromTime" class="form-control">
                                                	<option>Select Time</option>
                                                	<option value="01:00">01:00</option>
                                                	<option value="02:00">02:00</option>
                                                	<option value="03:00">03:00</option>
                                                	<option value="04:00">04:00</option>
                                                	<option value="05:00">05:00</option>
                                                	<option value="06:00">06:00</option>
                                                	<option value="07:00">07:00</option>
                                                	<option value="08:00">08:00</option>
                                                	<option value="09:00">09:00</option>
                                                	<option value="10:00">10:00</option>
                                                	<option value="11:00">11:00</option>
                                                	<option value="12:00">12:00</option>
                                                	<option value="13:00">13:00</option>
                                                	<option value="14:00">14:00</option>
                                                	<option value="15:00">15:00</option>
                                                	<option value="16:00">16:00</option>
                                                	<option value="17:00">17:00</option>
                                                	<option value="18:00">18:00</option>
                                                	<option value="19:00">19:00</option>
                                                	<option value="20:00">20:00</option>
                                                	<option value="21:00">21:00</option>
                                                	<option value="22:00">22:00</option>
                                                	<option value="23:00">23:00</option>
                                                	<option value="24:00">24:00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="color: #02B256; font-size: 26px; font-weight: 700;"> &nbsp;</label>
                                                <select name="toTime" class="form-control">
                                                	<option>Select Time</option>
                                                	<option value="01:00">01:00</option>
                                                	<option value="02:00">02:00</option>
                                                	<option value="03:00">03:00</option>
                                                	<option value="04:00">04:00</option>
                                                	<option value="05:00">05:00</option>
                                                	<option value="06:00">06:00</option>
                                                	<option value="07:00">07:00</option>
                                                	<option value="08:00">08:00</option>
                                                	<option value="09:00">09:00</option>
                                                	<option value="10:00">10:00</option>
                                                	<option value="11:00">11:00</option>
                                                	<option value="12:00">12:00</option>
                                                	<option value="13:00">13:00</option>
                                                	<option value="14:00">14:00</option>
                                                	<option value="15:00">15:00</option>
                                                	<option value="16:00">16:00</option>
                                                	<option value="17:00">17:00</option>
                                                	<option value="18:00">18:00</option>
                                                	<option value="19:00">19:00</option>
                                                	<option value="20:00">20:00</option>
                                                	<option value="21:00">21:00</option>
                                                	<option value="22:00">22:00</option>
                                                	<option value="23:00">23:00</option>
                                                	<option value="24:00">24:00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-12 d-flex">
                                                    <img src="{{ asset('user-img/' . $organiser->users->image) }}" class="organiser-avatar" />
                                                    <h2 class="heading-custom mt-1 mb-0 ml-5">Organiser</h2>
                                                    <a href="#" class="ml-4" style="font-size: 24px; color: #555555;"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="col-md-8">

                                                </div>
                                            </div>

                                            <table class="tournament-deatail-table">
                                                <tbody>
                                                    <tr>
                                                        <td width="40%">Name</td>
                                                        <td>{{$organiser->organiser_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td>{{$organiser->street}}, {{$organiser->city}}, {{$organiser->zip_code}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Country</td>
                                                        <td>{{$organiser->country_name->name}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color: #02B256; font-size: 26px; font-weight: 700;">Tournament's Website (URL Link)</label>
                                                <input class="form-control" type="text" name="website" placeholder="" value="{{ old('website') }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Next Step</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <h4 class="tab-panel-title py-4">Tournament Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Street *</label>
                                                <input class="form-control" type="text" name="street" placeholder="" value="{{ old('street') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City *</label>
                                                <input class="form-control" type="text" name="city" placeholder="" value="{{ old('city') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Zip Code *</label>
                                                <input class="form-control" type="text" name="zip_code" placeholder="" value="{{ old('zip_code') }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country *</label>
                                                <select class="form-control selectpicker" name="country" data-live-search="true">
                                                	@foreach($countries as $country)
                                              		<option value="{{$country->id}}">{{$country->name}}</option>
                                                  	@endforeach
                                                </select>
                                            </div>
                                        </div>
                                   </div>

                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tournament Category </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="category" id="category11" value="Indoor">
                                                <label class="form-check-label" for="category11">Indoor</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="category" id="category12" value="Outdoor">
                                                <label class="form-check-label" for="category12">Outdoor</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tournament Category</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="category2" id="category21" value="Premium">
                                                <label class="form-check-label" for="category21">Premium</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="category2" id="category22" value="Standard">
                                                <label class="form-check-label" for="category22">Standard</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender Group *</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="M">
                                                <label class="form-check-label" for="gender1">Man (M) &nbsp;</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="W">
                                                <label class="form-check-label" for="gender2">Woman (W)</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Group *</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group1" value="H">
                                                        <label class="form-check-label" for="group1">Hobby</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-1">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group2" value="U6">
                                                        <label class="form-check-label" for="group2"> U6 &nbsp;</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group3" value="U7">
                                                        <label class="form-check-label" for="group3"> U7 &nbsp;</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group4" value="U8">
                                                        <label class="form-check-label" for="group4"> U8 &nbsp;</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group5" value="U9">
                                                        <label class="form-check-label" for="group5"> U9 &nbsp;</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group6" value="U10">
                                                        <label class="form-check-label" for="group6">U10</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group7" value="U11">
                                                        <label class="form-check-label" for="group7">U11</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-1">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group8" value="U12">
                                                        <label class="form-check-label" for="group8">U12</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group9" value="U13">
                                                        <label class="form-check-label" for="group9">U13</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group10" value="U14">
                                                        <label class="form-check-label" for="group10">U14</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group11" value="U15">
                                                        <label class="form-check-label" for="group11">U15</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group12" value="U16">
                                                        <label class="form-check-label" for="group12">U16</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group13" value="U17">
                                                        <label class="form-check-label" for="group13">U17</label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Number of groups *</label>
                                                <input class="form-control" type="text" name="number_of_groups" placeholder="" value="{{ old('number_of_groups') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Planned number of teams *</label>
                                                <input class="form-control" type="text" name="number_fo_teams" placeholder="" value="{{ old('number_fo_teams') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Game Time</label>
                                                <input class="form-control" type="text" name="game_time" placeholder="" value="{{ old('game_time') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Playtime (in minutes)</label>
                                                <input class="form-control" type="text" name="playtime" placeholder="" value="{{ old('playtime') }}">
                                            </div>
                                        </div>
                                   </div>
                                   <div class="row mt-1">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pitch type</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pitch" id="pitch1" value="Natural Grass">
                                                <label class="form-check-label" for="pitch1">Natural Grass</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pitch" id="pitch2" value="Syntheric Turf">
                                                <label class="form-check-label" for="pitch2">Syntheric Turf</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pitch" id="pitch3" value="Sports Hall">
                                                <label class="form-check-label" for="pitch3">Sports Hall</label>
                                              </div>
                                        </div>
                                    </div>

                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Next Step</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <div class="row">
                                        <div class="col-md-6 mx-auto text-center">
                                        	<div class="form-group files">
                                                <label>Upload Your File </label>
                                                <input type="file" class="form-control" multiple="" name="image" >
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Next Step</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="color: #109555; font-size: 26px; font-weight: 700;">Invite teams from Favourite List:</label>
                                                <select class="form-control selectpicker" multiple name="teams[]" data-live-search="true">
                                                	@foreach($teams as $team)
                                              		<option value="{{$team->id}}">{{$team->team_name}} - Gender:{{$team->gender}} - Group:{{$team->group}}</option>
                                                  	@endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tournament</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="privacy" id="inlineRadio1" value="Public">
                                                <label class="form-check-label" for="inlineRadio1">Public</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="privacy" id="inlineRadio2" value="Private">
                                                <label class="form-check-label" for="inlineRadio2">Private</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="privacy" id="inlineRadio3" value="Restricted to invited teams">
                                                <label class="form-check-label" for="inlineRadio3">Restricted to invited teams</label>
                                              </div>
                                        </div>
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step" style="background: #FFFFFF; color: #555555; border: 1px solid #555555;">Preview</button></li>
                                        <li><button type="button" class="default-btn next-step" style="background: #E6FFD2; color: #555555; border: 1px solid #555555;">Save Draft</button></li>
                                        <li><button type="submit" class="default-btn next-step">Save</button></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection

@push('custom-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);

        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {
        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});

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
