<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller{
    public function registerUser(Request $request){
    // return $request;
    $save_errors=0;
if (isset($request->phone_number)) {
$save_user=User::create([
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'phone_number' => $request->phone_number,
    'password' => $request->password,

]);
return['User has been saved successfully!'];
}
    
    }
}
