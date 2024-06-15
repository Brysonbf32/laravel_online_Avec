<?php

namespace App\Livewire\Carnets;

use App\Models\users;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public $umail_session,$urole_session;

    public function mount(){
      $this->umail_session = session()->get('umail_session');
      $this->urole_session = session()->get('urole_session');

      if( !$this->urole_session){
        return $this->redirect('/', navigate:true);
      }
    }
    public function render()
    {
        $sessionro = $this->urole_session;
        $sessiomail = $this->umail_session;

        $users = users::all()->count();
        $getusers = DB::table('users')->get();
        return view('livewire.carnets.index', compact('getusers','users','sessiomail','sessionro'));
    }
}
