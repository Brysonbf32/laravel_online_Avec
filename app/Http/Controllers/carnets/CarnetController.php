<?php

namespace App\Http\Controllers\carnets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarnetController extends Controller
{
    public $urole_session;
    public function index(){
        $this->urole_session = session()->get('urole_session');
        if(!$this->urole_session){
        return redirect('/');
        }
        else{
            return view('carnets.index');
        }
    }
}
