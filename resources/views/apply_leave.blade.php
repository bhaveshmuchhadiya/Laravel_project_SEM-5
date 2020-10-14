@extends('header')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
     
    <h1 class="title1">leave Apply</h1>
    
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-body">
            <div data-example-id="simple-form-inline"> 
            <form class="form-horizontal"> 
                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="selector1" class="form-group">Select Leave-Type&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <select name="selector1" name="leave_type" class="form-control1">
                    <option value="Casual Leave">Casual Leave</option>
                    <option value="Medical Leave">Medical Leave</option>
                    <option value="Ristricted Holiday">Ristricted Holiday</option>
                </select></div></div>
                <div class="form-group">    
                    <label>From Date :</label> 
                    <input type="date" class="form-control1" name="from_date"  placeholder="From Date"> 
                </div> 
                <div class="form-group">    
                    <label>To Date &nbsp;&nbsp;&nbsp;&nbsp; :</label> 
                    <input type="date" class="form-control1" name="to_date" placeholder="To Date"> 
                </div> 
                <div class="form-group">
                    <label>Description :</label> 
                    <textarea type="text" class="form-control" name="description" placeholder="Description"></textarea>
                 </div>
                <button type="submit" class="btn btn-default">Apply</button> </form> 
                </div>
        </div>
    </div>   
    </div>
</div>
@endsection
@extends('footer')