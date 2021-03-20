@extends('dashboard.layout')
@section('content')
<div class="card">
    <form method="POST" action="/questions" accept-charset="UTF-8" role="form" novalidate="novalidate" enctype="multipart/form-data" class="form-loading-button needs-validation">
    @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Question</label> 
                    <div class="input-group input-group-merge ">
                        
                    <textarea name="question" class='form-control' id="question" cols="30" rows="10" placeholder="Enter the question here..."></textarea>
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Exam</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <select name="exam_id" id="exam_id" class="form-control">
                            @foreach($exams as $option)
                            <option value="{{$option->id}}">{{$option->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row save-buttons">
                    <div class="col-md-12">
                        <a href="/exams" class="btn btn-icon btn-outline-secondary header-button-top">
                            <span class="btn-inner--icon"><i class="fas fa-times"></i></span> 
                            <span class="btn-inner--text">Cancel</span>
                        </a> 
                        <button type="submit" class="btn btn-icon btn-success button-submit header-button-top">
                            <span class="btn-inner--icon"><i class="fas fa-save"></i></span>
                            <span class="btn-inner--text">Save</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


@endsection