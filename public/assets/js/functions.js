function contrato() {
  $("#contratocontenedor").show();
  let nombre = $("#name").val();
  $("#nombreContrato").text(nombre);
  let contenido = $(".textoContrato").text();
  $("#contract").val(contenido);
}

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
