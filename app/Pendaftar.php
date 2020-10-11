<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftar';
    protected $fillable = ['nisn' , 'sekolah_id' , 'nama' , 'no_hp' , 'alamat' , 'nem'];
    protected $guarded = ['id'];

    public function sekolah(){
        return $this->belongsTo(Sekolah::class);
    }
    
}
