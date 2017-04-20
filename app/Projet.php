<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Projet extends Model
{
    protected $table = 'projets';

    public function users()
    {
        return $this->belongsTo('App\User');
    }

}

