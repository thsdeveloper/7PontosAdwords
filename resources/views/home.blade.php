@extends('layouts.app')

@section('content')
  <v-layout row wrap>
    <v-flex xs6>
      <v-card>
        <v-card-text>
          <h1>Dashboard</h1>
        </v-card-text>
      </v-card>
    </v-flex>
    <v-flex xs6>
      <v-card>
        <v-card-text>
          <h1>Dashboard</h1>
        </v-card-text>
      </v-card>
    </v-flex>
    </v-layout>



  <li>
    <a href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>
</li>
@endsection
