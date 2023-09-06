<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts = [
            ['title' => 'judul 1', 'content' => 'ini isi konten 1'],
            ['title' => 'judul 2', 'content' => 'ini isi konten 2'],
            ['title' => 'judul 3', 'content' => 'ini isi konten 3']
        ];

        DB::table('posts')->insert($posts);
    }
}
