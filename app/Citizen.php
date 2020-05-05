<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $table = 'wargas';

    protected $fillable = ['nik', 'nama', 'kelamin', 'tempatlahir', 'tgllahir', 'agama', 'alamat', 'keterampilan'];

    public function skills()
    {
        return $this->hasMany('App\Skill','nik','nik');
    }

    public function experiences()
    {
        return $this->hasMany('App\Experience','nik','nik');
    }

    public function performances()
    {
        return $this->hasOne('App\Performance', 'nik','nik');
    }

    public function courses()
    {
        return $this->belongsTo('App\Course', 'pelatihan_id', 'id');
    }

    public function groups()
    {
        return $this->belongsTo('App\Group', 'role', 'role');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'email');
    }

    public function expertises()
    {
        return $this->hasMany('App\Skill', 'member_id', 'id');
    }

    public function stats()
    {
        return $this->belongsTo('App\Status', 'status', 'status');
    }

    public function absen()
    {
        return $this->belongsTo('App\Absen', 'id', 'id_warga');
    }
}
