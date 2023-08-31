<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    public function pengambilan_obat()
    {
        return $this->belongsTo(PengambilanObat::class);

    }
    public function ambilObat()
    {
        return $this->belongsTo(PengambilanObat::class);
    }

    public function rekamMediks()
    {
        return $this->hasOne(RekamMedik::class, "no_rekmed", "no_rekmed");
    }

    public function obats()
    {
        return $this->hasOne(Obat::class, "kd_obat", "kd_obat");
    }

    public function pegawais()
    {
        return $this->hasOne(Pegawai::class, "nip", "nip");
    }
}
