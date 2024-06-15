<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{

    public $inc,$name;

    

    public function increase(){
        $this->inc ++;
    }
    public function render()
    {
        return view('livewire.welcome');
    }
}
