<?php

namespace App\Exports;

use App\Models\Bibliotheque;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;

use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class BibliothequeExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents,WithStyles
{
    public function collection()
    {
        return Bibliotheque::all(['action','parties','Date_Seance','Avocat','date_insert_dossier','date_back_dossier']);
    }
    public function headings(): array
    {
        return [
            'مآل الجلسة',
            'الأطراف',
            'تاريخ الجلسة',
            ' الأستاذ المتمرن المكلف بالكتابة',
            'تاريخ منح الملف',
            'تاريخ إرجاع الملف'
        ];
    }
    public function styles($sheet)
    {
        // Apply styles to the header row (row 1)
        return [
            1 => [
                'fill' => [
                    'fillType' => 'solid',
                    'startColor' => ['rgb' => 'C0C0C0'], // Change the RGB color code as needed
                ],
                // You can add more styling options for the header row here
                'font' => [
                    'bold' => true,
                ],
            ],
        ];
    }
        /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $styleArray = [
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => ['argb' => 'FFFF0000'],
                        ],
                    ],
                    
                ];
                
                // $worksheet->getStyle('B2:G8')->applyFromArray($styleArray);
            },
            
        ];
        
    }
    
}


