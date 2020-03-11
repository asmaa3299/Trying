<?php

namespace App;

class Post extends Model
{
   
    public function users(){
        
        return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    
    }
}

