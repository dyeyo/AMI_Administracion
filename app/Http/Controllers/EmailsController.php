<?php

namespace App\Http\Controllers;

use App\TemplateEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmailsController extends Controller
{
  public function index()
  {
    $templatesEmail = TemplateEmail::all();
    return view('emails.index',compact('templatesEmail'));
  }

  public function editPlantilla($id)
  {
    $templateEmail = TemplateEmail::find($id);
    return view('emails.edit',compact('templateEmail'));
  }

  public function updatePlantilla(Request $request, $id)
  {
    $templateEmail = TemplateEmail::find($id);
    $templateEmail->title = $request->title;
    $templateEmail->firstText = $request->firstText;
    if ($request->hasFile('image'))
    {
        $file=$request->file('image');
        $name1=$file->getClientOriginalName();
        $file->move(public_path().'/images/',$name1);
        $templateEmail->image=$name1;
    }
    $templateEmail->save();
    Session::flash('message', 'Template actualizada con exito');
    return redirect()->route('emails');
  }
}
