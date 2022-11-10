<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\Impl\MarvelServiceImpl;
use App\Services\MarvelService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $marvelService;
    public function __construct(MarvelService $marvelService){
        $this->marvelService = $marvelService;
    }

    public function index(){
        try{
            $posts = $this->marvelService->getAll();

            return response()->json([
                'status' => true,
                'posts' => $posts
            ]);
        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }
}
