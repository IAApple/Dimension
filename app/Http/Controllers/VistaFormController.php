<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditFormRequest;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\FormsEditFormRequest;
use App\Http\Requests\FormsFormRequest;
use Illuminate\Http\Request;
use App\Form;
use App\User;


class VistaFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();

        return view('vistaforms.index',['forms'=>$forms,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistaforms.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forms = new Form();
        $forms->email = request('email');
        $forms->especificaciones = request('especificaciones');
        $forms->cuentaUsuario = request('cuentaUsuario');
        $forms->referencia = request('referencia');
        $forms->tipo = request('tipo');
        $forms->dimensiones = request('dimensiones');



        $forms->save();



        return redirect('/vistaforms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('vistaforms.show', ['forms' => Form::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forms = Form::findOrFail($id);

       return view('vistaforms.edit', ['form' => $forms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormsEditFormRequest $request, $id)
    {
        
        $forms = Form::findOrFail($id);
        $forms->descripcion = $request->get('descripcion');
        $forms->email = $request->get('email');
        $forms->referencia = $request->get('referenica');
        $forms->tipo = $request->get('tipo');
        $forms->update();

        return redirect('/vistaforms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forms = Form::findOrFail($id);

        $forms->delete();

        return redirect('/vistaforms');
    }
}
