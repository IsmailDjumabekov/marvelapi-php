<?php

namespace App\Services\Impl;

use App\Models\Post;
use App\Services\MarvelService;

class MarvelServiceImpl implements MarvelService
{
    public function getAll()
    {
        $posts = Post::all();

        if($posts == null){
            throw new \Exception("Данных нет",404);
        }

        return $posts;
    }
}
