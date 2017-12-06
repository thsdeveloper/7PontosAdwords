@extends('layouts.app')
@section('content')
  <v-btn flat color="primary" to="/">Início</v-btn>
  <v-btn flat color="primary" to="/create">Criar novo</v-btn>
 <v-btn flat color="primary" to="/view/1">Ver user</v-btn>

  <transition name="fade" mode="out-in">
    <router-view class="view"></router-view>
  </transition>
@endsection
