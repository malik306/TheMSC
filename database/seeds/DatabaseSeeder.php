<?php

use App\Experience;
use App\Qualification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //ini_set('memory_limit',-1);
        DB::table('users')->insertOrIgnore([
            ['id' => 1,'cnic' => '3740624915113',
                'password' => Hash::make('laravel'),
                'user_name' => 'admin','status'=> 1,'user_role' => 'admin',
                'email' => 'mubashir.official@gmail.com',
                'created_at'=>now(),'updated_at'=>now()],
        ]);
        DB::table('posts')->insertOrIgnore([
            ['id'=>1,'title'=>'admission','created_at'=>now(),'updated_at'=>now()],
            ['id'=>2,'title'=>'biology','created_at'=>now(),'updated_at'=>now()],
            ['id'=>3,'title'=>'mathematics','created_at'=>now(),'updated_at'=>now()],
            ['id'=>4,'title'=>'chemistry','created_at'=>now(),'updated_at'=>now()],
            ['id'=>5,'title'=>'physics','created_at'=>now(),'updated_at'=>now()],
            ['id'=>6,'title'=>'english','created_at'=>now(),'updated_at'=>now()],
            ['id'=>7,'title'=>'urdu','created_at'=>now(),'updated_at'=>now()],
        ]);
        DB::table('provinces')->insertOrIgnore([
            ['id'=>1,'title'=>'punjab','created_at'=>now(),'updated_at'=>now()],
            ['id'=>2,'title'=>'sindh','created_at'=>now(),'updated_at'=>now()],
            ['id'=>3,'title'=>'nwfp','created_at'=>now(),'updated_at'=>now()],
            ['id'=>4,'title'=>'balochistan','created_at'=>now(),'updated_at'=>now()],
        ]);
        DB::table('genders')->insertOrIgnore([
            ['id'=>1,'title'=>'male','created_at'=>now(),'updated_at'=>now()],
            ['id'=>2,'title'=>'female','created_at'=>now(),'updated_at'=>now()],
        ]);
        DB::table('roles')->insertOrIgnore([
            ['id'=>1,'title'=>'student','created_at'=>now(),'updated_at'=>now()],
            ['id'=>2,'title'=>'employee','created_at'=>now(),'updated_at'=>now()],
        ]);

        $this->call([
            CombinedSeed::class,
            CarouselSeed::class,
        ]);
    }
}
