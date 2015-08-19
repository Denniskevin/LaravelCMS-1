@extends('app')


@section('content')

  <h1 class="page-title">Add Post</h1>

  {!! Form::open(array('class'=>'form','url' =>'articles')) !!}
  @include('partials.form')
  {!! Form::close() !!}

  @include('errors.list')

@stop

@section('footer')

<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea',plugins: [
"advlist autolink lists link image charmap print preview anchor",
"searchreplace visualblocks code fullscreen",
"insertdatetime media table contextmenu paste"
],toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
relative_urls: false});</script>

@stop
