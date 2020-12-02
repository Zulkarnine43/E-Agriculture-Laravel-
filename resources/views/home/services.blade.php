@extends('home.headerFooter')

@section('body')


    <section id="service-header" class="mt-1" style="background-image: url('{{ url('public/final_eagri/img/a.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center text-light">
                    <h1>Services</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, saepe.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="services" class="py-3">

        <div class="row text-center my-4">
  
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mb-5 m-lg-0">
                    <img class="card-img-top" height="300" width="200" src="{{ url('public/final_eagri/img/a.jpg')}}">
                    <div class="card-body text-center">
                        <h3 class="card-title font-weight-bloder"></h3>
                        <p class="lead"></p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
           

        </div>

        <div class="row">
            <div class="text-center justify-content-center">



            </div>
        </div>


    </section>
    <section id="faq" class="bg-light py-5 text-black">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="row pt-5">
                <div class="col-md-6">
                    <div id="accordion">
                        <div class="card bg-light text-dark mb-2">
                            <div class="card-header" id="headingOne">
                                <a href="#collapseOne" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                                    <h5 class="mb-0">Question One?</h5>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse">
                                <div class="card-body lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light text-dark mb-2">
                            <div class="card-header" id="headingTwo">
                                <a href="#collapseTwo" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                                    <h5 class="mb-0">Question Two?</h5>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse">
                                <div class="card-body lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light text-dark mb-2">
                            <div class="card-header" id="headingThree">
                                <a href="#collapseThree" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                                    <h5 class="mb-0">Question Three?</h5>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse">
                                <div class="card-body lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="accordion">
                        <div class="card bg-light text-dark mb-2">
                            <div class="card-header" id="headingFour">
                                <a href="#collapseFour" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                                    <h5 class="mb-0">Question Four?</h5>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse">
                                <div class="card-body lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light text-dark mb-2">
                            <div class="card-header" id="headingFive">
                                <a href="#collapseFive" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                                    <h5 class="mb-0">Question Five?</h5>
                                </a>
                            </div>
                            <div id="collapseFive" class="collapse">
                                <div class="card-body lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                                </div>
                            </div>
                        </div>
                        <div class="card bg-light text-dark mb-2">
                            <div class="card-header" id="headingSix">
                                <a href="#collapseSix" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                                    <h5 class="mb-0">Question Six?</h5>
                                </a>
                            </div>
                            <div id="collapseSix" class="collapse">
                                <div class="card-body lead">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @endsection