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
                <form method="POST" id="registration_form" action="{{url('register_car')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-common-body">
                    <div class="row">
                        <div class="col-md-6 form-group date">
                            <label>Purchase Date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" name="purchase_date" value="{{old('purchase_date')}}" class="form-control datepicker" placeholder="Date">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                    <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                            <p class="text-danger"> {{$errors->first('purchase_date')}}</p>
                        </div>
                        <div class="col-md-6 form-group date">
                            <label>Advance Date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" name="advance_date" value="{{old('advance_date')}}" class="form-control datepicker" placeholder="Advance Date">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                    <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                            <p class="text-danger"> {{$errors->first('advance_date')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Serial No.</label>
                            <input type="text" name="serial_no" value="{{old('serial_no')}}" class="form-control" placeholder="Serial No.">
                            <p class="text-danger"> {{$errors->first('serial_no')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Registration No.</label>
                            <input type="text" name="registration_no" value="{{old('registration_no')}}" class="form-control" placeholder="Registration No.">
                            <p class="text-danger"> {{$errors->first('registration_no')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Model</label>
                            <input type="text" value="{{old('model')}}" name="model" class="form-control" placeholder="Model">
                            <p class="text-danger"> {{$errors->first('model')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Model Year</label>
                            <input type="text" value="{{old('model_year')}}" name="model_year" class="form-control" placeholder="Model">
                            <p class="text-danger"> {{$errors->first('model_year')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Chases No.</label>
                            <input type="text" value="{{old('chases_no')}}" name="chases_no" class="form-control" placeholder="Chases No.">
                            <p class="text-danger"> {{$errors->first('chases_no')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Engine</label>
                            <input type="text" value="{{old('engine_no')}}" name="engine_no" class="form-control" placeholder="Engine">
                            <p class="text-danger"> {{$errors->first('engine_no')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Quota</label>
                            <input type="text" value="{{old('quota')}}" name="quota" class="form-control" placeholder="Quota">
                            <p class="text-danger"> {{$errors->first('quota')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mark</label>
                            <input type="text" value="{{old('mark')}}" name="mark" class="form-control" placeholder="Mark">
                            <p class="text-danger"> {{$errors->first('mark')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Color</label>
                            <input type="text" value="{{old('color')}}" name="color" class="form-control" placeholder="Color">
                            <p class="text-danger"> {{$errors->first('color')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Horse Power</label>
                            <input type="text" value="{{old('power')}}" name="power" class="form-control" placeholder="Horse Power">
                            <p class="text-danger"> {{$errors->first('power')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Number Plate</label>
                            <select name="number_plate" class="form-control">
                                <option {{(old('number_plate') == 'Genuine' ? 'selected' : '')}} value="Genuine">Genuine</option>
                                <option {{(old('number_plate') == 'Non-Genuine' ? 'selected' : '')}} value="Non-Genuine">Non-Genuine</option>
                            </select>
                            <p class="text-danger"> {{$errors->first('number_plate')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>File</label>
                            <select name="file" class="form-control">
                                <option {{(old('file') == 'Genuine' ? 'selected' : '')}} value="Genuine">Genuine</option>
                                <option {{(old('file') == 'Copy' ? 'selected' : '')}} value="Copy">Copy</option>
                            </select>
                            <p class="text-danger"> {{$errors->first('file')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Copy</label>
                            <select name="copy" class="form-control">
                                <option {{(old('copy') == 'Genuine' ? 'selected' : '')}} value="Genuine">Genuine</option>
                                <option {{(old('copy') == 'Non-Genuine' ? 'selected' : '')}} value="Non-Genuine">Non-Genuine</option>
                            </select>
                            <p class="text-danger"> {{$errors->first('copy')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Total Documents</label>
                            <input type="text" value="{{old('total_documents')}}" name="total_documents" class="form-control" placeholder="Number of documents">
                            <p class="text-danger"> {{$errors->first('total_documents')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Token</label>
                            <select name="token" class="form-control">
                                <option {{(old('token') == 'Yes' ? 'selected' : '')}} value="Yes">Yes</option>
                                <option {{(old('token') == 'No' ? 'selected' : '')}} value="No">No</option>
                            </select>
                            <p class="text-danger"> {{$errors->first('token')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Purchased Price</label>
                            <input type="text" value="{{old('purchased_price')}}" name="purchased_price" class="form-control" placeholder="Horse Power">
                            <p class="text-danger"> {{$errors->first('purchased_price')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Upload Documents</label>
                            <br>
                            <div class="upload-file-wrapper">
                                <div class="file-img"><img src="{{asset('assets/images/pdf.png')}}"> </div>
                                <input name="documents[]" type="file" multiple class="input-file"  accept="image/*">
                                <label for="file" class="btn btn-tertiary js-labelFile">
                                    <!-- <i class="icon fa fa-check"></i> -->
                                    <span class="js-fileName">Choose a file</span>
                                </label>
                            </div>
                            <p class="text-danger"> {{$errors->first('documents')}}</p>
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
                                <input type="radio" id="partnership"  class="radp-yes {{old('partenership') == 1 ? 'radp-no' : ''}}" value="1" name="partenership">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-radio">No
                                <input type="radio" name="partenership" value="0"  class="{{(!empty(old('partenership')) ? (old('partenership') == 0 ? 'radp-no' : '') : 'radp-no')}}">
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
                    <div class="row {{old('partenership') == 0 ? 'parteners-row' : ''}} ">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="partner_name[]" class="form-control part-input partner_name" placeholder="Partener">
                            <p class="text-danger"> {{$errors->first('partner_name')}}</p>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" name="partner_percentage[]" class="form-control part-input partner_percentage" placeholder="Percentage">
                        </div>
                        <div id="partners" class="row">
                        </div>
                        <div class="col-lg-3 form-group">
                        <button type="button" class="btn btn-primary add_more">Add More</button>
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
                                <input type="radio"  value="1" class="local-v-yes {{old('vendor') == 1 ? 'local-v-no' : ''}}" name="vendor">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container-radio">No
                                <input type="radio" value="0" name="vendor" class="{{old('vendor') == 0 ? 'local-v-no' : ''}}">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row {{old('vendor') == 0 ? 'local-v-row' : ''}}">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input type="text" name="vendor_first_name" value="{{old('vendor_first_name')}}" class="form-control local-v-input" placeholder="First Name">
                            <p class="text-danger"> {{$errors->first('vendor_first_name')}}</p>

                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input type="text" name="vendor_last_name" value="{{old('vendor_last_name')}}" class="form-control local-v-input" placeholder="Last Name">
                            <p class="text-danger"> {{$errors->first('vendor_last_name')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Phone No.</label>
                            <input type="text" name="vendor_phone_no" value="{{old('vendor_phone_no')}}" class="form-control local-v-input" placeholder="Last Name">
                            <p class="text-danger"> {{$errors->first('vendor_phone_no')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ID Card</label>
                            <input type="text" name="vendor_id_card" value="{{old('vendor_id_card')}}" class="form-control local-v-input" placeholder="ID Card Number">
                            <p class="text-danger"> {{$errors->first('vendor_id_card')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Current Address</label>
                            <input type="text" name="vendor_current_address" value="{{old('vendor_current_address')}}" class="form-control" placeholder="Current Address">
                            <p class="text-danger"> {{$errors->first('vendor_current_address')}}</p>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Permanent Address</label>
                            <input type="text" name="vendor_permanent_address" value="{{old('vendor_permanent_address')}}" class="form-control" placeholder="Permanent Address">
                            <p class="text-danger"> {{$errors->first('vendor_permanent_address')}}</p>
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
            </form>
            </div>
        </div>
        
    </div>
@endsection