<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedik extends Model
{
    use HasFactory;

    public function pegawai()
    {
        // return $this->belongsToMany(Pegawai::class);
        return $this->hasOne(Pegawai::class, "nip", "nip");
    }

    public function poli()
    {
        return $this->hasOne(Poli::class, "id_poli", "polis_id");
    }
    public function resep()
    {
        return $this->belongsTo(Resep::class);
    }
}
