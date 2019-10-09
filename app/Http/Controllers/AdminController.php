<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Session;
class AdminController extends Controller
{
    public function login(Request $request){
        if ($request->isMethod('post')){
            $data=$request->input();
            if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
                //echo "Success";die;
                //if (Session::put('adminSession',$data['email']));
                return redirect('/admin/dashboard');
            }else{
               // echo "Failed";die;
                return redirect('/admin')->with('flash_message_error','Invalid UserName or Password');
            }
        }
        return view('admin.admin_login');
    }
    public function dashboard(){
//        if (Session::has('adminSession')){
//
//        }else{
//            return redirect('/admin')->with('flash_message_error','Please login in Access');
//        }
        return view('admin.dashboard');
    }
    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged Out Successfully');
    }
    public function settings(){
        return view('admin.settings');
    }
    public function checkPassword(Request $request){
        $data=$request->all();
        $current_password=$data['current_pwd'];
        $check_password=User::where(['admin'=>'1'])->first();
        if (Hash::check($current_password,$check_password->password)){
            echo "true";die;
        }else{
            echo "False";die;
        }
    }
    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $user = Auth::user()->email;
            $check_password = User::where(['email' => $user])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password = bcrypt($data['new_pwd']);
                User::where('id','1')->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success','Password updated Successfully!');
            }else{
                return redirect('/admin/settings')->with('flash_message_error', 'Incorrect current PPassword!');
            }
        }
    }
}
