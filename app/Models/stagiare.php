<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class stagiare extends Model
{
    protected $fillable=["nom","prenom","email","adresse","ville","photo","groupe_id"]; 
    
    use HasFactory;
}
