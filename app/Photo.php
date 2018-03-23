<?php

namespace App;

class Photo extends Model {
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
