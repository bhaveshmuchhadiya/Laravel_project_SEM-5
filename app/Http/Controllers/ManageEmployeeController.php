<?php

namespace App\Http\Controllers;

use App\manage_employee;
use App\add_dept;
use Illuminate\Http\Request;

class ManageEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(add_dept $add_dept)
    {
        //
        // $result = manage_employee::table('department')->get();
        return view('admin/admin_add_employee')->with('data',add_dept::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert employee
        $res = new manage_employee();
        $res->first_name=$request->input('first_name');
        $res->second_name=$request->input('second_name');
        $res->last_name=$request->input('last_name');
        $res->gender=$request->input('gender');
        $res->department=$request->input('department');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\manage_employee  $manage_employee
     * @return \Illuminate\Http\Response
     */
    public function show(manage_employee $manage_employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\manage_employee  $manage_employee
     * @return \Illuminate\Http\Response
     */
    public function edit(manage_employee $manage_employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\manage_employee  $manage_employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, manage_employee $manage_employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\manage_employee  $manage_employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(manage_employee $manage_employee)
    {
        //
    }
}
