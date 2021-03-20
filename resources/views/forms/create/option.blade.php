@extends('dashboard.layout')
@section('content')
<div class="card">
    <form method="POST" action="/options" accept-charset="UTF-8" role="form" novalidate="novalidate" enctype="multipart/form-data" class="form-loading-button needs-validation">
    @csrf
        <div class="card-body">
                <p class='btn-danger'><i class="fas fa-exclamation-triangle"></i> Tick one checkbox beside an option as answer </p>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Exam</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <select name="exam_id" id="exam_id" class="form-control">
                            @foreach($exams as $exam)
                            <option value="{{$exam->id}}">{{$exam->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Question</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <input type="checkbox" name="answer" id="answer" class="form-control">
                        </div> 
                        <select name="qtn_id" id="qtn_id" class="form-control">
                            @foreach($questions as $exam)
                            <option value="{{$exam->id}}">{{$exam->question}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    
                    <label for="name" class="form-control-label">Option A</label> 
                    <div class="input-group input-group-merge ">
                            <input type="checkbox" name="A" id="answer" class="input-group-text">
                        <input data-name="name" placeholder="Enter Exam Name" required="required" name="option[]" type="text" id="option" class="form-control">
                    </div>
                </div> 
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Option B</label> 
                    <div class="input-group input-group-merge ">
                            <input type="checkbox" name="B" id="answer" class="input-group-text">
                        <input data-name="name" placeholder="Enter Exam Name" required="required" name="option[]" type="text" id="option" class="form-control">
                    </div>
                </div> 
                <div class="form-group col-md-6 ">
                    <label for="name" class="form-control-label">Option C</label> 
                    <div class="input-group input-group-merge ">
                            <input type="checkbox" name="C" id="answer" class="input-group-text">
                        <input data-name="name" placeholder="Enter Exam Name" required="required" name="option[]" type="text" id="option" class="form-control">
                    </div>
                </div> 
                <div class="form-group col-md-6 ">
                    <label for="name" class="form-control-label">Option D</label> 
                    <div class="input-group input-group-merge ">
                            <input type="checkbox" name="D" id="answer" class="input-group-text">
                        <input data-name="name" placeholder="Enter Exam Name" required="required" name="option[]" type="text" id="option" class="form-control">
                    </div>
                </div> 
                <div class="form-group col-md-6 ">
                    <label for="name" class="form-control-label">Option E</label> 
                    <div class="input-group input-group-merge ">
                            <input type="checkbox" name="E" id="answer" class="input-group-text">
                        <input data-name="name" placeholder="Enter Exam Name" required="required" name="option[]" type="text" id="option" class="form-control">
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

<script src="/js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){


    $('[type="checkbox"]').change(function(){
    
        if(this.checked){
        $('[type="checkbox"]').not(this).prop('checked', false);
        }    
    });

    });
</script>
<script>

$(document).ready(function(){
    var query = $('#exam_id').val();
    fetch_members_data(query);
    function fetch_members_data(query='')
    {
        $.ajax({
            url:"{{route('opt_action')}}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success: function(data)
            {
                $('#qtn_id').html(data.table_data);
            }
        })
    }
    $('#exam_id').change(function(){
        var query = $(this).val();
        fetch_members_data(query);
    })
});
</script>

@endsection