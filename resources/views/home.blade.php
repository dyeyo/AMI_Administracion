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
      <div id="tabs">
        <ul class="nav nav-tabs" role="tablist">
          @if (Auth()->user()->role == 1)
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Lista de Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Registrar</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tabs-2" role="tab">Registrar</a>
            </li>
          @endif
        </ul>
      </div>
      <div id="appinterno" class="tab-content">
        @if (Auth()->user()->role == 1)
          @include('layouts.tabs.tabsAdmin')
        @else
          @include('layouts.tabs.tabsClient')
        @endif
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    let alerta = $(".close").length;
    if (alerta == 1) {
      console.log("alerta1", alerta);
    } else {
      setTimeout(function () {
        $(".alert-success").fadeOut(1500);
      }, 3000);
      console.log("alerta2", alerta);
    }
  });
</script>
@include('layouts.fotter')
@endsection
