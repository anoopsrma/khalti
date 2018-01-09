<?php

namespace Anoop\Khalti;

use Illuminate\Database\Eloquent\Model;

class Khalti extends Model
{
    protected $primaryKey = 'khalti_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'mobile' ,'amount' , 'pre_token','status','verified_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [''];
}
