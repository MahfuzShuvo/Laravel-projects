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

Route::get('/', function () {
    return view('student_login');
});

Route::get('/admin', function () {
    return view('admin.admin_login');
});

//Admin login ....................................................
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
Route::get('/admin_profile', 'AdminController@admin_profile');
Route::get('/admin_settings', 'AdminController@admin_settings');


//Logout ..........................................................
Route::get('/logout', 'AdminController@logout');


//Student ............................................................
Route::get('/add_students', 'AddStudentsController@add_students');
Route::post('/save_students', 'AddStudentsController@save_students');

//Student Action .............................................................................
Route::get('/delete_student/{student_id}', 'AllStudentsController@delete_student');
Route::get('/view_student/{student_id}', 'AllStudentsController@view_student');
Route::get('/edit_student/{student_id}', 'AllStudentsController@edit_student');

Route::post('/update_student/{student_id}', 'AllStudentsController@update_student');

//All Student .........................................................
Route::get('/all_students', 'AllStudentsController@all_students');



//Tution fee ...............................................
Route::get('/tution_fee', 'TutionController@tution_fee');
//Result ...........................................
Route::get('/result', 'ResultController@result');



//Courses ................................................
Route::get('/cse', 'cseController@cse');
Route::get('/eee', 'eeeController@eee');
Route::get('/bba', 'bbaController@bba');
Route::get('/textile', 'textileController@textile');
Route::get('/law', 'lawController@law');



//Teachers ........................................................
Route::get('/add_teachers', 'AddTeachersController@add_teachers');
Route::post('/save_teachers', 'AddTeachersController@save_teachers');

//Teacher Action ..................................................................
Route::get('/delete_teacher/{teacher_id}', 'AllTeachersController@delete_teacher');
Route::get('/view_teacher/{teacher_id}', 'AllTeachersController@view_teacher');
Route::get('/edit_teacher/{teacher_id}', 'AllTeachersController@edit_teacher');

Route::post('/update_teacher/{teacher_id}', 'AllTeachersController@update_teacher');


//All Teachers .........................................................
Route::get('/all_teachers', 'AllTeachersController@all_teachers');



//Notice .....................................................
Route::get('/notice', 'noticeController@notice');

//Routine ..................................................
Route::get('/routine', 'routineController@routine');








//Student Login ............................................................
Route::post('/studentlogin', 'studentController@login_dashboard');
Route::get('/student_dashboard', 'studentController@student_dashboard');

