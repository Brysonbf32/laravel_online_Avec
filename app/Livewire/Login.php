<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use Livewire\Component;

class Login extends Component
{
    public $user_email,$user_password,$user_role,$ssion_id;

    public function login(){
      
        $validatedData = $this->validate([
            'user_email' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'user_password' =>'required|string',
        ]);
       $checkuser = DB::table('users')->where('user_email', $this->user_email)->first();

       if($checkuser){
        
            if(Hash::check($this->user_password, $checkuser->user_password)){
                session()->put('umail_session',$checkuser->user_email);
                session()->put('urole_session',$checkuser->user_role);
                session()->put('ssion_id',$checkuser->id);

                if($checkuser->user_role == "AD"){
                    return $this->redirect('/home', navigate:true);
                }
                elseif($checkuser->user_role == 'SA'){
                    return $this->redirect('accounts', navigate:true);
                }
                elseif($checkuser->user_role == 'US'){
                    return $this->redirect('permission', navigate:true);
                }
                //dd('login succesfullly');
            }
            else{
                //dd('mauvais p');
                session()->flash('Password_error', 'Incorect Password');
            }
       }else{
        session()->flash('UserMail_error', 'User Mail Incorect');
       }

    }

    public function render()
    {
        return view('livewire.login');
    }
}
