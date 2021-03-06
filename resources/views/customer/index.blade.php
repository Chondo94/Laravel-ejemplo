<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body><br><br><br>
<div class="columns">

  <div class="column"></div>

  <div class="column">
    <input type="submit" value="Mi Agenda" class="button is-primary is-medium is-fullwidth is-rounded">
    <br>
    <table class="table  is-striped is-narrow is-hoverable is-fullwidth">
        <tr>
          <th>Nombre</th>
          <th>Direccion</th>
          <th>Telefono</th>
          <th></th>
        </tr>

    @foreach($customers as $customer)

    <tr>
      <td>{{ $customer->name }}</td>
      <td>{{ $customer->address }}</td>
      <td>{{ $customer->phone_number }}</td>
      <td><a href="{{ route('customer.show', $customer->id) }}" class="button is-dark">Detalle</a></td>
    </tr>

    @endforeach
    </table>

    <div class="has-text-centered">
      <a href="{{ route('customer.create') }}"><h1 class="button is-active is-medium is-rounded has-text-centered">Registrar</h1></a>
    </div>
  </div>

    <div class="column"></div>

  </div>
  </body>
</html>
