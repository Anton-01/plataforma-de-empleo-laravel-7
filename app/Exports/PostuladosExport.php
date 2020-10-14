<?php

namespace App\Exports;

use App\Postulado;

use Maatwebsite\Excel\Events\AfterSheet;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PostuladosExport implements FromCollection, ShouldAutoSize, WithEvents, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $postulados = Postulado::select('empresa','vacante','usuario', 'contacto', 'postulado')->get();
    }
    public function headings(): array
    {
        return [
            'Empresa','Vacante','Postulado','Teléfono del postulado','Fecha de postulación'
        ];
    }
    public function map($postulados): array
    {
        return [
            $postulados->vacante,
            $postulados->empresa,
            $postulados->usuario,
            $postulados->contacto,
            $postulados->postulado->format('d/M/Y')
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
}
