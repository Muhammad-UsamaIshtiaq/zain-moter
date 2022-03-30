@extends('master')
@section('content')
<div class="main-heading-container">
    <div class="common-title">Cars in Stock</div>
    <a href="{{url('/car-registration')}}" class="btn btn-primary w-170">Add New Car</a>
</div>


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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tbl-id">01</td>
                                <td>
                                    <span class="tbl-name">Hyundai</span>
                                </td>
                                <td>
                                    Lorem Ipsum
                                </td>
                                <td>
                                    2022
                                </td>
                                <td>
                                    Black
                                </td>
                                <td>
                                    123577554214
                                </td>
                                <td>
                                    1000
                                </td>
                                <td>
                                    <div class="actions-col">
                                        <a href="{{url('/car-selling')}}"><img src="{{asset('assets/images/shopping-cart-tbl.svg')}}"></a>
                                        <a href="{{url('/view-car-detail')}}"><img src="{{asset('assets/images/eye.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/edit.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/delete.svg')}}"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tbl-id">01</td>
                                <td>
                                    <span class="tbl-name">Hyundai</span>
                                </td>
                                <td>
                                    Lorem Ipsum
                                </td>
                                <td>
                                    2022
                                </td>
                                <td>
                                    Black
                                </td>
                                <td>
                                    123577554214
                                </td>
                                <td>
                                    1000
                                </td>
                                <td>
                                    <div class="actions-col">
                                        <a href="{{url('/car-selling')}}"><img src="{{asset('assets/images/shopping-cart-tbl.svg')}}"></a>
                                        <a href="{{url('/view-car-detail')}}"><img src="{{asset('assets/images/eye.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/edit.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/delete.svg')}}"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tbl-id">01</td>
                                <td>
                                    <span class="tbl-name">Hyundai</span>
                                </td>
                                <td>
                                    Lorem Ipsum
                                </td>
                                <td>
                                    2022
                                </td>
                                <td>
                                    Black
                                </td>
                                <td>
                                    123577554214
                                </td>
                                <td>
                                    1000
                                </td>
                                <td>
                                    <div class="actions-col">
                                        <a href="{{url('/car-selling')}}"><img src="{{asset('assets/images/shopping-cart-tbl.svg')}}"></a>
                                        <a href="{{url('/view-car-detail')}}"><img src="{{asset('assets/images/eye.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/edit.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/delete.svg')}}"></a>
                                    </div>
                                </td>
                            </tr>
                            
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