<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Task;
use App\TracingClient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientsController extends Controller
{
  public function index()
  {
    $clients = Clients::with('asesor')->get();
    return view('clients.index',compact('clients'));
  }

  public function store(Request $request)
  {
    Clients::create($request->all())->save();
    Session::flash('message', 'Cliente registrado con Exito');
    return redirect()->route('clients');
  }

  public function edit($id)
  {
    $client = Clients::with('asesor')->find($id);
    $asesores = User::where('role',2)->get();
    return view('clients.edit',compact('client','asesores'));
  }

  public function updateCliente(Request $request, $id)
  {
    $client = Clients::find($id);
    $client->update($request->all());
    Session::flash('message', 'Cliente Editar con Exito');
    return redirect()->route('clients');
  }

  public function tracing($id)
  {
    $client = Clients::find($id);
    $tasks = Task::all();
    $tracing = TracingClient::with('client','task')->where('clientId',$id)->get();
    return view('clients.tracing',compact('tracing','client','tasks'));
  }

  public function storeTracing(Request $request)
  {
    TracingClient::create($request->all())->save();
    Session::flash('message', 'Seguimiento creado con Exito');
    return redirect()->back();
  }

  public function deleteTracing($id)
  {
    TracingClient::find($id)->delete();
    Session::flash('message', 'Seguimiento Eliminado con Exito');
    return redirect()->route('clients');
  }

}
