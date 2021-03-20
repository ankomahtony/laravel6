@extends('dashboard.layout')
@section('header_right')
<div class="col-xs-12 col-sm-8 col-md-7">
    <div class="text-right">
        <span><a href="/students/create" class="btn btn-success btn-sm header-button-top"><span class="fa fa-plus"></span> &nbsp;Add New</a></span>
        <span><a href="http://akaunting.test/common/import/sales/customers" class="btn btn-white btn-sm header-button-top"><span class="fa fa-upload"></span> &nbsp;Import</a></span>
        <span><a href="http://akaunting.test/sales/customers/export?sort=name&amp;direction=asc" class="btn btn-white btn-sm header-button-top"><span class="fa fa-download"></span> &nbsp;Export</a></span>
    </div>
</div>
@endsection

@section('content')


<div class="card">
    <div class="card-header border-bottom-0">
            <div class="align-items-center"><div class="el-select pl-20 mr-40">
                <div class="el-input el-input--suffix is-focus">
                    <input type="text" placeholder="Type to search.." class="el-input__inner" id="search_table" name="search_table">
                    <span class="el-input__suffix">
                        <span class="el-input__suffix-inner"><i class="el-select__caret el-input__icon el-icon-"></i></span></span>
                    </div>
                </div>
            </div>
    </div> 
    <div class="table-responsive">
        <table class="table table-flush table-hover">
            <thead class="thead-light">
                <tr class="row table-head-line">
                    <th class="col-xs-1 col-sm-1 col-md-1  col-lg-1 d-sm-block d-none">
                       # 
                    </th> 
                    <th class="col-xs-6 col-sm-3 col-md-3  col-lg-3">
                        <a href="http://akaunting.test/sales/customers?filter=active%2C+visible&amp;search=in&amp;sort=name&amp;direction=desc" rel="nofollow" class="col-aka">Full Name</a>&nbsp; <i class="fas fa-sort-alpha-down"></i>
                    </th> 
                    <th class="col-xs-1 col-sm-1 col-md-1   col-lg-1 text-left">
                        <a href="http://akaunting.test/sales/customers?search=in&amp;sort=phone&amp;direction=asc">Age</a>&nbsp; <i class="fas fa-arrow-down sort-icon"></i>
                    </th> 
                    <th class="col-xs-4 col-sm-2 col-md-2   col-lg-2 text-left">
                        <a href="http://akaunting.test/sales/customers?search=in&amp;sort=phone&amp;direction=asc">Phone</a>&nbsp; <i class="fas fa-arrow-down sort-icon"></i>
                    </th> 
                    <th class="col-xs-3 col-sm-2 col-md-2  col-lg-2 d-none d-sm-block text-left">
                        <a href="http://akaunting.test/sales/customers?search=in&amp;sort=unpaid&amp;direction=asc">Guardian</a>&nbsp; <i class="fas fa-arrow-down sort-icon"></i>
                    </th> 
                    <th class="col-xs-3 col-sm-1 col-md-1  col-lg-1 d-none d-sm-block text-left">
                        <a href="http://akaunting.test/sales/customers?search=in&amp;sort=unpaid&amp;direction=asc">Class</a>&nbsp; <i class="fas fa-arrow-down sort-icon"></i>
                    </th> 
                    <th class="col-xs-2 col-sm-1 col-md-1  col-lg-1 text-center">Actions
                    </th>
                </tr>
            </thead> 
            <tbody> 
                @php
                    $n_row = 1
                @endphp
                @foreach($students as $row)
                    @php

                    $row_dob = $row->dob;
                    $row_year = substr($row_dob, 0, 4);
                    $row_age  = 2020 - $row_year;
                    
                    @endphp
                    <tr class="row align-items-center border-top-1">
                        <th class="col-xs-1 col-md-1  col-lg-1 d-none d-sm-block">
                            {{$n_row}}
                        </th> 
                        <td class="col-xs-5 col-sm-3 col-md-3 col-lg-3">
                            <a href="/students/'.$row->id.'" class="col-aka">{{$row->last_name}} {{$row->other_name}}</a>
                        </td>
                        <td class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-left">
                        {{$row_age}}
                        </td>
                         <td class="col-xs-4 col-sm-2 col-md-2 col-lg-2 text-left">
                             {{$row->phone}} &nbsp;
                            </td>
                         <td class="col-sm-2 col-md-2 col-lg-2 d-none d-sm-block text-left">{{$row->guardian}} &nbsp;</td> 
                         <td class="col-sm-1 col-md-1 col-lg-1 d-none d-sm-block text-left">{{$row->class}} &nbsp;</td> 
                         
                        <td class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center">
                            <div class="dropdown"><a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-neutral btn-sm text-light items-align-center py-2">
                                <i class="fa fa-ellipsis-h text-muted"></i></a> 
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a href="/students/{{$row->id}}" class="dropdown-item">Show</a> 
                                    <a href="/students/{{$row->id}}/edit" class="dropdown-item">Edit</a> 
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-divider"></div> 
                                    <button type="button" title="Delete" class="dropdown-item action-delete">Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr> 

                @php
                    $n_row = 1
                @endphp
                @endforeach          
            </tbody>
                    
        </table>
        
    </div>
    <div class="card-footer table-action">
        <div class="row">
            
            <div class="col-xs-12 col-sm-7 pagination-xs">
                <nav class="float-right" id="paginations">
                    {{$students->links()}}
                </nav>
            </div>
        </div>
    </div>
 </div>


 <script>

    $(document).ready(function(){
        fetch_members_data();
        function fetch_members_data(query='')
        {
            $.ajax({
                url:"{{route('student_action')}}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success: function(data)
                {
                    $('tbody').html(data.table_data);
                }
            })
        }
        $(document).on('keyup','#search_table',function(){
            var query = $(this).val();
            fetch_members_data(query);
        });
        $(document).on('click','#refresh_btn',function(){
            fetch_members_data();
        });
    });
</script>
@endsection