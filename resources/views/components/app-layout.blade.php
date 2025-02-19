<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo online</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('styles')
</head>
<body>
    <div class="layout">
        <header class="header">
            <nav class="nav">
                <a href="/" class="nav-logo" style="margin-left: 20px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 9a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9Z"></path><path d="M3 10h18"></path><path d="M7 12v2"></path><path d="M17 12v2"></path></svg>
                    <span>
                        Catálogo online
                    </span>
                </a>
                <ul class="nav-links">
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Início</a></li>
                    <li><a href="{{ route('catalog.index') }}" class="{{ request()->routeIs('catalog.index') ? 'active' : '' }}">Catálogo</a></li>
                   
                </ul>
            </nav>
        </header>
        <main class="main">
           {{ $slot }}
        </main>
    </div>


    <script src="{{ asset('js/script.js') }}"></script>
    @yield('scripts')

</body>
</html>

