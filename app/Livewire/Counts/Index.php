<?php

namespace App\Livewire\Counts;

use App\Models\compte\comptes;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class Index extends Component
{
    use WithFileUploads;
    public $nom_avec,$nombre_avec,$montantmax_avec,$nombrecycle_avec,$description_avec;
    public $userdetaildata;

    public function showdetailuserdata($id){
      $this->userdetaildata = DB::table('comptes')->where('id',$id)->first();
    }
    public $umail_session,$urole_session;

    public function mount(){
      $this->umail_session = session()->get('umail_session');
      $this->urole_session = session()->get('urole_session');

      if( !$this->urole_session){
        return $this->redirect('/', navigate:true);
      }
    }

    public function createcompte(Request $request){
        $validatedData = $this->validate([
            'nom_avec' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'nombre_avec' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'montantmax_avec' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'nombrecycle_avec' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'description_avec' =>'required|string',
        ]);

        $checkcompte = DB::table('comptes')->where('nom_avec', $this->nom_avec)->exists();
        if($checkcompte)
        {
            session()->flash('EmailExist', 'Ce Compte existe deja');
        }
        else{
            if($this->nombre_avec <= 2){
                session()->flash('EmailExist', 'suppp');
            }else{
                $new=array(
                    "nom_avec"=>$this->nom_avec,
                    "nombre_avec"=>$this->nombre_avec,
                    "montantmax_avec"=>$this->montantmax_avec,
                    "nombrecycle_avec"=>$this->nombrecycle_avec,
                    "description_avec"=>$this->description_avec,
                );
                
                comptes::create($new);
                session()->flash('success', 'Vous Venez de Vous Enregister avec Successs');
                $this->nom_avec = "";
                $this->nombre_avec = "";
                $this->montantmax_avec = "";
                $this->nombrecycle_avec = "";
                $this->description_avec = "";
    
                return $this->redirect('accounts', navigate:true);
            }

   
        } 
        //dd();
    }
    public function deleteuser($id){
        $delete=comptes::where('id',$id)->delete();
        if($delete){
            session()->flash('Deleteprofile', 'Profile Supprimer avec succefful');
        }
      }
 
    public function render()
    {
        $sessionro = $this->urole_session;
        $sessiomail = $this->umail_session;

        //dd($sessionro);
        $compte = comptes::all()->count();
        $getcomptes = DB::table('comptes')->get();
        return view('livewire.counts.index', compact('getcomptes','compte','sessiomail','sessionro'));
    }
}
