<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelDepartment extends Model {
    public function team() {
        return $this->hasMany('App\ModelTeam', "department_id");
    }
}
