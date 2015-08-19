@extends('app')


@section('content')
<form method="POST" action="/auth/login" class="form">
    {!! csrf_field() !!}

    <h1 class="page-title">Login</h1>
      <input type="text" name="name" placeholder="Username"><br />
      <input type="password" name="password" placeholder="Password"><br />
      <div>
          <input type="checkbox" name="remember"> Remember Me
      </div>
      <input type="submit" value="Login">
    </form>


</form>

@stop

@include('errors.list')
