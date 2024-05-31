@extends('layouts.layout')
@section('content')

<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <div class="card-header">
                <h1>Page d'affichage</h1>
            </div>
            <hr>
            </br></br>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->nom }}</td>
                                <td>{{ $article->prix }} FCFA</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

