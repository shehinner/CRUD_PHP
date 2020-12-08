<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_movie extends Model
{
    protected $table = 'category_movies';
    protected $guarded = ['id','movie_id','category_id'];
}
