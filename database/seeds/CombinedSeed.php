<?php

use App\Experience;
use App\Profile;
use App\Qualification;
use App\Series;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CombinedSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(User::class,1)->create()->each(function ($user){
            $user->profile()->save(factory(Profile::class)->make())
                ->each(function ($profile){
                $profile->qualification()->saveMany(factory(Qualification::class,3)->make());
                $profile->experience()->saveMany(factory(Experience::class,3)->make());
            });
        });*/
        $fake=\Faker\Factory::create();
        for ($i=1;$i<=8;$i++){
            DB::table('series')->insertOrIgnore([
                'title'=> $fake->unique()->randomElement([
                    'sp16','su16','fa16','the-msc-sp16','the-msc-fa16','the-msc-su16',
                    'sp17','su17','fa17','the-msc-sp17','the-msc-fa17','the-msc-su17',
                    'sp18','su18','fa18','the-msc-sp18','the-msc-fa18','the-msc-su18',
                    'sp19','su19','fa19','the-msc-sp19','the-msc-fa19','the-msc-su19',

                ]),
            ]);

            factory(Profile::class,1)->create()->each(function ($k){
                $k->qualification()->saveMany(factory(Qualification::class,3)->make());
                $k->experience()->saveMany(factory(Experience::class,3)->make());
            });

        }
    }
}
