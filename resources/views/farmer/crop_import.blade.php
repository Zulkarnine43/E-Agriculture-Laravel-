
@extends('farmer.headerFooter')

@section('name')
    Crop_import
@endsection

@section('body')
       
    <div>
        <h1 class="text-center text-primary my-5">Import here</h1>
         <h5 class="text-center text-success">{{Session::get('msg')}}</h5>
    </div>
    <div class="col-lg-6 jumbotron mx-auto">

        <form method="POST" action="{{route('add_product_db')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="hidden" name="username" class="form-control" value="{{Session::get('f_username')}}"/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Crop Name</label>
                <input type="text" name="crop_name" class="form-control" placeholder="Ex.Jute,Rice " required>
                <span>{{$errors->has('crop_name') ? $errors->first('crop_name'): ' '}}</span>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Crop Type</label>
                <select class="form-control" name="crop_type" required>
                    <option>---Select a Name</option>
                    <option value="Fruits">Fruits</option>
                    <option value="vegetables">vegetables</option>
                    <option value="food">Food Crops</option>
                     <option value="cash">cash Crops</option>
                      <option value="plantation">plantation Crops</option>
                       <option value="rabi">Rabi Crops</option>
                        <option value="kharif">kharif Crops</option>
                         <option value="zaid">Zaid Crops</option>
                    <option value="others">Others crops</option>
                </select>
                <span>{{$errors->has('crop_type') ? $errors->first('crop_type'): ' '}}</span>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Crop Quantity</label>
                <input type="text" name="crop_quantity" class="form-control"  placeholder="Ex.20 bighas,100tree..Etc" required/>
                <span>{{$errors->has('crop_quantity') ? $errors->first('crop_quantity'): ' '}}</span>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Crop Location</label>
                <input type="text" name="crop_location" class="form-control" min="1" placeholder="93/A,kolabagan,Dhaka" required/>
                <span>{{$errors->has('crop_location') ? $errors->first('crop_location'): ' '}}</span>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder"> bidding Rate</label>
                <input type="number" name="bid_rate" class="form-control" placeholder="Ex.Minimum 10000tk For bidding" min="1" required/>
                <span>{{$errors->has('bid_rate') ? $errors->first('bid_rate'): ' '}}</span>
            </div>

 
            <div class="form-group">
                <label class="font-weight-bolder">Crop Description</label>
                <textarea id="editor" class="form-control" name="crop_description" placeholder="crop description" required></textarea>
                <span>{{$errors->has('crop_description') ? $errors->first('crop_description'): ' '}}</span>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder"> Date of Bidding</label>
                <input type="date" name="last_date_bidding" class="form-control" placeholder="" required/>
                <span>{{$errors->has('last_date_bidding') ? $errors->first('last_date_bidding'): ' '}}</span>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Add Crop image-</label><br>
                <input type="file" name="crop_image" accept="image/*" required>
                <span>{{$errors->has('crop_image') ? $errors->first('crop_image'): ' '}}</span>
            </div>

           <div class="form-group">
                <label class="font-weight-bolder">Another Crop image-</label><br>
                <input type="file" name="crop_image2" accept="image/*" required>
                <span>{{$errors->has('crop_image2') ? $errors->first('crop_image2'): ' '}}</span>
            </div>

            <div class="form-group">
                <div class="">
                    <input class="btn btn-success btn-block" type="submit" name="btn" value="Save product Info">
                </div>
            </div>
        </form>

    </div>


@endsection
