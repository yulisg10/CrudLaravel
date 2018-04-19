<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Persona;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Persona::paginate(5);
      return view('usuario.index', compact('user'))->with('i', (request()->input('page', 1) -1) *5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       request()->validate([
         'nombre' => 'required',
         'fecha' => 'required',
         'edad' => 'required',
       ]);
       Persona::create($request->all());
       return redirect()->route('usuario.index')->with('El registro se ha realizado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Persona::find($id);
        return view('usuario.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = Persona::find($id);
      return view('usuario.edit', compact('user'));
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
      request()->validate([
        'nombre' => 'required',
        'fecha' => 'required',
        'edad' => 'required',
      ]);
      Persona::find($id)->update($request->all());
      return redirect()->route('usuario.index')->with('La actualización se ha realizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Persona::find($id)->delete();
      return redirect()->route('usuario.index')->with('Se han borrado los datos correctamente');
    }
}
