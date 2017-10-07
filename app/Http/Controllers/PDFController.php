<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Dompdf\Dompdf;
use App\Guest;
use DB;
use PDF;


class PDFController extends Controller
{

     
     public function pdf(Request $request)
    {
        $start_date = $request->input('date');


        $data['guest'] = DB::select(' SELECT * FROM guests WHERE DATE(created_at)= ? ', [$start_date]);

        // $pdf = PDF::loadView('result' , $data );

        $dompdf = new Dompdf();

        $pdf = PDF::loadView('result' , $data );

        return $pdf->download('pdfview.pdf');

       

       
    }


}
