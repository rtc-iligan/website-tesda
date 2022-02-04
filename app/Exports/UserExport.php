<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UserExport implements FromView
{
    protected $data;

    function __construct($data) 
    {
        $this->data = $data;
    }

    public function view(): View
    {
        ini_set('max_execution_time', 1000);
        ini_set('memory_limit', '20000M');

        $data = $this->data;

        return view('accounts.excel',compact('data'));
    }
}
