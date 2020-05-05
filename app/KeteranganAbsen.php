<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeteranganAbsen extends Model
{
    protected $table = 'keteranganabsen';

    public function absen()
    {
        return $this->hasMany('App\Absen', 'id', 'keterangan');
    }
}
