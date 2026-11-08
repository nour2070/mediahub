<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediaHub - Contenus</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: #f5f7fa;
            min-height: 100vh;
            color: #333;
        }
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        header h1 { font-size: 2.5rem; margin-bottom: 0.5rem; }
        header p { opacity: 0.9; }
        nav {
            background: white;
            padding: 1rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        nav a {
            color: #764ba2;
            text-decoration: none;
            margin: 0 1rem;
            font-weight: bold;
        }
        nav a:hover { text-decoration: underline; }
        main {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }
        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .card:hover { transform: translateY(-5px); }
        .card-img {
            height: 180px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }
        .card-body { padding: 1.5rem; }
        .card-body h3 { margin-bottom: 0.5rem; color: #333; }
        .card-body p { color: #666; font-size: 0.95rem; }
    </style>
</head>
<body>
    <header>
        <h1>🎬 MediaHub</h1>
        <p>Tous nos contenus multimédias</p>
    </header>

    <nav>
        <a href="{{ route('home') }}">Accueil</a>
        <a href="{{ route('contenus.index') }}">Contenus</a>
    </nav>

    <main>
        <div class="grid">
            <div class="card">
                <div class="card-img">🎥</div>
                <div class="card-body">
                    <h3>Vidéo 1</h3>
                    <p>Description de la vidéo 1...</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">🎵</div>
                <div class="card-body">
                    <h3>Audio 1</h3>
                    <p>Description de l'audio 1...</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">📷</div>
                <div class="card-body">
                    <h3>Photo 1</h3>
                    <p>Description de la photo 1...</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>