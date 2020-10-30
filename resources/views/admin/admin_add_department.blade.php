
@extends('admin/admin_header')
@section('content')
    
<h1>Add Department</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Department Type</h4> -->
        <form action="../insert_department" method="post">
        @csrf
        <div class="form-group">
                <label for="exampleFormControlSelect1">Department name</label>
                <input type="text" class="form-control" name="dept_name"  placeholder="Department name" required=""> 
            </div>
            <div class="form-group">
                <label>Department Code</label>
                <input type="text" class="form-control" name="dept_code" placeholder="Department code" required=""> 
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
