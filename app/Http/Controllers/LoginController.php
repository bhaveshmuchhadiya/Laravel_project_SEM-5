<?php

namespace App\Http\Controllers;
use Session;
use App\login;
use App\manage_employee;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/login');
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
    public function store(Request $request,login $login)
    {
        //
        $res = new login;
        $email = $request->input('email');
        $password = $request->input('password');
        $sel = $res::where('email','=', $email)->first();
        $sel1 = $res::where('password','=', $password)->first();
        if(!$sel){
            Session:flash("email not match");
            return redirect()->back();
        }
        elseif(!$sel1){
            SessionL:flash("password in incorrect");
            return redirect()->back();
        }
        else{
            $request->session()->put('email',$request->input());
            return redirect('/index');

        //     $request->session()->put('u_nm',$request->input());
        //    // return $request->session()->get('u_nm');
        //     return redirect('/');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
        Session::forget('email');
        Session::forget('id');
        return redirect('login');

    }
}
