<div class="row">
    <div class="col-lg text-right h4 mt-0 mb-4">محصولات</div>
    <div class="col-lg text-left ">
        <a href="{{ route('products.create') }}" class="btn btn-sm bg-secondary text-light">اضافه کردن محصول جدید</a>
    </div>
</div>
@if ($products->count())
    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-striped" >
                <thead>
                    <th class="d-none d-lg-block" align="center">تصویر </th>
                    <th align="center">کد</th>
                    <th align="center">نام</th>
                    <th align="center">توضیح</th>
                    <th align="center">قیمت</th>
                    <th align="center">موجود</th>
                    <th align="center">تعداد </th>
                    <th align="center">تاریخ ثبت</th>
                    <th align="center">گرینه ها</th>
                </thead>
                <tbody >
                    @foreach ($products as $product)
                        <tr>
                            <td class="d-none d-lg-block" align="center" style="max-width: 200px">
                                @if ($product->imageProducts->count() > 0)
                                    <div class="d-flex flex-row overflow-auto pt-4 pt-xl-0 " style="width: 100%;">
                                        @foreach ($product->imageProducts as $image)
                                            <a href="{{$image->image_product}}" target="_blank" >
                                                {{-- <img class="img max-height-60px rounded shadow" src="{{$image->image_produ ct}}" alt="{{$image->product_id}}"> --}}
                                                <img class="img-20 img-50 img-border-glass" src="{{$image->image_product}}" alt="{{$image->product_id}}">
                                            </a>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="mt-2">بدون تصویر</div>
                                @endif
                            </td>
                            <td align="center">{{$product->sku}}</td>
                            <td align="center">{{$product->product_name}}</td>
                            <td align="center">{{$product->description}}</td>
                            <td align="center">{{$product->amount}} تومان
                            @if ($product->off_amount)
                                <br>
                                <del>{{$product->off_amount}}</del> تومان
                            @endif
                            
                            </td>
                            <td align="center">
                                @if ($product->availability)
                                    <div class="text-success">موجود هست</div>
                                @else
                                    <div class="text-danger">موجود نیست</div>
                                @endif
                            </td>
                            <td align="center">{{$product->product_count}}</td>
                            <td align="center">{{$product->created_at}}</td>
                            <td style="" align="center" >
                                <a class="p-1 redu5 bg-secondary text-light"  href="{{route('products.show',$product->id)}}" >ویرایش</a>
                                <a href="#" class="p-1 redu5 bg-danger border-danger text-light "  >حدف</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@else
    <h4 class="p-5 text-center">موردی یافت نشد</h4>
@endif
