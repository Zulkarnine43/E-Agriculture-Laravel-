@extends('home.headerFooter')

@section('title')
Login form
@endsection

@section('body')

    <section class="my-5">
        <div class="col-lg-6 mx-auto  jumbotron">
            <form class="form-group" action="{{route('login_check')}}" method="POST">
                @csrf
                <div>
                    <h3 class="text-success">{{Session::get('reg_success')}}</h3>
                    <h3 class="text-success">{{Session::get('login_error')}}</h3>
                    <h1 class=" text-center">Login Here</h1>
                </div>

                <div class="form-group">
                    <label class="">Login As</label>
                    <select class="form-control" name="register_as" required>
                        <option value=""><-------Role As------------></option>
                        <option value="farmer">Farmer</option>
                        <option value="customer">customer</option>
                    </select>
                </div>

                <div class="form-group">
                    <!-- E-mail -->
                    <label>E-mail</label>
                    <div>
                        <input type="text" id="email" name="email" placeholder="your email" class="form-control" required>
                        {{--<span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ' '}}</span>--}}
                    </div>
                </div>



                <div class="control-group">
                    <!-- Password-->
                    <label>Password</label>
                    <div>
                        <input type="password" id="password" name="password" placeholder="your password" class="form-control" required>
                        {{--<span class="text-danger">{{$errors->has('password') ? $errors->first('password'): ' '}}</span>--}}
                    </div>
                </div>

                <div class="control-group mt-2">
                    <!-- Button -->
                    <div>
                        <button class="btn btn-block btn-success">Login</button>
                    </div>
                </div>
            </form>
           <span>Not an Account?</span><a class="btn btn-outline-success" href="{{route('signup')}}">SignUp</a>
            <button class="btn btn-outline-success" data-toggle="modal" data-target="#ForgotPasswordModal">Forgot Password</button>
        </div>
    </section>








    <div class="modal" id="ForgotPasswordModal">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3>Forgot Password</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pw_change_link')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label class="">Uses As</label>
                            <select class="form-control" name="register_as" required>
                                <option value=""><-------Uses As------------></option>
                                <option value="farmer">Farmer</option>
                                <option value="customer">Customer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="" class="form-control" placeholder="Enter your email" required>
                            <span class="text-danger">{{$errors->has('email') ? $errors->first('email'): ' '}}</span>
                        </div>
                        <input type="submit" value="Send" class="btn btn-outline-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection