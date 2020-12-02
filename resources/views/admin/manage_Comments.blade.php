@extends('admin.headerFooter')
@section('body')

    <div class="row flex-sm-row">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Manage comments Info</h3>
            <h5 class="text-center text-success">{{Session::get('msg')}}</h5>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr>
                    <th>Sl No</th>
                    <th>Name </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($newses as $news)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$news->name}}</td>
                        <td>{{$news->email}}</td>
                        <td>{{$news->phone}}</td>
                        <td>{{$news->message}}</td>
                       
                       <td>
                        <div class="action">
                            <button type="button" class="btn btn-success btn-xs" title="Approved">
                                <span class="glyphicon glyphicon-ok">EDIT</span>
                            </button>
                            <a type="" class="btn btn-danger btn-xs" href="{{route('comment_delete',['id'=>$news->id])}}">
                                <span class="glyphicon glyphicon-trash">DELETE</span>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection()