<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'author',
        'collaborator',
        'language',
        'topic',
        'external_link',
        'created_at',
        'updated_at'
    ];
}
