@extends('master')
@section('content')
<div class="main-heading-container">
    <div class="common-title">Vendors</div>
    <a href="{{url('/add-vendor')}}" class="btn btn-primary w-170">Add Vendor</a>
</div>

<div class="row mb-4">
    <div class="col-lg-12">
        <div class="card-common">
            <div class="card-topbar">
                <div class="card-topbar-title">Vendors</div>
            </div>
            <div class="card-common-body">
                <div class="card-table-responsive">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>ID Card</th>
                                <th>Phone No.</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tbl-id">01</td>
                                <td>
                                    <span class="tbl-name">Tiger Nixon</span>
                                    <span class="tbl-sub-txt tbl-email">demo@demo.com</span>
                                </td>
                                <td>
                                    12345678943
                                </td>
                                <td>
                                    12547954234
                                </td>
                                <td>
                                    Lorem Ipsum dolor sit amet
                                </td>
                                <td>
                                    <div class="actions-col">
                                        <a href="#"><img src="{{asset('assets/images/eye.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/edit.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/delete.svg')}}"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tbl-id">01</td>
                                <td>
                                    <span class="tbl-name">Tiger Nixon</span>
                                    <span class="tbl-sub-txt tbl-email">demo@demo.com</span>
                                </td>
                                <td>
                                    12345678943
                                </td>
                                <td>
                                    12547954234
                                </td>
                                <td>
                                    Lorem Ipsum dolor sit amet
                                </td>
                                <td>
                                    <div class="actions-col">
                                        <a href="#"><img src="{{asset('assets/images/eye.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/edit.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/delete.svg')}}"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tbl-id">01</td>
                                <td>
                                    <span class="tbl-name">Tiger Nixon</span>
                                    <span class="tbl-sub-txt tbl-email">demo@demo.com</span>
                                </td>
                                <td>
                                    12345678943
                                </td>
                                <td>
                                    12547954234
                                </td>
                                <td>
                                    Lorem Ipsum dolor sit amet
                                </td>
                                <td>
                                    <div class="actions-col">
                                        <a href="#"><img src="{{asset('assets/images/eye.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/edit.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/delete.svg')}}"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tbl-id">01</td>
                                <td>
                                    <span class="tbl-name">Tiger Nixon</span>
                                    <span class="tbl-sub-txt tbl-email">demo@demo.com</span>
                                </td>
                                <td>
                                    12345678943
                                </td>
                                <td>
                                    12547954234
                                </td>
                                <td>
                                    Lorem Ipsum dolor sit amet
                                </td>
                                <td>
                                    <div class="actions-col">
                                        <a href="#"><img src="{{asset('assets/images/eye.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/edit.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/delete.svg')}}"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tbl-id">01</td>
                                <td>
                                    <span class="tbl-name">Tiger Nixon</span>
                                    <span class="tbl-sub-txt tbl-email">demo@demo.com</span>
                                </td>
                                <td>
                                    12345678943
                                </td>
                                <td>
                                    12547954234
                                </td>
                                <td>
                                    Lorem Ipsum dolor sit amet
                                </td>
                                <td>
                                    <div class="actions-col">
                                        <a href="#"><img src="{{asset('assets/images/eye.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/edit.svg')}}"></a>
                                        <a href="#"><img src="{{asset('assets/images/delete.svg')}}"></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>User Status</th>
                                <th>Payment Status</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection