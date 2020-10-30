@extends('header')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
        
<h2 class="title1">Old Leaves</h2>
<div class="panel-body widget-shadow">
    <!-- <h4>Old Leaves</h4> -->
    <table class="table">
        <thead>
            <tr>
              <th>ID</th>
              <th>Leave Type</th>
              <th>From date</th>
              <th>To date</th>
              <th>Description</th>
              <th>Posting Date</th>
              <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Casual Leave</td>
              <td>13/10/2019</td>
              <td>14/10/2019</td>
              <td>apply for casual leave</td>
              <td>11/10/2019</td>
              <td>Approved</td>
            </tr>
            
        </tbody>
    </table>
</div>

    </div>
</div>
@endsection
@extends('footer')