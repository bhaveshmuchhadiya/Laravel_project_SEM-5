
@extends('admin/admin_header')
@section('content')
    
<h1>update Department</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Department Type</h4> -->
        <form action="update_department/{{$show->id}}" method="post">
        @csrf  
        <div class="form-group">
                <label for="exampleFormControlSelect1">Department name</label>
                <input type="text" class="form-control" name="dept_name" value="{{$show->department_name}}"  placeholder="Department name" required=""> 
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
