<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'pelatihans';
    
    protected $fillable = ['keterampilan', 'deskripsi'];

    public function citizen()
    {
        return $this->hasMany('App\Citizen', 'id', 'pelatihan_id');
    }

    public function absen()
    {
        return $this->hasMany('App\Absen', 'id', 'id_keterampilan');
    }
}
