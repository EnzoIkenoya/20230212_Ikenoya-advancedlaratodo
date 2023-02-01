<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::table('todos')->insert(
            [
                'contet' => 'リストが表示されます',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
    }
}
