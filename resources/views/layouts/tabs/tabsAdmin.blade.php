<div class="tab-pane active" id="tabs-1" role="tabpanel">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-1 formcontent">
          <h1>Clientes Matriculados</h1>
          <div class="table-responsive">
            <table class="table table-hover" id="tabla">
                <thead>
                <tr>
                    <th>Nombre completo</th>
                    <th>Numero de ID</th>
                    <th>Ciudad</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Asesor</th>
                    <th>Fecha de contrato</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($clientesPaySuccess as $client)
                    <tr>
                      <td>{{$client->name}}</td>
                      <td>{{$client->numIdenficication}}</td>
                      <td>{{$client->city}}</td>
                      <td>{{$client->addrees}}</td>
                      <td>{{$client->phone}}</td>
                      <td>{{$client->email}}</td>
                      <td>{{$client->asesor->name}}</td>
                      <td>{{ Carbon\Carbon::parse($client->created_at)->format('d-m-Y') }}</td>
                    </tr>
                  @endforeach

                </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 offset-md-1 formcontent">
          <h1>Clientes Pendientes Pago</h1>
          <div class="table-responsive">
            <table class="table table-hover" id="tabla">
                <thead>
                <tr>
                    <th>Nombre completo</th>
                    <th>Numero de ID</th>
                    <th>Ciudad</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Asesor</th>
                    <th>Pagado</th>
                    <th>Fecha de contrato</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($clientesPayPending as $client)
                    <tr>
                      <td>{{$client->name}}</td>
                      <td>{{$client->numIdenficication}}</td>
                      <td>{{$client->city}}</td>
                      <td>{{$client->addrees}}</td>
                      <td>{{$client->phone}}</td>
                      <td>{{$client->email}}</td>
                      <td>{{$client->asesor->name}}</td>
                      <td>
                        <form action="{{ route('paySuccess',$client->id) }}" method="POST">
                          {{csrf_field()}}
                          {{ method_field('put') }}
                          <input type="hidden" name="pay" value="1">
                          <button type="submit" class="btn btn-success">Matriculado</button>
                        </form>
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
              <div class="form-group">
                <input type="text" class="form-control" name="nombreEstudiante" id="nombreEstudiante" placeholder="Nombre completo titular del contrato" />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="emailEstudiante" id="emailEstudiante" placeholder="Correo electrónico titular del contrato" />
              </div>
            </div>
            <div class="form-group">
              <label>Tipo de Contrato</label>
              <select class="form-control" name="tipoContrato" id="tipoContrato">
                <option value="">Debes seleccionar una opción</option>
                <option value="6">Cuotas</option>
                <option value="12">Contado</option>
                <option value="24">Contado 1600</option>
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

