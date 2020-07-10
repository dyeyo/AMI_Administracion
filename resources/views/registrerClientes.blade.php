@extends('layouts.app')
@section('contenido')
<div class="continer">
  <div class="row">
    <div class="col-lg-4 col-md-12">
      <div class="card">
        <div class="card-body">
          <form
            class="ui form"
            action="{{route('createClientPublic')}}"
            id="formCliente"
            method="POST">
            {{ method_field('post') }}
            {{csrf_field()}}
            <div class="form-group">
              <input type="text" class="form-control" name="name" id="nombre" placeholder="Nombre Completo">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="emial" id="correo" placeholder="Correo Electronico">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" id="celular" placeholder="Celular">
            </div>
            <button type="submit" id="btnEnviar" class="btn btn-success btn-block">Inscribir</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
