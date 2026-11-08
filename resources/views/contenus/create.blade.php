@extends('layouts.app')

@section('titre', 'Nouvelle publication')

@section('contenu')
    <h1>Ajouter une publication</h1>
    
    <form action="{{ route('contenus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>Titre :</label><br>
            <input type="text" name="titre" style="width: 100%; padding: 5px;" value="{{ old('titre') }}">
        </div>
        <div style="margin-bottom: 10px;">
            <label>Contenu :</label><br>
            <textarea name="contenu" rows="5" style="width: 100%; padding: 5px;">{{ old('contenu') }}</textarea>
        </div>
        <div style="margin-bottom: 10px;">
            <label>Catégorie :</label><br>
            <select name="categorie_id" style="width: 100%; padding: 5px;">
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>
        <div style="margin-bottom: 10px;">
            <label>Image (optionnelle) :</label><br>
            <input type="file" name="image" accept="image/*">
        </div>
        
        <button type="submit" style="padding: 10px; background: green; color: white; border: none; border-radius: 5px;">Enregistrer</button>
        <a href="{{ route('contenus.index') }}">Annuler</a>
    </form>
@endsection