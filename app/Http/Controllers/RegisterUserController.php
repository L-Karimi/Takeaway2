<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterUserController extends Controller{
    public function registerUser(Request $request){
    // return $request;
    $save_errors=0;
if (isset($request->phone_number)) {
$save_user=Register::create([
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'phone_number' => $request->phone_number,
    'password' => $request->password,

]);
return['response' => 'User has been saved successfully!'];
}
    
    }
}
