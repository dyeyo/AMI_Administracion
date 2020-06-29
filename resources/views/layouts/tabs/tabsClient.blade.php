<div class="tab-pane active" id="tabs-1" role="tabpanel">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 formcontent">
        <h1>Mis Clientes Matriculados</h1>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                  <th>Nombre completo</th>
                  <th>Numero de ID</th>
                  <th>Ciudad</th>
                  <th>Dirección</th>
                  <th>Telefono</th>
                  <th>Correo</th>
                  <th>Fecha de contrato</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($clientesAsesor as $client)
                  <tr>
                    <td>{{$client->name}}</td>
                    <td>{{$client->numIdenficication}}</td>
                    <td>{{$client->city}}</td>
                    <td>{{$client->addrees}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{ Carbon\Carbon::parse($client->created_at)->format('d-m-Y') }}</td>
                  </tr>
                @endforeach

              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tab-pane " id="tabs-2" role="tabpanel">
  <div class="container">
    <div class="row">
      <div class="col-12 formcontent">
        <h1>Confirmación de Inscripción</h1>
        <form class="ui form" id="formularioInfoPago" action="{{route('sendinfopay')}}" method="POST">
          {{ method_field('post') }}
          {{csrf_field()}}
          <div class="alert alert-info" role="alert">
            <label>Información del Titular del Contrato</label>
            <div class="form-group col-md-12">
              <select class="form-control datoCliente select2" onchange="dataClient()" style="width: 100%" id="select2" name="nombreEstudiante">
                <option value=""></option>
                @foreach ($clients as $client)
                  <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
              </select>
            <input type="hidden" name="email" id="email"/>
            
            </div>
          </div>
          <div class="form-group">
            <label>Tipo de Contrato</label>
            <select class="form-control" name="tipoContrato" id="tipoContrato">
              <option value="">Debes seleccionar una opción</option>
              @foreach ($contracts as $contract)
                <option value="{{$contract->id}}">{{$contract->title}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Link de pago</label>
            <input type="text" class="form-control" name="linkPago" id="linkPago" placeholder="Ingresa el link de pago" />
          </div>
          <div class="form-group">
              <input type="hidden" name="emailAsesor" id="emailAsesor" value="{{Auth()->user()->email}}" />
          </div>
          <button type="submit" id="infopago" class="btn btn-success btn-block"> Enviar email </button>
        </form>
      </div>
    </div>
  </div>
</div>
