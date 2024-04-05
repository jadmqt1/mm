<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Metier extends Model
{
    public $timestamps = false;
    protected $fillable=["metier"];

    public function formateur()/*: HasMany */
    {
        return $this->hasMany(Formateur::class);
    }


    use HasFactory;
}
