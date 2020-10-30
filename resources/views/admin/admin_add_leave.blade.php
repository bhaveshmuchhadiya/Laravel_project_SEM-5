
@extends('admin/admin_header')
@section('content')
    
<h1>Add Leaves</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
            <!-- <h4 class="tittle-w3-agileits mb-4">Department Type</h4> -->
            <form action="../insert_leave_type" method="post">
            @csrf
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Leave Type</label>
                    <input type="text" class="form-control" name="leave_type" placeholder="Leave Type" required="">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control" name="desc" placeholder="Description" required=""></textarea>
                </div>
               
                <center>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-primary">clear</button>
                    </div>
                </div></center>
            </form>  
    </div>

    </nav>
@endsection
