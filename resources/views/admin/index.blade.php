
@extends('admin/admin_header')
@section('content')
    

<div class="outer-w3-agile col-xl">
                <div class="stat-grid p-3 d-flexalign-items-center justify-content-between bg-primary">
                    <div class="s-l">
                        <h5>Employees</h5>
                        <p class="paragraph-agileits-w3layouts text-white">Employee are there</p>
                    </div>
                    <div class="s-r">
                        <h6>{{$count}}
                            <i class="far fa-user"></i>
                        </h6>
                    </div>
                </div>
            </div>
@endsection
