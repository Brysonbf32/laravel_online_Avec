<?php

namespace App\Livewire\Home;

use App\Models\User;
use Livewire\Component;

class Homepage extends Component
{

    public $umail_session,$urole_session;
    public $user_fullname,$user_username,$user_email,$user_password;

    // public function mount(){
    //   $this->umail_session = session()->get('umail_session');
    //   $this->urole_session = session()->get('urole_session');

    //   if(!$this->urole_session){
    //     return $this->redirect('/', navigate:true);
    //   }
    // }

    public function deleteuser($id){
      $delete = User::where('id', $id)->delete();
      if($delete){
        session()->flash('Deletesuccess', 'Users Deleted Successfully');
      }
    } 
    public function render()
    {
        return view('livewire.home.homepage');
    }
}
