<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>..: AMI :..</title>
</head>
<body>
      <h1>Bienvenido {{$asesor['name']}}  {{$asesor['lastname']}}</h1>
      <p>Ya eres un asesor registrado</p>
      <p>Puedes acceder en la siguiente dirección con tus credeciales</p>
      <a href="http://127.0.0.1:8000/login" target="_blank">Inicar Sesión</a>
      {{-- <a href="https://marketing.lectorami.co/crm/public/login" target="_blank">Inicar Sesión</a> --}}
      <p><b>Correo: {{$asesor['email']}}</b></p>
      <p><b>Contraseña: {{$asesor['numIdentification']}}</b></p>
</body>
</html>
