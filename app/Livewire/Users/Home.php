<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class Home extends Component
{
    use WithFileUploads;
    public $user_image,$user_status,$user_role;
    public $profileimage,$user_fullname,$user_username,$user_email,$user_password;
    public $userdetaildata,$userid;
    public $umail_session,$urole_session,$ssion_id;


    public function showdetailuserdata($id){
      $this->userdetaildata = DB::table('users')->where('id',$id)->first();
    }
    public function updateuser($id)
    {
        $this->userid = DB::table('users')->where('id',$id)->first();

    } 
    public function mount(){
      $this->umail_session = session()->get('umail_session');
      $this->urole_session = session()->get('urole_session');
      $this->ssion_id = session()->get('ssion_id');

      if( !$this->urole_session){
        return $this->redirect('/', navigate:true);
      }
    }
    public function registeruser(){
        $validatedData = $this->validate([
            'user_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
        
        $validatedData = $this->validate([
            'user_fullname' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'user_username' =>'required|string',
        ]);
        
        $validatedData = $this->validate([
            'user_email' =>'required|email',
        ]);
        $validatedData = $this->validate([
            'user_password' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'user_role' =>'required|string',
        ]); 
        try{
            $checkmail = DB::table('users')->where('user_email', $this->user_email)->exists();
            if($checkmail){
                session()->flash('EmailExist', 'Email already exist');
            }else{
                if ($this->user_image instanceof UploadedFile  && $this->ssion_id) {
                    $user = users::where('id', $this->ssion_id)->first();
                    if ($user && $user->user_image) {
                        Storage::disk('public')->delete('users/' . $user->user_image);
                    }
                    $fileName = rand(11111111, 999999999) . '-' . $this->ssion_id . '-' . $this->user_image->getClientOriginalName();
                    $path = $this->user_image->storeAs('public/users', $fileName);
                    $status = 1;
                    if($path){
                        $new=array(
                            "user_fullname"=>$this->user_fullname,
                            "user_image"=>$fileName,
                            "user_username"=>$this->user_username,
                            "user_email"=>$this->user_email,
                            "user_password"=>$this->user_password,
                            "user_role"=>$this->user_role,
                            "user_status"=>$status,
                        );
                        users::create($new);
                        redirect('/user');
                    }
        
                }
            }
        }catch(\Exception $e){

        }

    }
    public function getdata(){
        $getuser = DB::table('users')->where('id', $this->userid)->first();
        if($getuser)
        {
            $this->user_fullname = $getuser->user_fullname;
           // $this->user_image = $getuser->user_image;
            $this->user_username = $getuser->user_username;
            // $this->user_email = $getuser->user_email;
            // $this->user_password = $getuser->user_password;
            // $this->user_role = $getuser->user_role;
            // $this->user_email = $getuser->user_email;
        }
    }
    public function updateusers(){
       // dd();
        $validatedData = $this->validate([
            'user_fullname' =>'required|string',
        ]);
        $validatedData = $this->validate([
            'user_username' =>'required|string',
        ]);
        $iamage= "imag5";
        // $validatedData = $this->validate([
        //     'profile_image' => 'max:1024',
        // ]);
        // $checkid = DB::table('profiles')->where('id', $this->getid)->exists();
        // if(!$checkid){
        //     if($this->profile_image instanceof UploadedFile)
        //     {
        //     //     // //delete exist file
        //         if($checkid->profile_image != Null){
        //             if(Storage::disk('profilesImages')->exists($checkprofile->profile_image)){
        //                 Storage::disk('profilesImages')->exists($checkprofile->profile_image);
        //             }
        //         }
        //     //     //Add New File
        //     //     $imageprofile = '-profile-'.$this->profile_image->getClientOriginalName();
        //     //     $uploadfile = $this->profile_image->storeAs('public/profilesImages', rand(11111111,999999999). $imageprofile);
        //     //     $path= "image_profile";
        //         //Add New File
        //        // dd('ok');
        //         $imageprofile = '-profile-'.$this->profile_image->getClientOriginalName();
        //         $uploadfile = $this->profile_image->storeAs('public/profilesImages', rand(11111111,999999999). $imageprofile);
        //         $path= str_replace('public/profilesImages', '', $uploadfile);
        //         if($path){
                    DB::table('users')->where('id', $this->userid)
                    ->update(['user_fullname' => $this->user_fullname, 'user_username'=>$this->user_username]);
                    
        //         }
        //     }
        // }
        return $this->redirect('/user', navigate:true);
    }
//DELETE DATA
    public function deleteuser($id){
        $data=users::find($id);
        if($data){
            $image_path = public_path('storage/users/'.$data->user_image);
            //dd($image_path);
            if(file_exists($image_path))
            {
                unlink($image_path);
            }
            $data->delete();
            session()->flash('Deleteprofile', 'Profile Supprimer avec succefful');
        }
    }
    public function render()
    {
        $this->getdata();
        $sessionro = $this->urole_session;
        $sessiomail = $this->umail_session;
        $sessionid = $this->ssion_id;
        $users = users::all()->count();
        $getusers = DB::table('users')->get();
        return view('livewire.users.home', compact('getusers','users','sessiomail','sessionro','sessionid'));
    }
}
