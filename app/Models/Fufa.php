<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fufa extends Model
{
    protected $fillable = ['name','skill','bio'];
    /** @use HasFactory<\Database\Factories\FufaFactory> */
    use HasFactory;
}
