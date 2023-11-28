<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

class UserAuthRegisterController extends Controller
{
    public function saveRegister(Request $request)
    {
        $nama = $request->input('firstName');
        $kategori = $request->input('kategori');
        $email = $request->input('email');
        $phone = $request->input('phoneNumber');
        $address = $request->input('address');
        $kota = $request->input('kota');
        $provinsi = $request->input('provinsi');
        $zipcode = $request->input('zipCode');
        $password = $request->input('password');
        $hashpassword = Hash::make($password);

        // Send a POST request to your API
        $url = 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rugju/endpoint/InsertUser?nama='. urlencode($nama) . 
        '&kategori=' . urlencode($kategori).
        '&email=' . urlencode($email).
        '&phone=' . urlencode($phone).
        '&address=' . urlencode($address).
        '&kota=' . urlencode($kota).
        '&provinsi=' . urlencode($provinsi).
        '&zipcode=' . urlencode($zipcode).
        '&password=' . urlencode($hashpassword);
        $customrequest = 'POST';

        $cUrl = curl_init();
    
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => $customrequest
        );
        
        curl_setopt_array($cUrl, $options);
        
        $response = curl_exec($cUrl);
        
        curl_close($cUrl);

        return redirect()->to('/index');
    }
}
