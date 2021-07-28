@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-td">
            <div class='pull-left'>
                <br>
                <h2>Nuevo empleado</h2>
             </div>
            <br>
            <div class="pull-right">
                <a href="{{route('alumnos.index')}}" class="btn btn-primary"> Volver </a>
            </div>
        </div>
    </div> 
    @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
               @foreach ($errors as $error)
                 <li>{{ $error }}</li>
               @endforeach
          </ul>
        </div>
        <br>
    @endif 
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div class="now">
            <div class="class col-xs-12 col-sm-12">
                <div class="formgroup">
                    <strong>Nombres</strong>
                    <input type="text" name="nombres" class="form-control" placeholder="EJ.Moisés Adonay">
         </div>
            </div>

        </div>
        <br>

        <div class="now">
            <div class="class col-xs-12 col-sm-12">
                <div class="formgroup">
                    <strong>Apellidos</strong>
                    <input type="text" name="apellidos" class="form-control" placeholder="EJ.Bonilla Alavarenga">
         </div>
            </div>

        </div>
        <br>

        <div class="now">
            <div class="class col-xs-12 col-sm-12">
                <div class="formgroup">
                    <strong>Telefono</strong>
                    <input type="text" name="telefono" class="form-control" placeholder="503+ ">
         </div>
            </div>

        </div>
        <br>


        <div class="now">
            <div class="class col-xs-12 col-sm-12">
                <div class="formgroup">
                    <strong>Edad</strong>
                    <input type="number" name="edad" class="form-control">
         </div>
            </div>

        </div>

        <br>
        <div class="now">
            <div class="class col-xs-12 col-sm-12">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

        </div>

    </form>    
@endsection          