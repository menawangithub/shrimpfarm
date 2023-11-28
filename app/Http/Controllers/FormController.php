<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPanenModel;
use App\Models\InfoBudidayaModel;

class FormController extends Controller
{
    public function EditDataPanen($id)
    {
        $data = InfoPanenModel::find($id); 

        return view('formpanen', ['data' => $data]);
    }
    
    

    public function saveEditDataPanen(Request $request, $id){

        $data = InfoPanenModel::find($id);

        $data->id = $request->input('id');
        $data->custom_id = $request->input('custom_id');
        $data->jenis_panen = $request->input('jenis_panen');
        $data->perkiraan_panen= $request->input('perkiraan_panen');
        $data->ukuran_panen = $request->input('ukuran_panen');
        $data->tonase_panen = $request->input('tonase_panen');
        $data->usia_budidaya = $request->input('usia_panen');
        $data->harga_harapan = $request->input('harga_panen');
        $data->lokasi_budidaya = $request->input('lokasi_panen');
        $data->user_id = $request->input('user_id');

        $data->save();

        return redirect()->route('infopanen', ['id' => session('id_user')]);
    }

    public function saveAddDataPanen(Request $request)
    {
        $data = new InfoPanenModel;
        $data->jenis_panen = $request->input('jenis_panen');
        $data->perkiraan_panen = $request->input('perkiraan_panen');
        $data->ukuran_panen = $request->input('ukuran_panen');
        $data->tonase_panen = $request->input('tonase_panen');
        $data->usia_budidaya = $request->input('usia_panen');
        $data->harga_harapan = $request->input('harga_panen');
        $data->lokasi_budidaya = $request->input('lokasi_panen');
        $data->user_id = $request->session()->get('id_user');

        $data->save();
        $data->createTodoEntry();
        
        return redirect()->route('infopanen', ['id' => session('id_user')]);
    }

    // Budidaya
    public function saveAddDataBudidaya(Request $request){
        $data = new InfoBudidayaModel;
        $data->keterangan = $request->input('keterangan');
        $data->luas_kolam= $request->input('luas_kolam');
        $data->jumlah_ruas_kolam = $request->input('jumlah_ruas_kolam');
        $data->user_id = $request->session()->get('id_user');

        $data->save();
        
        return redirect()->route('infobudidaya', ['id' => session('id_user')]);
    }

    public function EditDataBudidaya($id)
    {
        $data = InfoBudidayaModel::find($id); 

        return view('formbudidaya', ['data' => $data]);
    }


    public function saveEditDataBudidaya(Request $request, $id){
        $data = InfoBudidayaModel::find($id);

        $data->id = $request->input('id');
        $data->custom_id = $request->input('custom_id');
        $data->keterangan = $request->input('keterangan');
        $data->luas_kolam= $request->input('luas_kolam');
        $data->jumlah_ruas_kolam = $request->input('jumlah_ruas_kolam');
        $data->user_id = $request->input('user_id');

        $data->save();

        return redirect()->route('infobudidaya', ['id' => session('id_user')]);
    }
}
