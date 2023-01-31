<?php

namespace App\Http\Controllers;

use App\Mail\EmailFeedback;
use Illuminate\Http\Request;
use App\Models\JobMail;
use App\Models\UjiCoba;
use Illuminate\Support\Facades\Mail;
use App\Exports\ApprovalExport;
use Maatwebsite\Excel\Facades\Excel;


class EmailController extends Controller
{
    public function index(){

        $email = JobMail::get();
        // return $email;
        foreach ($email as $mail) {
            $details = [
                'nama' => $mail->nama,
                'divisi' => $mail->divisi,
                'email' => $mail->email,
                'keyunik' => $mail->keyunik
                ];
               
                Mail::to($mail->email)->send(new \App\Mail\MyTestMail($details));

        }
       
        return back()->with('success', 'Email berhasil dikirim');
        // dd("Email sudah terkirim.");    
    
        }
    public function email($keyunik){
        $Jobmail = JobMail::where('keyunik', $keyunik)->first();
    
        $details = [
            'nama' => $Jobmail->nama,
            'divisi' => $Jobmail->divisi,
            'email' => $Jobmail->email,
            'keyunik' => $Jobmail->keyunik
            ];
            Mail::to($Jobmail->email)->send(new \App\Mail\EmailMail($details));
    
            // dd('approved');
    
    }
    public function show(){
        $jobmail = UjiCoba::all();
        dd($jobmail);
        // return view('home')->with('jobmail', $jobmail);;
    }
    public function feedback($keyunik){
        $Jobmail = JobMail::where('keyunik', $keyunik)->first();

        $Jobmail->approved = date('Y-m-d h:i:s');

        $details = [
            'nama' => $Jobmail->nama,
            'keyunik' => $Jobmail->keyunik
            ];
           
            Mail::to($Jobmail->email)->send(new EmailFeedback($details));

        $Jobmail->feedback = date('Y-m-d H:i:s');
        $Jobmail->save();

        // dd('approved');


    }
    public function export($keyunik) 
    {
        $Jobmail = JobMail::where('keyunik', $keyunik)->first();

        return Excel::download(new ApprovalExport($Jobmail), 'Approval.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

        // return (new ApprovalExport($Jobmail))->download('Approval.xlsx');
    }
}
