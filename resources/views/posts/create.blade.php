
@extends('layouts.app')

@section('title','Brian Villanueva')

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

    <form method="POST" action="{{ route('posts.store') }}">
    @csrf
        <div class="form-group">
            <label for="post-title">Nombres:</label>
            <input type="text" name="title" 
            value="{{ old('title') }}" class="form-control" id="post-title" placeholder="nombres completos">
        </div>
        <div class="form-group">
            <label for="post-description">Comentario:</label>
            <textarea name="description"
              class="form-control" id="post-description" rows="2" placeholder="Tu comentario aquí">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
   </form>
</div>
</div>
@endsection

    


