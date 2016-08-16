<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextWithGallery extends Model{
    public function gallery(){
        return $this->hasMany('App\GalleryFromText',"text_with_galleries_id");
    }
}
