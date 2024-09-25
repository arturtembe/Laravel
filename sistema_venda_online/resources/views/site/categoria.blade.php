
@extends('site.layout')

@section('title',$categoia->nome)

@section('conteudo')

<main>

    <div class="row container">

        <h3>Categoria: {{ $categoia->nome }}</h3>

    @foreach ($productos as $producto)

            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('img/bg_1.jpeg') }}">
                        <span class="card-title">{{ Str::limit($producto->nome,20) }}</span>
                        <a href="{{ route('site.details',$producto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 -960 960 960" width="40"><path fill="#fff" d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                        </a>
                    </div>
                    <div class="card-content">
                        <p>{{ Str::limit($producto->descricao, 20) }}</p>
                    </div>
                </div>
            </div>
        
    @endforeach 

    </div>

    <div class="row container center">
        {{ $productos->links('custom.pagination'); }}
    </div>

</main>

@endsection