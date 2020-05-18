<?php

namespace App\Exports;

use App\trans;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return trans::all();
    }
}
