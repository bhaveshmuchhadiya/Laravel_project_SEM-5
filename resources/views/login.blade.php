@extends('header')
@section('content')
<div id="page-wrapper">
	<div class="main-page login-page ">
		<h2 class="title1">Login</h2>
	    <div class="widget-shadow">
			<div class="login-body">
				<form action="{{action('LoginController@store')}}" method="post">
					@csrf
					<input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<div class="forgot-grid">
					
		    			<div class="forgot">
			    			<a href="#">forgot password?</a>
				    	</div>
					<div class="clearfix"> </div>
				    </div>
					<input type="submit" name="Sign In" value="Sign In">
					<div class="registration">
						Don't have an account ?
						<a class="" href="signup.html">
							Create an account
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('footer')