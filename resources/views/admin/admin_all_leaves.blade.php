
@extends('admin/admin_header')
@section('content')
<h1>all leaves</h1>
    <div class="outer-w3-agile mt-3">
        <!-- <h4 class="tittle-w3-agileits mb-4">Table Head Options</h4> -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Leave type</th>
                    <th scope="col">Posting Date</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan=2><center>Actoin</center></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Bhavin</td>
                    <td>medical</td>
                    <td>13/10/2020</td>
                    <td>Approves</td>
                    <td><a href="#"><i class="fas fa-edit"></li>Edit</a></td>
                    <td><a href="#"><i class="fas fa-trash"></li>delete</a></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Harshil</td>
                    <td>casual</td>
                    <td>14/10/2020</td>
                    <td>Pendding</td>
                    <td><a href="#"><i class="fas fa-edit"></li>Edit</a></td>
                    <td><a href="#"><i class="fas fa-trash"></li>delete</a></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>nayan</td>
                    <td>casual</td>
                    <td>14/10/2020</td>
                    <td>Not Approved</td>
                    <td><a href="#"><i class="fas fa-edit"></li>Edit</a></td>
                    <td><a href="#"><i class="fas fa-trash"></li>delete</a></td>
                </tr>
                
            </tbody>
        </table>
    </div>
@endsection
