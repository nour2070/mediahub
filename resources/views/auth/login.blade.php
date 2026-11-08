@extends('layouts.app')

@section('titre', 'Connexion')

@section('contenu')
    <h1>Connexion</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>Email :</label><br>
            <input type="email" name="email" required style="padding: 5px; width: 100%;">
        </div>
        <div style="margin-bottom: 10px;">
            <label>Mot de passe :</label><br>
            <input type="password" name="password" required style="padding: 5px; width: 100%;">
        </div>
        <button type="submit" style="padding: 10px; background: #333; color: white; border: none; border-radius: 5px;">Se connecter</button>
    </form>
@endsection