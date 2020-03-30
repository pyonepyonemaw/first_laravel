<?php

use Illuminate\Database\Seeder;

class receipes_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipes')->insert([
            'name' => 'Ramen',
            'ingredient' => 'salt,noodles,meat',
            'category' => 'Japanese Food',
            'author_id' => '1',
        ]);
    }
}
