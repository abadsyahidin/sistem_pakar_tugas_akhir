<?php

namespace App\Models;

use App\Models\User;
use App\Models\DataGejala;
use App\Models\DataPenyakit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataDiagnosas extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function penyakit()
    {
        return $this->belongsTo(DataPenyakit::class, 'hasil', 'id');
    }

    public function gejala()
    {
        return $this->belongsTo(DataGejala::class,'gejala_diagnosa','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
