<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyPenilaian extends Model
{
    use HasFactory;
    protected $table = 'surveypenilaians';
    public $timestamps = false;
}
