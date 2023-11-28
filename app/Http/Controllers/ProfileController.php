<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class ProfileController extends Controller
{
    public function getProfile($id)
    {
      $user = UserModel::find($id);

      return view('profile',['user' => $user]);
    }

    public function updateProfile(Request $request, $id)
    {
        // Validate the request data here if needed

        $user = UserModel::find($id);

        // Update user data based on the form fields
        $user->nama = $request->input('firstName');
        $user->kategori = $request->input('kategori');
        $user->email = $request->input('email');
        $user->phone = $request->input('phoneNumber');
        $user->address = $request->input('address');
        $user->kota = $request->input('kota');
        $user->provinsi = $request->input('provinsi');
        $user->zipcode = $request->input('zipCode');

        $password = $request->input('password');
        if ($password) {
            $hashedPassword = Hash::make($password);
            $user->password = $hashedPassword;
        }

        $user->save();

        return view('profile',['user' => $user]);
    }

}
