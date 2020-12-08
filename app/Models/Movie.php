<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $filliable = ['name', 'description'];
    protected $guarded = ['id','user_id','status_id'];

    public function statuses()
    {
          return $this->belongsTo(Status::class);
    }
    public function users()
    {
         return $this->belongsTo(User::class);
    }
}
