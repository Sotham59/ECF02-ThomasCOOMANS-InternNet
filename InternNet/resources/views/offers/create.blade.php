@extends('layouts.app')

@section('content')
    <h1>Créer une nouvelle offre de stage</h1>
    <form action="{{ route('offers.store') }}" method="POST">
        @csrf
        <label for="title">Titre de l'offre</label>
        <input type="text" id="title" name="title" required>
        <label for="description">Description</label>
        <textarea id="description" name="description" required></textarea>
        <label for="company">Entreprise</label>
        <input type="text" id="company" name="company" required>
        <button type="submit">Créer</button>
    </form>
@endsection
