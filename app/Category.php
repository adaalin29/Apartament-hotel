<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function apartamente(){
        return $this->hasMany('App\Apartament','category','id');
    }
}
