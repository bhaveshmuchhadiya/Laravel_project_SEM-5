<?php

namespace App\Http\Controllers;
use Session;
use App\login;
use App\admin_login;
use App\manage_employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    
    public function adminlogin()
    {
        # code...
        return view('/admin/admin_login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(session('email')['email'])
        {
            $em = session('email')['email'];
            $res = DB::select("select * from manage_employees where email = '$em'");
            // print_r($res);
            return view('employee_home',['res'=>$res]);
        }
        else{
            return redirect('login');
        }
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
        $unm = $res::where('email','=', $email)->first();
        $pas = $res::where('password','=', $password)->first();
        if(!$unm){
            return redirect("login");
        }
        elseif(!$pas){
            // $request->session()->flash('msg','password in incorrect');
            return redirect("login");
        }
        else{
            $request->session()->put('email',$request->input());
            return redirect('/emp_home');

        //     $request->session()->put('u_nm',$request->input());
        //    // return $request->session()->get('u_nm');
        //     return redirect('/');
            
        }
    }
    public function login_process(Request $request,admin_login $admin_login )
    {
        # admin login ...
        $res = new admin_login;
        $email = $request->input('email');
        $password = $request->input('password');
        $unm = $res::where('email','=', $email)->first();
        $pas = $res::where('password','=', $password)->first();
        if(!$unm){
            return redirect("admin/login");
        }
        elseif(!$pas){
            // $request->session()->flash('msg','password in incorrect');
            return redirect("admin/login");
        }
        else{
            $request->session()->put('email',$request->input());
            return redirect('admin/index');
        }

    }

    public function destroy(login $login)
    {
        //
        Session::forget('email');
        Session::forget('id');
        return redirect('login');
    }

    public function des_log(login $login)
    {
        # code...
        Session::forget('email');
        Session::forget('id');
        return redirect('admin/login');

    }

    public function change_pass(login $login)
    {
        # code...
       
        return view("change_password");
        
    }
    public function forgot_password(Request $request,login $login)
    {
        # code...
        $old_pass = $request->input('old_password');
        $new_pass = $request->input('new_password');
        $con_pass = $request->input('con_password');
        if(session('email')['email'])
        {
            $em = session('email')['email'];
            $res = DB::select("select password from manage_employees where email = '$em'");   
            $ab = $res[0];
            if($old_pass == $ab->password){
                if($new_pass == $con_pass){
                    DB::update("update manage_employees set password='$con_pass' where email = '$em' ");               
                    
                    return view("index");
                }
                else
                {
                    
                    return redirect("change_pass");
                }
            }
            else{
            // print_r($ab->password);
            return redirect("change_pass");
            }
        }
    }
}
