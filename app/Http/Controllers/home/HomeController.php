<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $urole_session;
    public function index(){
        $this->urole_session = session()->get('urole_session');
        if(!$this->urole_session){
        return redirect('/');
        }
        else{
            return view('home.home');
        }
    }
    public $id;
    public function updateuser($id){
      $checkid=User::where('id',$id)->exists();
      if($checkid){
        return view('updateUser', compact('id'));
      }else{
        return redirect('/home');
      }
     
    }
}
