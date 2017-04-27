<?php

namespace App;
use App\Cate;
use Illuminate\Database\Eloquent\Model;

class CatParent extends Model
{
    //
    protected $table = 'catparent';
    protected $primaryKey = 'CatParent_ID';
    public $timestamps = false;
    
    public function cate()
    {
        return $this->hasMany('App\Cate','Cat_Parent','CatParent_ID');
    }
}
