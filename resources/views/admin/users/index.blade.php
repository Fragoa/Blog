@extends('admin.layouts.master')


@section('content')
    @if(Session::has('delete_user'))
        <div class="alert alert-danger">
            <div>{{session('delete_user')}}</div>
        </div>
    @endif
    @if(Session::has('add_user'))
        <div class="alert alert-success">
            <div>{{session('add_user')}}</div>
        </div>
    @endif
    @if(Session::has('update_user'))
        <div class="alert alert-success">
            <div>{{session('update_user')}}</div>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>Role</th>
            <th>Status</th>
            <th>created_at</th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><img src="{{$user->photo ? $user->photo->path : "http://www.placehold.it/400" }}" class="img-fluid" width="80"></td>
                <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
               <td>
                     <ui  >
                @foreach($user->roles as $role)
                    <li>{{$role->name}}</li>
                @endforeach
                     </ui>
               </td>

                @if($user->status == 0)
                    <td><span class="tag tag-pill tag-danger">غیرفعال</span></td>
                @else
                    <td><span class="tag tag-pill tag-success">فعال</span></td>
                @endif



                <td>{{\Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
            </tr>

        @endforeach

        </tbody>
    </table>





@endsection
