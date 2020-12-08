<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $filliable = ['name'];
    protected $guarded = ['id','status_id'];

    public function status()
{
      return $this->belongsTo(Status::class);
}
}
