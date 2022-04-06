@extends('master')
@section('content')
<div class="main-heading-container">
    <div class="common-title">Cars in Stock</div>
    <a href="{{url('/car-registration')}}" class="btn btn-primary w-170">Add New Car</a>
</div>

@if(session('success_message'))
  <div id="alert_message" class="mt-3 alert alert-success alert-dismissible col-md-12">
    <strong>{{session('success_message')}}</strong>
  </div>
@endif
<div class="row mb-4">
    <div class="col-lg-12">
        <div class="card-common">
            <div class="card-topbar">
                <div class="card-topbar-title">Cars</div>
            </div>
            <div class="card-common-body">
                <div class="card-table-responsive">
                    <table id="example" class="table table-striped table-single-line">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Manufacturer</th>
                                <th>Car Name</th>
                                <th>Model</th>
                                <th>Color</th>
                                <th>Regd. No.</th>
                                <th>Horsepower</th>
                                <th>View Documents</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cars as $index=>$car)
                            <tr>
                                <td class="tbl-id">{{++$index}}</td>
                                <td>
                                    <span class="tbl-name">{{$car->mark}}</span>
                                </td>
                                <td>
                                {{$car->model}}
                                </td>
                                <td>
                                {{$car->model_year}}
                                </td>
                                <td>
                                {{$car->color}}
                                </td>
                                <td>
                                {{$car->registration_no}}
                                </td>
                                <td>
                                {{$car->power}}
                                </td>
                                <td>
                                    <a target="_blank" href="{{asset($car->document)}}"><button class="btn btn-primary">View Document</button></a>
                                </td>
                                <td>
                                    <div class="actions-col">
                                        <a href="{{url('/car-selling')}}"><img src="{{asset('assets/images/shopping-cart-tbl.svg')}}"></a>
                                        <a href="{{url('/view-car-detail',$car->id)}}"><img src="{{asset('assets/images/eye.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/edit.svg')}}"></a>
                                        <a href="{{url('delete_car', $car->id)}}"><img src="{{asset('assets/images/delete.svg')}}"></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Manufacturer</th>
                                <th>Car Name</th>
                                <th>Model</th>
                                <th>Color</th>
                                <th>Regd. No.</th>
                                <th>Horsepower</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection