function contrato() {
  $("#contratocontenedor").show();
  let nombre = $("#nombre").val();
  $("#nombreContrato").text(nombre);
  let contenido = $(".textoContrato").text();
  $("#contract").val(contenido);
}
