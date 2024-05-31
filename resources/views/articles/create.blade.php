@extends('layouts.layout')

@section('content')

<div class="container text">
    <div class="row">
        <div class="col s12">
            <h1>Ajouter un article </h1>
            <hr>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <ul>
                @foreach($errors as $error)
                    <li class="alert alert-danger"> {{ $error }}</li>
                @endforeach
            </ul>

            <form action="{{ route('articles.store') }}" method="POST" class="form-group">
                @csrf
                <div class="mb-3">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nom">
                </div>

                <div class="mb-3">
                    <label for="prix">Prix</label>
                    <input type="float" class="form-control" id="prix" name="prix" aria-describedby="prix">
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <br></br>
                <a href="{{ route('articles.index') }}" class="btn btn-info">Revenir sur la liste des articles</a>

            </form>

        </div>
    </div>
</div>

@stop
