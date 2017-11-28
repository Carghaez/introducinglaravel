@extends('layouts.base')

@section('title', 'Tutti i posts')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    @foreach($posts as $post)
        <div class="card" style="width: 20rem;margin-bottom:20px">
          <div class="card-header">Pubblicato da {{ $post->owner->name }}</div>
            <div class="card-body">
              <p class="card-text">{{ $post->contents }}</button>
            </div>
          <div class="card-footer"> {{ $post->updated_at }}</div>
        </div>
    @endforeach
@endsection
