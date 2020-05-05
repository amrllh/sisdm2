<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absen';

    public function citizen()
    {
        return $this->belongsTo('App\Citizen', 'id_warga', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'id_keterampilan', 'id');
    }

    public function keteranganabsen()
    {
        return $this->belongsTo('App\KeteranganAbsen', 'keterangan', 'id');
    }
}
