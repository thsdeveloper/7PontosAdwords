@extends('layouts.app')

@section('content')
  <v-layout row wrap>
    <v-flex xs12>
      <div class="display-1">Painel de controle <span class="subheading">Seja bem vindo Thiago</span></div>
    </v-flex>
    <v-flex xs12 sm4>
      <v-card>
        <v-card-media class="white--text" height="150px" src="http://www.novosconceitos.com/wp-content/uploads/2016/02/nc-5-dicas-magicas-para-otimizar-acesso-ao-seu-site-1.jpg">
          <v-container fill-height fluid>
            <v-layout fill-height>
              <v-flex xs12 align-end flexbox>
                <span class="headline">Acessos ao site</span>
              </v-flex>
            </v-layout>
          </v-container>
        </v-card-media>
        <v-card-title>
          <div>
            <span class="grey--text">Number 10</span><br>
            <span>Whitehaven Beach</span><br>
            <span>Whitsunday Island, Whitsunday Islands</span>
          </div>
        </v-card-title>
        <v-card-actions>
          <v-btn flat color="orange">Compartilhar</v-btn>
          <v-btn flat color="orange">Ver</v-btn>
        </v-card-actions>
      </v-card>
      
      <dialog-confirm-7p></dialog-confirm-7p>
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
