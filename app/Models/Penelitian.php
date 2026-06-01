<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $table = 'penelitians';

    protected $fillable = [
        'judul',
        'nama_peneliti',
        'avatar',            
        'image',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'file_pdf',
        'tanggal_penelitian'
    ];

    protected $casts = [
        'tanggal_penelitian' => 'date',
        'image' => 'array',
    ];
}
