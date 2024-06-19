<?php

namespace App\Livewire\Counts;

use App\Models\compte\gestionnaires;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Gestionnaire extends Component
{
    public $identite_gest,$nom_gest,$address_gest,$telephone_gest,$password_gest ;

    public $umail_session,$urole_session;
    public $gestionnairedetaildata,$id;

    public function showdetailuserdata($id){
      $this->gestionnairedetaildata = DB::table('gestionnaires')->where('id',$id)->first();
    }
    public function mount(){
      $this->umail_session = session()->get('umail_session');
      $this->urole_session = session()->get('urole_session');

      if( !$this->urole_session){
        return $this->redirect('/', navigate:true);
      }
    }
    public function deleteuser($id){
        $delete= gestionnaires::where('id',$id)->delete();

        if($delete){
            session()->flash('delete', 'Vous Venez de Vous Enregister avec Successs');
        }
    }
    public function creategestionnaire(Request $request){
        $validatedData = $this->validate([
            'nom_gest' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'address_gest' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'telephone_gest' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'identite_gest' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'password_gest' =>'required|string',
        ]);

        $checkgestionnaire = DB::table('gestionnaires')->where('identite_gest', $this->identite_gest)->exists();
        if($checkgestionnaire)
        {
            session()->flash('EmailExist', 'Ce Compte existe deja');
        }
        else{

                $new=array(
                    "nom_gest"=>$this->nom_gest,
                    "address_gest"=>$this->address_gest,
                    "telephone_gest"=>$this->telephone_gest,
                    "identite_gest"=>$this->identite_gest,
                    "password_gest"=>$this->password_gest,
                );
                
                gestionnaires::create($new);
                session()->flash('success', 'Vous Venez de Vous Enregister avec Successs');
                $this->nom_gest = "";
                $this->address_gest = "";
                $this->telephone_gest = "";
                $this->identite_gest = "";
                $this->password_gest = "";
    
                return $this->redirect('gestneur', navigate:true);
            }

   
        
        //dd();
    }

   //UPDATE INFO MANAGER
    public function edit_name($id,$value){
        gestionnaires::where('id',$id)->update(['nom_gest'=>$value]);
        return $this->redirect('/gestneur',navigate:true);
        session()->flash('success', 'Vous Venez de Vous Enregister avec Successs');

    }
    public function edit_adddres($id,$value){
        gestionnaires::where('id',$id)->update(['address_gest'=>$value]);
        return $this->redirect('/gestneur',navigate:true);
    }

    public function edit_carteident($id,$value){
        gestionnaires::where('id',$id)->update(['identite_gest'=>$value]);
        return $this->redirect('gestneur', navigate:true);
    }
    public function edit_password($id,$value){
        gestionnaires::where('id',$id)->update(['password_gest'=>$value]);
        return $this->redirect('/gestneur',navigate:true);
    }
    public function edit_telephone($id,$value){
        gestionnaires::where('id',$id)->update(['telephone_gest'=>$value]);
        return $this->redirect('/gestneur', navigate:true);
    }
    public function render()
    {
        $sessionro = $this->urole_session;
        $sessiomail = $this->umail_session;
            //dd($sessionro);
            $gestionnaire = gestionnaires::all()->count();
            $getgestionnaire = DB::table('gestionnaires')->get();
        return view('livewire.counts.gestionnaire',  compact('getgestionnaire','gestionnaire','sessiomail','sessionro'));
    }
}
