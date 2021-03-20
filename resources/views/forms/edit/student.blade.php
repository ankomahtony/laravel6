@extends('dashboard.layout')
@section('content')
<div class="card">
    <form method="POST" action="/members" accept-charset="UTF-8" role="form" novalidate="novalidate" enctype="multipart/form-data" class="form-loading-button needs-validation">
    @csrf
    @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-2 required">
                    <label for="name" class="form-control-label">Title</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <select name="title" id="title" class="form-control">
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Pr.">Miss.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Pr.">Pr.</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4 required">
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
                    <label for="name" class="form-control-label">Clan</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-users"></i></span>
                        </div> 
                        <input data-name="clan" placeholder="Enter Clan Name" required="required" name="clan" type="text" id="clan" class="form-control">
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
                    <label for="name" class="form-control-label">Level of Education</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-book"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Level of Education" required="required" name="level_of_education" type="text" id="level_of_education" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">House Address</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter House Address" required="required" name="house_address" type="text" id="house_address" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Current Country of Residence</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Current Country" required="required" name="current_country" type="text" id="current_country" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Current Town</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Current Town" required="required" name="current_town" type="text" id="current_town" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Current Address</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Current Address" required="required" name="current_address" type="text" id="current_address" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Community</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-map"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Community" required="required" name="community" type="text" id="community" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="name" class="form-control-label">Marital Status</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <select name="marital_status" id="marital_status" class="form-control">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widow/Widower">Widow/Widower</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="name" class="form-control-label">Spouse</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Wife's Name" name="wife" type="text" id="wife" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="form-control-label">Number of Children</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-users"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Number of Children" name="no_of_children" type="text" id="no_of_children" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="name" class="form-control-label">Church</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-church"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Church's Name" name="church" type="text" id="church" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="name" class="form-control-label">Occupation</label> 
                    <div class="input-group input-group-merge ">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                        </div> 
                        <input data-name="name" placeholder="Enter Occupation" name="occupation" type="text" id="occupation" class="form-control">
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