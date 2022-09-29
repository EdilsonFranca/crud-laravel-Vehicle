<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'vehicles';
    protected $primaryKey = 'id';
    protected $fillable = array('brand','model','year_manufacture','board');
}
