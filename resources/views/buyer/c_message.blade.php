@extends('buyer.headerFooter')

@section('title')
customer messages
@endsection

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
                    <th>Account type </th>
                    <th>Account id </th>
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
                    <td>{{$confirms->account_type}}</td>
                    <td>{{$confirms->account_id}}</td>
                    <td>{{$confirms->confirm_price}}</td>

                    @if($confirms->message=="null")
                    <td>empty</td>
                    @endif
                    <td>
                        <a target="_blank" href="{{route('crop_details',['id'=>$confirms->crop_id])}}" class="btn btn-success"><i class="fas fa-info-circle"></i></a>
                        
                         <a target="_blank" href="{{route('pay_confirm_download_invoice',['id'=>$confirms->id])}}" class="btn btn-success"><i class="fas fa-cloud-download-alt"></i></a>

                        <a href="{{route('example2',['id'=>$confirms->id,'crop_id'=>$confirms->crop_id,])}}" class="btn btn-success"><i class="fab fa-amazon-pay"></i></a>

                        <button class="btn btn-success " data-toggle="modal" data-target="#payModal"><i class="fab fa-amazon-pay"></i></button>
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
                    <form action="{{route('manually_payment')}}" method="post">
                      @csrf

                     @if($pay_confirms->isEmpty())
                       <h4> There was no search value</h4>
                    @else
                    <p class="lead"> Please pay {{$confirms->confirm_price}}TK To {{$confirms->account_type}} Account {{$confirms->account_id}} for confirmation. Now Send pay account & Transition ID </p>
                     <input type="hidden" name="crop_id" value="{{$confirms->crop_id}}">
                     <input type="hidden" name="f_username" value="{{$confirms->f_username}}">
                     <input type="hidden" name="c_username" value="{{Session::get('c_username')}}">
                     @endif
                        <div class="form-group">
                            <label>customer_name</label>
                            <input type="tel" name="customer_name" value="" class="form-control" placeholder="Enter customer_name" required>
                        </div>


                        <div class="form-group">
                            <label>customer_mobile</label>
                            <input type="text" name="customer_mobile" value="" class="form-control" placeholder="Enter customer_mobile" required>
                        </div>

                        <div class="form-group">
                            <label>customer_email</label>
                            <input type="text" name="customer_email" value="" class="form-control" placeholder="Enter customer_email" required>
                        </div>


                    <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label>Division</label>
                       <select class="form-control" name="division" required>
                            <option value=""><-------Select Your Division------------></option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Rangpur">Rangpur</option>
                        </select>
                    </div>
      
                    <div class=" form-group col-md-6 mb-3">
                        <label>Zip</label>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
                    </div>
                </div>

                        <div class="form-group">
                            <label>address</label>
                            <input type="text" name="address" value="" class="form-control" placeholder="Enter address" required>
                        </div>

                        @php( $price =App\Bid_message::where('crop_id', $confirms->crop_id)->where('f_username', $confirms->f_username)->max('bid_price'))

                        <input type="hidden" name="bid_price" value="{{$price}}">

                        <div class="form-group">
                            <label>amount</label>
                            <input type="text" name="pay_amount" value="" class="form-control" placeholder="Enter amount" required>
                        </div>

                        <div class="form-group">
                            <label>Transition ID</label>
                            <input type="text" name="transaction_id" value="" class="form-control" placeholder="Enter transition id" required>
                        </div>

                        <input  type="submit"  value="Send" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection