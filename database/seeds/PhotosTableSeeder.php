<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                'id' => 1,
                'title' => 'title A',
            ],
            [
                'id' => 2,
                'title' => 'title B',
            ],
            [
                'id' => 3,
                'title' => 'title C',
            ],
            [
                'id' => 4,
                'title' => 'title D',
            ],
            [
                'id' => 5,
                'title' => 'title E',
            ]
        ]);
    }
}
