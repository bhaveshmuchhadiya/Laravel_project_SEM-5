<?php

namespace App\Http\Controllers;

use App\leave_type;
use Illuminate\Http\Request;

class LeaveTypeController extends Controller
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
            return view('admin/admin_add_leave');
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
        //insert leave type
        $res = new leave_type();
        $res->leave_type=$request->input('leave_type');
        $res->description=$request->input('desc');
        $res->save();
        return redirect('/admin/view_leave_type');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\leave_type  $leave_type
     * @return \Illuminate\Http\Response
     */
    public function show(leave_type $leave_type)
    {
        //
        if(session('email')['email'])
        {
            return view('admin/admin_view_leave_type')->with('leave_type',leave_type::all());
        }
        else{
            return redirect('/admin/login');
        }    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\leave_type  $leave_type
     * @return \Illuminate\Http\Response
     */
    public function edit(leave_type $leave_type,$id)
    {
        //
        return view("admin/admin_update_leavetype")->with('show',leave_type::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\leave_type  $leave_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, leave_type $leave_type,$id)
    {
        //
        $res = leave_type::find($request->id);
        $res->leave_type=$request->input('leave_type');
        $res->description=$request->input('desc');
        $res->save();
        return redirect("admin/view_leave_type");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\leave_type  $leave_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(leave_type $leave_type,$id)
    {
        //
        leave_type::destroy(array('id',$id));
        return redirect('admin/view_leave_type');
    }
}
