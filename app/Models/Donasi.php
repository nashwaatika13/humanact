<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $table = 'donasi';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'email', 'jumlah_donasi', 'status'];
}
