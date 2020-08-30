<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


use App\Carousel;
use App\Experience;
use App\Profile;
use App\Qualification;
use App\Series;
use App\TheClass;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

$factory->define(Carousel::class, function (Faker $fake) {
    $filepath = public_path('carousel');
    if(!File::exists($filepath)){
        File::makeDirectory($filepath);
    }
    return [
        'image'=>$fake->image($filepath,640 , 480,null,false),
        'title'=>$fake->realText('25'),
        'description'=>$fake->realText('50'),
    ];
});


$factory->define(TheClass::class, function (Faker $fake) {
    return [
        'name'=>$fake->randomElement(['1st year','2nd year']),
        'division'=>$fake->randomElement(['a','b']),
    ];
});

$factory->define(User::class, function (Faker $fake) {
    return [
        'email' => $fake->unique()->freeEmail,
        'email_verified_at' => now(),
        //'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
       'password'=>Hash::make('employee'),
 //       'password'=>Hash::make('student'),
        'remember_token' => Str::random(10),
        'cnic' =>$fake->unique()->numerify('#####-#######-#'),
        //'user_name'=>$fake->userName,
//    'user_role'=>'student',
        'user_role'=>'employee',
    ];
});


$factory->define(Profile::class, function (Faker $fake) {

    $filepath = public_path('employee');
  //  $filepath = public_path('student');
    if(!File::exists($filepath)){
        File::makeDirectory($filepath);
    }
    return [
        'user_id'=>factory(\App\User::class)->create(),
        'image'=>$fake->image($filepath,640 , 480,null,false),
        'objective'=>$fake->sentence,
        'domicile'=>$fake->randomElement([ 'rawalpindi' , 'attock' ,'chakwal' , 'lahore']),
        'religion'=>$fake->randomElement(['islam']),
        'father_name'=>$fake->name,
        'phone'=>$fake->phoneNumber,
        'province'=>$fake->randomElement(['sindh', 'punjab' ,'balouchistan' ,'nwfp']),
        'date_of_birth'=>$fake->date(),
        'post'=>$fake->randomElement([ 'chemistry' , 'biology' , 'urdu' , 'mathematics','physics','english','islamic education','pakistan studies','computer science']),
    //    'post'=>'admission',
        'nationality'=>$fake->text('10'),
        'address'=>$fake->address,
        'gender'=>$fake->randomElement([ 'male' , 'female']),
        'full_name' => $fake->name,
    ];
});


$factory->define(Qualification::class, function (Faker $fake) {
    return [
        'degree'=>$fake->title,
        'pass_year'=>$fake->date('Y'),
        'university_board'=>$fake->title,
        'institution'=>$fake->title,
        'grade'=>$fake->title,
//        'profile_id'=>factory(\App\Profile::class)->create(),
    ];
});


$factory->define(Experience::class, function (Faker $fake) {
    return [
        'organization'=>$fake->title,
        'designation'=>$fake->title,
        'grade'=>$fake->title,
        'exp_type'=>$fake->randomElement(['private','govt','semi-govt']),
        'start_date'=>$fake->dateTimeBetween($startDate = '-50 years', $endDate = 'now', $timezone = null),
        'end_date'=>$fake->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
//      'profile_id'=>factory(\App\Profile::class)->create(),
    ];
});

/*
$factory->define(Series::class, function (Faker $fake) {
    return [
        'title'=>$fake->unique()->randomElement([
            'sp16','su16','fa16',
            'sp17','su17','fa17',
            'sp18','su18','fa18',
            'sp19','su19','fa19',
        ]),
    ];
});*/
