@extends('home.headerFooter')
@section('body')

@section('title')
customer profile
@endsection

    <div class="row">

@foreach($bids_crop as $crop)
@php( $crop=App\crop_import::where('id',$crop->crop_id)->first())

    <div class="col-lg-3 col-md-6 my-5">
        <div class="card ">

            <a href="#"><img class="card-img-top " width="400" height="200" src="{{asset($crop['crop_image'])}}" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">{{$crop['crop_name']}}</a>
                </h4>
                <h5>Bid Rate:{{$crop['bid_rate']}}</h5>
                <span>views:{{$crop['views']}}</span>
                <p class="card-text lead">{{$crop['crop_description']}}</p>
            </div>
            <div class="card-footer">
                <div class="">
                    <a class="btn btn-success btn-block" target="_blank" href="{{route('crop_details',['id'=>$crop['id']])}}" class="card-link">Details</a>
                </div>
            </div>

        </div>

    </div>
        @endforeach
    </div>

@endsection