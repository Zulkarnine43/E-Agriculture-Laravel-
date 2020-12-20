@extends('admin.headerFooter')
@section('body')

    <div class="row flex-sm-row">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Manage user Info</h3>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr class="t1">
                    <th>Sl No</th>
                    <th>user Name </th>
                    <th>user email </th>
                    <th>user mobile</th>
                    <th>user division</th>
                    <th>Zip code</th>
                    <th>check</th>
                    <th>Action</th>
                </tr>

                @php($i=1)
                @foreach($users as $user)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>{{$user->division}}</td>
                        <td>{{$user->zip_code}}</td>
                        <td>{{$user->action}}</td>
                        <td>
                            <a href="{{route('user_profile',['id'=>$user->id])}}" class="btn btn-success">profile</a>
                           @if($user->action=="active")
                            <a href="{{route('c_action',['id'=>$user->id])}}" class="btn btn-success">disable</a>
                                @else
                                <a href="{{route('c_action',['id'=>$user->id])}}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-ok">active</span></a>
                                @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection()