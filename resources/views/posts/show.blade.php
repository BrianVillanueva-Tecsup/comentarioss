
@extends('layouts.app')

@section('title','Brian Villanueva'.$post->title)

@section('content')
<div class="card">
  <div class="card-body">
       <h3> {{ $post->title }} </h3>
      <p>  {{ $post->description }} </p>
      <p>  {{ $post->created_at }} </p>
  </div>
</div>
@endsection

    

