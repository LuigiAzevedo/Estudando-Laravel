@extends('app')
  
@section('titulo')
                About Me
@stop
  
@section('conteudo')
                <h1>My name is {{ $eu['nome'] }}</h1>
                <h2>I'm {{ $eu['idade'] }} years old.</h2>
@stop

@section('maisUmConteudo')
                <h3>Currently I live in  {{$eu['home']}}</h3>
@stop