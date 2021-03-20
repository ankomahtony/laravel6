@extends('dashboard.layout')
@section('content')
<div class="card">
    <form method="POST" action="/students" accept-charset="UTF-8" role="form" novalidate="novalidate" enctype="multipart/form-data" class="form-loading-button needs-validation">
    @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Index Number</label> 
                    <div class="input-group input-group-merge ">
                        <input data-name="index_number" placeholder="Enter index_number" required="required" name="index_number" type="text" id="index_number" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Surname</label> 
                    <div class="input-group input-group-merge ">
                        <input data-name="name" placeholder="Enter Last Name" required="required" name="last_name" type="text" id="last_name" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Other Name</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <input data-name="other_name" placeholder="Enter Other Name" required="required" name="other_name" type="text" id="other_name" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="email" class="form-control-label">Email</label>
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div> 
                    <input data-name="email" placeholder="Enter Email" autocomplete="off" name="email" type="text" id="email" class="form-control"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone" class="form-control-label">Phone</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div> <input data-name="phone" placeholder="Enter Phone" name="phone" type="text" id="phone" class="form-control">
                    </div> 
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Gender</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <select name="gender" id="gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Father</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Father's Name" required="required" name="father" type="text" id="mother" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Mother</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Mother's Name" required="required" name="mother" type="text" id="mother" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Guardian</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-users"></i></span>
                        </div> 
                        <input data-name="guardian" placeholder="Enter Guardian Name" required="required" name="guardian" type="text" id="guardian" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required" group_class="" required="required">
                    <label class="form-control-label"> Date of Birth </label> 
                    <div class="input-group input-group-merge has-label">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div> 
                        <input type="date" data-input="true" class="form-control datepicker flatpickr-input" name="dob"> 
                    </div>
                </div> 
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Current Class</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <select name="class" id="class" class="form-control">
                            @foreach($classes as $class)
                            <option value="{{$class->id}}">{{$class->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Digital Address</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                        </div> 
                        <input data-name="gps_address" placeholder="Enter Digital Address" required="required" name="gps_address" type="text" id="gps_address" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Postal Address</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                        </div> 
                        <textarea data-name="postal_address" placeholder="Enter Postal Address" required="required" name="postal_address" id="postal_address" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Current Town</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                        </div> 
                        <input data-name="town" placeholder="Enter Home Town" required="required" name="town" type="text" id="town" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="form-control-label">Religion</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-church"></i></span>
                        </div> 
                        <select name="religion" id="religion" class="form-control">
                            <option value="Christian">Christian</option>
                            <option value="Islamic">Islamic</option>
                            <option value="Tradition">Tradition</option>
                            <option value="None">None</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="form-control-label">Region</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-church"></i></span>
                        </div> 
                        <select name="region" id="region" class="form-control">
                            @foreach($regions as $region)
                            <option value="{{$region->id}}">{{$region->region}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="form-control-label">District</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-church"></i></span>
                        </div> 
                        <select name="district" id="district" class="form-control">
                            @foreach($districts as $district)
                            <option value="{{$district->id}}">{{$district->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="picture" class="form-control-label">Picture</label> 
                    <div class="custom-file">
                        <input name="picture" type="file" id="picture" class="custom-file-input cursor-pointer"> 
                        <label for="picture" class="custom-file-label">Picture</label>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row save-buttons">
                    <div class="col-md-12">
                        <a href="/members" class="btn btn-icon btn-outline-secondary header-button-top">
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