@extends('master')
@section('content')
<div class="main-heading-container">
    <div class="common-title">Car Selling</div>
</div>

<div class="row mb-4">
    <div class="col-lg-12">
        <div class="card-common">
            <div class="card-topbar">
                <div class="card-topbar-title">Car Detail</div>
            </div>
            <div class="card-common-body">
                <div class="row">
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Vendor:</div>
                        <div class="label-txt">Lorem Ipsum</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Registration No.:</div>
                        <div class="label-txt">215464954</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Model:</div>
                        <div class="label-txt">2022</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Chases No.:</div>
                        <div class="label-txt">12555465487</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Engine:</div>
                        <div class="label-txt">Lorem Ipsum</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Quota:</div>
                        <div class="label-txt">Lorem Ipsum</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Mark:</div>
                        <div class="label-txt">Lorem Ipsum</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Color:</div>
                        <div class="label-txt">Black</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Horsepower:</div>
                        <div class="label-txt">1000</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Number Plate:</div>
                        <div class="label-txt">Genuine</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">File:</div>
                        <div class="label-txt">Genuine</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Copy:</div>
                        <div class="label-txt">Genuine</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Documents:</div>
                        <div class="label-txt">05</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Token:</div>
                        <div class="label-txt">Yes</div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr class="form-hr mt-0">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-common-heading">Seller Detail</div>
                    </div>
                </div>
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
                        <input type="text" class="form-control" placeholder="ID Card">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Current Address</label>
                        <input type="text" class="form-control" placeholder="Current Address">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Permanent Address</label>
                        <input type="text" class="form-control" placeholder="Permanent Address">
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="upload-img-wrapper">
                            <div class="upload-img-container">
                                <label>Thumb</label>
                                <br>
                                <img src="{{asset('assets/images/upload-img.png')}}">
                            </div>
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
                        <div class="form-common-heading">Buyer Detail</div>
                    </div>
                </div>
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
                        <input type="text" class="form-control" placeholder="ID Card">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Current Address</label>
                        <input type="text" class="form-control" placeholder="Current Address">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Permanent Address</label>
                        <input type="text" class="form-control" placeholder="Permanent Address">
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="upload-img-wrapper">
                            
                            <div class="upload-img-container">
                                <label>Thumb</label>
                                <br>
                                <img src="{{asset('assets/images/upload-img.png')}}">
                            </div>
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
                        <div class="form-common-heading">Current Ownership Detail</div>
                    </div>
                </div>
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
                        <input type="text" class="form-control" placeholder="ID Card">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Current Address</label>
                        <input type="text" class="form-control" placeholder="Current Address">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Permanent Address</label>
                        <input type="text" class="form-control" placeholder="Permanent Address">
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="upload-img-wrapper">
                            
                            <div class="upload-img-container">
                                <label>Thumb</label>
                                <br>
                                <img src="{{asset('assets/images/upload-img.png')}}">
                            </div>
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
                        <div class="form-common-heading">Car Agreement Detail</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Price of Car</label>
                        <input type="text" class="form-control" placeholder="Car Price  that is Done">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Amount in Words</label>
                        <input type="text" class="form-control" placeholder="Amount in Words">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Total Amount</label>
                        <input type="text" class="form-control" placeholder="Total Amount">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Amount Received</label>
                        <input type="text" class="form-control" placeholder="Amount Received">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Arrear Amount</label>
                        <input type="text" class="form-control" placeholder="Arrear Amount">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Remaining Amount Date</label>
                        <input type="text" class="form-control" placeholder="Remaining Amount Date">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Cash Amount</label>
                        <input type="text" class="form-control" placeholder="Cash Amount">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Amount Cheque</label>
                        <input type="text" class="form-control" placeholder="Amount Cheque">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Date Cheque</label>
                        <input type="text" class="form-control" placeholder="Date Cheque">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Cheque Number</label>
                        <input type="text" class="form-control" placeholder="Cheque Number">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Branch</label>
                        <input type="text" class="form-control" placeholder="Branch">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr class="form-hr">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-common-heading">1. Witness Detail</div>
                    </div>
                </div>
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
                        <input type="text" class="form-control" placeholder="ID Card">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Current Address</label>
                        <input type="text" class="form-control" placeholder="Current Address">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Permanent Address</label>
                        <input type="text" class="form-control" placeholder="Permanent Address">
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="upload-img-wrapper">
                            
                            <div class="upload-img-container">
                                <label>Thumb</label>
                                <br>
                                <img src="{{asset('assets/images/upload-img.png')}}">
                            </div>
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
                        <div class="form-common-heading">2. Witness Detail</div>
                    </div>
                </div>
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
                        <input type="text" class="form-control" placeholder="ID Card">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Current Address</label>
                        <input type="text" class="form-control" placeholder="Current Address">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Permanent Address</label>
                        <input type="text" class="form-control" placeholder="Permanent Address">
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="upload-img-wrapper">
                            
                            <div class="upload-img-container">
                                <label>Thumb</label>
                                <br>
                                <img src="{{asset('assets/images/upload-img.png')}}">
                            </div>
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
                        <div class="form-common-heading">Agreement</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <div class="upload-img-wrapper">
                            
                            <div class="upload-img-container">
                                <label>Thumb</label>
                                <br>
                                <img src="{{asset('assets/images/upload-img.png')}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <hr class="form-hr form-hr-last">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex form-btns">
                        <button href="products.html" class="btn btn-primary w-170">Submit</button>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    
</div>
@endsection