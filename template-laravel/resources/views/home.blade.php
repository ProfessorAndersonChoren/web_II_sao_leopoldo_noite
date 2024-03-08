@extends('templates.app')

@section('title','Página inicial')

@section('content')
    <h1 class="text-center">Bem-vindo ao meu site</h1>
    <x-meu-alerta message="Um alerta de sucesso" context="success"/>
    <x-meu-alerta message="Um alerta de erro" context="danger"/>
    <x-meu-alerta message="Um alerta de advertência" context="warning"/>
    <x-meu-alerta message="Um alerta de informação"/>
@endsection
