<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $fillable = ['status', 'keterangan'];

    public function citizen()
    {
        return $this->hasMany('App\Citizen', 'status', 'status');
    }
}
