<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditFormRequest;
use App\Http\Requests\UserFormRequest;
use App\Role;
use App\User;
use App\File;
use Illuminate\Http\Request;

class VistaUsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        if ($request) {
            $query = trim($request->get('search'));

            $users = User::where('name', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'asc')
                ->paginate(5);

            return view('vistausuarios.index', ['users' => $users, 'search' => $query]);
        }

    }

    public function create()
    {
        $roles = Role::all();
       return view('vistausuarios.create', ['roles' => $roles]);
    }

    public function store(UserFormRequest $request)
    {
        $usuario = new User();

        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->password = bcrypt(request('password'));
        $usuario->ocupacion = request('ocupacion');
        $usuario->estado = request('estado');
        $usuario->descripcion = request('descripcion');
        $usuario->enlace_cot = request('enlace_cot');
        if ($request->hasFile('imagen')) {
            $file = $request->imagen;
            $file->move(public_path() . '/imagenes', $file->getClientOriginalName());
            $usuario->imagen = $file->getClientOriginalName();
        }

        $usuario->save();

        $usuario->asignarRol($request->get('rol'));

        return redirect('/vistausuarios');
    }

    public function show($id)
    {
        return view('vistausuarios.show', ['user' => User::findOrFail($id)]);
        
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
       return view('vistausuarios.edit', ['user' => $user, 'roles' => $roles]);
    }

    public function update(UserEditFormRequest $request, $id)
    {
        $this->validate(request(), ['email' => ['required', 'email', 'max:255', 'unique:users,email,' . $id]]);
        $usuario = User::findOrFail($id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        $usuario->ocupacion = $request->get('ocupacion');
        $usuario->estado = $request->get('estado');
        $usuario->descripcion = $request->get('descripcion');
        $usuario->enlace_cot = $request->get('enlace_cot');
        if ($request->hasFile('imagen')) {
            $file = $request->imagen;
            $file->move(public_path() . '/imagenes', $file->getClientOriginalName());
            $usuario->imagen = $file->getClientOriginalName();
        }
        $pass = $request->get('password');
        if ($pass != null) {
            $usuario->password = bcrypt($request->get('password'));
        } else {
            unset($usuario->password);
        }
        
        $role = $usuario->roles;
        if (count($role) > 0) {
            $role_id = $role[0]->id;
            User::find($id)->roles()->updateExistingPivot($role_id, ['role_id' => $request->get('rol')]);
        } else {
            $usuario->asignarRol($request->get('rol'));
        }

        $usuario->update();

        return redirect('/vistausuarios');
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);

        $usuario->delete();

        return redirect('/vistausuarios');
    }
}