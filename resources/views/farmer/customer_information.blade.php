@extends('farmer.headerFooter')
@section('body')

    <div class="row flex-sm-row my-5">
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
                    <th>zip code</th>
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
                    <td>
                        <a href="" class="btn btn-success"><i class="fas fa-user-alt"></i></a>
                    </td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>


@endsection()