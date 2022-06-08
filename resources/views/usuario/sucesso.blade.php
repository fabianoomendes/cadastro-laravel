@extends('layout.base')

@section('titulo', 'Cadastro de usuário')

@section('conteudo')

    <p>Olá {{ $fulano }}, seu cadastro foi realizado com sucesso!</p>

    <a href="{{ route('home') }}">Voltar</a>

@endsection