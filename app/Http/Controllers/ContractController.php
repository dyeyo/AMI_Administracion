<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Mail\SendMailContractAdmin;
use App\Mail\SendMailContractClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContractController extends Controller
{
    public function contractfees()
    {
      return view('formsContrato.formCuotas');
    }

    public function contract()
    {
      return view('formsContrato.formContado');
    }

    public function contract1600()
    {
      return view('formsContrato.form1600');
    }
    public function contractPay(Request $request)
    {
      Clients::create($request->all())->save();
      Mail::to($request->email)->send(new  SendMailContractClient());
      Mail::to(env('EMAIL_ADMIN'))->send(new SendMailContractAdmin());
      Session::flash('message', 'Correo electronico enviado con exito y Cliente registrado');
      return redirect()->route('home');
    }

}
