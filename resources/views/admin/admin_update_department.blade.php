
@extends('admin/admin_header')
@section('content')
    
<h1>update Department</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Department Type</h4> -->
        <form action="#" method="post">
        @csrf
        @foreach $showarr as $show
        <div class="form-group">
                <label for="exampleFormControlSelect1">Department name</label>
                <input type="text" class="form-control" name="dept_name" value="{{$show.department_name}}"  placeholder="Department name" required=""> 
            </div>
            <div class="form-group">
                <label>Department Code</label>
                <input type="text" class="form-control" name="dept_code" placeholder="Department code" value="{{$show.department_code}}" required=""> 
            </div>
        
            <center>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-primary">clear</button>
                </div>
            </div></center>
            @endforeach
        </form>  
</div>
    </nav>

@endsection
