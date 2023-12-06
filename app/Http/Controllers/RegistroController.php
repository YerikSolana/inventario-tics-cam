<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;
use App\Models\Registro;
use App\Models\Equipo;
use App\Models\Oficina;
use App\Models\Area;
use App\Models\Unidad;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $responsables = Responsable::all();
        $equipos = DB::table('equipos as e')
        ->join('sistemasoperativos as so','so.soid','=','e.soid')
        ->join('modelos as m','m.modeloid','=','e.modeloid')
        ->join('marcas as ma','ma.marcaid','=','m.marcaid')
        ->select('e.equipoid','e.evidenciafrontal','e.evidencialateral','evidenciatrasera','e.nni','e.serie','e.usuariodom','e.hostname','e.ip','e.mac','so.soid','so.nombreso','m.modeloid','m.nombremodelo','ma.nombremarca','e.availability')
        ->where('e.availability','=','1')
        ->get();
        $areas = Area::all();
        $unidades = Unidad::all();
        $oficinas = DB::table('oficinas as o')
        ->join('areas as a','a.areaid','=','o.areaid')
        ->join('unidades as u','u.unidadid','=','a.unidadid')
        ->select('o.oficinaid','o.nombreoficina','a.nombrearea','u.nombreunidad')
        ->get();
        $search = trim($request->get('search'));
        $query = DB::table('registros as r')
        ->join('equipos as e', 'e.equipoid','=','r.equipoid')
        ->join('sistemasoperativos as so','so.soid','=','e.soid')
        ->join('modelos as m','m.modeloid','=','e.modeloid')
        ->join('marcas as ma','ma.marcaid','=','m.marcaid')
        ->join('responsables as re','re.responsableid','=','r.responsableid')
        ->join('oficinas as o','o.oficinaid','=','r.oficinaid')
        ->join('areas as a','a.areaid','=','o.areaid')
        ->join('unidades as u','u.unidadid','=','a.unidadid')
        ->select('r.registroid','r.equipoid','e.evidenciafrontal','e.evidencialateral','evidenciatrasera','e.nni','e.serie','e.usuariodom','e.hostname','e.ip','e.mac','so.nombreso','m.nombremodelo','ma.nombremarca','r.responsableid','re.nombres','re.apellidopaterno','re.apellidomaterno','re.matricula','re.correo','r.oficinaid','o.nombreoficina','o.areaid','a.areaid','a.nombrearea','a.unidadid','u.unidadid','u.nombreunidad')
        ->where('nni', 'LIKE', '%'.$search.'%')
        ->orWhere('serie', 'LIKE', '%'.$search.'%')
        ->orWhere('ip', 'LIKE', '%'.$search.'%')
        ->orWhere('hostname', 'LIKE', '%'.$search.'%')
        ->orWhere('mac', 'LIKE', '%'.$search.'%')
        ->orWhere('nombres','LIKE','%'.$search.'%')
        ->orWhere('apellidopaterno','LIKE','%'.$search.'%')
        ->orWhere('apellidomaterno','LIKE','%'.$search.'%')
        ->orWhere('nombreunidad', 'LIKE', '%'.$search.'%')
        ->orWhere('nombrearea', 'LIKE', '%'.$search.'%')
        ->orWhere('nombreoficina', 'LIKE', '%'.$search.'%')
        ->orderBy('nombreunidad','asc')
        ->paginate(5);
        return view('registros.index',compact('query','search','oficinas','areas','unidades','responsables','equipos'));
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
        $registros=new Registro;
        $registros->equipoid=$request->input('equipo');
        $registros->responsableid=$request->input('responsable');
        $registros->oficinaid=$request->input('oficina');
        
        //consulta y edición del campo "availability" antes de agregar el registro
        DB::table('equipos')
        ->where('equipoid','=',$registros->equipoid)
        ->update(['availability' => '0']);

        $registros->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //Por termminar XD
        // $registros = Registro::find($id);
        // return view('registros.show',compact('registros'));
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
        
        
        //idea que estaba intentando llevar a cabo basandome en el foreach que hice en el edit de registros.info

        // $registros=DB::table('registros as r')
        // ->select('equipoid','responsableid', 'oficinaid')
        // ->get();

        // $equipos=DB::table('equipos as e')
        // ->select('equipoid','availability')
        // ->get();
        
        // foreach ($registros as $r) {

        //     if($registros->equipoid == $equipos->equipoid) {
        //         DB::table('registros as r')
        //         ->join('equipos as e','e.equipoid','=','r.equipoid')
        //         ->select('e.availability')
        //         ->update(['e.availability' => '1']);
        //     }

        //     else {
        //         DB::table('registros as r')
        //         ->join('equipos as e','e.equipoid','=','r.equipoid')
        //         ->select('e.availability')
        //         ->update(['e.availability' => '0']);
        //     }
        // };

        // $upregistros=DB::table('registros as r')
        // ->update(
        //     ['equipoid' => $request->input('equipo')],
        //     ['responsableid' => $request->input('responsable')],
        //     ['oficinaid' => $request->input('oficina')]
        // );
        

        //actualiza el dato "availability" del nuevo equipo pero no del equipo que se habia seleccionado antes

        // $registros=Registro::find($id);
        // $registros->equipoid=$request->input('equipo');
        // DB::table('registros as r')
        //          ->join('equipos as e','e.equipoid','=','r.equipoid')
        //          ->select('e.availability')
        //          ->update(['e.availability' => '1']);
        // $registros->responsableid=$request->input('responsable');
        // $registros->oficinaid=$request->input('oficina');
        // $registros->update();


        //editar sin ningun parámetro extra

        $registros=Registro::find($id);
        $registros->equipoid=$request->input('equipo');
        $registros->responsableid=$request->input('responsable');
        $registros->oficinaid=$request->input('oficina');
        $registros->update();


        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $registros=Registro::find($id);

        //consulta y edición del campo "availability" antes de eliminar el registro
        DB::table('registros as r')
        ->join('equipos as e','e.equipoid','=','r.equipoid')
        ->select('r.equipoid','e.equipoid','e.availability')
        ->where('e.equipoid','=',$registros->equipoid)
        ->update(['availability' => '1']);

        $registros->delete();

        return redirect()->back();
    }
}
