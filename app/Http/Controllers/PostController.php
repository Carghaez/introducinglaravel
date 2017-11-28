<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    function createPost(User $user, $contents)
    {
      // $post = new Post();
      // $post->owner_id = $user->id;
      // $post->contents = $contents;
      // $post->save();

      $post = Post::create([
        'owner_id' => $user->id,
        'contents' => $contents
      ]);
      return 'Il post è stato creato con id '. $post->id;
    }

    function createComment($post_id, User $user, $contents)
    {
      $post = Comment::create([
        'post_id' => $post_id,
        'owner_id' => $user->id,
        'contents' => $contents
      ]);
      return 'Il commento è stato inserito';
    }

    function getComments(Post $post)
    {
      return $post->comments()->get();
    }
}
