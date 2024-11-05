<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;

    // Definisikan nama tabel jika berbeda dari konvensi
    protected $table = 'books';

    // Jika Anda menggunakan ID yang bukan auto-increment, tentukan primaryKey
    protected $primaryKey = 'id';

    // Jika Anda tidak menggunakan timestamp, setel ini ke false
    public $timestamps = true;

    // Definisikan fillable untuk menghindari mass assignment
    protected $fillable = [
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'cover',
        'bookshelfs_id', // foreign key
    ];

    // Jika ada relasi dengan tabel bookshelfs
    public function bookshelfs()
    {
        return $this->belongsTo(Bookshelf::class, 'bookshelfs_id');
    }
}


