@extends('admin.headerFooter')

@section('body')


<div>
       <section id="menu-section" class="my-5">
        <div class="row">
        	 @foreach($newses as $news)
               <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="{{url($news->news_image)}}" alt="food1" height="200" width="350">
                        <div>
                            <h3>{{$news->news_name}}</h3>
                            <p>{{$news->news_description}}</p>
                            <p>{{$news->created_at}}</p>
                            <a class="btn btn-success btn-block" target="" href="" class="card-link">Details</a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</div>

    @endsection