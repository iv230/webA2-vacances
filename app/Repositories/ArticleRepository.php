<?php

namespace App\Repositories;

use App\Article;

class ArticleRepository
{

    protected $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    private function save(Article $article, Array $inputs)
    {
        $article->name = $inputs['name'];
        $article->price = $inputs['price'];
        $article->description = $inputs['description'];

        $article->save();
    }

    /*public function getPaginate($n)
    {
        return $this->article->paginate($n);
    }*/

    public function store(Array $inputs)
    {
        $article = new $this->article;
        $article->name = $inputs['name'];
        $article->description = $inputs['description'];
        $article->price = $inputs['price'];

        $this->save($article, $inputs);

        return $article;
    }

    public function getById($id)
    {
        return $this->article->findOrFail($id);
    }

    public function update($id, Array $inputs)
    {
        $this->save($this->getById($id), $inputs);
    }

    public function destroy($id)
    {
        $this->getById($id)->delete();
    }

}
