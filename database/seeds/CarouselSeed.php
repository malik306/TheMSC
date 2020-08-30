<?php

use App\Carousel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Carousel::class,5)->create();
        DB::table('carousels')->where('image',0)->delete();
        DB::table('classes')->insertOrIgnore([
            ['id'=>1,'name'=>'1st year','division'=>'a'],
            ['id'=>2,'name'=>'1st year','division'=>'b'],
            ['id'=>3,'name'=>'2nd year','division'=>'a'],
            ['id'=>4,'name'=>'2nd year','division'=>'b'],
        ]);
    }
}
