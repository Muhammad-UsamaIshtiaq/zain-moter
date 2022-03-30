@extends('master')
@section('content')

            <div class="main-heading-container">
                <div class="common-title">Welcome to Dashboard</div>
            </div>

            <div class="row mb-4 total-sale-wraper">
                <div class="col-lg-4">
                    <div class="total-info-card">
                        <div class="total-info-card-icon bg-blue-o">
                            <img src="{{asset('assets/images/shopping-cart.svg')}}">
                        </div>
                        <div class="total-info-card-detail">
                            <div class="total-info-card-title">Total Sales</div>
                            <div class="total-info-card-number">50</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="total-info-card">
                        <div class="total-info-card-icon bg-purple-o">
                            <img src="{{asset('assets/images/dollar.svg')}}">
                        </div>
                        <div class="total-info-card-detail">
                            <div class="total-info-card-title">Total Profit</div>
                            <div class="total-info-card-number">$870</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="total-info-card">
                        <div class="total-info-card-icon bg-red-o">
                            <img src="{{asset('assets/images/growth.svg')}}">
                        </div>
                        <div class="total-info-card-detail">
                            <div class="total-info-card-title">Total Growth</div>
                            <div class="total-info-card-number">64.27%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="card-common">
                        <div class="card-topbar">
                            <select>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                        <div class="card-common-body" style="padding: 0 0 20px 0px;">
                            <div class="column-chart"></div>
                        </div>
                        <!-- <div class="card-common-body pt-0">
                            <div class="column-charttwo"></div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-4 col-activity">
                    <div class="card-common">
                        <div class="card-topbar">
                            <div class="card-topbar-title">Daily Activity</div>
                        </div>
                        <div class="card-common-body">
                            <div class="card-actvity-row">
                                <div class="card-activity-title-row">
                                    <div class="card-activity-title-row-dot bg-blue"></div>
                                    <div class="card-activity-title-date">
                                        <span class="card-activity-title-h">Lorem Ipsum</span>
                                        <span class="card-activity-date">03 Mar 2022</span>
                                    </div>
                                    <div class="card-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                </div>
                                <div class="card-activity-title-row">
                                    <div class="card-activity-title-row-dot bg-purple"></div>
                                    <div class="card-activity-title-date">
                                        <span class="card-activity-title-h">Lorem Ipsum</span>
                                        <span class="card-activity-date">03 Mar 2022</span>
                                    </div>
                                    <div class="card-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                </div>
                                <div class="card-activity-title-row">
                                    <div class="card-activity-title-row-dot bg-green"></div>
                                    <div class="card-activity-title-date">
                                        <span class="card-activity-title-h">Lorem Ipsum</span>
                                        <span class="card-activity-date">03 Mar 2022</span>
                                    </div>
                                    <div class="card-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                </div>
                                <div class="card-activity-title-row">
                                    <div class="card-activity-title-row-dot bg-yellow"></div>
                                    <div class="card-activity-title-date">
                                        <span class="card-activity-title-h">Lorem Ipsum</span>
                                        <span class="card-activity-date">03 Mar 2022</span>
                                    </div>
                                    <div class="card-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                </div>
                                <div class="card-activity-title-row">
                                    <div class="card-activity-title-row-dot bg-light-green"></div>
                                    <div class="card-activity-title-date">
                                        <span class="card-activity-title-h">Lorem Ipsum</span>
                                        <span class="card-activity-date">03 Mar 2022</span>
                                    </div>
                                    <div class="card-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                </div>
                                <div class="card-activity-title-row">
                                    <div class="card-activity-title-row-dot bg-pink"></div>
                                    <div class="card-activity-title-date">
                                        <span class="card-activity-title-h">Lorem Ipsum</span>
                                        <span class="card-activity-date">03 Mar 2022</span>
                                    </div>
                                    <div class="card-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-activity">
                    <div class="card-common">
                        <div class="card-topbar">
                            <div class="card-topbar-title">Sales Report by Cars</div>
                        </div>
                        <div class="card-common-body">
                            <div class="card-progress-bar-wrapper">
                                <div class="card-car-progress">
                                    <span class="card-car-p-name">BMW</span>
                                    <span class="card-car-p-progress">853(65%)</span>
                                </div>
                                <div class="progress-bar bg-blue-pb">
                                    <div class="progress" data-percent="65" data-color="#4361EE"></div>
                                </div>
                            </div>
                            <div class="card-progress-bar-wrapper">
                                <div class="card-car-progress">
                                    <span class="card-car-p-name">Mercedes</span>
                                    <span class="card-car-p-progress">251(32%)</span>
                                </div>
                                <div class="progress-bar bg-purple-pb">
                                    <div class="progress" data-percent="32" data-color="#9853FF"></div>
                                </div>
                            </div>
                            <div class="card-progress-bar-wrapper">
                                <div class="card-car-progress">
                                    <span class="card-car-p-name">Volkswagon</span>
                                    <span class="card-car-p-progress">382(50%)</span>
                                </div>
                                <div class="progress-bar bg-green-pb">
                                    <div class="progress" data-percent="50" data-color="#30D066"></div>
                                </div>
                            </div>
                            <div class="card-progress-bar-wrapper">
                                <div class="card-car-progress">
                                    <span class="card-car-p-name">Bentley</span>
                                    <span class="card-car-p-progress">923(70%)</span>
                                </div>
                                <div class="progress-bar bg-light-green-pb">
                                    <div class="progress" data-percent="70" data-color="#0CEEE0"></div>
                                </div>
                            </div>
                            <div class="card-progress-bar-wrapper">
                                <div class="card-car-progress">
                                    <span class="card-car-p-name">Chevrolet</span>
                                    <span class="card-car-p-progress">317(40%)</span>
                                </div>
                                <div class="progress-bar bg-pink-pb">
                                    <div class="progress" data-percent="40" data-color="#F338EC"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-activity">
                    <div class="card-common">
                        <div class="card-topbar">
                            <div class="card-topbar-title">Last Sales</div>
                        </div>
                        <div class="card-common-body">
                            <div class="lasst-sale-actvity-row">
                                <div class="lasst-sale-activity-title-row">
                                    <div class="lasst-sale-activity-title-date">
                                        <span class="lasst-sale-activity-title-h">Lorem Ipsum</span>
                                        <div class="lasst-sale-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                    </div>
                                    <div class="lasst-sale-activity-price">$3344</div>
                                </div>
                                <div class="lasst-sale-activity-title-row">
                                    <div class="lasst-sale-activity-title-date">
                                        <span class="lasst-sale-activity-title-h">Lorem Ipsum</span>
                                        <div class="lasst-sale-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                    </div>
                                    <div class="lasst-sale-activity-price">$3344</div>
                                </div>
                                <div class="lasst-sale-activity-title-row">
                                    <div class="lasst-sale-activity-title-date">
                                        <span class="lasst-sale-activity-title-h">Lorem Ipsum</span>
                                        <div class="lasst-sale-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                    </div>
                                    <div class="lasst-sale-activity-price">$3344</div>
                                </div>
                                <div class="lasst-sale-activity-title-row">
                                    <div class="lasst-sale-activity-title-date">
                                        <span class="lasst-sale-activity-title-h">Lorem Ipsum</span>
                                        <div class="lasst-sale-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                    </div>
                                    <div class="lasst-sale-activity-price">$3344</div>
                                </div>
                                <div class="lasst-sale-activity-title-row">
                                    <div class="lasst-sale-activity-title-date">
                                        <span class="lasst-sale-activity-title-h">Lorem Ipsum</span>
                                        <div class="lasst-sale-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                    </div>
                                    <div class="lasst-sale-activity-price">$3344</div>
                                </div>
                                <div class="lasst-sale-activity-title-row">
                                    <div class="lasst-sale-activity-title-date">
                                        <span class="lasst-sale-activity-title-h">Lorem Ipsum</span>
                                        <div class="lasst-sale-activity-title-txt">Lorem ipsum dolor sit amet</div>
                                    </div>
                                    <div class="lasst-sale-activity-price">$3344</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="card-common">
                        <div class="card-topbar">
                            <div class="card-topbar-title">Top Sellers</div>
                        </div>
                        <div class="card-common-body">
                            <div class="card-table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>User Status</th>
                                            <th>Payment Status</th>
                                            <th>Amount</th>
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
                                            <td class="blue-setts">
                                                <span class="status-widget">Active</span>
                                                <span class="tbl-sub-txt">Last login: 14/APR/2020</span>
                                            </td>
                                            <td class="green-setts">
                                                <span class="status-widget">Paid</span>
                                                <span class="tbl-sub-txt tbl-sub-txt-paid">Paid on 15/APR/2020</span>
                                            </td>
                                            <td>
                                                <span class="tbl-name">$200</span>
                                                <span class="tbl-sub-txt">USD</span>
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
                                            <td class="tbl-id">02</td>
                                            <td>
                                                <span class="tbl-name">Tiger Nixon</span>
                                                <span class="tbl-sub-txt tbl-email">demo@demo.com</span>
                                            </td>
                                            <td class="inactive-setts">
                                                <span class="status-widget">Inactive</span>
                                                <span class="tbl-sub-txt">Last login: 14/APR/2020</span>
                                            </td>
                                            <td class="red-setts">
                                                <span class="status-widget">Overdue</span>
                                                <span class="tbl-sub-txt tbl-sub-txt-paid">Paid on 15/APR/2020</span>
                                            </td>
                                            <td>
                                                <span class="tbl-name">$200</span>
                                                <span class="tbl-sub-txt">USD</span>
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
                                            <td class="tbl-id">03</td>
                                            <td>
                                                <span class="tbl-name">Tiger Nixon</span>
                                                <span class="tbl-sub-txt tbl-email">demo@demo.com</span>
                                            </td>
                                            <td class="blue-setts">
                                                <span class="status-widget">Active</span>
                                                <span class="tbl-sub-txt">Last login: 14/APR/2020</span>
                                            </td>
                                            <td class="unpaid-setts">
                                                <span class="status-widget">Unpaid</span>
                                                <span class="tbl-sub-txt tbl-sub-txt-paid">Paid on 15/APR/2020</span>
                                            </td>
                                            <td>
                                                <span class="tbl-name">$200</span>
                                                <span class="tbl-sub-txt">USD</span>
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
                                            <td class="tbl-id">04</td>
                                            <td>
                                                <span class="tbl-name">Tiger Nixon</span>
                                                <span class="tbl-sub-txt tbl-email">demo@demo.com</span>
                                            </td>
                                            <td class="blue-setts">
                                                <span class="status-widget">Active</span>
                                                <span class="tbl-sub-txt">Last login: 14/APR/2020</span>
                                            </td>
                                            <td class="green-setts">
                                                <span class="status-widget">Paid</span>
                                                <span class="tbl-sub-txt tbl-sub-txt-paid">Paid on 15/APR/2020</span>
                                            </td>
                                            <td>
                                                <span class="tbl-name">$200</span>
                                                <span class="tbl-sub-txt">USD</span>
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
                                            <td class="tbl-id">05</td>
                                            <td>
                                                <span class="tbl-name">Tiger Nixon</span>
                                                <span class="tbl-sub-txt tbl-email">demo@demo.com</span>
                                            </td>
                                            <td class="inactive-setts">
                                                <span class="status-widget">Inactive</span>
                                                <span class="tbl-sub-txt">Last login: 14/APR/2020</span>
                                            </td>
                                            <td class="green-setts">
                                                <span class="status-widget">Paid</span>
                                                <span class="tbl-sub-txt tbl-sub-txt-paid">Paid on 15/APR/2020</span>
                                            </td>
                                            <td>
                                                <span class="tbl-name">$200</span>
                                                <span class="tbl-sub-txt">USD</span>
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
        