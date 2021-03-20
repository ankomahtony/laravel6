@extends('dashboard.layout')


@section('content')


<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Details</h4>
            </div> 
            <div class="card-body d-grid">
                <a class="text-sm font-weight-600">Name</a>
                <a class="text-xs long-texts">{{$project->name}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Target</a> 
                <a class="text-xs long-texts">{{$project->amount}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Received</a> 
                <a class="text-xs long-texts">{{$project->received}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Used</a> 
                <a class="text-xs long-texts">{{$project->used}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Balance</a> 
                <a class="text-xs long-texts">{{$project->balance}}</a>
            </div>
        </div> 
        <a href="/projects/{{$project->id}}/edit" class="btn btn-info btn-block edit-sv">
        <i class="fas fa-edit"></i><b>Edit</b></a>
    </div> 
    <div class="col-xl-9">
        <img src="/images/project/{{$project->picture}}" alt="">
</div>

@endsection