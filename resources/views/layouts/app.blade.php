<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre', 'MediaHub')</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        nav {
            background: #333;
            padding: 1rem;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        nav span {
            color: white;
            margin-right: 15px;
        }

        nav button {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .container {
            padding: 20px;
        }

        .card {
            background: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('accueil') }}">Accueil</a>
        <a href="{{ route('contenus.index') }}">Contenus</a>
        <a href="{{ route('a-propos') }}">À propos</a>

        @auth
            <span>Bonjour {{ auth()->user()->name }}</span>

            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit">Déconnexion</button>
            </form>
        @else
            <a href="{{ route('login') }}">Connexion</a>
            <a href="{{ route('register') }}">Inscription</a>
        @endauth

    </nav>

    <main class="container">
        @yield('contenu')
    </main>

</body>
</html>