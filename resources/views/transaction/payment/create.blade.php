@extends('template.master')
@section('title', $transaction->customer->name . ' Pay Reservation')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class=" col-sm-2 col-form-label">Phòng</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{ $transaction->room->number }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Đăng ký vào</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    value="{{ Helper::dateFormat($transaction->check_in) }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Thanh toán vào</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    value="{{ Helper::dateFormat($transaction->check_out) }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class=" col-sm-2 col-form-label">Giá phòng</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    value="{{ Helper::convertToVnd($transaction->room->price) }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Số ngày</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    value="{{ $transaction->getDateDifferenceWithPlural($transaction->check_in, $transaction->check_out) }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tổng giá</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    value="{{ Helper::convertToVnd($transaction->getTotalPrice($transaction->room->price, $transaction->check_in, $transaction->check_out)) }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Trả hết</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    value="{{ Helper::convertToVnd($transaction->getTotalPayment()) }}" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Còn thiếu</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    value="{{ Helper::convertToVnd($transaction->getTotalPrice($transaction->room->price, $transaction->check_in, $transaction->check_out) - $transaction->getTotalPayment()) }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="POST"
                                    action="{{ route('transaction.payment.store', ['transaction' => $transaction->id]) }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="payment" class="col-sm-2 col-form-label">Trả</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('payment') is-invalid @enderror"
                                                placeholder="Input payment" value="" id="payment" name="payment">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10" id="showPaymentType"></div>
                                    </div>
                                    @error('payment')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <button class="btn btn-success float-end">Trả</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-2">
                <div class="card shadow-sm">
                    <img src="{{ $transaction->customer->user->getAvatar() }}"
                        style="border-top-right-radius: 0.5rem; border-top-left-radius: 0.5rem">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td style="text-align: center; width:50px">
                                    <span>
                                        <i
                                            class="fas {{ $transaction->customer->gender == 'Male' ? 'fa-male' : 'fa-female' }}">
                                        </i>
                                    </span>
                                </td>
                                <td>
                                    {{ $transaction->customer->name }}
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; ">
                                    <span>
                                        <i class="fas fa-user-md"></i>
                                    </span>
                                </td>
                                <td>{{ $transaction->customer->job }}</td>
                            </tr>
                            <tr>
                                <td style="text-align: center; ">
                                    <span>
                                        <i class="fas fa-birthday-cake"></i>
                                    </span>
                                </td>
                                <td>
                                    {{ $transaction->customer->birthdate }}
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; ">
                                    <span>
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </td>
                                <td>
                                    {{ $transaction->customer->address }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
<script>
    $('#payment').keyup(function() {
        $('#showPaymentType').text('. ' + parseFloat($(this).val(), 10).toFixed(2).replace(
                /(\d)(?=(\d{3})+\.)/g, "$1,")
            .toString());
    });

</script>
@endsection
