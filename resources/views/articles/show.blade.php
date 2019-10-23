<!DOCTYPE html>
<html>
  <head>
    <title>Article {{ $article->id }}</title>
  </head>
  <body>
    <h1>Article #{{ $article->id }}</h1>
    <ul>
      <li>Name: {{ $article->name }}</li>
      <li>Description: {{ $article->description }}</li>
      <li>Price: {{ $article->price }}</li>
    </ul>
  </body>
</html>