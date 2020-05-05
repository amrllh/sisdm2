<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['role', 'keterangan'];

    public function citizen()
    {
        return $this->hasMany('App\Citizen', 'role', 'role');
    }
}
