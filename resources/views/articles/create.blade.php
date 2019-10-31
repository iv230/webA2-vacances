<!DOCTYPE html>
<html>
    <head>
        <title>Créer un article</title>
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/styleConnexion.css"/>
    </head>
    <body>
        <h1>Créer un article</h1>
        <form action="/articles" method="POST" class="form-beau">
            <div class="input-group">
                <label>Nom</label>
                <input type="text" name="name" placeholder="Nom de l'article"/>
            </div>
            <div class="input-group">
                <label>Prix</label>
                <input type="number" name="price" placeholder="Prix de l'article" />
            </div>
            <div class="input-group">
                <label>Description</label>
                <textarea rows="50" cols="40" name="description" placeholder="Description"></textarea>
            </div>
            <button type="submit">Ajouter</button>
            {{ csrf_field() }}
        </form>
    </body>
</html>
