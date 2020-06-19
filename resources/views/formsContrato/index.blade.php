@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1 formcontent">
      <h1>Contratos</h1>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        Agregar Contrato
      </button>
      @if(Session::has('message'))
      <div class="alert alert-success">
        {!! Session::get('message') !!}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      </div>
    @endif
      <div class="table-responsive">
        <table class="table table-hover" id="tabla">
          <thead>
            <tr>
              <th>#</th>
              <th>Titulo</th>
              <th>Texto Principal</th>
              <th>Texto Secundario</th>
              <th>Fecha de contrato</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($contracts as $contract)
                <tr>
                  <td>{{$contract->id}}</td>
                  <td>{{$contract->title}}</td>
                  <td>{{Str::limit($contract->firstText),10}}</td>
                  <td>{{Str::limit($contract->secondText),10}}</td>
                  <td><a href="{{ route('editContract',$contract->id) }}">Editar</a></td>
                </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Contrato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('contracsStore')}}" method="POST" id="contrato">
          {{csrf_field()}}
          <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titulo del contrato">
          </div>
          <div class="form-group">
            <label for="firstText">Texto Principal</label>
            <textarea name="firstText" class="form-control" id="firstText" style="resize: none" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="secondText">Texto Secundario</label>
            <textarea name="secondText" class="form-control" id="secondText" style="resize: none" cols="30" rows="10"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>

      </div>
    </div>
  </div>
</div>

@include('layouts.fotter')
@endsection
