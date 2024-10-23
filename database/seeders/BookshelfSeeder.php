<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelfs')->insert([[
            'code' => 'BS001',
            'name' => 'manga'
        ],
        [
            'code' => 'BS002',
            'name' => 'novel'
        ]
        ]);
        Book::create([
            'title' => 'Gajah terbang' ,
            'author' => 'Ministar' ,
            'year' => '2024' ,
            'publisher' => 'universitas' ,
            'city' => 'Cianjur' ,
            'cover' => 'gajahterbang' ,
            'bookshelfs_id' => 1
        ]);
    }
}
