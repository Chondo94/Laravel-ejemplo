<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post" action="{{ route('patito.store') }}"> 

        {{ csrf_field() }}

        <input type="text" name="name" required placeholder="nombre"><br>

        <input type="text" name="address" required placeholder="direccion"><br>

        <input type="text" name="phone_number" required placeholder="telefono"><br>

        <input type="submit" value="guardar" required>
    </form>

  </body>
</html>
