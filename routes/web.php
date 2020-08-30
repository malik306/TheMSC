<?php

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $carousels=\App\Carousel::all();
    return view('index',compact('carousels'));
});

Auth::routes(['register'=>false]);
Route::middleware('auth')->group(function (){

    Route::get('/dashboard',function (){
        return view('dashboard');
    });

    Route::prefix('faculty')->group(function (){
        Route::get('/', function (){
            $self=User::find(Auth::id());
            $title='Faculty Console';
            return view('employee.faculty-dashboard',compact('title','self'));
        });
        Route::get('/self-attendance',function (){
            $self=User::find(Auth::id());
            $present=$self->profile->attendance()->where('present','p')->count();
            $absent=$self->profile->attendance()->where('present','a')->count();
            $leave=$self->profile->attendance()->where('present','l')->count();
            $short=$self->profile->attendance()->where('present','sl')->count();
            $title='Faculty Console';
            return view('employee.self-attendance.index',compact('title','self','absent','present','short','leave'));
        });
        Route::resource('assignment','AssignmentController');
        Route::resource('material','MaterialController');
        Route::resource('marks','MarkController');
    });
    Route::prefix('students')->group(function (){
        Route::get('/', function (){
            $title='Student Console';
            $self=User::find(Auth::id());
            return view('student.student-dashboard',compact('title','self'));
        });
        Route::resource('solve-assignment','SolveAssignment');
        Route::resource('down-material','DownMaterial');
        Route::get('check-marks','CheckMark@index')->name('get-mark');
        Route::get('show-attendance','CheckAttendance@index')->name('get-attendance');
    });

    Route::prefix('admin')->group(function () {
        Route::get('/', function (){
            $student=User::where('user_role','student')->count();
            $employee=User::where('user_role','employee')->count();
            $class=\App\TheClass::count();
            $course=\App\Course::count();
            $carousel=\App\Carousel::count();
            $series=\App\Series::count();
            $title='Admin Console';
            return view('admin.admin-dashboard',compact('title','student','employee','class','course','carousel','series'));
        });
        Route::resource('/class','ClassController')->except(['show']);
        Route::resource('/carousel','CarouselController')->except(['show']);
        Route::resource('/course','CourseController')->except(['show']);
        Route::resource('/feedback','FeedbackController')->only(['index']);
        Route::resource('/student','StudentController');
        Route::resource('/employee','EmployeeController');

        Route::resource('/attendance','AttendanceEmployeeController');
        Route::get('/attendance-date','AttendanceEmployeeController@get_dynamic')->name('date-attendance');
        Route::delete('attendance-delete','AttendanceEmployeeController@delete');

        Route::resource('/series','SeriesController');
        Route::resource('selection','SelectionController');
        Route::get('selection/{id}/pivot-create/','SelectionController@pivotCreate')->name('pivotCreate');
        Route::get('selection/{id}/pivot-destroy/','SelectionController@pivotDestroy')->name('pivotDestroy');
    });
});

Route::resource('feedback','FeedbackController')->only(['create','store']);

/*Candidate Routes*/

Route::post('/login-user','Auth\CandidateController@login')->name('c-login');
Route::post('/logout-user','Auth\CandidateController@logout')->name('c-logout');

Route::middleware('auth')->group(function (){
    /*Route::get('/c-dashboard',function (){
        return view('user.dashboard');
    });*/
    Route::prefix('user')->group(function () {
        Route::resource('/user','Candidate\CandidateController')->only(['edit','update']);
        Route::resource('/qualification','Candidate\QualificationController');
        Route::resource('/profile','Candidate\ProfileController');
        Route::resource('/experience','Candidate\ExperienceController');
        Route::get('/',function (){
            $AuthID=Auth::id();
            return view('user.candidate-dashboard',compact('AuthID'));
        });
        Route::get('/index',function (){
            $candidate=User::find(Auth::id());
            //dd(Auth::id());
            $retrieve=User::find(Auth::id());
            //dd($retrieve->profile);
            return view('user.index',compact('candidate','retrieve'));
        });
    });
});

