@extends('app')

@section('content')

<h1 class="page-title">Archives</h1>

<div class="search-layer">
  <form class="search-box">
      <input type="search" name="search" placeholder="search">
  </form>
</div>

<div class="archive-list">
  <ol>
    @foreach($articles as $article)
    <li> <a href="{{url('articles',$article->id)}}">{{$article->title}}</a></li><br>
    @endforeach
  </ol>
</div>

@stop
