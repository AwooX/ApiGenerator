<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationSchemaRoutines extends Model
{
    use HasFactory;
    protected $table = 'INFORMATION_SCHEMA.ROUTINES';
}
