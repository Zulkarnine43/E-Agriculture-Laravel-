@extends('home.headerFooter')
@section('body')
    @if($s->isEmpty())
        Not Found
    @endif

    <div class="row mt-4">
        @foreach($s as $sv)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="#"><img class="card-img-top"  height="200" width="400" src="{{asset($sv->crop_image)}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$sv->crop_name}}</a>
                        </h4>
                        <h5>Bid Rate:{{$sv->bid_rate}}</h5>
                        <span>views:{{$sv->views}}</span>
                        <p class="card-text lead">{{$sv->crop_description}}</p>
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <a class="btn btn-success" target="_blank" href="{{route('crop_details',['id'=>$sv->id])}}">Details</a>
                            @if(Session::get('c_username'))
                                <button class="btn btn-success" data-toggle="modal" data-target="#BidModal">Bid here</button>
                                <a class="btn btn-success" href="{{route('Bid_model',['id'=>$sv->id])}}">Bid here</a>
                            @else
                                <a class="btn btn-success" href="{{route('login')}}">Bid here</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            </div>


@endsection