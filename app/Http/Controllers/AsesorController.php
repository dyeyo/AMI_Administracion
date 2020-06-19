<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AsesorController extends Controller
{
  public function index()
  {
    $asesores = User::where('role',2)->get();
    return view('asesores.index',compact('asesores'));
  }

  public function store(Request $request)
  {
    $asesor = new User();
    $asesor->name = $request->name;
    $asesor->email = $request->email;
    $asesor->numIdentification = $request->numIdentification;
    $asesor->password = Hash::make($request->numIdentification);
    $asesor->lastname = $request->lastname;
    $asesor->phone = $request->phone;
    $asesor->role = 2;
    $asesor->save();
    Session::flash('message', 'Asesor creado con exito');
    return redirect()->route('asesors');
  }

  public function editContract(Request $request, $id)
  {
    $contract = User::find($id);
    return view('asesores.edit',compact('contract'));
  }

  public function updateContract(Request $request, $id)
  {
    $contract = User::find($id);
    $contract->title = $request->title;
    $contract->firstText = $request->firstText;
    $contract->secondText = $request->secondText;
    $contract->save();
    Session::flash('message', 'Contrato editado con exito');
    return redirect()->route('asesors');
  }
}
