<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
  </head>
  <body>
    <br><br><br><br><br>
    <div class="columns">

    <div class="column"></div>

    <div class="column">
      <input type="submit" value="{{ $student->name }}" class="button is-primary is-medium is-fullwidth is-rounded">
        <br>
        <table class="table is-striped is-narrow is-hoverable is-fullwidth">
          <!--<tr>
            <th>Nombre</th><td>{{ $customer->name }}</td>
          </tr>-->
          <tr>
            <th>direccion</th><td>{{ $customer->address }}</td>
          </tr>
          <tr>
            <th>Telefono</th><td>{{ $customer->phone_number }}</td>
          </tr>

        </table>
        <br>
        <form action="{{ route('customer.destroy', $customer->id)}}" method="post">
          @csrf
          @method('DELETE')
          <div class="has-text-centered">
          <a href="{{ route('customer.index') }}" class="button is-link is-normal is-info is-rounded has-text-centered">Volver</a>
          <a href="{{ route('customer.edit', $customer->id) }}" class="button is-success is-normal is-info is-rounded has-text-centered">Editar</a>
          <input type="submit" value="Eliminar" class="button is-danger is-normal is-info is-rounded has-text-centered">
        </div>
        </form>
    </div>

    <div class="column"></div>

    </div>
  </body>
</html>
