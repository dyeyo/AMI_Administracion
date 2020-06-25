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
            </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-body">
            @if(Session::has('message'))
              <div class="alert alert-success">
                {!! Session::get('message') !!}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              </div>
            @endif
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Titulo</th>
                  <th scope="col">Texto Primario</th>
                  <th scope="col">Tipo de Plantilla</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($templatesEmail as $item)
                  <tr>
                    <th scope="row">{{$item->title}}</th>
                    <td>{{$item->firstText}}</td>
                    <td>{{$item->type == 1 ? 'Plantilla Pago' : 'Plantilla Contrato'}}</td>
                    <td>
                      <a class="btn btn-warning" href="{{ route('editPlantilla',$item->id) }}">Editar</a>
                    </td>
                    <td>
                      <form class="user"  action="{{route('deleteContract', $item->id)}}" method="post">
                        {{ method_field('delete') }}
                        {{csrf_field()}}
                        <button class="btn btn-btn-outline-light"  onclick="return confirm('¿Esta seguro de eliminar este registro?')"  type="submit">ELIMINAR</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
