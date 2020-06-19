@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form  action="{{route('updatePlantilla',$templateEmail->id)}}" id="formEmails" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          {{ method_field('put') }}
          <div class="form-group">
            <label for="title">Titulos</label>
            <input type="text" value="{{$templateEmail->title}}" class="form-control" id="title" name="title">
          </div>
          <div class="form-group">
            <label for="firstText">Texto Principal</label>
            <textarea name="firstText" class="form-control" id="firstText" cols="30" rows="10" style="resize: none">{{$templateEmail->firstText}}</textarea>
          </div>
          <div class="form-group">
            <img src="{{asset('images/'.$templateEmail->image)}}" style="width: 20%" alt="">
            <label for="image">Imagen</label>
            <input type="file" name="image" id="image" value="{{$templateEmail->image}}">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Editar</button>
        </form>
      </div>
    </div>
  </div>
  <br>
@include('layouts.fotter')
@endsection
