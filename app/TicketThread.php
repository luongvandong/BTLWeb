<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketThread extends Model
{
    public function employee(){
        return $this->hasMany('App\Employee');
    }

    public function ticket(){
        return $this->hasMany('App\Ticket');
    }

}
