<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Admin Articles</title>
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/styleConnexion.css"/>
    </head>
  <body>

    <h1>Administration des articles</h1>

    <a type="button" href="/articles/create">Ajouter un article</a>

    <table>
        <tr>
            <td>ID</td>
            <td>Nom article</td>
            <td>Prix</td>
            <td>Actions</td>
        </tr>
        @foreach ($articles as $article)
        <tr>
            <td><a href="/articles/{{ $article->id }}/">Article #{{ $article->id }}</a></td>
            <td>{{ $article->name }}</td>
            <td>{{ $article->price }}</td>
            <td><a type="button" href="/articles/{{ $article->id }}/edit">Modifier</a>
                <a class="remove-button" type="button" href="/articles/{{ $article->id }}/delete">Supprimer</a> </td>
        </tr>
        @endforeach
    </table>
  </body>
</html>
