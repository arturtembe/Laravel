
@extends('site.layout')

@section('title','Details')

@section('conteudo')

<div class="row container">
    <div class="col s12 m6">
        <img src="{{ asset('img/bg_1.jpeg') }}" class="responsive-img"/>
    </div>
    <div class="col s12 m6">
        <h4>{{$producto->nome}}</h4>
        <h4>MZN {{number_format($producto->preco,2,',','.')}}</h4>
        <p>{{ $producto->descricao }}</p>
        <p>Postado por: {{ $producto->user->firstname }}</p>
        <p>Categoria: {{ $producto->categoria->nome }}</p>
        <button class="btn orange btn-large">Compar</button>
    </div>
</div>

@endsection