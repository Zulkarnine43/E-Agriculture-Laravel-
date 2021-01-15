@extends('admin.headerFooter')

@section('body')

<h5 class="text-success text-center">{{Session::get('msg')}}</h5>
   
<div class="row">
     @foreach($crops as $crop)
    <div class="col-lg-3 col-md-6 my-4">
        <div class="card">
            <a href="#"><img class="card-img-top"  height="200" width="400" src="{{url($crop->crop_image)}}" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#">{{$crop->crop_name}}</a>
                </h4>
                <h5>Bid Rate:{{$crop->bid_rate}}</h5>
                <span>views:{{$crop->views}}</span>
                <p class="card-text lead">{{$crop->crop_description}}</p>
            </div>
            <div class="card-footer">
                <div class="text-center">
                   <a class="btn btn-success" href="{{route('crop_details',['id'=>$crop->id])}}"><i class="fas fa-info-circle"></i></a>
                   
                   <a class="btn btn-danger" onclick="return confirm('Are you sure want to delete?');" href="{{route('crop_delete',['id'=>$crop->id])}}"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

    
@endsection