<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->

  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

</head>
<body>
  <v-app id="app" top-toolbar footer v-cloak>
    @if (Auth::guest())

    @else
        <toolbar-7p :user="{{Auth::user()}}"></toolbar-7p>
    @endif

    <v-content>
      <v-container fluid>
        @yield('content')
      </v-container>
    </v-content>
    <v-footer class="pa-3">
      <v-spacer></v-spacer>
      <div>7Pontos Agência Integrada </div>
    </v-footer>
  </v-app>

  <!-- Scripts -->

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
