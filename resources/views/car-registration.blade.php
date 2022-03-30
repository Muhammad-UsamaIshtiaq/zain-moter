@extends('master')
@section('content')
    <div class="main-heading-container">
        <div class="common-title">Car Registration</div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card-common">
                <div class="card-topbar">
                    <div class="card-topbar-title">Register a Car</div>
                </div>
                <div class="card-common-body">
                    <div class="row">
                        <div class="col-md-6 form-group date">
                            <label>Date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control datepicker" placeholder="Date">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                    <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 form-group date">
                            <label>Advance Date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control datepicker" placeholder="Advance Date">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                    <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Serial No.</label>
                            <input type="text" class="form-control" placeholder="Serial No.">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Registration No.</label>
                            <input type="text" class="form-control" placeholder="Registration No.">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Model</label>
                            <input type="text" class="form-control" placeholder="Model">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Chases No.</label>
                            <input type="text" class="form-control" placeholder="Chases No.">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Engine</label>
                            <input type="text" class="form-control" placeholder="Engine">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Quota</label>
                            <input type="text" class="form-control" placeholder="Quota">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mark</label>
                            <input type="text" class="form-control" placeholder="Mark">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Color</label>
                            <input type="text" class="form-control" placeholder="Color">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Horse Power</label>
                            <input type="text" class="form-control" placeholder="Horse Power">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Number Plate</label>
                            <select class="form-control">
                                <option value="Genuine">Genuine</option>
                                <option value="Non-Genuine">Non-Genuine</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>File</label>
                            <select class="form-control">
                                <option value="Genuine">Genuine</option>
                                <option value="Copy">Copy</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Copy</label>
                            <select class="form-control">
                                <option value="Genuine">Genuine</option>
                                <option value="Non-Genuine">Non-Genuine</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Total Documents</label>
                            <input type="text" class="form-control" placeholder="Number of documents">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Token</label>
                            <select class="form-control">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Upload Documents</label>
                            <br>
                            <div class="upload-file-wrapper">
                                <div class="file-img"><img src="{{asset('assets/images/pdf.png')}}"> </div>
                                <input type="file" class="input-file"  accept="application/pdf">
                                <label for="file" class="btn btn-tertiary js-labelFile">
                                    <!-- <i class="icon fa fa-check"></i> -->
                                    <span class="js-fileName">Choose a file</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <hr class="form-hr">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-common-heading">Car on Partenership</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6 check-radio-row">
                            <label class="container-radio">Yes
                                <input type="radio" class="radp-yes" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-radio">No
                                <input type="radio" name="radio" checked="checked" class="radp-no">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row parteners-row">
                        <div class="col-12">
                            <!-- <div class="form-common-sub-heading">Parteners</div> -->
                            <label>Parteners</label>
                        </div>
                    </div>
                    <div class="row parteners-row">
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control part-input" placeholder="Partener 1">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control part-input" placeholder="Percentage">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control part-input" placeholder="Partener 2">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control part-input" placeholder="Percentage">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control part-input" placeholder="Partener 3">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control part-input" placeholder="Percentage">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="form-hr">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-common-heading">Local Vendor</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6 check-radio-row">
                            <label class="container-radio">Yes
                                <input type="radio" checked="checked" class="local-v-yes" name="local-vendor">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-radio">No
                                <input type="radio" name="local-vendor" class="local-v-no">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row local-v-row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control local-v-input" placeholder="First Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control local-v-input" placeholder="Last Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Phone No.</label>
                            <input type="text" class="form-control local-v-input" placeholder="Last Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ID Card</label>
                            <input type="text" class="form-control local-v-input" placeholder="ID Card Number">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Current Address</label>
                            <input type="text" class="form-control" placeholder="Current Address">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Permanent Address</label>
                            <input type="text" class="form-control" placeholder="Permanent Address">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="form-hr form-hr-last">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex form-btns">
                            <button class="btn btn-primary w-170">Register</button>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
        
    </div>
@endsection