<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    use HasFactory;
    protected $table="automovil";
    protected $filiable=['marca','modelo','year','color','precio','kilometraje','transmision','numevo'];
    protected $guarded=['id'];
    protected $primaryKey='id';
}
