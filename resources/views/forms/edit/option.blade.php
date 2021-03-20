@extends('dashboard.layout')
@section('content')
<div class="card">
    <form method="POST" action="/options" accept-charset="UTF-8" role="form" novalidate="novalidate" enctype="multipart/form-data" class="form-loading-button needs-validation">
    @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6 ">
                    <label for="name" class="form-control-label">Exam</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <select name="exam_id" id="exam_id" class="form-control" >
                            <option value="{{$exam->id}}">{{$exam->name}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="name" class="form-control-label">Question</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <input type="checkbox" name="answer" id="answer" class="form-control">
                        </div> 
                        <select name="qtn_id" id="qtn_id" class="form-control" >
                            <option value="{{$question->id}}">{{$question->question}}</option>
                        </select>
                    </div>
                </div>
                @php 
                $checkbox_item = ['A','B','C','D','E']; 
                $n = 0;
                @endphp

                @foreach($options as $option)
                    <div class="form-group col-md-6">
                        
                        <label for="name" class="form-control-label">Option {{$checkbox_item[$n]}}</label> 
                        <div class="input-group input-group-merge ">
                                <input type="checkbox" name="{{$checkbox_item[$n]}}" id="answer" class="input-group-text">
                            <input data-name="name" value="{{$option->option}}" name="option[]" type="text" id="option" class="form-control">
                        </div>
                    </div>  
                @php $n += 1; @endphp
                @endforeach

                <input type="checkbox" name="update" id="update" checked hidden>
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


<script type="text/javascript">
    $(document).ready(function(){


    $('[type="checkbox"]').change(function(){
    
        if(this.checked){
        $('[type="checkbox"]').not(this).prop('checked', false);
        }    
    });

    });
</script>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>

$(document).ready(function(){
    fetch_members_data();
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