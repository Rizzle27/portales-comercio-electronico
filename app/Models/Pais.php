<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Pais {
    protected $id;
    protected $nombre;
    protected $poblacion;

    public function llamarListaPaises() {
        $mapa = DB::table('paises')->get();

        return $mapa;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPoblacion() {
        return $this->poblacion;
    }
};