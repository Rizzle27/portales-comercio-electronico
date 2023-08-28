<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    // De la siguiente manera se anula la convención por defecto y se establece manualmente la tabla que queremos administrar con este modelo.
    // En este caso es el nombre de la misma tabla por lo que no habría diferencia;
    // protected $tabe = 'products';
}
