
@extends('site.layout')

@section('title','Essa e a pagina HOME')

@section('conteudo')
    <h1>Essa e nossa home</h1>

    {{-- Isso e comentario --}}

    {{-- Operador ternario --}}
    <h2>Operador ternario</h2>

    {{ isset($nome)? 'Existe':'Nao Existe' }}

    {{-- Operador ternario --}}
    <h3>Definir valor padrao Operador ??</h3>

    {{ $teste ?? 'Padrao' }}

    {{-- Estrutura de controlle --}}
    <h3>Estrutura de controlle</h3>

    {{--
    @if ($nome=='Artur')
        true
    @else
        false
    @endif
    --}}
    {{-- 
    @unless ($nome=='Artur'){{-- Se essa condicao for falsa -}}
        true
    @else
        false
    @endunless
    --}}
    {{--
    @switch($idade)
        @case(26)
            Idade Esta ok
            @break
            Idade Esta Errada
        @default
            default
    @endswitch
    --}}

    {{-- 
    @isset($nome)
        {{ $nome }}
    @endisset    
    --}}

    {{-- 
    @empty($nome)
        Arty
    @endempty
    --}}

    {{-- Verifica se existe um usuario autenticado --}}
        {{--    
        @auth
            Sim Existe
        @endauth
            --}}
        {{-- Verifica se nao existe um usuario autenticado --}}
        @guest
            Nao existe
        @endguest
        
{{-- Estrutura de repiticao --}}
<h3>Estrutura de repiticao</h3>
<h4>For</h4>
@for ($i=0;$i<10;$i++)
    {{ $i .'-'}}
@endfor

<h4>While e PHP</h4>

{{-- Directiva PHP --}}
@php $i=0; @endphp

@while ($i<=10)
    {{ $i }}
    
    @php $i++; @endphp
@endwhile


<h4>Foreach</h4>

@foreach ($frutas as $fruta)
    {{ $fruta }} @php echo '-' @endphp
@endforeach

<h4>Forelse</h4>

@php $ar=[]; @endphp

@forelse ($ar as $fruta)
    {{ $fruta }} @php echo '-' @endphp
@empty
    O array esta vazia
@endforelse

{{-- includes --}}
<h2>Includes</h2>

@include('includes.mensagem',['titulo'=>'Mensagem de sucesso!'])


{{-- components --}}
<h2>Components</h2>

@component('components.sidebar')
    @slot('paragrafo')
        Texto qualquer vindo do slot
    @endslot        
@endcomponent


@push('style')
    {{-- Onde se adiciona nossos styles --}}
@endpush

@push('script')
    {{-- Onde se adiciona nossos script --}}
@endpush

@endsection