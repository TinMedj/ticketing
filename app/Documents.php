<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $fillable= ['title', 'file','ticket_id','type'];
}
