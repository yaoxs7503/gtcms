@extends('layouts.admin')

@section('content')
<h1>用户</h1>
    
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>姓名</th>
      <th>邮箱</th>
      <th>相片</th>
      <th>角色</th>
      <th>激活</th>
      <th>创建时间</th>
      <th>更新时间</th>
    </tr>
  </thead>
  <tbody>
      @if ($users)
      @foreach ($users as $user)
    <tr>
    <td scope="row"> {{$user->id}}</td>
      <td><a href="{{route('admin.users.edit',$user->id)}}">
        {{ $user->name }}
      </a></td>
      <td>{{$user->email}}</td>
      <td>
        <img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="">
      </td>
      <td>{{$user->role->name}}</td>
      <td>{{$user->is_active==1 ? '已经激活':'没有激活'}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
      <td>{{$user->updated_at->diffForHumans()}}</td>
    </tr>
      @endforeach
      @endif
  </tbody>
</table>
@endsection