@extends('layouts.app')

@section('title','Brian Villanueva' .$post->title)

@section('content')

<div class="row">
<div class="col-lg-6 mx-auto">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        </div><br />    
    @endif

    <form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf
    @method('PATCH')
        <div class="form-group">
            <label for="post-title">Nombres:</label>
            <input type="text" name="title" 
            value="{{ $post->title }}" class="form-control" id="post-title" placeholder="titulo">
        </div>
        <div class="form-group">
            <label for="post-description">Comentarios:</label>
            <textarea name="description"
              class="form-control" id="post-description" rows="2">{{ $post->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
   </form>
</div>
</div>
@endsection

    