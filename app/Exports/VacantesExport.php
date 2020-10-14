<?php

namespace App\Exports;

use App\Vacante;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class VacantesExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('vacantes')
            ->join('users', 'users.id', '=', 'vacantes.user_id')
            ->join('categorias', 'categorias.id', '=', 'vacantes.categoria_id')
            ->join('experiencias', 'experiencias.id', '=', 'vacantes.experiencia_id')
            ->join('salarios', 'salarios.id', '=', 'vacantes.salario_id')
            ->select('users.name','vacantes.titulo','categorias.nombre','experiencias.experiencia','salarios.salario','vacantes.plazas',
                    'vacantes.rfc', 'vacantes.escolaridad','vacantes.horario','vacantes.rango', 'vacantes.sexo', 'vacantes.licencia','vacantes.cartilla',
                    )
            ->get();
    }

    public function headings(): array
    {
        return [
            'Empresa','Título','Categoría','Experiencia','Salario','No. plazas','RFC','Escolaridad', 'Horario', 'Rango', 'Sexo', 'Licencia de conducir', 'Cartilla Militar'
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
