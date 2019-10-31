<!DOCTYPE html>
<html>
<head>
    <title>Modifier Article #{{ $article->id }}</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/styleConnexion.css"/>
</head>
<body>
<h1>Modifier Article #{{ $article->id }}</h1>
<form action="/articles" method="POST" class="form-beau">
    <div class="input-group">
        <label>Nom</label>
        <input type="text" name="name" placeholder="Nom de l'article" value="{{ $article->name }}"/>
    </div>
    <div class="input-group">
        <label>Prix</label>
        <input type="number" name="price" placeholder="Prix de l'article" value="{{ $article->price }}"/>
    </div>
    <div class="input-group">
        <label>Description</label>
        <textarea rows="50" cols="40" name="description" placeholder="Description">{{ $article->description }}</textarea>
    </div>
    <button type="submit">Valider</button>
    <iinput type="hidden" name="id" value="{{ $article->id }}"></iinput>
    {{ csrf_field() }}
</form>
</body>
</html>
