<?php

namespace App\Livewire\Include;

use Livewire\Component;

class Sidebars extends Component
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
        return view('livewire.include.sidebars',compact('sessionro','sessiomail'));
    }
}
