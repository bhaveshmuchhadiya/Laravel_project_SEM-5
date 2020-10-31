
@extends('admin/admin_header')
@section('content')
<h1>Employee Details</h1>
    <!-- <nav class="navbar navbar-default mb-xl-5 mb-4"> -->

        
        <div class="outer-w3-agile mt-3">
            <!-- <h4 class="tittle-w3-agileits mb-4">Table Head Options</h4> -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Registration Date</th>
                        <th scope="col" colspan=2><center>Actoin</center></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($showarr as $show)
                    <tr>
                        <th scope="row">{{$show->id}}</th>
                        <td>{{$show->first_name}} {{$show->second_name}} {{$show->last_name}}</td>
                        <td>{{$show->department}}</td>
                        <td>{{$show->created_at}}</td>
                        <td><a href="edit_employee{{$show->id}}"><i class="fas fa-edit"></li>Edit</a></td>
                        <td><a href="#"><i class="fas fa-trash"></li>delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    <!-- </nav> -->
@endsection
