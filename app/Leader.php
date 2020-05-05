<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = ['nik', 'nama','jabatan','bidang'];

    // public function leaders()
    // {
    //     return $this->hasOne('App\User', 'role', 'jabatan');
    // }
}
