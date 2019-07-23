<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags(){
        return $this->belongsToMany('App\Model\user\tag', 'post_tags');    
    }



    // Connection with Categories
    public function categories()
    {
        return $this->belongsToMany('App\Model\user\category', 'category_posts');
    }
}
