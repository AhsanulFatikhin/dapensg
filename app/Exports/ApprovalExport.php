<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ApprovalExport implements Fromview
{
    public $details;

    // use Exportable;

    public function __construct($details)
    {
        $this->details = $details;
    }
    public function view(): View
    {
        $data = $this->details;
        // dd($data->nama); die;
        return view('exports.approval', [
            'data' => $data
        ]);
    }
}
