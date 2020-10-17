
@extends('admin/admin_header')
@section('content')
<h1>Leaves Type</h1>
    <!-- <nav class="navbar navbar-default mb-xl-5 mb-4"> -->

        
        <div class="outer-w3-agile mt-3">
            <!-- <h4 class="tittle-w3-agileits mb-4">Table Head Options</h4> -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Leave Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Creted Date</th>
                        <th scope="col" colspan=2><center>Actoin</center></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Casual</td>
                        <td>Casual leaves </td>
                        <td>13/10/2020</td>
                        <td><a href="#"><i class="fas fa-edit"></li>Edit</a></td>
                        <td><a href="#"><i class="fas fa-trash"></li>delete</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Medical </td>
                        <td>Medical Leave</td>
                        <td>13/10/2020</td>
                        <td><a href="#"><i class="fas fa-edit"></li>Edit</a></td>
                        <td><a href="#"><i class="fas fa-trash"></li>delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <!-- </nav> -->
@endsection
