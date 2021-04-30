<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    protected $fillable = ['id' , 'typetitle' , 'typelit_msg' , 'msg'];

    protected $hidden = ['updated_at' , 'created_at'];

    public $timestamps = false;
}
