<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

@section('content')
    <h1>Détails de l'offre de stage</h1>
    <h2>{{ $offer->title }}</h2>
    <p>{{ $offer->description }}</p>
    <p>Entreprise: {{ $offer->company }}</p>
    <!-- Ajoutez ici un formulaire pour postuler à l'offre -->
@endsection

</body>
</html>