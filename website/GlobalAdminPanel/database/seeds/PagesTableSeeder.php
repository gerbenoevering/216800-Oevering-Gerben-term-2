<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pages')->insert([
          'name' => 'homepage',
      ]);
      DB::table('pages')->insert([
          'name' => 'loginpage',
      ]);
    }
}
