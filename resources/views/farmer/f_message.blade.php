@extends('farmer.headerFooter')
@section('body')

    <div class="row flex-sm-row my-5">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Messages Info</h3>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr class="t1">
                    <th>Sl No</th>
                    <th>Crop name</th>
                    <th>cust Name</th>
                    <th>Bid price </th>
                    <th>message</th>
                    <th>created_at</th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($messages as $message)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$message->crop_name}}</td>
                    <td>{{$message->cust_username}}</td>
                    <td>{{$message->bid_price}}</td>
                    <td>{{$message->message}}</td>
                    <td>{{$message->created_at}}</td>
                    <td>
                        <a target="_blank" href="{{route('crop_details',['id'=>$message->crop_id])}}" class="btn-success">details</a>
                        <a target="_blank" href="{{route('download_invoice',['id'=>$message->id])}}" class="btn-success">download_invoice</a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>


@endsection()