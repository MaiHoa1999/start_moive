<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function login()
    {
        return view('user/pages-login');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('user/login');
    }
    public function checkLogin(Request $request)
    {
        $user = $request->user;
        $pass = md5($request->password);
        $validate = User::checkLogin($user, $pass);
        if ($validate) {
            session(['id' => $validate->id]);
            $user = User::userByID(session('id'));
            if ($user -> permission==0) {
                return redirect('/');
            }else{
                return redirect('/admin');
            }
        } else {
            return redirect('user/login');
        }
    }
    public function signup(){
        return view('user/pages-register');
    }
    public function insertUser(Request $request)
    {
        $name = $request->name;
        $user = $request->user;
        $password = $request->pass;
        $mail = $request->email;
        $phone = $request->phone;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $image = $get_name_img;
        }else{$image='default.jpg';}
        $birthday = $request->birthday;
        $address = $request->address;
        $register_date = date('Y-m-d H:m:s', time());
        User::insertUser($user,md5($password),$name,$mail,$birthday,$address,$phone,$image,$register_date);
        return redirect('user/login');
    }
    public function showProfile($id)
    {
        $user = User::userByID($id);
        return view('admin/account/pages-profile', ['user'=>$user]);
    }
    public function editProfile(Request $request,$id)
    {
        $name = $request->name;
        $user = $request->user;
        $password = $request->pass;
        $mail = $request->email;
        $phone = $request->phone;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $image = $get_name_img;
        }else{$image=$request->image_hidden;}
        $birthday = $request->birthday;
        $address = $request->address;
        $permission = $request->permission;
        User::insertUserByID($id, $user, md5($password), $name, $mail, $birthday, $address, $phone, $image,$permission);
        $user = User::userByID($id);
        return view('admin/account/pages-profile', ['user'=>$user]);
    }
    public function deleteProfile($id)
    {
        $user = User::deleteUserByID($id);
        return redirect("admin/account");
    }
    public function showAccount()
    {
        $user = User::showAccount();
        return view('admin/account/all', ['user'=>$user]);
    }
}
