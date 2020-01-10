@extends('layouts.admin')

@section('content')
<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Kế hoạch chuẩn bị sản xuất
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
                        <th title="Field #1">
                            ID
                        </th>
                        <th title="Field #2">
                            Ngày đặt hàng
                        </th>
                        <th title="Field #2">
                            Mã Hàng
                        </th>
                        <th title="Field #3">
                            Ngày giao tác nghiệp
                        </th>
                        <th title="Field #4">
                            Ngày nhận tác nghiệp
                        </th>
                        <th title="Field #5">
                            Số lượng
                        </th>
                        <th title="Field #6">
                            Ngày giao rập
                        </th>
                        <th title="Field #7">
                            Ngày giao sơ đồ
                        </th>
                        <th title="Field #8">
                            Ngày cắt
                        </th>
                        <th title="Field #9">
                            Ngày giao in thêu
                        </th>
                        <th title="Field #10">
                            Ngày nhận in thêu
                        </th>
                        <th title="Field #11">
                            Chuyền
                        </th>
                        <th title="Field #12">
                            Ghi chú
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($products as $item)
                            <td>{{$item->id}}</td>
                            <td>{{$item->order_at}}</td>
                            <td>{{$item->code}}</td>
                            <td>{{$item->work_delivery_at}}</td>
                            <td>{{$item->work_receipt_at}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->mold_delivery_at}}</td>
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
