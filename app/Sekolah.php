<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = "sekolah";

    public function pendaftar(){
        return $this->hasMany(Pendaftar::class);
    }
}
