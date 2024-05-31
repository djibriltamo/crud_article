@extends('layouts.layout')

@section('content')

<div class="container text">
    <div class="row">
        <div class="col s12">
            <h1>Modification article</h1>
                <hr>
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <ul>
                    @foreach($errors as $error)
                        <li class="alert alert-danger" role="alert">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>

                <form action="{{ route('articles.update', $article->id) }}" method="POST" class="form-group">
                    @csrf
                    @method('put')

                    <input type="text" name="id" style="display: none;" value="{{ $article->id }}">

                    <div class="mb-3">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $article->nom }}">
                    </div>

                    <div class="mb-3">
                        <label for="prix">Prix</label>
                        <input type="float" class="form-control" id="prix" name="prix" value="{{ $article->prix }} ">
                    </div>

                    <button type="submit" class="btn btn-success">Modifier</button>
                    <br></br>
                    <a href="{{ route('articles.index') }}" class="btn btn-info">Revenir sur la liste des articles</a>

                </form>

            </div>
        </div>
    </div>

        @stop
