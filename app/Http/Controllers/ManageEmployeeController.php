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
        if(session('email')['email'])
        {
            return view('admin/admin_add_employee')->with('data',add_dept::all());
        }
        else{
            return redirect('/admin/login');
        }
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
        $res->birthdate=$request->input('b_date');
        $res->address=$request->input('address');
        $res->city=$request->input('city');
        $res->email=$request->input('email');
        $res->mobile=$request->input('mobile');
        $res->username=$request->input('username');
        $res->password=$request->input('password');
        $res->save();
        return redirect('admin/view_employee');
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
        if(session('email')['email'])
        {
            return view("admin/admin_view_employee")->with('showarr',manage_employee::all());
        }
        else{
            return redirect('/admin/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\manage_employee  $manage_employee
     * @return \Illuminate\Http\Response
     */
    public function edit(add_dept $add_dept, manage_employee $manage_employee,$id)
    {
        //
        // view("admin/admin_update_employee")->with('data',add_dept::all());
        // return view("admin/admin_update_employee")->with('showarr',manage_employee::find($id));
        $data = add_dept::all();
        $show = manage_employee::find($id);
        return view("admin/admin_update_employee",compact('data','show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\manage_employee  $manage_employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, manage_employee $manage_employee,$id)
    {
        //
        $res = manage_employee::find($request->id);
        $res->first_name=$request->input('first_name');
        $res->second_name=$request->input('second_name');
        $res->last_name=$request->input('last_name');
        $res->gender=$request->input('gender');
        $res->department=$request->input('department');
        $res->birthdate=$request->input('b_date');
        $res->address=$request->input('address');
        $res->city=$request->input('city');
        $res->email=$request->input('email');
        $res->mobile=$request->input('mnumber');
        $res->save();
        return redirect("admin/view_employee");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\manage_employee  $manage_employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(manage_employee $manage_employee,$id)
    {
        manage_employee::destroy(array('id',$id));
        return redirect('admin/view_employee');
    }
}
