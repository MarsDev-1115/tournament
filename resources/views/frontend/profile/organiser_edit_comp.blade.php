<main class="main">
    <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 p-5 box-shadow-4" style="border-radius: 10px;">
                    <div class="wizard mt-5 px-5">

                        <form role="form" action="{{ route('profile.organizer.update') }}" class="login-box" id="login-box" method="POST" enctype="multipart/form-data">
                            @csrf
              				@method('PUT')
                            <div class="tab-content" id="main_form">
                            	@if($errors->any())
                            	<div class="alert alert-danger" role="alert">
                                    {!! implode('', $errors->all(':message<br />')) !!}
								</div>
                                @endif
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="tab-panel-title py-4">Organiser Profile</h4>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label style="color: #109555; font-size: 20px; font-weight: 700;">Full name of the Organiser *</label>
                                                <input class="form-control" type="text" name="organiser_name" placeholder="" value="@isset($organiser->organiser_name){{$organiser->organiser_name}}@endisset">
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="tab-panel-title py-1 mt-5"> Address details </h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Street *</label>
                                                <input class="form-control" type="text" name="street" placeholder="" value="@isset($organiser->street){{$organiser->street}}@endisset">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City *</label>
                                                <input class="form-control" type="text" name="city" placeholder="" value="@isset($organiser->city){{$organiser->city}}@endisset">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Zip Code *</label>
                                                <input class="form-control" type="text" name="zip_code" placeholder="" value="@isset($organiser->zip_code){{$organiser->zip_code}}@endisset">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country *</label>
                                                <select class="form-control selectpicker" name="country" data-live-search="true">
                                                	@foreach($countries as $country)
                                              		<option value="{{$country->id}}" @isset($organiser->country) @if($country->id == $organiser->country) selected @endif @endisset>{{$country->name}}</option>
                                                  	@endforeach
                                                </select>
                                            </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-md-12 text-center">
                                            @isset($organiser->image)<img src="{{ asset('organiser-img/' . $organiser->image) }}" id="profile" style="margin: 0 auto !important;">@endisset
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

@push('custom-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
$('select').selectpicker();
@endpush