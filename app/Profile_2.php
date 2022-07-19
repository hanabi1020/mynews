<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_2 extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
}
