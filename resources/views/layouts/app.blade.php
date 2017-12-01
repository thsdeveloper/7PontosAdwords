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
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

</head>
<body>
  <v-app id="app" top-toolbar footer v-cloak>
    <v-toolbar>
        <v-toolbar-title>
            {{ config('app.name', 'Laravel') }}
        </v-toolbar-title>
        <v-toolbar-items class="hidden-md-and-down">
            @if (Auth::guest())
                <v-toolbar-item ripple href="{{ route('login') }}">Login</v-toolbar-item>
                <v-toolbar-item ripple href="{{ route('register') }}">Register</v-toolbar-item>
            @else
                <v-menu bottom left offset-y origin="top right" transition="v-slide-y-transition">
                    <v-btn dark icon slot="activator">
                        <v-icon>account_circle</v-icon>
                    </v-btn>
                    <v-list>
                        <v-list-item>
                            <v-list-tile>
                                <v-list-tile-title>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </v-list-tile-title>
                            </v-list-tile>
                        </v-list-item>
                    </v-list>
                </v-menu>
            @endif
        </v-toolbar-items>
    </v-toolbar>
    <main>
        <v-content>
            <v-container fluid>
                @yield('content')
            </v-container>
        </v-content>
    </main>
    <v-footer>Footer</v-footer>
</v-app>

<!-- Scripts -->

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
