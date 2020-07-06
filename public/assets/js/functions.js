function contrato() {
  $("#contratocontenedor").show();
  let nombre = $("#name").val();
  $("#nombreContrato").text(nombre);
  let contenido = $(".textoContrato").text();
  $("#contract").val(contenido);
}
7
/*
TODO:
estos debo hacer que
FIXME:
aca esta fallando tal cosa
*/

function dataClient() {
  var datoCliente = $(".datoCliente").val();
  if (datoCliente != 0) {
    $.getJSON(route("loadClient", { id: datoCliente }), function (data) {
      $("#email").val(data[0].email);
      $("#nombre").val(data[0].name);
      $("#scholl").val(data[0].scholl);
    });
  }
}

function dataTemplateEmailSendContract() {
  var tipoContrato = $("#tipoContrato").val();
  console.log(tipoContrato);

  if (tipoContrato != 0) {
    $.getJSON(route("loadTemplate", { id: tipoContrato }), function (data) {
      console.log(data);
      $("#idtemplate").val(data[0].emailId);
    });
  }
}
