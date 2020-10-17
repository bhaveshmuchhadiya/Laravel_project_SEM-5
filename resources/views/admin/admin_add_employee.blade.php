
@extends('admin/admin_header')
@section('content')
   
<h1>Add Department</h1>
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Grid System Form</h4>
        <form action="#" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>First name : </label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Email" required="">
                </div>
                <div class="form-group col-md-4">
                    <label>Second name : </label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required="">
                </div>
                <div class="form-group col-md-4">
                    <label>Last Name :</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Password" required="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Employee Code : </label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Email" required="">
                </div>
            
                <div class="form-group col-md-4">
                    <label>Gender : </label><br>
                    <input type="radio" name="gender" />Male<br>
                    <input type="radio" name="gender" />Female
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Department</label>
                    <select class="custom-select d-block w-100" id="country" required="">
                        <option value="">HR</option>
                        <option>Account</option>
                    </select>
                </div>
               
                <div class="form-group col-md-4">
                    <label>Birth Date</label>
                    <input type="Date" class="form-control" id="inputPassword4" placeholder="Password" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="City name" required="">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputemail">mail</label>
                    <input type="email" class="form-control" placeholder="example@gmail.com" required="">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputnumber">Mobile</label>
                    <input type="number" class="form-control" placeholder="1234567890" required="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>UesrName : </label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Email" required="">
                </div>
                <div class="form-group col-md-4">
                    <label>Password : </label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required="">
                </div>
                
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection
