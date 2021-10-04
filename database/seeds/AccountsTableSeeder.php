<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'number' => random_int(100000, 9999999),
            'agency' => random_int(100, 9999),
            'value' => random_int(0, 9999),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
