<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('companies')->insert([
        ['name' => '株式会社AAA'],
        ['name' => '株式会社BBB'],
        ['name' => '株式会社CCC'],
      ]);
    }
}
