<?php

namespace App\Http\Controllers;

use App\add_dept;
use App\manage_employee;
use Illuminate\Http\Request;

class AddDeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(session('email')['email'])
        {
            return view('admin/admin_add_department');
        }
        else{
            return redirect('/admin/login');
        }
    }
    public function admin_home(Request $request,manage_employee $manage_employee)
    {
        # code...
        if(session('email')['email'])
        {
            $res = manage_employee :: all();
            // print($res);
            for($x=0;$x<=sizeof($res);$x++){
                $count = $x;
            }
            // print($count);
            
            return view('admin/index')->with(compact('count'));
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
        //
        $res = new add_dept();
        $res->department_name = $request->input('dept_name');
        $res->department_code = $request->input('dept_code');
        $res->save();
        return redirect('admin/view_department');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\add_dept  $add_dept
     * @return \Illuminate\Http\Response
     */
    public function show(add_dept $add_dept)
    {
        //
        // $showarr = add_dept::paginate(5);
        if(session('email')['email'])
        {
            return view('admin/admin_view_department')->with('showarr',add_dept::all());
        }
        else{
            return redirect('/admin/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\add_dept  $add_dept
     * @return \Illuminate\Http\Response
     */
    public function edit(add_dept $add_dept,$id)
    {
        if(session('email')['email'])
        {
            return view('admin/admin_update_department')->with('show',add_dept::find($id));
        }
        else{
            return redirect('/admin/login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\add_dept  $add_dept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add_dept $add_dept,$id)
    {
        //
        $res = add_dept::find($request->id);
        $res->department_name=$request->input('dept_name'); 
        $res->save();
        return redirect('admin/view_department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\add_dept  $add_dept
     * @return \Illuminate\Http\Response
     */
    public function destroy(add_dept $add_dept,$id)
    {
        //delete department
        // print_r($add_dept);
        add_dept::destroy(array('id',$id));
        return redirect('admin/view_department');
    }
}
