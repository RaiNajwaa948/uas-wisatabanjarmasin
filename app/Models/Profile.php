<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Ubah ke huruf kecil agar sesuai dengan kolom di database
        'photo', // Tambahkan kolom jika ada
        'bio',   // Tambahkan kolom jika ada
    ];
}
