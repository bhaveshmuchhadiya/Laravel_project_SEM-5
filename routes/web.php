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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/leaves', function () {
    return view('leave');
});
Route::get('/apply_leaves', function () {
    return view('apply_leave');
});
Route::get('/emp_home', function () {
    return view('employee_home');
});
Route::get('/login', function () {
    return view('login');
});
// Route::get('/admin/index', function () {
//     return view('admin/index');
Route::get('/admin/index', function () {
    return view('admin/index');
});

Route::get('/admin/add_department', function () {
    return view('admin/admin_add_department');
});
Route::post('/insert_department','AddDeptController@store');

Route::get('admin/update_department/{id}','AddDeptController@edit');

Route::get('admin/delete/{id}','AddDeptController@destroy');

// Route::get('/admin/view_department', function () {
//     return view('admin/admin_view_department');
// });
Route::get('/admin/view_department','AddDeptController@show');

Route::get('/admin/add_leave', function () {
    return view('admin/admin_add_leave');
});
Route::post('/insert_leave_type','LeaveTypeController@store');

// Route::get('/admin/view_leave_type', function () {
//     return view('admin/admin_view_leave_type');
// });
Route::get('/admin/view_leave_type','LeaveTypeController@show');
Route::get('/admin/delete/{id}','LeaveTypeController@destroy');

// Route::get('/admin/add_employee', function () {
//     return view('admin/admin_add_employee');
// });
Route::get('/admin/add_employee','ManageEmployeeController@index');

Route::get('/admin/view_employee', function () {
    return view('admin/admin_view_employee');
});

Route::get('/admin/all_leaves', function () {
    return view('admin/admin_all_leaves');
});

Route::get('/admin/pandding_leaves', function () {
    return view('admin/admin_pandding_leaves');
});

Route::get('/admin/approved_leaves', function () {
    return view('admin/admin_approved_leaves');
});
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

