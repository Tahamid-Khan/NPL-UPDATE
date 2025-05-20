<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use App\Models\Registration;

class RegistrationsExport implements FromArray, WithHeadings, ShouldAutoSize
{
    protected $registrations;

    public function __construct($registrations = null)
    {
        $this->registrations = $registrations ?? Registration::all();
    }

    /**
     * @return array
     */
    public function array(): array
    {
        $data = [];

        foreach ($this->registrations as $registration) {
            $data[] = [
                'id' => $registration->id,
                'name' => $registration->name,
                'email' => $registration->email,
                'phone' => $registration->phone ?? 'N/A',
                'institution' => $registration->institution ?? 'N/A',
                'designation' => $registration->designation ?? 'N/A',
                'created_at' => $registration->created_at->format('Y-m-d H:i:s'),
                'updated_at' => $registration->updated_at->format('Y-m-d H:i:s'),
            ];
        }

        return $data;
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Phone',
            'Institution',
            'Designation',
            'Registration Date',
            'Last Updated',
        ];
    }
}
