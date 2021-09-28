<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserStore;

class MainController extends Controller
{
    public function index()
    {
        $allUsers = User::all();
        // $assosiative_array = json_decode(json_encode($allUsers),true);
        return view('CRUD.index', compact('allUsers'));
    }
    public function create()
    {
        return view('CRUD.create');
    }
    public function show(User $user)
    {
        return view('CRUD.show', compact('user'));
    }
    public function store(UserStore $request)
    {
        $user = User::create($request->all());
        return redirect()->route('crud.index'); //redirección a una ruta enviando informacion en json
    }
    public function edit(User $user)
    {
        // hace una busqueda segun el id y lo llena con informacion en la base de datos
        return view('CRUD.edit', compact('user')); //compact se usa para enviar informacion en json legible por el hmtl y accesible a php
    }
    public function update(Request $request, User $user)
    {
        return $request;
        $user->update($request->all());
        return redirect()->route('crud.index'); //redirección a una ruta enviando informacion en json
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('crud.index');
    }
}
