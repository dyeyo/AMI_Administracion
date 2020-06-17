<?php

namespace App\Mail;

use App\TemplateEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendemailpay extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(){}

    public function build(Request $request)
    {
        $student = $request->all();
        $idAsesor = Auth()->user()->id;
        $templateEmails = TemplateEmail::where('type',1)->get();
        return $this->view('emails.pay',compact('student','idAsesor','templateEmails'));
    }
}
