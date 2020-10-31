
@extends('admin/admin_header')
@section('content')
   
<h1>update Department</h1>

    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Grid System Form</h4>
        <form action="update_employee/{{$show->id}}" method="post"><div class="form-row">
                @csrf
                <div class="form-group col-md-4">
                    <label>First name : </label>
                    <input type="text" class="form-control" name="first_name" value="{{$show->first_name}}" required="">
                </div>
                <div class="form-group col-md-4">
                    <label>Second name : </label>
                    <input type="text" class="form-control" name="second_name" value="{{$show->second_name}}" required="">
                </div>
                <div class="form-group col-md-4">
                    <label>Last Name :</label>
                    <input type="text" class="form-control" name="last_name" value="{{$show->last_name}}" required="">
                </div>
            </div>
        
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label>Gender : </label><br>
                    <input type="radio" name="gender" value="male" require=""/>MALE  
                    <input type="radio" name="gender" value="female" require=""/>FEMALE
                </div>
                <div class="form-group col-md-4">
                    <label>Department</label>
                    <select class="custom-select d-block w-100" name="department" required="">
                    @foreach($data as $i)
                        <option value="{{$i->department_name}}" >{{$i->department_name}}</option>  
                    @endforeach
                    </select>
                </div>
               
                <div class="form-group col-md-4">
                    <label>Birth Date</label>
                    <input type="Date" class="form-control" name="b_date" value="{{$show->birthdate}}" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address</label>
                <input type="text" class="form-control" name="address" value="{{$show->address}}"required="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="city" value="{{$show->city}}" required="">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputemail">E-mail</label>
                    <input type="email" class="form-control" name="email" value="{{$show->email}}" required="">
                </div>
                <div class="form-group col-md-5">
                    <label for="inputnumber">Mobile</label>
                    <input type="number" class="form-control" name="mnumber" value="{{$show->mobile}}" required="">
                </div>
            
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
@endsection
