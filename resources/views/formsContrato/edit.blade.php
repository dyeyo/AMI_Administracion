@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1 formcontent">
    <h1>Contrato {{$contract->title}}</h1>
      <form action="{{route('updateContract',$contract->id)}}" method="POST">
        {{csrf_field()}}
        {{ method_field('put') }}
        <div class="form-group">
          <label for="title">Titulo</label>
          <input type="text" class="form-control" value="{{$contract->title}}" id="title" name="title" placeholder="Titulo del contrato">
        </div>
        <div class="form-group">
          <label for="firstText">Texto Principal</label>
          <textarea name="firstText" class="form-control" id="firstText" style="resize: none" cols="30" rows="10">{{$contract->firstText}}</textarea>
        </div>
        <div class="form-group">
          <label for="secondText">Texto Secundario</label>
          <textarea name="secondText" class="form-control" id="secondText" style="resize: none" cols="30" rows="10">{{$contract->secondText}}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Editar Contrato</button>
        </div>
      </form>

      @include('layouts.fotter')
@endsection
