@extends('header')
@section('content')
<div id="page-wrapper">
    <div class="main-page">
    
<h1 class="title1">Change Password  </h1>
    
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-body">
                            <div data-example-id="simple-form-inline"> 
                            <form class="form-horizontal" action="forgot_password" method="post"> 
                                @csrf
                                <div class="form-group">    
                                    <label>old Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label> 
                                    <input type="password" class="form-control1" name="old_password"  placeholder="Old Password"> 
                                </div> 
                                <div class="form-group">    
                                    <label>New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label> 
                                    <input type="password" class="form-control1" name="new_password" placeholder="New Password"> 
                                </div> 
                                <div class="form-group">    
                                    <label>Confirm Password  :</label> 
                                    <input type="password" class="form-control1" name="con_password" placeholder="Confirn Password"> 
                                </div>
                                <div class="form-group">   
                                    <a href=""><h4>Forgot password</h4></a>
                                    <center><button type="submit" class="btn btn-default" >Apply</button></center>
                                </div>
                             </form> 
                                </div>
						</div>
					</div>
</div></div>
@endsection