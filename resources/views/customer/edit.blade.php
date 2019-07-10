<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body>
    <br><br>
    <div class="columns">
    <div class="column"></div>
    <div class="column">
      <h1 class="subtitle is-2 has-text-centered">Editar contacto</h1>
    <form method="post" action="{{ route('customer.update', $customer->id) }}">

        @csrf
        @method('PATCH')
        {{ csrf_field() }}

        <div class="field">
          <div class="control">
        <input type="text" name="name" value="{{$customer->name}}" class="input is-primary is-large has-text-centered is-rounded" required placeholder="nombre"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
        <input type="text" name="address" value="{{$customer->address}}" class="input is-primary is-large has-text-centered is-rounded" required placeholder="direccion"><br>
          </div>
        </div>

        <div class="field">
          <div class="control">
        <input type="text" name="phone_number" value="{{$customer->phone_number}}" class="input is-primary is-large has-text-centered is-rounded" required placeholder="telefono"><br>
          </div>
        </div>

        <input type="submit" value="guardar" class="button is-primary is-medium is-fullwidth is-rounded" required>
    </form>
    </div>

    <div class="column"></div>

  </div>
  </body>
</html>
