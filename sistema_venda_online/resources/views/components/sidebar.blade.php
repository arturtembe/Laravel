
<nav class="red">
    <div class="nav-wrapper container">
        <a href="{{ route('site.index') }}" class="brand-logo center">CursoLaravel</a>
        <ul id="nav-mobile" class="left">
            <li><a href="{{ route('site.index') }}">Home</a></li>
            <li>
                <a href="#" class="dropdown-trigger pt-2" data-target="dropdown1">
                    Categorias
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="25"><path fill="#fff" d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                </a>
            </li>
            <li><a href="/">Carinho</a></li>
        </ul>
    </div>
</nav>

{{-- DopDown --}}
<ul id="dropdown1" class="dropdown-content">
    @foreach ($categoriasMenu as $categoriaM)
        <li><a href="{{ route('site.categoria',$categoriaM->id) }}">{{ $categoriaM->nome }}</a></li>                        
    @endforeach
</ul>

<!--
<header class="header">
    <nav>
        <a href="/">Home</a>
        <a href="">Carinho</a>
    </nav>

    <h1>CursoLaravel</h1>

    <div></div>

</header>
-->