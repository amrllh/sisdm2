<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterExpertise extends Model
{
    protected $table = 'master_keahlians';
    
    protected $fillable = ['expertise'];

    public function expertises()
    {
        return $this->hasMany('App\Skill', 'id', 'expertise_id');
    }
}
