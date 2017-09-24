@extends('layouts.default')
@section('title', '所有用户')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>所有用户</h1>
  <ul class="users">
    @foreach ($users as $user)
      @include('users._user')
    @endforeach
  </ul>

  {!! $users->render() !!}

  <p>
    <a class="btn btn-lg btn-success" href="/signup" role="button">注册新用户</a>
</div>
@stop
