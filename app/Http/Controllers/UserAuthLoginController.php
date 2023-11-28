<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;
use Illuminate\Support\Facades\Session;

class UserAuthLoginController extends Controller
{
    public function saveAuthLogin(Request $request)
    {
      $identifier = $request->input('identifier');
      $password = $request->input('password');   
      
      $data = UserModel::where('email', $identifier)->orWhere('phone', $identifier)->first();

      if ($data){
         if(Hash::check($password, $data->password)){
            session(['login' => true, 'id_user' => $data->_id, 'kategori' => $data->kategori, 'nama' => $data->nama]);
           return redirect()->to('/index');

         }else{
            echo '<script>alert("Login Gagal")</script>';
            return redirect()->to('/authlogin');
         }
      }
      
    }

    public function logout()
   {
      session()->forget('login');

      return redirect()->to('/authlogin');
   }
}


