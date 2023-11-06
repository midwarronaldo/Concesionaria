<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AutomovilRepository;

class AutomovilController extends Controller
{
    protected $automovil;
    public function __construct(AutomovilRepository $automovil)
    {
        $this->automovil=$automovil;
    }
    
    public function index()
    {
        $automovil=$this->automovil->obtenerAutomovil();
        return view('automovil.lista',['automovil'=>$automovil]);
    }

    public function create()
    {
        return view('automovil.crear');
    }

    public function store(Request $request)
    {
        /*$validated = $request->validate([
            'nombre' => 'required|min:3|max:25',
            'apellido' => 'required|min:3|max:25',
            'edad' => 'required|integer',
            'direccion' => 'required',
        ]);    */    
        $this->automovil->insertarAutomovil($request);
        return redirect()->action([AutomovilController::class,'index']);
    }

    public function show(string $id)
    {
        $automovil=$this->automovil->obtenerAutomovilPorId($id);
        return view('automovil.ver',['automovil'=>$automovil]); 
    }

    public function edit(string $id)
    {
        $automovil=$this->automovil->obtenerAutomovilPorId($id);
        return view('automovil.editar',['automovil'=>$automovil]);
    }

    public function update(Request $request, string $id)
    {
        /*$validated = $request->validate([
            'nombre' => 'required|min:3|max:25',
            'apellido' => 'required|min:3|max:25',
            'edad' => 'required|integer',
            'direccion' => 'required',
        ]);*/
        $this->automovil->actualizarAutomovil($request,$id);
        return redirect()->action([AutomovilController::class,'index']);
    }

    public function destroy(string $id)
    {
        $this->automovil->eliminarAutomovil($id);
    return redirect()->action([AutomovilController::class,'index']);
    }
}
