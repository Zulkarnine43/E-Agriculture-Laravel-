



<!-- <html>
<body>
<p>Name:{{$Bid->crop_name}}</p>
<p>Farmer Name:{{$Bid->f_username}}</p>
<p>Customer Name:{{$Bid->cust_username}}</p>
<p>Customer email:{{$user->email}}</p>
<p>Customer mobile:{{$user->mobile}}</p>
<p>Customer division:{{$user->division}}</p>
<p>Customer zip_code:{{$user->zip_code}}</p>
<p>Bid Price:{{$Bid->bid_price}}</p>
<p>Message:{{$Bid->message}}</p>
<p>Send Date:{{$Bid->created_at}}</p>
</body>
</html> -->

 <link href="{{url('public/final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="row flex-sm-row my-5">
        <div class="col-md-12 col-sm-12 ">
                    <h3 class=""> Crops Invoice Info</h3>
                    <table class="table table-bordered  text-center">
                        <tr>
                            <th>Name:</th>
                            <td>{{$Bid->crop_name}}</td>
                        </tr>

                          <tr>
                            <th>Farmer Name:</th>
                            <td>{{$Bid->f_username}}</td>
                        </tr>

                          <tr>
                            <th>Customer Name:</th>
                            <td>{{$Bid->cust_username}}</td>
                        </tr>

                          <tr>
                            <th>Customer Email:</th>
                            <td>{{$user->email}}</td>
                        </tr>

                           <tr>
                            <th>Customer Mobile:</th>
                            <td>{{$user->mobile}}</td>
                        </tr>

                          <tr>
                            <th>Customer Division:</th>
                            <td>{{$user->division}}</td>
                        </tr>

                          <tr>
                            <th>Customer Zip_code:</th>
                            <td>{{$user->zip_code}}</td>
                        </tr>

                          <tr>
                            <th>Bid price:</th>
                            <td>{{$Bid->bid_price}}</td>
                        </tr>

                            <tr>
                            <th>Message:</th>
                            <td>{{$Bid->message}}</td>
                        </tr>

                            <tr>
                            <th>Send Date:</th>
                            <td>{{$Bid->created_at}}</td>
                        </tr>

                    </table>
                </div>
    </div>