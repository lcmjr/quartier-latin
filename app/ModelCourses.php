<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCourses extends Model{
    static public function getCouresForm(){
        return self::get(['title']);
    }
}
