<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function pdf(){
        $pdf = PDF::loadView('pdf.print');
        return $pdf->download('invoice.pdf');
    }
}
