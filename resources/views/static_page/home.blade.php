@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>NS-LAB</h1>
    <p class="lead">
      你现在所看到的是 <a href="http://www.hitwh.edu.cn">攻防技术实验室</a> 的案例展示。
    </p>
    <p>
      一切，将从这里开始。
    </p>
  <p>
      <a class="btn btn-lg btn-success" href="{{ route('login') }}" role="button">请先登录</a>
  </p>

  </div>
@stop
