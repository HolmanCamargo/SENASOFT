@extends('layouts.master')

@section('title', 'Home')

@section('breadcrumb')
<li class="breadcrumb-item active">
  <a href="{{ route('sanitario.index') }}"><i class="fas fa-home"></i>Home</a>
</li>
@endsection

@section('content')
   
      aqui ira informacion del seguimiento de los ovinos

@stop