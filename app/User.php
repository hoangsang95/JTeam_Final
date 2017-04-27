<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Input;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "user";
    protected $primaryKey = 'User_ID';
    protected $fillable = ['User_ID', 'User_Name', 'User_Email', 'User_Password', 'User_ProviderID', 'User_Provider', 'User_RootAdmin'];
    public $timestamps = false;

    protected $rememberTokenName = 'User_Token';


    public function getAuthPassword() {
        return $this->User_Password;
    }

    public static function rules($id = null) {
        if (Input::get('_method') === 'PATCH') {
            return [
                'User_Name' => 'required',
                'User_Email' => 'required|email|unique:user,User_Email,' . $id . ',User_ID',
            ];
        } else {
            return [
                'User_Name' => 'required',
                'User_Password' => 'required|min:6|max:60',
                'User_Repassword' => 'required|same:User_Password',
            ];
        }
    }

    public function getRememberToken() {
        return $this->User_Token;
    }

    public function setRememberToken($value) {
        $this->User_Token = $value;
    }

    public function getRememberTokenName() {
        return 'User_Token';
    }

}
