<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mensaje Recibido</title>
  </head>
  <body>
      <p>
        Recibiste un mensaje de: {{$msg['name']}} - {{$msg['email']}}
      </p>
      <p> <strong>
      Asunto:</strong> {{$msg['subject']}}

    </p>
      <p>
        <strong>Contenido: </strong>
        {{$msg['content']}}
      </p>

  </body>
</html>
