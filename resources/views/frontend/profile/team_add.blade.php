@extends('frontend.layout.app')

@section('content')

<main class="main">
    <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 p-5 box-shadow-4" style="border-radius: 10px;">
                    <div class="wizard mt-5 px-5">

                        <form role="form" action="{{ route('profile.team.create') }}" class="login-box" id="login-box" method="POST" enctype="multipart/form-data">
                            @csrf
              				@method('PUT')
                            <div class="tab-content" id="main_form">
                            	@if($errors->any())
                            	<div class="alert alert-danger" role="alert">
                                    {!! implode('', $errors->all(':message<br />')) !!}
								</div>
                                @endif
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="tab-panel-title py-4">Team Profile</h4>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label style="color: #109555; font-size: 20px; font-weight: 700;">Full name of the team *</label>
                                                <input class="form-control" type="text" name="team_name" placeholder="" value="@isset($team->team_name){{$team->team_name}}@endisset">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="mb-1" for="position">Position
                                                <span class="required">*</span></label>
                                                <select class="form-select form-control form-select-lg" aria-label="Default select example" name="position">
                                                    <option value="">Select Position</option>
                                                    <option value="Coach">Coach</option>
                                                    <option value="Co-coach">Co-coach</option>
                                                    <option value="Manager">Manager</option>
                                                    <option value="Player">Player</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Coach (Name, Last Name) *</label>
                                                <input class="form-control" type="text" name="coach_name" placeholder="" value="@isset($team->coach_name){{$team->coach_name}}@endisset">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Manager (Name, Last Name) *</label>
                                                <input class="form-control" type="text" name="manager_name" placeholder="" value="@isset($team->manager_name){{$team->manager_name}}@endisset">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender Group *</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="M" @isset($team->gender){{$team->gender == "M" ? "checked": ""}}@endisset>
                                                <label class="form-check-label" for="gender1">Man</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="W" @isset($team->gender){{$team->gender == "W" ? "checked": ""}}@endisset>
                                                <label class="form-check-label" for="gender2">Woman</label>
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
                                                        <input class="form-check-input" type="radio" name="group" id="group1" value="H" @isset($team->group){{$team->group == "W" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group1">Hobby</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-1">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group2" value="U6" @isset($team->group){{$team->group == "U6" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group2"> U6 &nbsp;</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group3" value="U7" @isset($team->group){{$team->group == "U7" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group3"> U7 &nbsp;</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group4" value="U8" @isset($team->group){{$team->group == "U8" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group4"> U8 &nbsp;</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group5" value="U9" @isset($team->group){{$team->group == "U9" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group5"> U9 &nbsp;</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group6" value="U10" @isset($team->group){{$team->group == "U10" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group6">U10</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group7" value="U11" @isset($team->group){{$team->group == "U11" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group7">U11</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-1">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group8" value="U12" @isset($team->group){{$team->group == "U12" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group8">U12</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group9" value="U13" @isset($team->group){{$team->group == "U13" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group9">U13</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group10" value="U14" @isset($team->group){{$team->group == "U14" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group10">U14</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group11" value="U15" @isset($team->group){{$team->group == "U15" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group11">U15</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group12" value="U16" @isset($team->group){{$team->group == "U16" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group12">U16</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="group" id="group13" value="U17" @isset($team->group){{$team->group == "U17" ? "checked": ""}}@endisset>
                                                        <label class="form-check-label" for="group13">U17</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="tab-panel-title py-1 mt-5"> Address details </h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Street *</label>
                                                <input class="form-control" type="text" name="street" placeholder="" value="@isset($team->street){{$team->street}}@endisset">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City *</label>
                                                <input class="form-control" type="text" name="city" placeholder="" value="@isset($team->city){{$team->city}}@endisset">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Zip Code *</label>
                                                <input class="form-control" type="text" name="zip_code" placeholder="" value="@isset($team->zip_code){{$team->zip_code}}@endisset">
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
                                   <div class="row">
                                        <div class="col-md-12 text-center">
                                            @isset($user->image)<img src="{{ asset('team-img/' . $user->image) }}" id="profile" style="margin: 0 auto !important;">@endisset
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mx-auto text-center">
                                        	<div class="form-group files">
                                                <label>Upload Your File </label>
                                                <input type="file" class="form-control" name="image" >
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-inline pull-right">
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
$('select').selectpicker();
@endpush
