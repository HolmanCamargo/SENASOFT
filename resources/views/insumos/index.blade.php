@extends('layouts.master')

@section('title', 'Home')

@section('breadcrumb')
<li class="breadcrumb-item active">
  <a href="{{ route('tecnovi.insumos.index') }}"><i class="fas fa-home"></i>Home</a>
</li>
@endsection

@section('content')
   informacion de in sumos

@stop