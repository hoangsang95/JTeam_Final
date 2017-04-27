<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
class Product extends Model {

    protected $table = "product";
    public $timestamps = false;
    protected $primaryKey = 'Product_ID';
 

    const create_at = 'Product_Datetime';

    public function lienket_voi_cate() {
        return $this->belongsTo('App\Cate', 'Product_Cat', 'Cat_ID');
    }
	
	 public function warehouse()
    {
        return $this->hasMany('App\Warehouse');
    }

    public static function rules() {
        if (Input::get('update') === 'update') {
            return [
                'Product_Name' => 'required|max:255|min:6',
                'Product_Price' => 'required',
                'Product_MID' => 'required',
            ];
        } else {
            return [
                'Product_Name' => 'required|max:255|min:6',
                'Product_Thumbnail' => 'required',
                'Product_Price' => 'required',
                'Product_MID' => 'required',
            ];
        }
    }

}
