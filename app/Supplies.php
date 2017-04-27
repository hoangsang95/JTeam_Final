<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplies extends Model
{
    protected $table= 'supplies';
    public $timestamps = false;
    protected $primaryKey = 'Supplies_ID'; 
}
