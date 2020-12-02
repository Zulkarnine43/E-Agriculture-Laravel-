@extends('home.headerFooter')

@section('body')



    <script src="{{url('public/final_eagri/vendor/bootstrap/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{url('public/final_eagri/vendor/bootstrap/js/jquery.elevatezoom.js')}}"></script>



   <h1 class="text-center text-success">{{Session::get('msg')}}</h1>
    <div class="row mt-5">                                                
        <!----Image Slider start----------->
        <div class="col-lg-6">
     <!--        <div>
                <div id="carouselExampleIndicators" class="carousel slide my-2" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="zoom_01" height="150" width="300" src='{{url($crop->crop_image)}}' data-zoom-image="{{url($crop->crop_image)}}" alt="First slide"/>
                        </div> 
                        <div class="carousel-item">-->
                            <img id="zoom_02"  height="300" width="600"  src='{{url($crop->crop_image2)}}' data-zoom-image="{{url($crop->crop_image2)}}" alt="Second slide"/>
    <!--                     </div>
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
            </div> -->
        </div>

        <!----Image Details start----------->
        <div class="col-lg-6">
            <div>
                <div class=" font-weight-bold float-center">
                           <h3>Crop-Name:-- {{$crop->crop_name}}</h3>
                            <p>Crop-type:--{{$crop->crop_type}}</p>
                            <p>Quantity:--{{$crop->crop_quantity}}</p>
                            <p>Location:--{{$crop->crop_location}}</p>
                            <p>Bid Rate:--{{$crop->bid_rate}}TK</p>
                            <p>Finished Date:--{{$crop->last_date_bidding}}</p>
                            <p>Views:--{{$crop->views}}</p>
                            <p>Condition:--{{$crop->condition}}</p>
                            <p>Description:--{{$crop->crop_description}}</p>
                            <span>Farmer:---{{$crop->username}}</span>
                </div>
                <div class="card-footer">
                    @if(Session::get('c_username'))
                     <!--    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#BidModal">Bid here</button> -->

                     <a class="btn btn-success btn-block" href="{{route('Bid_model',['id'=>$crop->id])}}">Bid here</a>
                    @else
                        <a class="btn btn-success btn-block" href="{{route('login')}}">Bid here</a>
                    @endif
                </div>
            </div>
        </div>

    </div>



    <!----Bidding Modal start----------->

    <div class="modal" id="BidModal">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3>Bid</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('bid_msg_save')}}" method="post">
                        @csrf
                        <input type="hidden" name="crop_id" value="{{$crop->id}}" class="form-control">
                        <input type="hidden" name="crop_name" value="{{$crop->crop_name}}" class="form-control">
                        <input type="hidden" name="f_username" value="{{$crop->username}}" class="form-control">
                        <input type="hidden" name="cust_username" value="{{Session::get('c_username')}}" class="form-control">

                        <div class="font-weight-bolder text-center display-5">
                            Bid Rate::---<span class="ml-4">{{$crop->bid_rate}}</span>
                        </div>

                        <div class="font-weight-bolder text-center display-5">
                            Best Bidder::---<span class="ml-4">Tk-4500</span>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="" class="form-control" placeholder="Enter your name" required>
                        </div>


                        <div class="form-group">
                            <label>Bid price</label>
                            <input type="number" name="bid_price" value="" class="form-control" placeholder="Enter Bid price" min="1" required>
                        </div>

                        <div class="form-group">
                            <label>Message(optional)</label>
                            <input type="text" name="message" value="" class="form-control" placeholder="Enter message">
                        </div>

                        <input  type="submit"  value="Bid" class="btn btn-success ml-auto">
                    </form>
                </div>
            </div>
        </div>
    </div>






    <!----comment section start----------->
      <style>
          .user_name{
              font-size:14px;
              font-weight: bold;
          }
          .comments-list .media{
              border-bottom: 1px dotted #ccc;
          }
      </style>

      <div class="row justify-content-center">
          <div class="col-md-8">
              <div>
                  <h1><small class="pull-right"></small> Bids </h1>
              </div>

              <h1 class="text-success">{{Session::get('msg')}}</h1>
              @foreach($bids_msg as $bid)
              <div class="comments-list">

                  <p><small class="pull-right">{{$bid->created_at}}</small> </p>
                  <div class="media">
                      <div class="media-body">
                          <h4 class="media-heading user_name">USER:---{{$bid->cust_username}}</h4>
                          BID:---{{$bid->bid_price}}TK
                          <p> 
                                  
                                   @if($bid->cust_username==Session::get('c_username') )


                                   <a href="{{route('bid_delete',['id'=>$bid->id,'crop_id'=>$bid->crop_id])}}">delete</a>

                                  @endif


                                  @if($crop->username==Session::get('f_username'))
                                  -<a data-toggle="modal" href="#ReplyModal">Reply_confirm</a>
                                  @endif
                               
                          </p>
                      </div>
                  </div>
                  </div>
              @endforeach
                  </div>
              </div>


    <!----Reply Modal start----------->

    <div class="modal" id="ReplyModal">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3>Confirm Reply</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pay_confirm_message')}}" method="post">
                 @csrf
                        <input type="hidden" name="crop_id" value="{{$crop->id}}" class="form-control">
                        <input type="hidden" name="f_username" value="{{$crop->username}}" class="form-control">
                        <input type="hidden" name="crop_name" value="{{$crop->crop_name}}" class="form-control">
                        @if(isset($bid->cust_username))
                        <input type="hidden" name="cust_username" value="{{$bid->cust_username}}" class="form-control">
                        @endif
                        <div class="form-group">
                            <label>Pay-Account</label>
                            <input type="text" name="account_pay" value="" class="form-control" placeholder="Bkash,Paypal" required>
                        </div>

                        <div class="form-group">
                            <label>Confirm price</label>
                            <input type="number" name="confirm_price" value="" class="form-control" placeholder="Enter confirrm price" min="1" required>
                        </div>

                        <div class="form-group">
                            <label>Message(optional)</label>
                            <input type="text" name="message" value="" class="form-control" placeholder="Enter message">
                        </div>

                        <input  type="submit"  value="Reply Confirm" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!---- Slider script start----------->
    <script>
        // $('#zoom_01').elevateZoom({
        //     zoomType: "inner",
        //     cursor: "crosshair",
        //     zoomWindowFadeIn: 500,
        //     zoomWindowFadeOut: 750
        // });
        // $("#zoom_01").elevateZoom();
        //  $("#zoom_02").elevateZoom();

        $("#zoom_01").elevateZoom({scrollZoom : true});
        $("#zoom_02").elevateZoom({scrollZoom : true});

    </script>
@endsection

        {{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta charset='utf-8'/>--}}
    {{--<title>jQuery elevateZoom Demo</title>--}}
    {{--<script src="{{asset('final_eagri/vendor/bootstrap/js/jquery-1.8.3.min.js')}}"></script>--}}
    {{--<script src="{{asset('final_eagri/vendor/bootstrap/js/jquery.elevatezoom.js')}}"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Basic Zoom Example</h1>--}}
{{--<img id="zoom_01" class="img-fluid" src='{{ asset('final_eagri/img/a.jpg')}}' data-zoom-image="{{ asset('final_eagri/img/a.jpg')}}"/>--}}

{{--<br />--}}
{{--see more examples online <a href="http://www.elevateweb.co.uk/image-zoom/examples">http://www.elevateweb.co.uk/image-zoom/examples</a>--}}
{{--<script>--}}
    {{--$("#zoom_01").elevateZoom();--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}