@extends('header')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
    
    <div class="panel-body widget-shadow">
        @foreach($res as $d)
         
            <b>Emp Id :</b>{{$d->id}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b> Name : </b>{{$d->first_name}} {{$d->second_name}} {{$d->last_name}} </td><br><br>
            <b> Gender  : </b>{{$d->gender}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b> Department : </b> {{$d->department}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b> birth Date : </b>{{$d->birthdate}} <br><br>
            <b> Address : </b>{{$d->address}}<br><br>
            <b> City  : </b>{{$d->city}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b> Email-ID : </b> {{$d->email}} <br><br>
            <b> Mobile No. : </b>  {{$d->mobile}}
            
            @endforeach
            </div>
    </div>
</div>
@endsection
@extends('footer')