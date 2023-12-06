<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Responsable::paginate(5);
        return view('responsables.index',compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $responsables=new Responsable;
        $responsables->nombres=$request->input('nombre');
        $responsables->apellidopaterno=$request->input('apellidop');
        $responsables->apellidomaterno=$request->input('apellidom');
        $responsables->matricula=$request->input('matricula');
        $responsables->correo=$request->input('correo');
        $responsables->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $responsables=Responsable::find($id);
        $responsables->nombres=$request->input('nombre');
        $responsables->apellidopaterno=$request->input('apellidop');
        $responsables->apellidomaterno=$request->input('apellidom');
        $responsables->matricula=$request->input('matricula');
        $responsables->correo=$request->input('correo');
        $responsables->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $responsables=Responsable::find($id);
        $responsables->delete();

        return redirect()->back();
    }
}
