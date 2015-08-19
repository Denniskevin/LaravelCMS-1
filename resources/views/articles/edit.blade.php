@extends('app')

@section('content')

<h1>Edit: {{ $article->title }}</h1>

{!! Form::model($article,array('class'=>'form','method'=> 'PATCH','url' =>'articles/'.$article->id)) !!}
  @include('partials.form')
{!! Form::close() !!}

@include('errors.list')
@stop
