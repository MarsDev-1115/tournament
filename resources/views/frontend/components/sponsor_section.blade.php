<?php $sponsors1 = DB::table('sponsors')->where('position', $position)->where('page', $page)->where('size', '1')->get(); ?>
@if(!$sponsors1->isEmpty())
<div class="container-fluid px-5 mt-5 mb-3">
    <div class="row">
    	@foreach($sponsors1 as $sponsor1)
        <div class="col-12">
            <img src="{{ asset('sponsors/'.$sponsor1->image) }}"  alt="{{$sponsor1->text}}">
        </div>
        @endforeach
    </div>
</div>
@endif

<?php $sponsors2 = DB::table('sponsors')->where('position', $position)->where('page', $page)->where('size', '1/3')->get(); ?>
@if(!$sponsors2->isEmpty())
<div class="sponsor-container container-fluid px-5">
    <div class="row">
    	@foreach($sponsors2 as $sponsor2)
        <div class="col-md-4 col-6">
            <div class="banner overlay-effect1 mb-3">
                <figure>
                    <img src="{{ asset('sponsors/'.$sponsor2->image) }}" alt="{{$sponsor2->text}}"></figure>
                <div class="banner-layer banner-layer-middle text-center">
                    <h3 class=" text-white mb-0">{{$sponsor2->text}}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

<?php $sponsors3 = DB::table('sponsors')->where('position', $position)->where('page', $page)->where('size', '1/2')->get(); ?>
@if(!$sponsors3->isEmpty())
<div class="sponsor-container container-fluid px-5 mt-6">
    <div class="row">
    	@foreach($sponsors3 as $sponsor3)
        <div class="col-md-6 col-6">
            <div class="banner overlay-effect1 mb-3">
                <figure>
                    <img src="{{ asset('sponsors/'.$sponsor3->image) }}" alt="{{$sponsor3->text}}"></figure>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
