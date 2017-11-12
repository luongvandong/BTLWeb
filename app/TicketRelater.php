<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketRelater extends Model
{
    public function ticket(){
        return $this->hasOne('App\Ticket');
    }

    public function employee(){
        return $this->hasMany('App\Employee');
    }
}
