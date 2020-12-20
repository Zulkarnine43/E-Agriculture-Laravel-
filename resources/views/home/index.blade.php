 @extends('home.headerFooter')


@section('title')
Home
@endsection

@section('body')



                 <div class="alert alert-success alert-dismissable text-center mt-5">
                    <button type="button" class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    <strong> Login for Import crop or bidding </strong>Details<a class="alert-link ml-1" href="{{route('services')}}">Check it out</a>
                </div>

                  <h3 class="text-success">{{Session::get('c_login')}}</h3>
                  <h1 class="text-success">{{Session::get('msg')}}</h1>
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{url('public/final_eagri/img/1.jpg')}}" alt="First slide" height="">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{url('public/final_eagri/img/2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{url('public/final_eagri/img/3.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


<!--  /* menu-section starts here  */
 -->
    <h3 class="text-success">{{Session::get('f_login')}}</h3>
    <section id="menu-section" class="my-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url('public/final_eagri/img/lichu.jpg')}}" alt="food1" height="200" width="350">
                        <div class="item-desc">
                            <h3 class="item-name">Lichu</h3>
                            <p>Araihazar,Narayangonj</p>
                            <p>Bid Rate: 50000</p>
                            <a class="btn btn-success" target="" href="" class="card-link">Details</a>
                            <a class="btn btn-success" target="_blank" href="" class="card-link">Bid here</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url('public/final_eagri/img/komola.jpg')}}" alt="food1" height="200" width="350">
                        <div class="item-desc">
                            <h3 class="item-name">komola</h3>
                            <p>Araihazar,Narayangonj</p>
                            <p>Bid Rate: 50000</p>
                            <a class="btn btn-success" target="" href="" class="card-link">Details</a>
                            <a class="btn btn-success" target="_blank" href="" class="card-link">Bid here</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url('public/final_eagri/img/vagetables.jpg')}}" alt="food1" height="200" width="350">
                        <div class="item-desc">
                            <h3 class="item-name">vagetables</h3>
                            <p>Araihazar,Narayangonj</p>
                            <p>Bid Rate: 50000</p>
                            <a class="btn btn-success" target="" href="" class="card-link">Details</a>
                             <a class="btn btn-success" href="">Bid here</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="menu-section" class="my-5">
        <div class="row">
            @foreach($crops as $crop)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url($crop->crop_image)}}" alt="food1" height="200" width="400">
                        <div class="item-desc">
                            <h3 class="item-name">{{$crop->crop_name}}</h3>
                             <span>{{$crop->condition}}</span>
                            <p>{{$crop->crop_location}}</p>
                            <p>Quantity:--{{$crop->crop_quantity}}</p>
                            <p>Bid Rate:--{{$crop->bid_rate}}TK</p>
                           <!--  <p>Views:--{{$crop->views}}</p> -->
                            <a class="btn btn-success" target="" href="{{route('crop_details',['id'=>$crop->id])}}" class="card-link">Details</a>
                               @if(Session::get('c_username'))
                           <a class="btn btn-success" href="{{route('Bid_model',['id'=>$crop->id])}}">Bid here</a>
                            @else
                                <a class="btn btn-success" href="{{route('login')}}">Bid here</a>
                                   @endif
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @endsection