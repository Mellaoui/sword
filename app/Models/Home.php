<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    //Home page has an image path
   //has presentation 

   /**
    * Home page has an images 
    * Has presentation section
    * Nos Services
    */

    protected $fillable = [
        'presentation','Services','why'
    ];
    

}
