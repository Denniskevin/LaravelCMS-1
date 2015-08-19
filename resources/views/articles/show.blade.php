@extends('app')

@section('content')
<div class="post">
		<h1 class="post-heading">
      {{$article->title}}
    </h1>
  	<p class="post-author">{{$article->author}}<a href="#"></a></p>
  	<div class="post-body">
      {!! $article->body !!}

    </div>
  </div>

@include('partials.nav')
@stop
