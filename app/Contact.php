<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = "contact";
    public $timestamps = false;
    protected $primaryKey = 'Contact_ID';
    
    public static function rules()
    {
        return [
            'Contact_Name' => 'required|alpha',
            'Contact_Email' => 'required|email',
            'Contact_Mobile' => 'required|numeric',
            'Contact_Message'  => 'required',
        ];
    }
}
