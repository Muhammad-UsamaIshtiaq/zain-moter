@extends('master')
@section('content')
<div class="main-heading-container">
    <div class="common-title">Add Vedor</div>
</div>

<div class="row mb-4">
    <div class="col-lg-12">
        <div class="card-common">
            <div class="card-topbar">
                <div class="card-topbar-title">Vendor</div>
            </div>
            <div class="card-common-body">
                <div class="row">
                    
                    <div class="col-md-6 form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Phone No.</label>
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>ID Card</label>
                        <input type="text" class="form-control" placeholder="ID Card No.">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                </div>    
                <div class="row">
                    <div class="col-12">
                        <hr class="form-hr form-hr-last">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex form-btns">
                        <button class="btn btn-primary w-170">Submit</button>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    
</div>
@endsection