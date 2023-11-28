<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPanenModel;

class InfoPanen extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('login')) {
            $userId = $request->session()->get('id_user');
            $data = InfoPanenModel::where('user_id', $userId)->get();
            
            return view('infopanen', ['data' => $data, 'userId' => $userId]);
        } 
    }
}
