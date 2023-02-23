<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Illuminate\Http\Request;


class ReservationExport implements FromView, ShouldAutoSize, WithDrawings
{
    protected $reservation;
    protected $request;
    protected $login_user;

    function __construct($request,$reservation)
    {
        
        $this->request = $request;
        $this->reservation = $reservation;
    }
    public function drawings()
    {
    

        $drawing = new Drawing();

        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setName('logo');
        $drawing->setDescription('This is the logo of tesda');
        $drawing->setPath(public_path('/img/tesdanew.png'));
        
        $drawing->setHeight(90);
        $drawing->setWidth(90);
        $drawing->setCoordinates('F1');

        return $drawing;
    }
    public function view(): View
    {
        // take time to load with double foreach. loading time = 10-15 mins
        ini_set('max_execution_time', 3000);
        ini_set('memory_limit', '40000M');

      
        $request = $this->request;
        $reservation = $this->reservation;
   

        return view('backend.reports._reservationExcel', [
          
            'request' => $request,
            'reservation' => $reservation,
         
        ]);
    }
}
