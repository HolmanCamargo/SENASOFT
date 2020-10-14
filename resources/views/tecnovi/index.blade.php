@extends('layouts.master')

@section('title', 'Home')

@section('breadcrumb')
<li class="breadcrumb-item active">
  <a href="{{ route('tecnovi.index') }}"><i class="fas fa-home"></i>Home</a>
</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content">
            <div class="col-md-6 d-flex">
            <div class="card card-outline shadow">
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{ asset('general/images/ovino.png') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ asset('general/images/ovino2.png') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ asset('general/images/ovino1.png') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ asset('general/images/ovino0.png') }}" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>

           <div class="col-md-6 center d-flex">
            <div class="card card-success card-outline">
              <div class=" card-header ">
                <h3 class="card-title  ">
                  {{ __('SHEEP') }}
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <ul>
                  <li> {{ __('Sheep are animals that produce meat, hair, wool and milk, they are animals of a calm temperament but a little scary. Due to its habitat of origin they are exposed to predators, their useful life varies from 8 to 21 years.') }}</li>
                  <li>{{ __('The reproductive life of the females begins from 7 or 8 months old  to 9 or 10 years.') }}</li>
                  <li>{{ __('They are characterized by having excellent maternal ability since they do not easily abandons the breending.') }}.</li>
                  <li>{{ __('Sheep are considered to have a high milk capacity depending on the feeding as other important factors for production.') }}</li>
                </ul>
               </div>
            </div>  
          </div>

           <div class="col-md-6 d-flex">
            <div class="card card-success card-outline">
              <div class=" card-header ">
                <h3 class="card-title  ">
                  {{ __('UNIT INFORMATION') }}
                </h3>
              </div>
                  <div class="card-body ">
                  <ul>
                    <li> {{ __('In the training center, sheep farming has the fundamental purpose of raising, producing for training in the commercialization and improvement of breeds for productive purposes of carde. Everything under the highest quality standards. The apprentice has the possibility to interact with the different species and models of sheep farming including formulation of alternative diets such as silage, forage and the rotational grazing division.') }}</li>
                    
                  </ul>
                 </div>
            </div>
        <!-- /.row -->
          </div>
          
              <!-- /.card-body -->
          <div class="col-md-6 center d-flex">
            <div class="card card-success card-outline">
              <div class=" card-header ">
                <h3 class="card-title  ">
                  TECNOVI
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body d-flex">
                <ul>
                  <li> {{ __('Tecnovi es un software que guarda la información de la unidad ovina, que permite llevar los registros y controles de actividades que se realizan en la unidad como lo son: alimentación, control vacunal, registro de partos, salida o venta de ovinos e información de los operadores a cargo.  ') }}</li>
                </ul>
               </div>
            </div>  
          </div>

    
          <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

      
@stop