<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Traits\DisableForeginKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    use TruncateTable, DisableForeginKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeginKeys();
        $this->truncate('users');
        User::factory(10)->create();
        $this->enableForeginKeys();
    }
}
