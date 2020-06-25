@extends('layouts.app')
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Bienvendio</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/asesores">Gestion de Tarea</a></li>
              <li class="breadcrumb-item activate"><a href="#">Editar Tarea</a></li>
            </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form action="{{route('updateTask',$task->id)}}" method="POST" id="contratoEdit">
              {{csrf_field()}}
              {{ method_field('put') }}
              <div class="form-group row">
                <label for="name" class="col-md-12 col-form-label">Nombre de la Tarea</label>
                <div class="col-md-12">
                  <input value="{{$task->name}}" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Editar Tarea</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
