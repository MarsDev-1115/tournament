@extends('admin.layout.app')

@section('content')

<div class="container-fluid">
    <div class="pl-5"><a href="#" style="color: #005B25; font-size: 20px; font-weight: 700;"><i class="sicon-home"></i> &nbsp;> Sponsors</a></div>
</div>
<div class="container-fluid">
    <div class="row">
    	<div class="col-md-10 mx-auto">
            <div class="row mt-5">
                <div class="col-md-4">
                    <h4  style="font-size: 25px; font-weight: 700; color: #109555;">Sponsors</h4>
                </div>
                <div class="col-md-8 text-right">
                    <a href="{{ route('sponsor.create') }}" class="btn btn-ellipse btn-md p-1 px-4 custom-primary-button" style="background: #005B25; color: #FFF; border-color: #FFF; font-size: 14px;">
                        Add New
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-11 mx-auto" style="border-top: 1px solid #555555;">
            <div class="row mt-2">

                <div class="col-md-12 p-5 box-shadow-4 mt-3" style="border: 1px solid #E8E8E8; border-radius: 10px;">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="w-100 sponsors-table">
                                <tbody>
                                	<tr class="header">
                                		<td>Sr.</td>
                                		<td>Banner</td>
                                		<td>Identifier</td>
                                		<td>Text</td>
                                		<td>Page</td>
                                		<td>Position</td>
                                		<td>Size</td>
                                		<td>Action</td>
                                	</tr>
                                	@php $i = 1; @endphp
                                    @foreach ($sponsors as $sponsor)
                                    <tr>
                                        <td width="5%" class="text-center"><div class="d-flex justify-content-center align-items-center" style="background: #2CC374; border-color: #2CC374; color: #FFFFFF;">{{ $i++ }}</div></td>
                                        <td><img src="{{ asset('sponsors/'.$sponsor->image)}}" style="max-width:150px;max-height: 50px;" /></td>
                                        <td>{{$sponsor->itentifier}}</td>
                                        <td>{{$sponsor->text}}</td>
                                        <td>{{$sponsor->page}}</td>
                                        <td>{{$sponsor->position}}</td>
                                        <td>{{$sponsor->size}}</td>
                                        <td>
                                            <form action="{{ route('sponsor.destroy', $sponsor->id) }}" method="post" style="margin: 0;">
                                            	<a href="{{ route('sponsor.edit', $sponsor->id) }}" class="box-shadow-4 mr-1 custom-btn"><i class="fas fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-primary" onclick="return confirm('Are you sure?')" type="submit" name="Delete">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script>
    $(document).ready(function () {
        $('.delete-action').click(function (e) {
            if (confirm('Are you sure?')) {
                $(this).siblings('form').submit();
            }

            return false;
        });
    });
</script>

@endsection
