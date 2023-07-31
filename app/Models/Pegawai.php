<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    public function jabatan()
    {
        return $this->hasOne(Jabatan::class, "id", "jabatans_id");
    }

    // public function rekamMedik()
    // {
    //     return $this->hasOne(Jabatan::class, "id", "re");
    // }
}
