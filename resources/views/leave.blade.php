@extends('header')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
        <a href="#"> <button type="button" class="btn btn-primary" data-toggle="modal" >Apply for leave</button></a>
        <div class="tables">
			<div class="panel-body widget-shadow">
				<h4 class="table">Leaves</h4>
				<table class="table">
			    	<thead>
						<tr>
				            <th>#</th>
						    <th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						  <th scope="row">1</th>
						  <td>Mark</td>
						  <td>Otto</td>
						  <td>@mdo</td>
						</tr>
					</tbody>
				</table>
			</div>
        </div>
    </div>
</div>
@endsection
@extends('footer')