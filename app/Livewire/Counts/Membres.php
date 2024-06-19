<?php

namespace App\Livewire\Counts;

use App\Models\compte\membre_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Membres extends Component
{
    public $membreionnairedetaildata,$umail_session,$urole_session,$nom_membre,$address_mebre,$telephone_membre,$identite_membre,$password_membre;
    public function showdetailuserdata($id){
        $this->membreionnairedetaildata = DB::table('membres')->where('id',$id)->first();
      }
      public function mount(){
        $this->umail_session = session()->get('umail_session');
        $this->urole_session = session()->get('urole_session');
  
        if( !$this->urole_session){
          return $this->redirect('/', navigate:true);
        }
      }

      public function createmembres(Request $request){
        $validatedData = $this->validate([
            'nom_membre' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'address_mebre' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'telephone_membre' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'identite_membre' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'password_membre' =>'required|string',
        ]);

        $checkmembreionnaire = DB::table('membres')->where('identite_membre', $this->identite_membre)->exists();
        if($checkmembreionnaire)
        {
            session()->flash('EmailExist', 'Ce Compte existe deja');
        }
        else{

                $new=array(
                    "nom_membre"=>$this->nom_membre,
                    "address_mebre"=>$this->address_mebre,
                    "telephone_membre"=>$this->telephone_membre,
                    "identite_membre"=>$this->identite_membre,
                    "password_membre"=>$this->password_membre,
                );
                
                membre_model::create($new);
                session()->flash('success', 'Vous Venez de Vous Enregister avec Successs');
                $this->nom_membre = "";
                $this->address_mebre = "";
                $this->telephone_membre = "";
                $this->identite_membre = "";
                $this->password_membre = "";
    
                return $this->redirect('membres', navigate:true);
            }

   
        
        //dd();
    }

    public function render()
    {
        $sessionro = $this->urole_session;
        $sessiomail = $this->umail_session;
            //dd($sessionro);
            $getmebre = membre_model::all()->count();
            $getgetmebre = DB::table('membres')->get();
        return view('livewire.counts.membres',compact('getmebre','getgetmebre','sessiomail','sessionro'));
    }
}
