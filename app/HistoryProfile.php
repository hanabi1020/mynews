<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryProfile extends Model
{
    
    protected $guarded = array('id');

    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
    
    public function history_profiles()
    {
        return $this->hasMany('App\HistoryProfile');

    }
}
