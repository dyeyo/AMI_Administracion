@extends('layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Bienvenido</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Inicia</a></li>
            <li class="breadcrumb-item active">Contratos</li>
          </ol>
          <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-plus-circle"></i> Agregar Contrato</button>
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
            <div class="">
              <table class="table" id="tabla">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Texto Principal</th>
                    <th>Texto Secundario</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
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
                        <td>
                          <form class="user"  action="{{route('deleteContract', $contract->id)}}" method="post">
                            {{ method_field('delete') }}
                            {{csrf_field()}}
                            <a class="btn btn-btn-outline-light"  onclick="return confirm('¿Esta seguro de eliminar este registro?')"  type="submit">ELIMINAR</button>
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

@endsection
