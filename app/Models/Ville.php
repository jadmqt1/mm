<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    public $timestamps = false;
    protected $fillable=["ville","region_id"];
    use HasFactory;
}
