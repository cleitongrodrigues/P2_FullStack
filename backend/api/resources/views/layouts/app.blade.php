<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema Acadêmico')</title>
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
</head>
<body class="layout">
    <aside class="sidebar">
        <nav class="sidebar-nav" aria-label="Menu principal">
            <ul>
                <li>
                    <a class="sidebar-link {{ request()->is('alunos*') ? 'active' : '' }}" href="{{ url('/alunos') }}">
                        Alunos
                    </a>
                </li>
                <li>
                    <a class="sidebar-link {{ request()->is('turmas*') ? 'active' : '' }}" href="{{ url('/turmas') }}">
                        Turmas
                    </a>
                </li>
                <li>
                    <a class="sidebar-link {{ request()->is('matriculas*') ? 'active' : '' }}" href="{{ url('/matriculas') }}">
                        Matrículas
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="conteudo">
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
