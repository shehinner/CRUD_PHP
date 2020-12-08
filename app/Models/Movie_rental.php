<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie_rental extends Model
{
    protected $table = 'movie_rentals';
    protected $filliable = ['price', 'observations'];
    protected $guarded = ['id','movie_id','rental_id'];
}
