<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $filliable = ['name', 'email','password'];
    protected $guarded = ['id','status_id','role_id'];

    public function status()
{
      return $this->belongsTo(Status::class);
}
public function role()
{
     return $this->belongsTo(Rol::class);
}
}
