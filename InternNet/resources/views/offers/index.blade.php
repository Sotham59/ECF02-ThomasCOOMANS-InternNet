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
    <h1>Liste des offres de stage</h1>
    @foreach($offers as $offer)
        <div>
            <h2>{{ $offer->title }}</h2>
            <p>{{ $offer->description }}</p>
            <p>Entreprise: {{ $offer->company }}</p>
            <a href="{{ route('offers.show', $offer) }}">Voir détails</a>
        </div>
    @endforeach
@endsection

</body>
</html>