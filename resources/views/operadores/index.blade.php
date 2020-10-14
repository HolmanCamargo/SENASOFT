@extends('layouts.master')

@section('title', 'Home')

@section('breadcrumb')
<li class="breadcrumb-item active">
  <a href="{{ route('sanitario.index') }}"><i class="fas fa-horse"></i></i>Home</a>
</li>
@endsection

@section('content')
   
      aqui ira informacion de los operadores

@stop