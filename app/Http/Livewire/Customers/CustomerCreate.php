<?php

namespace App\Http\Livewire\Customers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use http\Env\Request;
use Livewire\Component;

class CustomerCreate extends Component
{
    public $customer_name,$customer_email,$customer_phone;

    public function render()
    {
        return view('livewire.customers.customer-create');
    }

    public function registerCustomer(CustomerRequest $request){

//        dd($request->all());
     try{
         // validation

        if(auth()->user()->hasRole('Admin') or auth()->user()->hasRole('Customer')){
            Customer::create([
                'customer_name'=>$request->input('customer_name'),
                'customer_phone'=>$request->input('customer_phone'),
                'customer_email'=>$request->input('email'),
                'user_id'=>auth()->user()->id,
            ]);
        };
     }
     catch (\Exception $e){

         return $e->getMessage();
     } finally {

         return back();
     }
    }
}
