<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permutation extends Model
{

    protected $fillable=["date,ville_id,formateur_id,valide"];
    public $timestamps = false;
    public function formateur()/* :HasMany */
    {
        return $this->belongsTo(Formateur::class);
    }

    public function ville()/* :HasMany */
    {
        return $this->belongsTo(Ville::class);
    }

    use HasFactory;
}
