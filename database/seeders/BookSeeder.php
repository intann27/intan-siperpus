<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "Jarkom - Filosofi",
            "author" => "GTA",
            "year" => 2024,
            "publisher" => "UNSUR Mengantuk",
            "city" => "Cianjur",
            "cover" => "cover_buku_1734253233.jpg",
            "bookshelf_id" => 1
        ]);
        Book::create([
            "title" => "Genshin",
            "author" => "Mihoyo",
            "year" => 2020,
            "publisher" => "GenshinLab",
            "city" => "Shianghai",
            "cover" => "cover_buku_1734001258.jpg",
            "bookshelf_id" => 2
        ]);
    }
}
