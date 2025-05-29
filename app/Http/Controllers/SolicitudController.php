<?php

namespace App\Http\Controllers;
use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitud::all(); 
        return view('solicitud.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tema' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'fecha_registro' => 'required|date',
            'fecha_cierre' => 'required|date',
            'estado' => 'required|string|max:255',
            'observacion' => 'nullable|string|max:255',
            'usuarioExt' => 'required|boolean',
        ]);

    Solicitud::create($validatedData);

    return redirect()->route('solicitud.index')->with('success', 'Solicitud creada correctamente.');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        return view('solicitud.edit', compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tema' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'area' => 'required|string|max:100',
            'fecha_registro' => 'required|date',
            'fecha_cierre' => 'nullable|date',
            'estado' => 'required|string|max:50',
            'observacion' => 'nullable|string',
            'usuarioExt' => 'required|boolean',
        ]);

        $solicitud = Solicitud::findOrFail($id);
        $solicitud->update($request->all());

        return redirect()->route('solicitud.index')->with('success', 'Solicitud actualizada correctamente.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->delete();

        return redirect()->route('solicitud.index')->with('success', 'Solicitud eliminada correctamente.');
    }
}
