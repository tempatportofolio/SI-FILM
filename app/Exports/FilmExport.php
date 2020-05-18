<?php

namespace App\Exports;

use App\Film;
use Maatwebsite\Excel\Concerns\FromCollection;

class FilmExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Film::all();
    }
}
