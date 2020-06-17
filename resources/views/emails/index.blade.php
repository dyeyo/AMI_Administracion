@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @if(Session::has('message'))
          <div class="alert alert-success">
            {!! Session::get('message') !!}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          </div>
        @endif
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Titulo</th>
              <th scope="col">Texto Primario</th>
              <th scope="col">Tipo de Plantilla</th>
              <th scope="col">Editar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($templatesEmail as $item)
              <tr>
                <th scope="row">{{$item->title}}</th>
                <td>{{$item->firstText}}</td>
                <td>{{$item->type == 1 ? 'Plantilla Pago' : 'Plantilla Contrato'}}</td>
                <td>
                  <a href="{{ route('editPlantilla',$item->id) }}">Editar</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@include('layouts.fotter')
@endsection
