<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Contracts;
use App\Mail\MailSendmailPayAdmin;
use App\Mail\Sendemailpay as MailSendemailpay;
use Illuminate\Http\Request;
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
      $clientesPaySuccess = Clients::with('asesor')->where('pay',1)->get();
      $clientesPayPending = Clients::with('asesor')->where('pay',null)->get();
      $clientesAsesor = Clients::with('asesor')
                        ->where('pay',1)
                        ->where('asesorId',Auth()->user()->id)
                        ->get();
      $contracts = Contracts::all();
      return view('home',compact('clientesPaySuccess','clientesPayPending','clientesAsesor','contracts'));
    }

    public function sendinfopay(Request $request)
    {
      Mail::to($request->emailEstudiante)->send(new MailSendemailpay());
      Mail::to(env('EMAIL_ADMIN'))->send(new MailSendmailPayAdmin());
      Session::flash('message', 'Correo electronico enviado con exito');
      return redirect()->route('home');
    }

    public function paySuccess(Request $request, $id)
    {
      $client = Clients::find($id);
      $client->pay = $request->pay;
      $client->save();
      Session::flash('message', 'Pago validado con exito');
      return redirect()->route('home');
    }
}
