<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flatshare extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'drink';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id', 'name'
    ];
}
