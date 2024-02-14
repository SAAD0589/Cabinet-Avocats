<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;

use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class DossiersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents,WithStyles
{
    protected $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }
    public function collection()
    {
        return  $query = User::select(
            'dossiers.reference',
            'Ttribunals.trib_nom as Ttribunals',
            'tribunals_dossiers.reference_trib as RefTrib',
            DB::raw("CONCAT(users.name, '  ', enemies.name) AS concatenated_names"),
            
            'tribunals_dossiers.juge as Juge',
            'avocats.name as avocats_name',

            'procedures.procedure_name',
            'procedures.date_procedure',

            'dossiers.observation',
            

)

            ->leftJoin('dossiers', 'dossiers.id_clt', '=', 'users.id')
            ->leftJoin('users as enemies', 'dossiers.id_clt_enmy', '=', 'enemies.id')
            ->leftJoin('avocats', 'dossiers.id_avocat', '=', 'avocats.id')
            ->leftJoin('tribunals_dossiers', 'dossiers.id', '=', 'tribunals_dossiers.dossier_id')

            ->leftJoin('tribunals as Ttribunals', 'tribunals_dossiers.tribunal_id', '=', 'Ttribunals.id')
            ->leftJoin('procedures', 'tribunals_dossiers.id', '=', 'procedures.dossier_tr_id')


    
            ->where('dossiers.isDeleted', 0)
            ->where('users.role', 0)
            ->where('users.id', $this->userId)

            ->where('dossiers.isArchive', 0)
            ->get();
    }
    public function headings(): array
    {
        return [
            ' المرجع',
            'المحكمة',
            'تاريخ رقم الملف',
            'الأطراف',
            'القاضي',
            'المحامي',
            'التاريخ',
            'الإجراء',
            'تعليق'
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


