@extends('admin.layouts.master')


@section('content')

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
                <td>{{$user->name}}</td>
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
