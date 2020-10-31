@extends('admin_header')

@section('content')

<div class="bg-page py-5">
    <div class="container">

        <!-- main-heading -->
        <h2 class="main-title-w3layouts mb-2 text-center text-white">Login</h2>
        <!--// main-heading -->
        <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
            <form action="admin/login_process" method="POST">
            @csrf
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
              <div class="forgot col-md-2 text-sm-right text-center">
                        <a href="forgot.html">forgot password?</a>
                    </div>
              
                <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Login</button>
            </form>
            
            <h1 class="paragraph-agileits-w3layouts mt-2">
                <a href="admin_index">Back to Home</a>
            </h1>
        </div>

        
    </div>
</div>


@endsection