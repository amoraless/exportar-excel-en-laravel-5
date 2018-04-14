<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Concerns\FromCollection;

class PerosnasExport implements FromCollection
{
    public function collection()
    {
        return collect([
            ["nombre"=>"jose","edad"=>20],
            ["nombre"=>"miguel","edad"=>25],
            ["nombre"=>"angel","edad"=>30]
        ]);
    }
}
