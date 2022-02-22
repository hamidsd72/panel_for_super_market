<div class="row">
    <div class="col-lg text-right h4 mt-0 mb-4">فاکتورها</div>
    <div class="col-lg text-left">
        <form method="POST" action="{{ route('factors.store') }}" >
            {{ csrf_field() }}
            <button type="submit" class="btn btn-sm bg-secondary text-light">اضافه کردن سفارش جدید</button>
        </form>
    </div>
</div>
@if ($factors->count())
    <div class="card">
        <div class="card-body">

            <table class="table table-hover table-striped">
                <thead>
                    <th align="center"> شماره فاکتور</th>
                    <th align="center">وضعیت مالی</th>
                    <th align="center">شیوه پرداخت</th>
                    <th align="center">قیمت کل فاکتور</th>
                    <th align="center">مرحله فاکتور</th>
                    <th align="center">تاریخ ثبت</th>
                    <th align="center">مکانات</th>
                </thead>
                <tbody>
                    @foreach ($factors as $factor)
                        <tr>
                            <td align="center">{{$factor->id}}</td>
                            <td align="center">
                                @if ($factor->payment_status == 1)
                                    <div class="text-success">پرداخت شده</div>
                                @elseif ($factor->payment_status == 0)
                                    <div class="text-warning">پرداخت نشده</div>
                                @else
                                    {{$factor->payment_status}}
                                @endif
                            </td>
                            <td align="center">
                                @if ($factor->payment_method == 1)
                                    آنلاین
                                @else
                                    حضوری
                                @endif
                            </td>
                            <td align="center">
                                {{$factor->total_amount}} تومان
                            </td>
                            <td align="center">
                                @if ($factor->status == 1)
                                    در انتظار ارسال
                                @elseif ($factor->status == 0)
                                    <div class="text-warning">در انتظار پرداخت</div>
                                @elseif ($factor->status == 2)
                                    <div class="text-success">تحویل شده</div>
                                @else
                                    {{$factor->status}}
                                @endif
                            </td>
                            <td align="center">{{$factor->created_at}}</td>
                            <td align="center">
                                <a class="p-1 redu5 bg-secondary text-light" href="{{route('factors.show',$factor->id)}}" >ویرایش</a>
                                <a href="#" class="p-1 redu5 bg-danger border-danger text-light" >حدف</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
    
@else

    <h4 class="p-5 text-center">سفارشی یافت نشد</h4>
@endif

<script>
    formatMoney(number) {
        let money = (number / 10).toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        if (money.length > 0) {
            return `تومان ${money.substr(1,money.length-4)}`
        }
    }
</script>