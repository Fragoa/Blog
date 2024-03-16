@extends('admin.layouts.master')


@section('content')
    <h3 class="p-b-2 text-center">ایجاد کاربر جدید</h3>
    <div class="col-md-6 offset-md-3">
    {!! Form::open(['method' => 'POST', 'action'=> 'Admin\AdminUserController@store', 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'نام و نام خانوادگی:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'ایمیل:') !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('ذخیره', ['class'=>'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
    </div>

@endsection
