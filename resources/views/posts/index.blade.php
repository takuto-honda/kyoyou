@extends('app')

@section('title', '投稿一覧')

@section('content')
  <div class="container">
    @foreach($posts as $post)
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
          <i class="fas fa-user-circle fa-3x mr-1"></i>
          <div>
            <div class="font-weight-bold">
              {{ $post->user->name }}
            </div> 
            <div class="font-weight-lighter">
              {{ $post->created_at->format('Y/m/d H:i') }}
            </div>
          </div>
        </div>
        <div class="card-body pt-0 pb-2">
          <h3 class="h4 card-title">
            {{ $post->title }}
          </h3>
          <div class="card-text">
            {!! nl2br(e( $post->body )) !!}
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection