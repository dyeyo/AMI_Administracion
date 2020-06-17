<?php

namespace App\Http\Controllers;

use App\Mail\MailSendmailPayAdmin;
use App\Mail\sendemailpay;
use App\Mail\Sendemailpay as MailSendemailpay;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      return view('home');
    }

    public function sendinfopay(Request $request)
    {
      Mail::to($request->emailEstudiante)->send(new MailSendemailpay());
      Mail::to(env('EMAIL_ADMIN'))->send(new MailSendmailPayAdmin());
      Session::flash('message', 'Correo electronico enviado con exito');
      return redirect()->route('home');
    }
}
