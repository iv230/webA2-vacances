<!DOCTYPE html>
<html>
  <head>
    <title>Cars</title>
  </head>
  <body>
    @foreach ($articles as $article)
    <h1>Article #{{ $article->id }}</h1>
    <ul>
      <li>Name: {{ $article->name }}</li>
      <li>Description: {{ $article->description }}</li>
      <li>Price: {{ $article->price }}</li>
    </ul>
    @endforeach
  </body>
</html>
