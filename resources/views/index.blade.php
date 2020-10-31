@extends('header')
@section('content')
		<!-- main content start-->
		<div id="page-wrapper">
<h1>{{session('email')['email']}}</h1>
<!-- <h1><a href="logout">logout</a></h1> -->

			<div class="main-page">
			<div class="col_3">
        	<!-- <div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-pie-chart dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>50</strong></h5>
                      <span>Leaves</span>
                    </div>
                </div>
        	 </div> -->
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>150</strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
		
		<div class="row-one widgettable">
			
			<div class="clearfix"> </div>
		</div>
		
	</div></div>		
@endsection
@extends('footer')