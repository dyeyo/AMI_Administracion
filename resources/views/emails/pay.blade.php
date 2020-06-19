<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    @foreach ($templateEmails as $item)
      {{-- @if ($student['tipoContrato'] == 6) --}}
          <h1>Pago por Cuotas</h1>
          <h2>{{ $student['nombreEstudiante'] }} {{$item->title}}.</h2>
          <p>{{$item->firstText}}</p>
          <img src="{{asset('images/'.$item->image)}}" style="width: 50%" alt="">
          <a class="btn btn-success" href="http://127.0.0.1:8000/contrato?asesor={{$idAsesor}}&contrato={{$idContrato}}" target="_blank">Diligenciar Contrato</a>
          <a href="{{ $student['linkPago'] }}?">Pagar Ahora</a>
      {{-- @elseif($student['tipoContrato'] == 12)
          <h1>Pago de Contado</h1>
          <h2>{{ $student['nombreEstudiante'] }} {{$item->title}}.</h2>
          <p>{{$item->firstText}}</p>
          <img src="{{asset('images/'.$item->image)}}" style="width: 50%" alt="">
          <a class="btn btn-success" href="http://127.0.0.1:8000/contrato_contado?asesor={{$idAsesor}}&contrato={{$idContrato}}" target="_blank">Diligenciar Contrato</a>
          <a href="{{ $student['linkPago'] }}">Pagar Ahora</a>
      @else
          <h1>Pago por 160000</h1>
          <h2>{{ $student['nombreEstudiante'] }} {{$item->title}}.</h2>
          <p>{{$item->firstText}}</p>
          <img src="{{asset('images/'.$item->image)}}" style="width: 50%" alt="">
          <a class="btn btn-success" href="http://127.0.0.1:8000/contrato1600?asesor={{$idAsesor}}&contrato={{$idContrato}}" target="_blank">Diligenciar Contrato</a>
          <a href="{{ $student['linkPago'] }}?">Pagar Ahora</a>
      @endif --}}
    @endforeach
</body>
</html>
