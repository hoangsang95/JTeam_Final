<?php

namespace App;
use App\CatParent;
use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    protected $table = "cat";
    protected $primaryKey = 'Cat_ID';
     public $timestamps = false;
    public function khoangoai_voi_product()
    {
        return $this->hasMany('App\Product','Product_Cat','Cat_ID');
    }
    
   
}
