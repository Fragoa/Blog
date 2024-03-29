@extends('admin.layouts.master')


@section('content')
    <h3 class="p-b-2 text-center">ایجاد کاربر جدید</h3>

    <div class="row">
        <div class="col-md-6 offset-md-3">
  <div class="form-group">
                {!! Form::label('name', 'نام و نام خانوادگی:') !!}
{{--                       @include('partials.form-errors')--}}
            {!! Form::open(['method' => 'POST', 'action'=> 'Admin\AdminUserController@store', 'files'=>true]) !!}
               {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'ایمیل:') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('roles', 'نقش:') !!}
                {!! Form::select('roles[]', $roles, null,['multiple'=>'multiple', 'class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', 'وضعیت:') !!}
                {!! Form::select('status', [1=>'فعال', 0=>'غیرفعال'], 0, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('avatar', 'تصویر پروفایل:') !!}
                {!! Form::file('avatar', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'رمز عبور:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::open(['method' => 'DELETE', 'action'=> ['Admin\AdminUserController@destroy', $user->id]]) !!}
            <div class="form-group">
            {!! Form::submit('حذف', ['class'=>'btn btn-danger col-md-3']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
