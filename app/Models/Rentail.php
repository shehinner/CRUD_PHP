<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rentail extends Model
{
    protected $table = 'rentails';
    protected $filliable = ['start_date', 'end_date','total'];
    protected $guarded = ['id','user_id','status_id'];

    public function status()
    {
          return $this->belongsTo(Status::class);
    }
    public function user()
    {
         return $this->belongsTo(User::class);
    }
}

