<?php

namespace App\Http\Livewire;

use App\Http\Requests\RolesRequest;
use http\Env\Request;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Roles extends Component
{
    public $roleId;
    public function render()
    {
        $roles=Role::get();
        return view('livewire.roles',['roles'=>$roles]);
    }

    public function Create(){


        return redirect('register/users');
        //        return view('livewire.registerRole');

    }

    public function registerRole(RolesRequest  $request){
       try {
//           $request->validator($request->all());

           Role::create(['name'=>$request->input('role_name')]);
           session()->flash('message','New Role has been registered successfully');
       }
       catch(\Exception $e){
           session()->flash('failed','Something went wrong ');
       } finally {
           return back();
       }

    }

    public function Delete($roleId){
//        $user=auth()->user()->get();
//        if($user->hasPermission('Delete')){
            Role::where('id',$roleId)->delete();

            dd("deleted successfully");
            return back();
//        }
//        else{
//            return back();
//        }
    }

    public function Edit(){

        dd("edit page");
    }

    public function assignPermissions(){
         dd(__LINE__);
        return view('livewire.permissions');
    }

}
