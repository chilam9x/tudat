@extends('layouts.admin')

@section('content')
<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Kế hoạch sản xuất
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Search Form -->
            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">
                            <div class="col-md-4">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label>
                                            Status:
                                        </label>
                                    </div>
                                    <div class="m-form__control">
                                        <select class="form-control m-bootstrap-select" id="m_form_status">
                                            <option value="">
                                                All
                                            </option>
                                            <option value="1">
                                                Pending
                                            </option>
                                            <option value="2">
                                                Delivered
                                            </option>
                                            <option value="3">
                                                Canceled
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label class="m-label m-label--single">
                                            Type:
                                        </label>
                                    </div>
                                    <div class="m-form__control">
                                        <select class="form-control m-bootstrap-select" id="m_form_type">
                                            <option value="">
                                                All
                                            </option>
                                            <option value="1">
                                                Online
                                            </option>
                                            <option value="2">
                                                Retail
                                            </option>
                                            <option value="3">
                                                Direct
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span>
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                        <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                            <span>
                                <i class="la la-cart-plus"></i>
                                <span>
                                    Thêm mới Hàng hóa
                                </span>
                            </span>
                        </a>
                        <div class="m-separator m-separator--dashed d-xl-none"></div>
                    </div>
                </div>
            </div>
            <!--end: Search Form -->
    <!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mã Hàng</th>
                        <th>Hình ảnh</th>
                        <th>Doanh thu hàng tháng</th>
                        <th>Số lượng</th>
                        <th>Nhận hàng in,thêu</th>
                        <th>Bắt đầu cắt</th>
                        <th>Kết thúc cắt</th>
                        <th>Bắt đầu vào chuyền</th>
                        <th>Kết thúc vào chuyền</th>
                        <th>Bắt đầu ra chuyền</th>
                        <th>Kết thúc ra chuyền</th>
                        <th>Thực tế ra chuyền</th>
                        <th>Bắt đầu giao QC</th>
                        <th>Kết thúc giao QC</th>
                        <th>Bắt đầu hoàn tất</th>
                        <th>Kết thúc hoàn tất</th>
                        <th>Nhập kho</th>
                        <th>Xuất kho</th>
                        <th>Tồn kho</th>
                        <th>Ngày xuất kho dự kiến</th>
                        <th>Ghi chú</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($products as $item)
                            <td>{{$item->id}}</td>
                            <td>{{$item->code}}</td>
                            <td>{{$item->image}}</td>
                            <td>{{$item->monthly_revenue}}</td>
                            <td>{{$item->amount}}</td>

                            <td>{{$item->receipt_print_product_at}}</td>

                            <td>{{$item->diagram_delivery_at}}</td>
                            <td>{{$item->cut_at}}</td>
                            <td>{{$item->print_delivery_at}}</td>
                            <td>{{$item->print_receipt_at}}</td>
                            <td>{{$item->line}}</td>
                            <td>{{$item->note}}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            <!--end: Datatable -->
        </div>
    </div>
</div>
@endsection
