<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $table = 'kinerjas';

    protected $fillable = ['nik', 'nilai','memo','catatan'];

    public function citizen()
    {
        return $this->belongsTo('App\Citizen','nik','nik');
    }
}
