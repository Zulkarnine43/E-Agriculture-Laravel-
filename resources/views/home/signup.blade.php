@extends('home.headerFooter')

@section('title')
signup form
@endsection

@section('body')

<h1 class="text-success mt-5">{{Session::get('reg_success')}}</h1>
    <section class="my-5">
    <div class="col-lg-6 mx-auto  jumbotron">
        <form class="form-group" action="{{route('registerSave')}}" method="POST">
            @csrf
            <div>
                <h1 class="text-center">Register Here</h1>
            </div>

            <div class="form-group">
                <label>Register as</label>
                <select class="form-control" name="register_as" required>
                    <option value=""><-------Role As------------></option>
                    <option value="farmer">Farmer</option>
                    <option value="customer">customer</option>
                </select>
            </div>

            <div class="form-group">
                <!-- Username -->
                <label>Username</label>
                <div>
                    <input type="text" id="username" name="username" placeholder="xyz123" class="form-control" required>
                    <span class="text-danger">{{$errors->has('username') ? $errors->first('username'): ' '}}</span>
                </div>
            </div>

            <div class="form-group">
                <!-- E-mail -->
                <label>E-mail</label>
                <div>
                    <input type="text" id="email" name="email" placeholder="xyz@gmail.com" class="form-control" required>
                    <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ' '}}</span>
                </div>
            </div>


            <div class="form-group">

                <label>Mobile</label>
                <div>
                    <input type="tel" id="mobile" name="mobile" placeholder="8801xxxxxxxxx" class="form-control" required>
                    <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile'): ' '}}</span>
                </div>
            </div>

            <div class="form-group">
                <label>Division</label>
                <select class="form-control" name="division" required>
                    <option value=""><-------Select Your District------------></option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Rangpur">Rangpur</option>
                </select>
            </div>

            <div class="control-group">

                <label>Zip code</label>
                <div>
                    <input type="number" id="zip" name="zip_code" placeholder="xxxx" class="form-control" required>
                    <span class="text-danger">{{$errors->has('zip_code') ? $errors->first('zip_code'): ' '}}</span>
                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label>Password</label>
                <div>
                    <input type="password" id="password" name="password" placeholder="Xyz123" class="form-control" required>
                    <span class="text-danger">{{$errors->has('password') ? $errors->first('password'): ' '}}</span>
                </div>
            </div>

            <div class="control-group">
                <!-- Password -->
                <label>Password (Confirm)</label>
                <div>
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Xyz123" class="form-control" required>
                    <span class="text-danger">{{$errors->has('password_confirm') ? $errors->first('password_confirm'): ' '}}</span>
                </div>
            </div>

            <div class="control-group mt-2">
                <!-- Button -->
                <div>
                    <button class="btn btn-block btn-outline-success">SignUp</button>
                </div>
            </div>
        </form>
        <span>Have an Account?</span><a class="btn btn-outline-success" href="{{route('login')}}">Login</a>
    </div>
    </section>
@endsection