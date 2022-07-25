<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courriers extends Model
{
    use HasFactory;
    protected $fillable = [ "ref","objet","statut","piece_jointe","utilisateur"];
}
