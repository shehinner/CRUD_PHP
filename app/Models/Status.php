<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $filliable = ['name'];
    protected $guarded = ['id'];

    public function roles()
    {
        return $this->hasMany(Rol::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
