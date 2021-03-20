@extends('dashboard.layout')
@section('content')
<div class="card">
    <form method="POST" action="/exams" accept-charset="UTF-8" role="form" novalidate="novalidate" enctype="multipart/form-data" class="form-loading-button needs-validation">
    @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Name</label> 
                    <div class="input-group input-group-merge ">
                        <input data-name="name" placeholder="Enter Exam Name" required="required" name="name" type="text" id="name" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required" group_class="" required="required">
                    <label class="form-control-label"> Due Time </label> 
                    <div class="input-group input-group-merge has-label">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div> 
                        <input type="datetime-local" data-input="true" class="form-control datepicker flatpickr-input" name="due_date"> 
                    </div>
                </div> 
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Current Class</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <select name="exam_class" id="exam_class" class="form-control">
                            @foreach($classes as $class)
                            <option value="{{$class->id}}">{{$class->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="form-control-label">Duration</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-tick"></i></span>
                        </div> 
                        <input type="number" name="duration" step="5" class="form-control" value="5">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="form-control-label">Mark Per Questions</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-tick"></i></span>
                        </div> 
                        <input type="number" name="mark_per_question" step="1" class="form-control" value="1">
                    </div>
                </div>
                <input type="text" name="status" class='form-control' value="Pending">
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