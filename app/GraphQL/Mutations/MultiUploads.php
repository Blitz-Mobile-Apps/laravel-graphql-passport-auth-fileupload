<?php

namespace App\GraphQL\Mutations;

class MultiUploads
{
    /**
     * Upload a file, store it on the server and return the path.
     *
     * @param  mixed  $root
     * @param  mixed[]  $args
     * @return string|null
     */
    public function resolve($root, array $args): ?string
    {
      
        $files = $args['files'];

        foreach($files as $file)
        {
            $file->storePublicly('uploads');
        }
        
        return "uploaded succesfully";
    }
}