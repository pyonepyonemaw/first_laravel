<?php

use Illuminate\Database\Seeder;

class categories_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Ramen',
            'description' => 'salt,noodles,meat',
        ]);
    }
}
