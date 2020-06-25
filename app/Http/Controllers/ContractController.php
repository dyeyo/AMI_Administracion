<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Contracts;
use App\Mail\SendMailContractAdmin;
use App\Mail\SendMailContractClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContractController extends Controller
{
  public function index()
  {
    $contracts = Contracts::all();
    return view('formsContrato.index',compact('contracts'));
  }

  public function contract()
  {
    $contractsCount = Contracts::count();
    $s = $_GET['contrato'];
    $contract = Contracts::where('id',$_GET['contrato'])->get();
    $date_now = date("Y-m-d");
    $date_now_hours = date("Y-m-d H:i:s");
    return view('formsContrato.contract',compact('contractsCount','contract','date_now','date_now_hours'));
  }

  public function store(Request $request)
  {
    Contracts::create($request->all());
    Session::flash('message', 'Contrato creado con exito');
    return redirect()->route('contracs');
  }

  public function editContract(Request $request, $id)
  {
    $contract = Contracts::find($id);
    return view('formsContrato.edit',compact('contract'));
  }

  public function updateContract(Request $request, $id)
  {
    $contract = Contracts::find($id);
    $contract->title = $request->title;
    $contract->firstText = $request->firstText;
    $contract->secondText = $request->secondText;
    $contract->save();
    Session::flash('message', 'Contrato editado con exito');
    return redirect()->route('contracs');
  }

  public function contractPay(Request $request)
  {
    Clients::find($request->clientId)->update($request->all());
    Mail::to($request->email)->send(new  SendMailContractClient());
    Mail::to(env('EMAIL_ADMIN'))->send(new SendMailContractAdmin());
    Session::flash('message', 'Correo electronico enviado y Cliente registrado con exito');
    return redirect()->route('home');
  }

  public function destroy($id)
  {
    Contracts::find($id)->delete();
    Session::flash('message', 'Contrato eliminada con exito');
    return redirect()->route('contracs');
  }

}
