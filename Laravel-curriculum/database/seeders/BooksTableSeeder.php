<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $numberOfBooks = 20;

    for ($i = 0; $i < $numberOfBooks; $i++) {
      $user = User::inRandomOrder()->first();
      Book::create([
        'title' => "サンプルブック$i",
        'comment' => "テストコメント$i",
        'author_id' => $user->id,
      ]);
    }
  }
}
