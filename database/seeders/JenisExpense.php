<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisExpense extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('jenis_expense')->insert([
      ['nama' => 'Debit'],
      ['nama' => 'Kredit'],
    ]);
  }
}
