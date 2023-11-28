<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoBudidayaModel;


class InfoBudidayaController extends Controller
{

    public function index(Request $request)
    {
        if ($request->session()->has('login')) {
            $userId = $request->session()->get('id_user');
            $data = InfoBudidayaModel::where('user_id', $userId)->get();
            
            return view('infobudidaya', ['data' => $data, 'userId' => $userId]);
        } 
    }
}
