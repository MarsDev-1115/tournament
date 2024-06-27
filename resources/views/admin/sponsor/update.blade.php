@extends('admin.layout.app')

@section('content')

<div class="container-fluid">
    <div class="pl-5"><a href="#" style="color: #005B25; font-size: 20px; font-weight: 700;"><i class="sicon-home"></i> &nbsp;> Sponsors</a></div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="row mt-5">

                <div class="col-md-12 p-5 box-shadow-4 mt-3" style="border: 1px solid #E8E8E8; border-radius: 10px;">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mt-6 mb-2 text-heading">Add Sponsor</h2>
                            
                            <form class="mb-0" method="POST" action="{{ route('sponsor.update', $sponsor) }}" id="contact-form" enctype="multipart/form-data">
                            	{{ csrf_field() }}
                            	{{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="mb-1" for="itentifier">Identifier
                                            <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="itentifier" name="itentifier" required placeholder="Name of the Add" value="{{$sponsor->itentifier}}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="mb-1" for="text">Text
                                                <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="text" name="text" required placeholder="Show on Add"value="{{$sponsor->text}}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="mb-1" for="page">Page
                                            <span class="required">*</span></label>
                                            <select class="form-select form-control form-select-lg" aria-label="Default select example" name="page">
                                                <option>Select Page</option>
                                                <option value="Home" {{ $sponsor->page == 'Home'? 'Selected': '' }}>Home</option>
                                                <option value="Tournaments" {{ $sponsor->page == 'Tournaments'? 'Selected': '' }}>Tournaments</option>
                                                <option value="Organiser Profile" {{ $sponsor->page == 'Organiser Profile'? 'Selected': '' }}>Organiser Profile</option>
                                                <option value="Organiser Profile" {{ $sponsor->page == 'Friendly Games'? 'Selected': '' }}>Friendly Games</option>
                                                <option value="Organiser Profile" {{ $sponsor->page == 'Team Digital'? 'Selected': '' }}>Team Digital</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="mb-1" for="position">Position
                                            <span class="required">*</span></label>
                                            <select class="form-select form-control form-select-lg" aria-label="Default select example" name="position">
                                                <option>Select Position</option>
                                                <option value="Top" {{ $sponsor->position == 'Top'? 'Selected': '' }}>Top</option>
                                                <option value="Bottom" {{ $sponsor->position == 'Bottom'? 'Selected': '' }}>Bottom</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="mb-1" for="size">Size
                                            <span class="required">*</span></label>
                                            <select class="form-select form-control form-select-lg" aria-label="Default select example" name="size">
                                                <option>Select Size</option>
                                                <option value="1" {{ $sponsor->size == '1'? 'Selected': '' }}>1</option>
                                                <option value="1/2" {{ $sponsor->size == '1/2'? 'Selected': '' }}>1/2</option>
                                                <option value="1/3" {{ $sponsor->size == '1/3'? 'Selected': '' }}>1/3</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="mb-1" for="link">Link
                                                <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="link" name="link" required value="{{$sponsor->link}}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="mb-1" for="image">Image
                                            <input type="file" class="form-control" id="image" name="image" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('sponsors/'.$sponsor->image) }}">
                                    </div>
                                </div>
            
                                <div class="form-footer mb-0 justify-content-end">
                                    <button type="submit" class="btn btn-primary font-weight-normal custom-primary-button">
                                        Submit
                                    </button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
