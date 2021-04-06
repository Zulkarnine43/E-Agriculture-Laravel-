@extends('farmer.headerFooter')

@section('title')
Confirmation form
@endsection

@section('body')



    <section class="my-5">
        <div class="col-lg-6 mx-auto  jumbotron">
           <form action="{{route('pay_confirm_message')}}" method="post">
             @csrf
                <div>
                    <h3 class="text-success">{{Session::get('msg')}}</h3>
                    <h1 class=" text-center text-success">Confirm form</h1>
                 </div>

                    <input type="hidden" name="crop_id" value="{{$bid->crop_id}}" class="form-control">
                    <input type="hidden" name="f_username" value="{{$bid->f_username}}" class="form-control">
                    <input type="hidden" name="crop_name" value="{{$bid->crop_name}}" class="form-control">
                    
                    <input type="hidden" name="cust_username" value="{{$bid->cust_username}}" class="form-control">
                 

                   <div class="form-group">
                    <label class="font-weight-bolder">Account Type</label>
                    <select class="form-control" name="account_type" required>
                         <option value="">---Select a type</option>
                         <option value="bkash">bkash</option>
                         <option value="rocket">rocket</option>
                          <option value="nagad">nagad</option>
                    </select>
                   </div>

                    <div class="form-group">
                        <label>Account-Id</label>
                        <input type="tel" name="account_id" value="" class="form-control" placeholder="account ex:018********" required>
                        <span class="text-danger">{{$errors->has('account_id') ? $errors->first('account_id'): ' '}}
                    </div>

                    <div class="form-group">
                        <label>Confirm price</label>
                        <input type="number" name="confirm_price" value="" class="form-control" placeholder="Enter confirrm price" min="1" required>
                    </div>

                    <div class="form-group">
                        <label>Message(optional)</label>
                        <input type="text" name="message" value="" class="form-control" placeholder="Enter message">
                    </div>

                    <input  type="submit"  value="Reply Confirm" class="btn btn-success btn-block">
                </form>
        </div>
    </section>



    @endsection