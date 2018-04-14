<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PerosnasExport;
use Illuminate\Http\Request;
use Excel;
class ExportarExcelController extends Controller
{

     public function exportar()
    {
            return Excel::download(new PerosnasExport , 'personas.xlsx');
    }
 }