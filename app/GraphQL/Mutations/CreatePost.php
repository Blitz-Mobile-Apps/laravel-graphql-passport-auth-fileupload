<?php

namespace App\GraphQL\Mutations;

use App\Post;

class CreatePost
{
    public function resolve($root, array $args): ?string
    {
        if($args['image']){
            $file = $args['image'];
            $file->storePublicly('uploads');
        }
       $post = new Post;
       $post->user_id = $args['user_id'];
       $post->title= $args['title'];
       $post->content= $args['content'];
       $post->image= $file->getClientOriginalName();
       $post->save();
        
        return "Post created succesfully";
    }
}