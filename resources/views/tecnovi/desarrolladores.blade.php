@extends('layouts.master')

@section('title', 'Desarrolladores')

@section('breadcrumb')
<li class="breadcrumb-item active">
  <a href="{{ route('tecnovi.desarrolladores') }}"><i class="fas fa-users"></i>Desarrolladores</a>
</li>
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-md-3 d-flex">
            <div class="card card-success card-outline shadow">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('general/images/carlos.png') }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Carlos Julio Figueroa Polania</h3>
                <p class="text-muted text-center">{{ __('Tegnologist in Analysis and development in information systems') }}</p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>{{ __('Document Number') }}</b> <a class="float-right">1079184137</a>
                  </li>
                  <li class="list-group-item">
                    <b>{{ __('Telephone') }}</b> <a class="float-right">3106099482</a>
                  </li>
                 <li class="list-group-item">
                    <b>Facebook</b> <a href="#" class="btn btn-primary float-right"><b><i class="fab fa-facebook"></i></b></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3 d-flex">
            <div class="card card-success card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('general/images/charry.png') }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Andres Felipe Charry Cordoba</h3>
                <p class="text-muted text-center">{{ __('Tegnologist in Analysis and development in information systems') }}</p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>{{ __('Document Number') }}</b> <a class="float-right">1004149393</a>
                  </li>
                  <li class="list-group-item">
                    <b>{{ __('Telephone') }}</b> <a class="float-right">3182466600</a>
                  </li>
                 <li class="list-group-item">
                    <b>Facebook</b> <a href="#" class="btn btn-primary float-right"><b><i class="fab fa-facebook"></i></b></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div> 

        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline shadow">
              <div class="card-header">
                <h3 class="card-title">
                  {{ __('Credits and acknowledgments') }}
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <ul>
                    <li>{{ __('Template AdminLTE of') }}<a href="https://adminlte.io" title="AdminLTE" target="blank">adminlte.io/</a></li>
                    <li>{{ __('Free icons of') }}<a href="https://fontawesome.com/icons?d=gallery" title="Flaticon" target="blank"> fontawesome.com</a></li>
                    <li>{{ __('Icons designed by Freepik') }}<a href="https://www.flaticon.es/autores/freepik" title="Freepik" target="blank"> Freepik </a>{{ __('of') }}<a href="https://www.flaticon.es/" title="Flaticon" target="blank"> www.flaticon.es</a></li>
                  </ul>
                        
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>


        <!-- /.row -->
      </div>


      <!-- /.container-fluid -->
    <!-- /.content -->
  </div>

  
@stop