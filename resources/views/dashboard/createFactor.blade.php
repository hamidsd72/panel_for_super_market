@extends('layouts.app')

@section('content')

    <div class="text-center p-1 mt-3 mt-lg-0">
        @if ($products)
            <div class="card ">
                <div class="card-body">
                    <h4 class="text-right mt-0">افزودن محصول به این فاکتور</h4>
                    @if ($products->count() > 0)
                        <form method="POST" action="{{ route('itemsfactor.store') }}" class="text-right">
                            {{ csrf_field() }}
                            <div class="row mb-2">
                                <input type="hidden" name="factor_id" value="{{$factor->id}}" >
                                <div class="col-lg-4 mr-lg-2">
                                    <label for="product_id">انتخاب محصول</label>
                                    <select name="product_id" class="custom-select mb-3 " required>
                                        @foreach ($products as $product)
                                        <option value="{{$product->id}}">{{$product->product_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="quantity">تعداد</label>
                                    <input type="text" name="quantity" class="form-control mb-3 text-left" value=1 required>
                                </div>
                            </div>
                            <button type="submit" class="btn bg-secondary text-light">اضافه کردن کالا به فاکتور</button>
                        </form>
                    @else
                        <div class="text-center">
                            <h4 class="mb-5">هیچ محصولی یافت نشد , برای افزودن روی دکمه زیر کلیک کنید</h4>
                            <a href="{{ route('products.create') }}" class="btn bg-secondary text-light" >افزودن محصول جدید</a>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-body pt-2 pb-3">

                <form method="POST" action="{{ route('factors.update',$factor->id) }}" >
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="row ">
                        <div class="col-lg-4 pr-3">
                            <label for="status">وضعیت فاکتور</label>
                            <select name="status" class="custom-select text-right">
                                @switch($factor->status)
                                    @case(1)
                                        <option selected >در انتظار ارسال</option>
                                        <option value=0 >در انتظار پرداخت</option>
                                        <option value=2>تحویل شده</option>
                                        @break
                                    @case(2)
                                    <option selected >تحویل شده</option>
                                        <option value=0 >در انتظار پرداخت</option>
                                        <option value=1>در انتظار ارسال</option>
                                        @break
                                    @default
                                        <option selected >در انتظار پرداخت</option>
                                        <option value=1>در انتظار ارسال</option>
                                        <option value=2>تحویل شده</option>
                                @endswitch
                            </select>
                        </div>
                        <div class="col">
                            <div class="row text-center">
                                <div class="col mt-3 mt-lg-4 custom-control custom-switch">
                                    <label style="padding-right: 20px;" class="mt-3 custom-control-label" for="payment_status" >وضعیت پرداخت</label>
                                    <input type="checkbox" class="custom-control-input" name="payment_status" id="payment_status" @if ($factor->payment_status > 0) checked @endif >
                                </div>
                                <div class="col mt-3 mt-lg-4 custom-control custom-switch">
                                    <label style="padding-right: 20px;" class="mt-3 custom-control-label" for="payment_method">حالت پرداخت</label>
                                    <input type="checkbox" class="custom-control-input" name="payment_method" id="payment_method" @if ($factor->payment_method > 0) checked @endif >
                                </div>
                                    
                                <div class="col-6 mt-4 text-right">
                                    <div class="mt-lg-2">
                                        <a href="#" class="text-secondary small">جمع مبلغ کالاهای انتخاب شده فاکتور {{$factor->total_amount}} تومان میباشد </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    @if ($itemsFactor->count())
                        <div class="mt-3 mb-4 text-right h4"><a class="text-secondary">محصولات این فاکتور</a></div>
                        <table class="table table-hover table-striped">
                            <thead>
                                <th align="center">کد محصول</th>
                                <th align="center">نام محصول</th>
                                <th align="center">تعداد محصول</th>
                                <th align="center">قیمت واحد</th>
                                <th align="center">مکانات</th>
                            </thead>
                            <tbody>
                                @foreach ($itemsFactor as $item)
                                    <tr>
                                        <td align="center">{{$item->id}}</td>
                                        <td align="center">{{$item->product_name}}</td>
                                        <td align="center">{{$item->quantity}}</td>
                                        <td align="center">{{$item->price_per}}</td>
                                        <td align="center">
                                            <a href="#" class="p-1 redu5 bg-danger border-danger border-danger text-light" >حدف</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                    <div class="text-right pt-2 pt-lg-4 ">
                        <button type="submit" class="btn bg-secondary text-light text-right">تکمیل فاکتور</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(function(){
            $("input[name='quantity']").on('input', function (e) {
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });
        });
    </script>
@endsection

