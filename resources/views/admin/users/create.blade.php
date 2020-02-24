@extends('layouts.admin')
@section('content')
<h2>授权页面</h2>
{!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files' => 'true']) !!}

<div class="form-group">
  {!! Form::label('name', '用户名' ) !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', '邮箱' ) !!}
  {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('is_active', '激活') !!}
  {!! Form::select('is_active',array(1=>'激活',0=>'没有激活'),0,['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
  {!! Form::label('role_id', '状态' ) !!}
  {!! Form::select('role_id', [''=>'请选择权限']+$roles,null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('photo_id', '个人头像') !!}
  {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('title','密码') !!}
  {!! Form::password('password', ['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit('创建用户', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@include('includes.form_error')
@endsection