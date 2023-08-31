<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengambilanObat extends Model
{
    public function resep()
    {
        return $this->hasOne(Resep::class, "no_resep", "no_resep");
    }
    public function pegawai()
    {
        return $this->hasOne(Pegawai::class, "nip", "nip");
    }
    // public function Reseps()
    // {
    //     return $this->hasOne(Resep::class, "no_resep", "no_resep");
    // }

    
}
