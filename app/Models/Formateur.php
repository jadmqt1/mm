<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Formateur extends Model
{
    public $timestamps = false;
    protected $fillable=["nom,prenom,tel,matricule,grade,poste,metier_id,etablissement_id,email,password,date_naissance,date_recrutement,photo"];
    public function metier()/* :HasMany */
    {
        return $this->belongsTo(Metier::class);
    }
    public function etablissement()/* :HasMany */
    {
        return $this->belongsTo(Etablissement::class);
    }

    use HasFactory;
}