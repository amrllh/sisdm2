<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'pengalamans';
    
    protected $fillable = ['nik', 'pengalaman1', 'tempatkerja', 'lamakerja'];

    public function citizen()
    {
        return $this->belongsTo('App\Citizen','nik','nik');
    }
}
