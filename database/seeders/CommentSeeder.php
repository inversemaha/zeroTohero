<?php

namespace Database\Seeders;

use App\Models\Comment;
use Database\Seeders\Traits\DisableForeginKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    use TruncateTable, DisableForeginKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeginKeys();
        $this->truncate('comments');
        Comment::factory(5)->create();
        $this->enableForeginKeys();
    }
}
