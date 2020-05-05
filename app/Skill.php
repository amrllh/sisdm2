<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'keahlians';

    protected $fillable = ['member_id', 'expertise_id'];

    public function citizens()
    {
        return $this->belongsTo('App\Citizen', 'member_id', 'id');
    }
    public function masterexpertises()
    {
        return $this->belongsTo('App\MasterExpertise', 'expertise_id', 'id');
    }
}
