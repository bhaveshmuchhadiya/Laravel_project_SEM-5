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
        @foreach($data as $d)
            <tr>
              <th scope="row">{{$d->e_id}}</th>
              <td>{{$d->leave_type}}</td>
              <td>{{$d->from_date}}</td>
              <td>{{$d->to_date}}</td>
              <td>{{$d->description}}</td>
              <td>{{$d->created_at}}</td>
              <td>{{$d->status}}</td>
            @endforeach
            </tr>
            
        </tbody>
    </table>
</div>

    </div>
</div>
@endsection
@extends('footer')