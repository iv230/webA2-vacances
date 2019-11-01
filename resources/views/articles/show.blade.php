<!DOCTYPE html>
<html>
    <head>
        <title>Article {{ $article->id }}</title>
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/styleConnexion.css"/>
    </head>
  <body>
    <h1>Article #{{ $article->id }}</h1>

    <table>
        <tr>
            <td>ID</td>
            <td>Nom article</td>
            <td>Description</td>
            <td>Prix</td>
            <td>Actions</td>
        </tr>
            <tr>
                <td>Article #{{ $article->id }}</td>
                <td>{{ $article->name }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->price }}</td>
                <td><a type="button" href="/articles/{{ $article->id }}/edit">Modifier</a>
                    <a class="remove-button" type="button" href="/articles/{{ $article->id }}/delete">Supprimer</a> </td>
            </tr>
    </table>
    <a href="/articles/">Retour à l'index</a>
  </body>
</html>
