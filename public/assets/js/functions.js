function contrato() {
  $("#contratocontenedor").show();
  let nombre = $("#name").val();
  $("#nombreContrato").text(nombre);
  let contenido = $(".textoContrato").text();
  $("#contract").val(contenido);
}

function dataClient() {
  var correo = $(".datoCliente").val();
  $.getJSON(("/loadClients", { id: correo }), function (data) {
    console.log(data);
    $("#email").val(data);
  });
}
