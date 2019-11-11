<?php

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


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


//Routes
Route::group(['middleware' => ['auth']], function () {

    //Dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

    //Professions
    Route::resource('profesiones', 'ProfessionController', [
        'parameters' => [
            'profesiones' => 'profession',
        ]
    ]);
    //Teachers
    Route::resource('profesores', 'TeacherController', [
        'parameters' => [
            'profesores' => 'teacher',
        ]
    ]);
    //Students
    Route::resource('alumnos', 'StudentController', [
        'parameters' => [
            'alumnos' => 'student',
        ]
    ]);
    //School Periods
    Route::resource('periodos-escolares', 'SchoolPeriodController', [
        'parameters' => [
            'periodos-escolares' => 'school_period',
        ]
    ]);
    //Careers
    Route::resource('carreras', 'CareerController', [
        'parameters' => [
            'carreras' => 'career',
        ]
    ]);

    //Niveles de Grado
    Route::resource('niveles-grado', 'GradeLevelController', [
        'parameters' => [
            'niveles-grado' => 'grade_level',
        ]
    ]);

    //Subject
    Route::resource('materias', 'SubjectController', [
        'parameters' => [
            'materias' => 'subject',
        ]
    ]);
});
