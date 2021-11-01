<?php

namespace App;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public $timestamps = true;

    public static function checkLogin($user, $pass)
    {
        $login = DB::table('users')->where([['user', $user], ['password', $pass]])->first();
        return $login;
    }
    public static function userByID($id)
    {
        $user = DB::table('users')->where('id',$id)->first();
        return $user;
    }
    public static function insertUser($user, $password, $name, $mail, $birthday, $address, $phone, $image,$register_date)
    {
        $user = DB::table('users')->insert(['user' => $user, 'password' => $password, 'name' => $name, 'mail' => $mail, 'birthday' => $birthday, 'address' => $address, 'phone' => $phone, 'image' => $image, 'register_date' => $register_date]);
        return $user;
    }
    public static function insertUserByID($id, $user, $password, $name, $mail, $birthday, $address, $phone, $image,$permission)
    {
        $user = DB::table('users')->where('id', $id)->update((['user' => $user, 'password' => $password, 'name' => $name, 'mail' => $mail, 'birthday' => $birthday, 'address' => $address, 'phone' => $phone, 'image' => $image, 'permission' => $permission]));
        return $user;
    }
    public static function deleteUserByID($id)
    {
        $user = DB::table('users')->where('id',$id)->delete();
        return $user;
    }
    public static function showAccount()
    {
        $user = DB::table('users')->get();
        return $user;
    }
}
