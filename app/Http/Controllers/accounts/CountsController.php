<?php

namespace App\Http\Controllers\accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountsController extends Controller
{
    public $urole_session;
    public function index(){
        $this->urole_session = session()->get('urole_session');
        if(!$this->urole_session){
        return redirect('/');
        }
        else{
            return view('accounts.index');
        }
    }
    public function gestionnaire(){
        $this->urole_session = session()->get('urole_session');
        if(!$this->urole_session){
            return redirect('/');
        }else{
            return view('accounts.gestionnaire');
        }
    }
}
