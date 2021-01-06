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
    return view('home');
});
Route::get('/index', function () {
    return view('index');
});
// Route::get('/leaves', function () {
//     return view('leave');
// });
// Route::get('/apply_leaves', function () {
//     return view('apply_leave');
// });
// Route::get('/apply_leaves','LeavesController@index');

Route::get('/login', function () {
    return view('login');
});
// Route::get('/admin/index', function () {
//     return view('admin/index');
// Route::get('/admin/index', function () {
//     return view('admin/index');
// });

Route::get('admin/index','AddDeptController@admin_home');

// Route::get('/admin/login', function () {
//     return view('admin/admin_login');
// });


Route::get('admin/login','LoginController@adminlogin');
Route::post('admin/login_process','LoginController@login_process');
Route::get('admin/logout','LoginController@des_log');


// Route::get('/login','LoginController@index');
// Route::get('/emp_home', function () {
//     return view('employee_home');
// });

Route::get('/emp_home','LoginController@create');
Route::resource('/login','LoginController');
Route::get('/logout','LoginController@destroy');

//department Routes

Route::get('/admin/add_department','AddDeptController@index');
Route::post('/insert_department','AddDeptController@store');
Route::get('admin/edit_department{id}','AddDeptController@edit');
Route::post('admin/update_department/{id}','AddDeptController@update');
Route::get('admin/dept_delete/{id}','AddDeptController@destroy');
Route::get('/admin/view_department','AddDeptController@show');

// Leave_type Routes

Route::get('/admin/add_leave','LeaveTypeController@index');
Route::post('/insert_leave_type','LeaveTypeController@store');
Route::get('/admin/view_leave_type','LeaveTypeController@show');
Route::get('/admin/edit_leave_type{id}','LeaveTypeController@edit');
Route::post('/admin/update_leavetype/{id}','LeaveTypeController@update');
Route::get('/admin/delete/{id}','LeaveTypeController@destroy');

//Employee Routes

Route::get('/admin/add_employee','ManageEmployeeController@index');
Route::post('/admin/admin/insert_employee','ManageEmployeeController@store');
Route::get('/admin/view_employee','ManageEmployeeController@show');
Route::get('/admin/edit_employee{id}','ManageEmployeeController@edit');
Route::post('/admin/update_employee/{id}','ManageEmployeeController@update');
Route::get('/admin/delete_employee/{id}','ManageEmployeeController@destroy');
// Route::get('/admin/view_employee', function () {
    //     return view('admin/admin_view_employee');
    // });
    
    
    
//Leaves Routes
    
// Route::get('/admin/all_leaves', function () {
//     return view('admin/admin_all_leaves');
// });
// Route::get('/leaves', function () {
//     return view('leave');
// });
Route::get('/admin/all_leaves','LeavesController@show');
Route::get('/apply_leaves','LeavesController@index');
Route::post('/insert_leave','LeavesController@store');
Route::get('/leaves','LeavesController@view');


Route::post('/admin/action_apply/{l_id}','LeavesController@update');
Route::get('admin/view_leaves{id}','LeavesController@view_leaves');

// Route::get('/admin/pandding_leaves', function () {
//     return view('admin/admin_pandding_leaves');
// });
Route::get('/admin/pandding_leaves','LeavesController@pendding_leaves');

// Route::get('/admin/approved_leaves', function () {
    //     return view('admin/admin_approved_leaves');
    // });
Route::get('/admin/approved_leaves','LeavesController@approved_leaves');
Route::get('/admin/notapproved_leaves','LeavesController@notapproved_leaves');

Route::get('/change_pass','LoginController@change_pass');
Route::post('/forgot_password','LoginController@forgot_password');


// Route::get('/registration', function () {
//     return view('registration');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/db', function () {
//     return view('db');
// });

// Route::get('/','path_finding@index');
// Route::get('/contact','path_finding@contact');
// Route::get('/leave', function () {
//     return view('header');
// });

