<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $urole_session;
    public function index(){
        $this->urole_session = session()->get('urole_session');
        if(!$this->urole_session){
        return redirect('/');
        }
        else{
            return view('users.createUser');
        }
    }
    public function updateusers($id){
        $checkid= User::where('id', $id)->exists();#
        if($checkid){
            return view('profile', compact('id'));
        }else{
            return redirect('/profile');
        }
    }
}
