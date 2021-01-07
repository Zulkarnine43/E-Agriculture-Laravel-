@extends('admin.headerFooter')
@section('body')

    <div class="row flex-sm-row">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Manage categories Info</h3>
            <h3 class="text-center text-success">{{Session::get('msg')}}</h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr>
                    <th>Sl No</th>
                    <th>a_username</th>
                    <th>categories_name </th>
                    <th>categories_description </th>
                    <th>categories_status </th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($categories as $categorie)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$categorie->a_username}}</td>
                    <td>{{$categorie->categories_name}}</td>
                    <td>{{$categorie->categories_description}}</td>
                    <td>{{$categorie->categories_status}}</td>
                    <td>
                        @if($categorie->categories_status==1)
                        <a href="{{route('categories_status',['id'=>$categorie->id])}}" class="btn btn-success">active</a>
                        @else
                        <a href="{{route('categories_status',['id'=>$categorie->id])}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-ok">disable</span></a>
                        @endif

                        <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="{{route('categories_delete',['id'=>$categorie->id])}}" class="btn btn-success "><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>


@endsection()