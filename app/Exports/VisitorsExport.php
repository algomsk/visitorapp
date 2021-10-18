<?php

namespace App\Exports;

use App\Models\VisitorModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VisitorsExport implements FromCollection, WithHeadings
{

    public function headings():array{
        return[
            'DB Id',
            'First Name',
            'Last Name',
            'Email',
            'Date of Birth',
            'Create At',
            'Last Updated At'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return VisitorModel::all();
    }
}
