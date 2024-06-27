@extends('frontend.layout.app')

@section('content')

<main class="main">

    <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 p-5 box-shadow-4" style="border-radius: 10px;">
                    <div class="wizard mt-5 px-5">

                        <form role="form" action="{{ route('profile.update') }}" class="login-box" id="login-box" method="POST" enctype="multipart/form-data">
                        	@csrf
              				@method('PUT')
                            <div class="tab-content" id="main_form">
                            	@if($errors->any())
                            	<div class="alert alert-danger" role="alert">
                                    {!! implode('', $errors->all(':message<br />')) !!}
								</div>
                                @endif
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="tab-panel-title py-4">Account Settings</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name *</label>
                                                <input class="form-control" type="text" name="name" placeholder="" value="@isset($user->name){{$user->name}}@endisset">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address *</label>
                                                <input class="form-control" type="text" name="email" placeholder="" value="@isset($user->email){{$user->email}}@endisset">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number (Main)  *</label>
                                                <input class="form-control" type="text" name="phone" placeholder="" value="@isset($user->phone){{$user->phone}}@endisset">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number (Additional)  *</label>
                                                <input class="form-control" type="text" name="phone2" placeholder="" value="@isset($user->phone2){{$user->phone2}}@endisset">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Website URL</label>
                                                <input class="form-control" type="text" name="website" placeholder="" value="@isset($user->website){{$user->website}}@endisset">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Facebook URL</label>
                                                <input class="form-control" type="text" name="facebook" placeholder="" value="@isset($user->facebook){{$user->facebook}}@endisset">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Instagram URL</label>
                                                <input class="form-control" type="text" name="instagram" placeholder="" value="@isset($user->instagram){{$user->instagram}}@endisset">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input class="form-control" type="text" name="current_password" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input class="form-control" type="text" name="new_password" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            @isset($user->image)<img src="{{ asset('user-img/' . $user->image) }}" id="profile" style="margin: 0 auto !important;">@endisset
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
    </section

	<section class="mt-1 pt-1">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 style="font-size: 40px; font-weight: 700; color: #02B256;">Teams</h2>
                </div>
            </div>
            @if(count($user->teams) > 0)
            <div class="row mt-4">
            	<div class="col-lg-12 col-md-12">
                	<div class="shadow bg-white rounded table-responsive">
                    <table class="table">
                      <thead class="thead-light">
                        <tr>
                          <th class="text-center" scope="col">No</th>
                          <th class="text-center" scope="col">Team Name</th>
                          <th class="text-center" scope="col">Position</th>
                          <th class="text-center" scope="col">Coach</th>
                          <th class="text-center" scope="col">Manager</th>
                          <th class="text-center" scope="col">Gender</th>
                          <th class="text-center" scope="col">Group</th>
                          <th class="text-center" scope="col">Address</th>
                          <th class="text-center" scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        @foreach($user->teams as $team)
                        <tr>
                          <td class="text-center">{{$i++}}</td>
                          <td class="text-center">{{$team->team_name}}</td>
                          <td class="text-center">{{$team->position}}</td>
                          <td class="text-center">{{$team->coach_name}}</td>
                          <td class="text-center">{{$team->manager_name}}</td>
                          <td class="text-center">{{$team->gender}}</td>
                          <td class="text-center">{{$team->group}}</td>
                          <td class="text-center">{{$team->street." ".$team->city}}</td>
                          <td class="text-center">
                          	<a href="{{ route('profile.team.edit', $team->id) }}" class="btn btn-ellipse btn-md py-1 header-btn-1 small">
                                Edit
                            </a>
                          	<a href="{{ route('teams.detail', $team->id) }}" class="btn btn-ellipse btn-md py-1 header-btn-1 small">
                                View
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                </div>
            </div>
            @endif
            <div class="row text-right mt-3">
            	<div class="col-lg-12 col-md-12">
            		<a href="{{ route('profile.team.add') }}" class="btn btn-ellipse btn-md px-5 py-2 header-btn-1">
                        Add Team
                    </a>
            	</div>
            </div>
        </div>
    </section>
    
    <br /><br /><br />

</main>

@endsection

@push('custom-scripts')

@endpush
