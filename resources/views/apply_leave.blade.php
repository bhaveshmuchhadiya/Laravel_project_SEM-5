@extends('header')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
     
    <h1 class="title1">leave Apply</h1>
    
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-body">
            <div data-example-id="simple-form-inline"> 
            <form method="post" class="form-horizontal" action="insert_leave"> 
            @csrf
                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="selector1" class="form-group">Select Leave-Type&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <select name="leave_type" class="form-control1">
                    @foreach($leaves as $l)
                    <option value="{{$l->leave_type}}">{{$l->leave_type}}</option>
                    @endforeach
                </select></div></div>
                <div class="form-group">    
                @foreach($emp as $a)
                    <input type="hidden" value="{{$a->id}}" name="empid" />
                @endforeach
                    <input type="hidden" value="pendding" name="st" />
                    
                    <label>From Date :</label> 
                    <input type="date" class="form-control1" name="from_date"  placeholder="From Date"> 
                </div> 
                <div class="form-group">    
                    <label>To Date &nbsp;&nbsp;&nbsp;&nbsp; :</label> 
                    <input type="date" class="form-control1" name="to_date" placeholder="To Date"> 
                </div> 
                <div class="form-group">
                    <label>Description :</label> 
                    <textarea type="text" class="form-control" name="desc" placeholder="Description"></textarea>
                 </div>
                <button type="submit" class="btn btn-default">Apply</button> </form> 
                </div>
        </div>
    </div>   
    </div>
</div>
@endsection
@extends('footer')