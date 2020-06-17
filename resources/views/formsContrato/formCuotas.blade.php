@extends('layouts.app')
@section('content')
<div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 formcontent">
          <h1>Información del contrato</h1>
          <form
            class="ui form"
            action="{{route('contractPay')}}"
            method="POST"
          >
          {{ method_field('post') }}
          {{csrf_field()}}
          <input type="hidden" name="asesorId" id="asesorId" value="{{$_GET["asesor"]}}" />

            <div class="form-group">
              <label>Nombre Completo del Titular del Contrato</label>
              <input
                type="text"
                onchange="contratoCutoas()"
                class="form-control"
                name="name"
                id="nombre"
                placeholder="Nombre Completo del Titular"
              />
            </div>
            <div class="form-group">
              <label>Dirección</label>
              <input
                type="text"
                class="form-control"
                name="addrees"
                id="direccion"
                placeholder="Dirección"
              />
            </div>
            <div class="form-group">
              <label>Ciudad</label>
              <input
                type="text"
                class="form-control"
                name="city"
                id="ciudad"
                placeholder="Ciudad"
              />
            </div>
            <div class="form-group">
              <label>No de identificación</label>
              <input
                type="text"
                class="form-control"
                name="numIdenficication"
                id="noIdentificacion"
                placeholder="no Identificación"
              />
            </div>
            <div class="form-group">
              <label>Teléfono</label>
              <input
                type="text"
                class="form-control"
                name="phone"
                id="telefono"
                placeholder="Telefono"
              />
            </div>
            <div class="form-group">
              <label>Correo Electrónico</label>
              <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                placeholder="Correo Electronico"
              />
            </div>
            <div id="contratocontenedor"></div>
            <div id="contratoInput" style="display: none;"></div>
            <br />
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="SI"
                name="terminos"
                id="terminos"
              />
              <label class="form-check-label" for="terminos">
                Acepto estos términos y deseo continuar.
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="SI"
                name="terminosCompra"
                id="terminosCompra"
              />
              <label class="form-check-label" for="terminosCompra">
                Entiendo que los anteriores Términos de Compra tienen una
                fecha de ejemplo del acuerdo final (el "contrato"). Reconozco
                que recibiré el contrato efectivo final por correo electrónico
                al recibir el pago.
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="SI"
                name="terminosCusro"
                id="terminosCusro"
              />
              <label class="form-check-label" for="terminosCusro">
                Término del Curso: Entiendo y acepto que estoy comprando un programa de doce (12) meses por cuotas; y después que termine la duración, el programa se renovará automáticamente cada mes para que pueda continuar disfrutando el servicio.
              </label>
            </div>
            <button
              type="submit"
              id="pago"
              class="btn btn-success btn-lg btn-block"
            >
              Enviar Contrato
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div
    class="modal fade"
    id="terminosdoc"
    tabindex="-1"
    role="dialog"
    aria-labelledby="ModalCenterTitle"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalCenterTitle">
            Política de Privacidad de Datos
          </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            LECTOR AMI pone en conocimiento de los usuarios de
            www.lectorami.com, su política de protección de datos de carácter
            personal, para que los usuarios determinen libre y voluntariamente
            si desean facilitar a LECTOR AMI los datos personales que se les
            requieran con ocasión de rellenar cualquier formulario o correo de
            contacto, sin perjuicio que se proceda a dar cumplimiento al deber
            de información en cada uno de los medios a través de los que se
            proceda a la recogida de datos de carácter personal.
          </p>
          <p>
            LECTOR AMI declara su respeto y cumplimiento de las disposiciones
            recogidas en el decreto 1377 del 2013 de la republica de Colombia.
            El usuario responderá, en cualquier caso, de la veracidad de los
            datos facilitados, reservándose LECTOR AMI, el derecho a excluir
            de los servicios registrados a todo usuario que haya facilitado
            datos falsos, sin perjuicio de las demás acciones que procedan en
            derecho.
          </p>
          <p>
            Usted queda informado que los datos que facilite a través de la
            página web www.lectorami.com, LECTOR AMI utilizará esos datos para
            el envío de información, para el envío de publicidad y para la
            solicitud de información sobre productos y servicios y mejorar la
            calidad del servicio.
          </p>
          <p>
            Le informamos de la posibilidad de ejercer en cualquier momento
            los derechos de acceso, rectificación, oposición y, en su caso,
            cancelación de sus datos de carácter personal suministrados,
            mediante petición escrita dirigida a LECTOR AMI en la Carrera 4f #
            35-21 barrio Cadiz de la ciudad de Ibagué, Tolima, Colombia. O
            expresándolo por escrito vía correo electrónico a
            info@lectorami.com.
          </p>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-dismiss="modal"
          >
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>
@include('layouts.fotter')
@endsection
