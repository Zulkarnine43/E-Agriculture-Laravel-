@extends('home.headerFooter')


@section('title')
about us
@endsection

@section('body')
<section id="page-header"class="mt-1" style="background-image: url('{{ url('public/final_eagri/img/a.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto text-center text-light">
                <h1>About Us</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, saepe.</p>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center text-justify">
                <h2>What We Do</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ex quaerat magnam obcaecati repellendus voluptatum quisquam architecto iure, aliquam labore.</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, veniam. Ipsum ipsam facilis earum, corporis dicta cum, rerum non suscipit.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ url('public/final_eagri/img/a.jpg')}}" class="img-fluid rounded-circle" alt="">
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
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-primary">
                    <div class="card-body">
                        <i class="fa fa-car mb-3"></i>
                        <h3>Lorem Ipsum</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-danger">
                    <div class="card-body">
                        <i class="fa fa-play mb-3"></i>
                        <h3>Lorem Ipsum</h3>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
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
<!-- Testimonial -->
<section id="testimonial" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Testimonial</h2>
                <div class="row px-5">
                    <div class="col">
                        <div class="slider my-3">
                            <div>
                                <blockquote class="blockquote">
                                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis maiores, eius amet dolor reprehenderit iste!</p>
                                    <footer class="blockquote-footer">
                                         <a href="">Coders Foundation</a>
                                    </footer>
                                </blockquote>
                            </div>
                            <div>
                                <blockquote class="blockquote">
                                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis maiores, eius amet dolor reprehenderit iste!</p>
                                    <footer class="blockquote-footer">
                                         <a href="">Coders Foundation</a>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- feedback starts  -->
<section id="feedback" class="py-5 bg-light">
    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <p>2. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi assumenda odit error. Sint, id harum sequi voluptate officia eligendi ea?</p>
                    <img src="{{ url('public/final_eagri/img/a.jpg')}}" class="img-fluid rounded-circle" alt="">
                    <h6>Zulkar Nine</h6>
                </div>

                   <div class="carousel-item">
                    <p>2. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi assumenda odit error. Sint, id harum sequi voluptate officia eligendi ea?</p>
                    <img src="{{ url('public/final_eagri/img/a.jpg')}}" class="img-fluid rounded-circle" alt="">
                    <h6>Zulkar Nine</h6>
                </div>

                   <div class="carousel-item">
                    <p>2. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi assumenda odit error. Sint, id harum sequi voluptate officia eligendi ea?</p>
                    <img src="{{ url('public/final_eagri/img/a.jpg')}}" class="img-fluid rounded-circle" alt="">
                    <h6>Zulkar Nine</h6>
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
    </div>
</section>
<!-- feedback ends -->

@endsection