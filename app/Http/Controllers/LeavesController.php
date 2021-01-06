<?php

namespace App\Http\Controllers;

use App\leaves;
use App\leave_type;
use App\manage_employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeavesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(leave_type $leave_type,manage_employee $manage_employee)
    {
        //
        if(session('email')['email'])
        {   
            $em = session('email')['email'];
            $leave = leave_type::all();
            // $emp = DB::select("select id from manage_employees where email = '$em'");          
            $res = DB::select("select id from manage_employees where email = '$em'");
            return view('apply_leave',['leaves'=>$leave],['emp'=>$res]);
        }
        else{
            return redirect('login');
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
        $res = new leaves();
        $res->e_id = $request->input("empid");
        $res->leave_type = $request->input("leave_type");
        $res->from_date = $request->input("from_date");
        $res->to_date = $request->input("to_date");
        $res->description = $request->input("desc");
        $res->status = $request->input("st");
        $res->save();
        return redirect('/leaves');
    }
    public function view(leaves $leaves)
    {
        if(session('email')['email'])
        {   
            $em = session('email')['email'];
            // $leave = leaves::all();
            // $emp = DB::select("select id from manage_employees where email = '$em'");          
            $res = DB::select("select * from leaves inner join manage_employees on leaves.e_id=manage_employees.id where email='$em'");
            // print_r($res);
            return view('leave',['data'=>$res]);
        }
        else{
            return redirect('login');
        }
        // return view('leave')->with('data',leaves::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function show(leaves $leaves)
    {
        //
        if(session('email')['email'])
        {
        $res = DB::select("select * from leaves inner join manage_employees on leaves.e_id=manage_employees.id ");
        return view('admin/admin_all_leaves',['data'=>$res]);
        }
        else{
            return redirect('admin/login');
        }
    }
    public function pendding_leaves(Leaves $leaves)
    {
        if(session('email')['email'])
        {
        $res = DB::select("select * from leaves inner join manage_employees on leaves.e_id=manage_employees.id where leaves.status='pendding'");
        return view('admin/admin_all_leaves',['data'=>$res]);
        }
        else{
            return redirect('admin/login');
        }
    }
    public function approved_leaves(Leaves $leaves)
    {
        # code...
        if(session('email')['email'])
        {
        $res = DB::select("select * from leaves inner join manage_employees on leaves.e_id=manage_employees.id where leaves.status='approved'");
        return view('admin/admin_all_leaves',['data'=>$res]);
        }
        else{
            return redirect('admin/login');
        }
    }
    public function notapproved_leaves(Leaves $leaves)
    {
        # code...
        if(session('email')['email'])
        {
        $res = DB::select("select * from leaves inner join manage_employees on leaves.e_id=manage_employees.id where leaves.status='disapprove'");
        return view('admin/admin_all_leaves',['data'=>$res]);
        }
        else{
            return redirect('admin/login');
        }
    }

    public function view_leaves($id)
    {
        # code...
        if(session('email')['email'])
        {
        $res = DB::select("select * from leaves inner join manage_employees on leaves.e_id=manage_employees.id where leaves.l_id = '$id' ");
        return view("admin/view_leaves",['data'=>$res]);
        }
        else{
            return redirect('admin/login');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function edit(leaves $leaves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, leaves $leaves,$l_id)
    {
        //
        // $id = $l_id;
        // $res = leaves::find($request->l_id);
        // print_r($res);
        // $res->status=$request->input('status');
        // $res->save();
        $st = $request->input('status');
        DB::update("update leaves set status='$st' where l_id = '$l_id' ");
        return redirect("admin/all_leaves");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function destroy(leaves $leaves)
    {
        //
    }
}
