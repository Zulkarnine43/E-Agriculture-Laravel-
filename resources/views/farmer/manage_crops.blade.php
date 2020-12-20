@extends('farmer.headerFooter')
@section('body')

    <div class="row flex-sm-row my-5">
        <div class="col-md-12 col-sm-12 ">
                    <h3 class="">Manage Crops Info</h3>
                    <h5 class="text-center text-success">{{Session::get('msg')}}</h5>
                    <h3 class="text-center text-success"></h3>
                    <table class="table table-bordered  text-center table-hover table-responsive-lg">
                        <tr class="t1">
                            <th>Sl No</th>
                            <th>Crop_name </th>
                            <th>crop_type </th>
                            <th>crop_quantity</th>
                            <th>bid_rate</th>
                            <th>crop_description</th>
                        
                            <th>Images</th>
                            <th>Action</th>
                        </tr>

                         @php($i=1)
                        @foreach($crops as $crop)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$crop->crop_name}}</td>
                                <td>{{$crop->crop_type}}</td>
                                <td>{{$crop->crop_quantity}}</td>
                                <td>{{$crop->bid_rate}}</td>
                                <td>{{$crop->crop_description}}</td>
                          
                                <td> <img src="{{url($crop->crop_image)}}"width="200" height="150"></td>
                                <td>
                                    <a href="{{route('edit_crop',['id'=>$crop->id])}}" class="btn-success">Edit</a>
                                    <a href="{{route('delete_crop',['id'=>$crop->id])}}" class="btn-success ">Delete</a>
                                </td>
                 
                            </tr>

                            @endforeach
                    </table>
                </div>
    </div>


@endsection()