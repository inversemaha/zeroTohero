<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Seeders\Traits\DisableForeginKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    use TruncateTable, DisableForeginKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeginKeys();
        $this->truncate('posts');
        Post::factory(5)->create();
        $this->enableForeginKeys();
    }
}
