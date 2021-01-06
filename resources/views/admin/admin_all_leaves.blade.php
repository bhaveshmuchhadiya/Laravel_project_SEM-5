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
                    <th scope="col">Day of Leave</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan=2><center>Actoin</center></th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $show)
                <tr>
                    <th scope="row">{{$show->id}}</th>
                    <td>{{$show->first_name}} {{$show->second_name}}  {{$show->last_name}} </td>
                    <td>{{$show->leave_type}}</td>
                    <td>{{$show->created_at}}</td>
                    <td>{{$show->from_date}} - {{$show->to_date}}</td>

                    <td>
                    @if($show->status == 'pendding')
                        <span class="badge badge-warning">
                             pendding
                        </span>
                    @endif
                    @if($show->status == 'approved' )
                        <span class="badge badge-success">
                            Approved
                        </span>
                    @endif
                    @if($show->status == 'disapprove' )
                        <span class="badge badge-danger">
                            Not Approved
                        </span>
                    @endif</td>
                    <!-- <td><a href="#"><i class="fas fa-edit"></li>Edit</a></td> -->
                    <td>
                    <div class="d-flex justify-content-around mb-5">
                        @if ($show->status  == 'pendding')
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><a href="view_leaves{{$show->l_id}}">Action</a></button>
                        @else
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><a href="view_leaves{{$show->l_id}}">details</a></button>
                        @endif
                    </div></td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection
