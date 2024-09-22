<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curd extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'day']; // Mass assignment enabled
}
