@extends('farmer.headerFooter')


@section('body')

   <style>
        /* menu-section starts here  */
        #menu-section {
            padding: 1%;
        }
        .card-body {
            text-align: center;
        }
        .item-desc {
            background: rgb(165, 164, 164);
        }
        .item-name {
            background: green;
            color: white;
            padding: 10px;
        }
        .item-desc>p {
            font-size: 0.8rem;
            padding: 5px;
            font-weight: bold;
        }
        .card{
            transition: .4s;
        }
        .card:hover{
            transform: scale(1.1);
        }
    </style>

    <h3 class="text-success mt-5">{{Session::get('f_login')}}</h3>
    <section id="menu-section" class="my-5">
        <div class="row">
                 <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url('public/final_eagri/img/lichu.jpg')}}" alt="food1" height="200" width="450">
                        <div class="item-desc">
                            <h3 class="item-name">lichu</h3>
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
                        <img class="card-img-top" src="{{url('public/final_eagri/img/4.jpg')}}" alt="food1" height="200" width="450">
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
                        <img class="card-img-top" src="{{url('public/final_eagri/img/vagetables.jpg')}}" alt="food1" height="200" width="450">
                        <div class="item-desc">
                            <h3 class="item-name">vagetables</h3>
                            <p>Araihazar,Narayangonj</p>
                            <p>Bid Rate: 50000</p>
                            <a class="btn btn-success" target="" href="" class="card-link">Details</a>
                            <a class="btn btn-success" target="_blank" href="" class="card-link">Bid here</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- <div class="card" style="width: 25rem;">
<img class="card-img-top" src="{{url('public/final_eagri/img/vagetables.jpg')}}" alt="Card image cap">
  <div class="card-body">
        <h5 class="item-name">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    
  </div>
</div> -->

    @endsection