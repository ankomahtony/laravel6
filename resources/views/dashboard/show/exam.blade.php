@extends('dashboard.layout')


@section('content')


<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Profile</h4>
            </div> 
            <div class="card-body d-grid">

                <a class="text-sm font-weight-600">Name</a>
                <a class="text-xs long-texts">{{$exam->name}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Mark(s) per Question</a> 
                <a class="text-xs long-texts">{{$exam->mark_per_question}}</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Duration</a> 
                <a class="text-xs long-texts">{{$exam->duration}} Minutes</a> 
                <div class="dropdown-divider"></div> 
                <a class="text-sm font-weight-600">Due Date</a> 
                <a class="text-xs long-texts">{{$exam->due_date}}</a> 
                <div class="dropdown-divider"></div> 
            </div>
        </div> 
        <a href="/exams/{{$exam->id}}/edit" class="btn btn-info btn-block edit-sv">
        <i class="fas fa-edit"></i><b>Edit</b></a>
    </div> 
    <div class="col-md-9">
        <div class="row">
            @php $n_qtn = 1; @endphp
            @forelse($questions as $question)
             @php $short_qtn = substr($question->question,0,30) @endphp
            <div class="col-md-4">
                <div class="card card-stats">
                    <span>
                        <div class="dropdown card-action-button">
                            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-sm items-align-center py-2 mr-0 shadow-none--hover">
                                <i class="fa fa-ellipsis-v text-primary"></i>
                            </a> 
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a href="/options/create?qtn_id={{$question->id}}" class="dropdown-item">Add Options</a>
                            <a href="/questions/{{$question->id}}/edit" class="dropdown-item">Edit</a>
                            <div class="dropdown-divider"></div> 
                            <div class="dropdown-divider"></div> 
                            <button type="button" title="Delete" class="dropdown-item action-delete">Delete</button></div>
                        </div>
                    </span> 
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="/questions/{{$question->id}}/edit">
                                <h5>Question</h5>
                            </div> 
                            <div class="col-auto">
                                <a href="questions/2">
                                    <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                        <i class="fa fa-shoppin">{{$n_qtn}}</i>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        <p class="mt-3 mb-0 text-sm">
                            <a href="/questions/2" class="text-default">
                            <span class="pre">{!!$short_qtn!!}.</span></a>
                        </p>
                    </div>
                </div>
            </div>

            @php $n_qtn += 1; @endphp
            @empty
                No Question Yet 
            @endforelse
            <div class="card-body">
                <a href="/questions/create?exam_id={{$exam->id}}" class="btn btn-success btn-block edit-sv">
                <i class="fas fa-plus"></i><b>Add Question</b></a>
            </div>

        </div>
</div>

@endsection