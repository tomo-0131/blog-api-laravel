<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Postモデルを使えるようにする
use App\Models\Post;

class PostController extends Controller
{
    # 投稿作成 (Create)
    public function create(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return response()->json(Post::all());
    }

    # 投稿一覧取得 (Read)
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }
    # 投稿詳細取得 (Read)
    public function show(Int $id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }
    # 投稿編集 (Update)
    public function update(Int $id, Request $request)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->update_at = now();
        $post->save();
        return response()->json($post);
    }
    # 投稿削除 (Delete)
    public function delete(Int $id)
    {
        $post = Post::find($id);
        $post->delete();
        return response()->json(Post::all());
    }
}
