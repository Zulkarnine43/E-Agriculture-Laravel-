@extends('farmer.headerFooter')


@section('body')
  
  <section  class="py-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ url('public/final_eagri/img/home.png')}}" class="card-img-top img-fluid" alt="">
              <div class="card-body">
                <h4 class="card-title">Farmer
                </h4>
                <hr>
                <p class="card-text lead">
                  Farmers are sell Agriculture products by taking picture of the crops and add details.This bidding will have a minimun bid rate & specific time duration, which will be set by the Farmer.
                </p>
                <!-- <a href="#" class="btn btn-dark btn-block">Login here</a> -->
              </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="card">
              <img src="{{ url('public/final_eagri/img/service.jpg')}}" class="card-img-top img-fluid" alt="">
              <div class="card-body">
                <h4 class="card-title">Farmer
                </h4>
                <hr>
                <p class="card-text lead">
                   At the end of time limit, crop/product will be sold to the highest bidder that confirm by the Farmers 
                </p>
                <!-- <a href="#" class="btn btn-dark btn-block">Login here</a> -->
              </div>
            </div>
        </div>

      </div>
    </div>
  </section>

    @endsection