<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sortants extends Model
{
    use HasFactory;
    protected $fillable = ["destinataire","date_depart","libelle","courrier"];
}
