<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model {

    //
    protected $table = "slide";
    protected $primaryKey = 'Slide_ID';
    public $timestamps = false;

    public function lienket_voi_cate() {
        return $this->belongsTo('App\Cate', 'Slide_Cat', 'Cat_ID');
    }

   

}
