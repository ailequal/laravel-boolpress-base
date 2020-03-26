<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'file_name',
        'url',
        'created_at',
        'updated_at'
      ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
