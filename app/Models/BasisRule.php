<?php

namespace App\Models;

use App\Models\DataGejala;
use App\Models\DataPenyakit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BasisRule extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function penyakit()
    {
        return $this->belongsTo(DataPenyakit::class, 'id_penyakit');
    }

    public function gejalaDiagnosa()
    {
        return $this->belongsTo(DataGejala::class, 'id_gejala');
    }

    public function gejala()
    {
        return $this->hasMany(DataGejala::class, 'id', 'daftar_gejala');
    }

}
