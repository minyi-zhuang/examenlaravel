
@extends('task.layout')
@section('title','Task detail')
@section('main')

<link href="{{asset('/assets/resources/css/app.css')}}" rel="stylesheet">

<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2><strong>{{ $task->title }}</strong></h2>
      <p>Faite le {{ \Carbon\Carbon::parse($task->created_at)->translatedFormat('d F Y à H\hi') }}</p>
      <p>{{ $task->description }}</p>

  </div>
</div>
@endsection
