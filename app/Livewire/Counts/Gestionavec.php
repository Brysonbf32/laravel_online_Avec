<?php

namespace App\Livewire\Counts;

use App\Models\compte\gestionavecs;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Gestionavec extends Component
{
    public $titre_attr,$gestionnaires_id,$comptes_id;
    public $status_attr = 1;
    public $umail_session,$urole_session;
    public $gestionavecdetaildata,$id;

    public function showdetailuserdata($id){
      $this->gestionavecdetaildata = DB::table('gestionavec')->where('id',$id)->first();
    }
    public function mount(){
      $this->umail_session = session()->get('umail_session');
      $this->urole_session = session()->get('urole_session');

      if( !$this->urole_session){
        return $this->redirect('/', navigate:true);
      }
    }
    public function creategestionavec(){
        $validatedData = $this->validate([
            'titre_attr' =>'required|string',
        ]);
        // $validatedData = $this->validate([
        //     'gestionnaires_id' =>'required',
        // ]);
        // $validatedData = $this->validate([
        //     'comptes_id' =>'required',
        // ]);
        //dd();

        // $checkgestionavce = DB::table('gestionnaires')->where('gestionnaires_id,comptes_id', $this->comptes_id,$this->gestionnaires_id)->exists();
        // $checkgestcompte = DB::table('gestionnaires')->where('comptes_id', $this->comptes_id)->exists();

        // if($checkgestionavce && $checkgestcompte)
        // {
        //     session()->flash('EmailExist', 'Ce Compte existe deja');
        // }
        // else{
            //dd();
                $new=array(
                    "titre_attr"=>$this->titre_attr,
                    "gestionnaires_id"=>$this->gestionnaires_id,
                    "comptes_id"=>$this->comptes_id,
                    "status_attr"=>$this->status_attr,
                );
                //dd($new);
                gestionavecs::create($new);
                $this->titre_attr = "";
                $this->gestionnaires_id = "";
                $this->comptes_id = "";
                $this->status_attr = "";
                return $this->redirect('attri', navigate:true);
                session()->flash('success', 'Vous Venez de Vous Enregister avec Successs');

            // }
    }
    public function render()
    {
        $sessionro = $this->urole_session;
        $sessiomail = $this->umail_session;
        $getgestioavec = gestionavecs::all()->count();
        $getallgestioavec = DB::table('gestionavec')->get();
        $gestionnaire = DB::table('gestionnaires')->get();
        $avecs = DB::table('comptes')->get();
        return view('livewire.counts.gestionavec',compact('getgestioavec','getallgestioavec','sessiomail','sessionro','gestionnaire','avecs'));
    }
}
