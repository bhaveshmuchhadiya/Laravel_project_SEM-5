@extends('admin/admin_header')
@section('content')
        <!-- <p><h2>details of employee:</h2></p> -->
        <div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">employee Detail</h4>
                <table class="table table-bordered">
                    
                    <tbody>
                        @foreach($data as $i)
                        
                        <td colspan="3"><p><b>Description of leave:</b>&nbsp;&nbsp;{{$i->description}}</p></td>
                        <tr>
                            <td ><p><b>Employee Name :</b>{{$i->first_name}} {{$i->second_name}} {{$i->last_name}} </p></td>
                            <td><p><b>gender :</b>{{$i->gender}}</td>
                            <td><p><b>Status :</b> <h6><span class="badge badge-warning">&nbsp;&nbsp;{{$i->status}}</span></h6></td>

                            </tr>
                        <tr>
                            <td><p><b>Department :</b>{{$i->department}}</td>
                            <td><p><b>Address :</b>{{$i->address}}</td>
                                <td><p><b>City :</b>{{$i->city}}</td>
                            </tr>
                            <tr>
                            <td ><p><b>E-mail ID :</b>{{$i->email}}  </p></td>
                            <td><p><b>Mobile :</b>{{$i->mobile}}</td>
                            
                            <td rowspan="2">                                
                                <div class="d-flex justify-content-around mb-5">
                                        @if($i->status == 'disapprove' or $i->status == 'approved')
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><a href="view_leaves{{$i->l_id}}">details</a></button>
                                        @else
                                        <form action="action_apply/{{$i->l_id}}" method="post">
                                            @csrf
                                            <input type="hidden" name="status" value="approved" />
                                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Approve</button>
                                        </form>
                                        <form action="action_apply/{{$i->l_id}}" method="post">
                                            @csrf
                                            <input type="hidden" name="status" value="disapprove">
                                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Dis approve</button>
                                        </form>
                                        @endif
                                    </div>
                             </td>
                        </tr>
                      
                       @endforeach
                    </tbody>
                </table>
            </div>
@endsection