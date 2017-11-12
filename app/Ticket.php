<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function created_by(){
        return $this->belongsTo('App\Employee');
    }

    public function assigned_to(){
        return $this->belongsTo('App\Employee');
    }

    public function team(){
        return $this->belongsTo('App\Team');
    }


}
