<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class CompanySeeder extends Seeder
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
