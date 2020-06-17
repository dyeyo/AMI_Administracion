<div class="tab-pane active" id="tabs-2" role="tabpanel">
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
            <button type="submit" id="infopago" class="btn btn-success"> Enviar email </button>
          </form>
        </div>
      </div>
    </div>
  </div>
