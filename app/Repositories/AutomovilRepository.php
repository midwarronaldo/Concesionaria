<?php
namespace App\Repositories;
use App\Models\Automovil;
class AutomovilRepository{
public function obtenerAutomovil(){
    return Automovil::all();
}
public function obtenerAutomovilPorId($id) {
    return Automovil::find($id);
}
public function insertarAutomovil($automovil){
    Automovil::create([
    'marca'=>$automovil->marca,
    'modelo'=>$automovil->modelo,
    'year'=>$automovil->year,
    'color'=>$automovil->color,
    'precio'=>$automovil->precio,
    'kilometraje'=>$automovil->kilometraje,
    'transmision'=>$automovil->transmision,
    //'nuevo'=>$automovil->nuevo,
    ]);
}
public function actualizarAutomovil($id,$automovilActualizar){
    $automovil=Automovil::find($id);
    $automovil->marca=$automovilActualizar->marca;
    $automovil->modelo=$automovilActualizar->modelo;
    $automovil->year=$automovilActualizar->year;
    $automovil->color=$automovilActualizar->color;
    $automovil->precio=$automovilActualizar->precio;
    $automovil->kilometraje=$automovilActualizar->kilometraje;
    $automovil->transmision=$automovilActualizar->transmision;
    //$automovil->nuevo=$automovilActualizar->nuevo;
    $automovil->save();
}
public function eliminarAutomovil($id){
$automovil=Automovil::find($id);
$automovil->delete();
}
}