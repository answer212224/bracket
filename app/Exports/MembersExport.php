<?php

namespace App\Exports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MembersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Member::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'fb_id',
            'fb_name',
            'email',
            'code',
            'name',
            'phone',
            'ip',
            'created_time',
            'updatad_time'
        ];
    }
}
