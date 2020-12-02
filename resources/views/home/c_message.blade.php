@extends('home.headerFooter')
@section('body')
<h1 class="text-success">{{Session::get('msg')}}</h1>
    <div class="row flex-sm-row mt-5">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Messages Info</h3>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr class="t1">
                    <th>Sl No</th>
                    <th>Crop name</th>
                    <th>Farmer Name</th>
                    <th>Account pay </th>
                    <th>confirm price </th>
                    <th>message</th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($pay_confirms as $confirms)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$confirms->crop_name}}</td>
                    <td>{{$confirms->f_username}}</td>
                    <td>{{$confirms->account_pay}}</td>
                    <td>{{$confirms->confirm_price}}</td>
                    <td>{{$confirms->message}}</td>
                    <td>
                        <a target="_blank" href="{{route('crop_details',['id'=>$confirms->crop_id])}}" class="btn btn-success">details</a>
                        <a target="_blank" href="{{route('cust_download_invoice',['id'=>$confirms->id])}}" class="btn btn-success">download_invoice</a>
                        <button class="btn btn-success " data-toggle="modal" data-target="#payModal">Pay-info</button>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>


    <div class="modal" id="payModal">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3>Pay info</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                      @csrf
                     <input type="hidden" name="crop_id" value="{{$confirms->crop_id}}">
                     <input type="hidden" name="f_username" value="{{$confirms->f_username}}">
                     <input type="hidden" name="c_username" value="{{Session::get('c_username')}}">
                        <div class="form-group">
                            <label>Pay account</label>
                            <input type="tel" name="send_account" value="" class="form-control" placeholder="Enter account no" required>
                        </div>


                        <div class="form-group">
                            <label>Transition ID</label>
                            <input type="text" name="transition_id" value="" class="form-control" placeholder="Enter transition id" required>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label>Message(optional)</label>--}}
                            {{--<input type="text" name="message" value="" class="form-control" placeholder="Enter message">--}}
                        {{--</div>--}}

                        <input  type="submit"  value="Send" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection