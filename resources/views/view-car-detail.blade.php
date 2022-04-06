@extends('master')
@section('content')
<div class="main-heading-container">
    <div class="common-title">View Car Detail</div>
</div>

<div class="row mb-4">
    <div class="col-lg-12">
        <div class="card-common">
            <div class="card-topbar">
                <div class="card-topbar-title">Car Detail</div>
            </div>
            <div class="card-common-body">
                <div class="row">
                    <!-- <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Vendor:</div>
                        <div class="label-txt">Lorem Ipsum</div>
                    </div> -->
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Registration No.:</div>
                        <div class="label-txt">{{$car_detail->registration_no}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Model:</div>
                        <div class="label-txt">{{$car_detail->model_year}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Chases No.:</div>
                        <div class="label-txt">{{$car_detail->chases_no}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Engine:</div>
                        <div class="label-txt">{{$car_detail->engine_no}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Quota:</div>
                        <div class="label-txt">{{$car_detail->quota}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Mark:</div>
                        <div class="label-txt">{{$car_detail->mark}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Color:</div>
                        <div class="label-txt">{{$car_detail->color}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Horsepower:</div>
                        <div class="label-txt">{{$car_detail->power}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Number Plate:</div>
                        <div class="label-txt">{{$car_detail->number_plate}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">File:</div>
                        <div class="label-txt">{{$car_detail->file}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Copy:</div>
                        <div class="label-txt">{{$car_detail->copy}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Documents:</div>
                        <div class="label-txt">{{$car_detail->total_documents}}</div>
                    </div>
                    <div class="col-md-6 form-group col-detail-view">
                        <div class="label-heading">Token:</div>
                        <div class="label-txt">{{$car_detail->token}}</div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <hr class="form-hr form-hr-last">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex form-btns">
                        <a href="{{url('/car-sales')}}" class="btn btn-primary w-170">Back</a>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    
</div>
@endsection