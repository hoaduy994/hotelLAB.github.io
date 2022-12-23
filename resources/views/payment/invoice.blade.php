@extends('template.invoicemaster')
@section('title', 'Payment')
@section('head')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap');

        body {
            font-family: 'Maven Pro', sans-serif;
        }

        hr {
            color: #0000004f;
            margin-top: 5px;
            margin-bottom: 5px
        }

        .add td {
            color: #c5c4c4;
            text-transform: uppercase;
            font-size: 12px
        }

        .content {
            font-size: 14px
        }

    </style>
@endsection
@section('content')

    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row p-2"> <img src="{{ asset('img/logo/sip.png') }}" width="48">
                        <div class="d-flex flex-column"> <span class="font-weight-bold">Hóa đơn</span>
                            <small>INV-{{ $payment->id }}</small>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>Từ</td>
                                    <td>Đến</td>
                                </tr>
                                <tr class="content">
                                    <td class="font-weight-bold"> {{Helper::dateDayFormat($payment->transaction->check_in)}}</td>
                                    <td class="font-weight-bold"> {{Helper::dateDayFormat($payment->transaction->check_out)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>Miêu tả</td>
                                    <td class="text-center">Ngày</td>
                                    <td class="text-center">Giá phòng / Ngày</td>
                                    <td class="text-center">Tổng giá</td>
                                </tr>
                                <tr class="content">
                                    <td>{{ $payment->transaction->room->type->name }} -
                                        {{ $payment->transaction->room->number }}</td>
                                    <td class="text-center">{{ $payment->transaction->getDateDifferenceWithPlural() }}
                                    </td>
                                    <td class="text-center">
                                        {{ Helper::convertToVnd($payment->transaction->room->price) }}</td>
                                    <td class="text-center">
                                        {{ Helper::convertToVnd($payment->transaction->getTotalPrice()) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td></td>
                                    <td class="text-center">Trả trước tối thiểu</td>
                                    <td class="text-center">Trả hết</td>
                                    <td class="text-center">
                                        Thanh toán không đủ</td>
                                </tr>
                                <tr class="content">
                                    <td></td>
                                    <td class="text-center">
                                        {{ Helper::convertToVnd($payment->transaction->getMinimumDownPayment()) }}</td>
                                    <td class="text-center">{{ Helper::convertToVnd($payment->price) }}</td>
                                    <td class="text-center">
                                        {{ $payment->transaction->getTotalPrice() - $payment->transaction->getTotalPayment() <= 0 ? '-' : Helper::convertToVnd($payment->transaction->getTotalPrice($payment->transaction->room->price, $payment->transaction->check_in, $payment->transaction->check_out) - $payment->transaction->getTotalPayment()) }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="address p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>Chi tiết khách hàng</td>
                                </tr>
                                <tr class="content">
                                    <td>
                                        ID khách hàng : {{ $payment->transaction->customer->id }}
                                        <br>Tên : {{ $payment->transaction->customer->name }}
                                        <br>Công việc : {{ $payment->transaction->customer->job }}
                                        <br>Địa chỉ : {{ $payment->transaction->customer->address }}
                                        <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
