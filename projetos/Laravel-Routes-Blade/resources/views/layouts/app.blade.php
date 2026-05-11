<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema Web - ADS')</title>

    <style>
        /* Reset simples */
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        /* Cabeçalho */
        header {
            background-color: #004080;
            color: white;
            padding: 15px;
            text-align: center;
        }

        /* Menu */
        nav {
            background-color: #0066cc;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Conteúdo */
        main {
            padding: 20px;
            min-height: 400px;
        }

        .card {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        /* Rodapé */
        footer {
            background-color: #004080;
            color: white;
            text-align: center;
            padding: 10px;
        }

    </style>
</head>
<body>

    <header>
        <h1>Sistema Web - Programação Web I</h1>
    </header>

    @include('partials.menu')

    <main>
        <div class="card">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>IFCE Campus Boa Viagem - ADS - Programação Web I</p>
    </footer>

</body>
</html>
