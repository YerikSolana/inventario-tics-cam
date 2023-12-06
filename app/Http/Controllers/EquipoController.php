<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\So;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = DB::table('equipos as e')
        ->join('sistemasoperativos as so','so.soid','=','e.soid')
        ->join('modelos as m','m.modeloid','=','e.modeloid')
        ->join('marcas as ma','ma.marcaid','=','m.marcaid')
        ->select('e.equipoid','e.nni','e.serie','e.usuariodom','e.hostname','e.ip','e.mac','so.soid','so.nombreso','m.modeloid','m.nombremodelo','ma.nombremarca')
        ->paginate(5);
        $so = So::all();
        $modelos = DB::table('modelos as m')
        ->join('marcas as ma','ma.marcaid','=','m.marcaid')
        ->join('tipomodelos as tm','tm.tipomodeloid','=','m.tipomodeloid')
        ->select('m.modeloid','m.nombremodelo','ma.nombremarca','tm.tipomodeloid','tm.nomtipomodelo')
        ->where('m.tipomodeloid','=','2')
        ->get();
        return view('equipos.index', compact('query','so','modelos'));
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
        $equipos=new Equipo;
        $equipos->serie=$request->input('serie');
        $equipos->nni=$request->input('nni');
        $equipos->usuariodom=$request->input('usuariodom');
        $equipos->hostname=$request->input('hostname');
        $equipos->ip=$request->input('ip');
        $equipos->mac=$request->input('mac');
        $equipos->soid=$request->input('soid');
        $equipos->modeloid=$request->input('modeloid');
        $equipos->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $equipos=Equipo::find($id);
        $equipos->serie=$request->input('serie');
        $equipos->nni=$request->input('nni');
        $equipos->usuariodom=$request->input('usuariodom');
        $equipos->hostname=$request->input('hostname');
        $equipos->ip=$request->input('ip');
        $equipos->mac=$request->input('mac');
        $equipos->soid=$request->input('soid');
        $equipos->modeloid=$request->input('modeloid');
        $equipos->update();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipos=Equipo::find($id);
        $equipos->delete();
        
        return redirect()->back();
    }
}
