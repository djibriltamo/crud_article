@extends('layouts.layout')
@section('content')

<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <h1>Liste des articles </h1>
            <hr>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Ajouter un article</a>
            </br></br>
            <table class="table table-bordered">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th colspan="2">Actions</th>
                </thead>
                <tbody>
                    @php
                        $id = 1
                    @endphp
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $id }}</td>
                            <td>{{ $article->nom }}</td>
                            <td>{{ $article->prix }} FCFA</td>
                            <td>
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">Afficher</a>
                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-success">Modifier</a>
                            </td>
                            <td>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @php
                        $id = $id + 1
                    @endphp
                    @endforeach
                </tbody>
            </table>

            {{ $articles->links() }}
        </div>
    </div>
</div>

@stop
