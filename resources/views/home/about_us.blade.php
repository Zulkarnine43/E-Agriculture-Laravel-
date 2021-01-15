@extends('home.headerFooter')


@section('title')
about us
@endsection

@section('body')
<section id="page-header"class="mt-2" style="background-image: url('{{ url('public/final_eagri/img/33.jpg')}}'); height:200px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto text-center text-light">
                <h1>About Us</h1>
                <p class="lead">Who We Are And What We Do</p>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center text-justify">
                <h2>Mission</h2><p class="lead">To provide technology and services to farmers, customer help them expand their business and provide them with a wider market, And to improve the present farming processes and to provide knowledge about recent agriculture issues.</p>
                <h2>Vision</h2><p class="lead">To provide a helping hand to the farmers and customer improving their lives through the medium
                of technology, thereby improving the agriculture sector in the Bangladesh Economy .</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ url('public/final_eagri/img/crop.jpg')}}" class="img-fluid " alt="">
            </div>
        </div>
    </div>
</section>

<!-- Icon Boxes -->
<section id="icon-boxes" class="py-5 text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-success">
                    <div class="card-body">
                        <i class="fa fa-envelope mb-3"></i>
                        <h3>Lorem Ipsum</h3>
                        <p class="lead">E-Agriculture is a model farmer management website appllication.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-primary">
                    <div class="card-body">
                        <i class="fa fa-car mb-3"></i>
                        <h3>Lorem Ipsum</h3>
                        <p class="lead">E-Agriculture provides a concept of virtual agriculture trade to its users.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-danger">
                    <div class="card-body">
                        <i class="fa fa-play mb-3"></i>
                        <h3>Lorem Ipsum</h3>
                        <p class="lead">It helps the wholesalers or customers in buying produce from larger number of farmers.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-4">
                <div class="card bg-light text-dark">
                    <div class="card-body">
                        <i class="fa fa-tree mb-3"></i>
                        <h3>Lorem Ipsum</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark">
                    <div class="card-body">
                        <i class="fa fa-cart-plus mb-3"></i>
                        <h3>Lorem Ipsum</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-dark">
                <div class="card bg-warning">
                    <div class="card-body">
                        <i class="fa fa-youtube mb-3"></i>
                        <h3>Lorem Ipsum</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection