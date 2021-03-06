<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\V1\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate();

        return PostResource::collection($posts);
    }

    public function show(Post $post)
    {
        return new PostResource($post); //PostResource es para mostrar de otra forma el contenido
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'message' => "Success"
        ]);
    }
}
