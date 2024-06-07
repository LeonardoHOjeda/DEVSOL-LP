<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Notificación de Contacto</title>
  <style>
    .logo {
      width: 100px;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: 0 auto;
    }
    h1 {
      color: #333333;
      font-size: 24px;
      margin-bottom: 20px;
    }
    p {
      color: #555555;
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 10px;
    }
    .footer {
      margin-top: 20px;
      text-align: center;
      color: #777777;
      font-size: 8px;
    }
  </style>
</head>
<body>
  <img src="{{ asset('images/email-logo.png') }}" alt="icono de correo electronico" class="logo">
  <div class="container">
    <h1>Alguien necesita información</h1>
    <h2>Nuevo Mensaje de Contacto</h2>
    <p><strong>Nombre:</strong> {{ $nombre }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $correo }}</p>
    <p><strong>Teléfono:</strong> {{ $telefono }}</p>
    <p><strong>Mensaje:</strong> {{ $mensaje }}</p>
  </div>
  <div class="footer">
    <p>Este es un correo electrónico generado automáticamente. Por favor, no responda a este mensaje.</p>
  </div>
</body>
</html>
