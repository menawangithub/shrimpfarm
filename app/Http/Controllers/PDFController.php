<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPanenModel;
use App\Models\InfoBudidayaModel;
use Barryvdh\DomPDF\PDF as DomPDF;

class PDFController extends Controller
{
    public function downloadPanenPDF($userId)
    {
        $panenData = InfoPanenModel::where('user_id', $userId)->get();

        // Check if the panen data exists
        if (!$panenData) {
            return redirect()->back()->with('error', 'Panen data not found.');
        }

        $pdf = app('dompdf.wrapper');


        $pdf->loadView('pdfpanen', compact('panenData'));

        // Download the PDF
        return $pdf->download('data_rencana_panen.pdf');
    }

    public function downloadBudidayaPDF($userId)
    {
        $budidayaData = InfoBudidayaModel::where('user_id', $userId)->get();

        // Check if the panen data exists
        if (!$budidayaData) {
            return redirect()->back()->with('error', 'Panen data not found.');
        }

        $pdf = app('dompdf.wrapper');


        $pdf->loadView('pdfbudidaya', compact('budidayaData'));

        // Download the PDF
        return $pdf->download('data_budidaya.pdf');
    }
}
