<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = [
        'url'
    ];

    public function user() {
        return $this->hasOne('App\User');
    }
}
