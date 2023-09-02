<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index',['empleados'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "first_name" => "required",
            "first_lastName" => "required",
            "second_lastName" => "required",
            "email" => "required",
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $path = public_path('images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);
        $imageName = $request->id .time() . '.' . $request->photo->extension();
        $request->photo->move($path, $imageName);
        $data['photo'] = $imageName;
        Empleado::create($data);
        return redirect()->route('empleado.index')->with('success', 'Image successfully upload.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleado.index')->with('succes','Product deleted succesfully');
    }
}
