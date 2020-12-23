<?php

use App\Topicality;
use Illuminate\Database\Seeder;

class TopicalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Topicality::class , 30)->create();
    }
}
