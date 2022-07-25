<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrants extends Model
{
    use HasFactory;
    protected $fillable = ["expeditaire","date_recept","libelle","courrier"];
}
