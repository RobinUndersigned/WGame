<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userrole extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'user_roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid', 'roleid',
    ];
}
