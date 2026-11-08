@extends('layouts.app')

@section('titre', 'Liste des contenus')

@section('contenu')
    <h1>Contenus multimédias</h1>

    @if(session('success'))
        <div style="background: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    @auth
        <a href="{{ route('contenus.create') }}" style="display: inline-block; margin-bottom: 20px; padding: 10px; background: #333; color: white; text-decoration: none; border-radius: 5px;">+ Ajouter un contenu</a>
    @endauth

    @forelse ($publications as $publication)
        <div class="card" style="background: white; padding: 15px; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h2>{{ $publication->titre }}</h2>
            
            @if($publication->image)
                <img src="{{ Storage::url($publication->image) }}" width="150" alt="Image" style="margin-bottom: 10px; border-radius: 5px;">
            @endif

            <p>{{ $publication->contenu }}</p>
            <p><small><strong>Catégorie :</strong> {{ $publication->categorie->nom }}</small></p>
            
            <div style="margin-top: 10px;">
                <a href="{{ route('contenus.show', $publication) }}">Voir les détails</a> 
                
                @auth
                    | <a href="{{ route('contenus.edit', $publication) }}">Modifier</a> |
                    <form action="{{ route('contenus.destroy', $publication) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red; background: none; border: none; cursor: pointer;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')">Supprimer</button>
                    </form>
                @endauth
            </div>
        </div>
    @empty
        <p>Aucun contenu disponible pour le moment.</p>
    @endforelse
@endsection