<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    public function rekamMedik()
    {
        return $this->belongsTo(RekamMedik::class);
    }
}
