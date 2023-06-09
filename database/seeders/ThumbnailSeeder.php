<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;use
Illuminate\Support\Facades\DB;

class ThumbnailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function (){
            DB::table('thumbnails')->insert([
                [
                'name' => 'ecc01.jpg',
                'article_id' => 1,
                'created_at' => date('Y-m-d H:i:s')
                ],
                [
                'name' => 'ecc02.jpg',
                'article_id' => 2,
                'created_at' => date('Y-m-d H:i:s')
                ]
            ]);
       });
    }
}
