@extends('frontend.layout.app')

@section('content')

<main class="main">
	<div class="" style="background: #C4F2B4; height: 80px; margin-top: 30px;">
        <div class="container-fluid">
            <div class="float-right d-flex pt-3">
                <a href="{{ route('user-profile-edit') }}" class="header-icon d-inline-block pt-2" title="Edit">
                    <img src="{{ asset('assets/img/icons/options.png') }}" />
                </a>
            </div>
        </div>
    </div>
    
    <div class="pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-3 px-4"><br /><br />
                    <img src="{{ asset('user-img/'.$user->image) }}" style="margin: 0 auto;" />
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <h2 class="heading-custom py-5 mb-0">My Account</h2>
                    <table class="tournament-deatail-table">
                        <tbody>
                            <tr>
                                <td width="40%">Name</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Email Address</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Phone Number (Main)</td>
                                <td>{{$user->phone}}</td>
                            </tr>
                            <tr>
                                <td>Phone Number (Additional)</td>
                                <td>{{$user->phone2}}</td>
                            </tr>
                            <tr>
                                <td>Website URL</td>
                                <td>{{$user->website}}</td>
                            </tr>
                            <tr>
                                <td>Facebook URL</td>
                                <td>{{$user->facebook}}</td>
                            </tr>
                            <tr>
                                <td>Instagram URL</td>
                                <td>{{$user->instagram}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>

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
