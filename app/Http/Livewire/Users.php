<?php

namespace App\Http\Livewire;

use App\Models\User;
use Cassandra\Column;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Users extends Component
{

    public $userId,$userName,$userPassword,$userEmail,$newPassword;



    public function render()
    {
        return view('livewire.users');
    }

    public function Edit($userId){
        $this->userId=$userId;

        dd('edit the user');
    }

    public  function Delete($userId){
        $this->userId=$userId;

        dd('delete user');
    }

    public function Store($name,$password,$newPassword,$email){
       $this->userName=$name;
       $this->userEmail=$email;
       $this->userPassword=$password;
       $this->newPassword=$newPassword;

       if($email ==""){

       }
       elseif(strcmp($password,$newPassword)){
          $users= User::create([
               'name'=>$name,
               'password'=>Hash::make($password),
               'email'=>$email,
           ]);
//           dd('stored');
           session()->flash('msg','New User has been registered successfully');
           return redirect()->route('users',$users);
       }

    }

}
