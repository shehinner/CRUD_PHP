<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $filliable = ['name','status_id'];
    protected $guarded = ['id'];

 
public function status()
{
     return $this->belongsTo(Status::class);
}
public function users()
    {
        return $this->hasMany(User::class);
    }
}
