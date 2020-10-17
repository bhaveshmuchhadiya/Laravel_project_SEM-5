
@extends('admin/admin_header')
@section('content')
    
<h1>Add Leaves</h1>
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="outer-w3-agile col-xl mt-3">
            <!-- <h4 class="tittle-w3-agileits mb-4">Department Type</h4> -->
            <form action="#" method="post">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Leave Type</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Casual</option>
                        <option>Medical</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control"  placeholder="Description" required=""></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Created date</label>
                    <input type="date" class="form-control"  rows="3" required="">
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
