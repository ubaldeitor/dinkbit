<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //Relacionada con la tabla clients
    /*protected $table=client;*/
    
    protected $fillable=array('name','lastname','phone','email','subject','enterprise','ofPhone','mensaje');
}
