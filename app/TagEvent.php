<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagEvent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'description',
    ];

}
