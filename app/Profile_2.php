<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile_2 extends Model
{
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender'=> 'required',
        'hobby'=> 'required',
        'introduction'=> 'required',
    );
    
    // public function history_profiles()
    // {
    //     return $this->hasMany('App\HistoryProfile');

    // }
}
