
@extends('layouts.master')

@section('title', 'Poblacion Ovina')

@section('breadcrumb')
<li class="breadcrumb-item active">
  <a href="{{ route('tecnovi.poblacion') }}"><i class="fas fa-venus-mars"></i>Poblacion</a>
</li>
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          
            <div class="col-md-12 col-md-offset-2 center">
            <div class="shadow">
            <div class="panel panel-default">
              <div class="panel-body">

                <table class="table table-bordered table-success ">
                  <thead>
                    <tr>
                      <th scope="col">{{ __('BREED') }}</th>
                      <th scope="col">{{ __('MALES') }}</th>
                      <th scope="col">{{ __('FEMALES') }}</th>
                      <th scope="col">BORREGOS</th>
                      <th scope="col">TOTAL</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">DORPER</th>
                      <th>0</th>
                      <th>0</th>
                      <th>0</th>
                      <th>0</th>
                    </tr>
                    <tr>
                      <th scope="row">PELIBUEY</th>
                      <th>0</th>
                      <th>0</th>
                      <th>0</th>
                      <th>0</th>
                    </tr>
                    <tr>
                      <th scope="row">SANTA INÉS</th>
                      <th>0</th>
                      <th>0</th>
                      <th>0</th>
                      <th>0</th>
                    </tr>
                    <tr>
                      <th scope="row">TOTAL</th>
                      <th>0</th>
                      <th>0</th>
                      <th>0</th>
                      <th>0</th>
                    </tr>
                  </tbody>
                </table>

              </div>
              
            </div>
            </div>

          </div>
          

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@stop