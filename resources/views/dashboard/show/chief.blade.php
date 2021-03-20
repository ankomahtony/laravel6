@extends('dashboard.layout')


@section('content')


<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Profile</h4>
            </div> 
            <div class="card-body d-grid">
                <a class="text-sm font-weight-600">Email</a>
                <a class="text-xs long-texts">{{$chief->email}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Phone</a> 
                <a class="text-xs long-texts">{{$chief->phone}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Clan</a> 
                <a class="text-xs long-texts">{{$chief->clan}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Date of Birth</a> 
                <a class="text-xs long-texts">{{$chief->dob}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Mother</a> 
                <a class="text-xs long-texts">{{$chief->mother}}</a>
            </div>
        </div> 
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Address</h4>
            </div> <div class="card-body">
                <a class="text-xs m-0">
                {{$chief->current_address}}<br>
                {{$chief->current_town}}<br>
                {{$chief->current_country}}
                </a>
            </div>
        </div> 
        <a href="/chiefs/{{$chief->id}}/edit" class="btn btn-info btn-block edit-sv">
        <i class="fas fa-edit"></i><b>Edit</b></a>
    </div> 
    <div class="col-xl-9">
        <img src="/images/chief/{{$chief->picture}}" alt="">
</div>

@endsection