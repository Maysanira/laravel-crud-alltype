<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'nama',
         'nis',
         'tempatlahir',
         'tanggallahir',
         'alamat',
         'jeniskelamin',
         'agama',
         'email',
         'hobi',
         'warna',
     ];
}
