@extends('layouts.app')

@section('content')
<div class="row text-right">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body ">
                <h4 class="mt-0">ویرایش اطلاعات محصول شماره {{$product->id}}</h4>
                <form method="POST" action="{{ route('products.update',$product->id) }}" class="row">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="col-lg-6">
                        <label for="sku">کد محصول</label>
                        <input type="text" name="sku" placeholder="کد محصول" class="form-control mb-3 text-left" value="{{$product->sku}}" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="product_name">نام محصول</label>
                        <input type="text" name="product_name" placeholder="نام محصول" class="form-control mb-3 text-right" value="{{$product->product_name}}" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="amount">قیمت روی محصول</label>
                        <input type="text" name="amount" placeholder="قیمت روی محصول" value="0" class="form-control mb-3 text-left" value="{{$product->amount}}" >
                    </div>
                    <div class="col-lg-6">
                        <label for="off_amount">قیمت تخفیفی</label>
                        <input type="text" name="off_amount" placeholder="قیمت تخفیفی" value="0" class="form-control mb-3 text-left" value="{{$product->off_amount}}" >
                    </div>
                    <div class="col-lg-6">
                        <label for="product_count">تعداد موجود</label>
                        <input type="text" name="product_count" placeholder="تعداد موجود" class="form-control mb-3 text-left" value="{{$product->product_count}}" >
                    </div>
                    <div class="col-lg-6 mt-4 d-none d-lg-block">
                        <div class="custom-control custom-switch text-center mt-2">
                            <input type="checkbox" class="custom-control-input" name="availability" id="availability" @if ($product->availability) checked @endif >
                            <label class="custom-control-label mt-1" for="availability" >وضعیت محصول</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="description">توضیحات</label>
                        <textarea name="description" class="form-control mb-4 text-right" rows="2" placeholder="توضیحات">{{$product->description}}</textarea>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col"><button type="submit" class="btn bg-secondary text-light ">ویرایش محصول</button></div>
                            <div class="col">
                                <div class="custom-control custom-switch text-left mt-2 d-lg-none">
                                    <input type="checkbox" class="custom-control-input text-left" name="availability" id="availability" @if ($product->availability) checked @endif >
                                    <label class="custom-control-label" for="availability" >وضعیت محصول</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body ">
                <div class="row text-left">
                    <div class="col-12">
                        <h4 class="text-right mt-0">ویژگی های محصول</h4>
                    </div>
                    @if ($options->count())
                        <div class="col-12 text-right">
                            @foreach ($options as $option)
                                <div class="row">
                                    <div class="col-lg">
                                        <label for="product_name">نام ویژگی</label>
                                        <input type="text" name="product_name" class="form-control mb-4 text-right" value="{{$option->options}}" >
                                    </div>
                                    <div class="col-lg">
                                        <label for="product_name">مقدار ویژگی</label>
                                        <input type="text" name="product_name" class="form-control mb-4 text-right" value="{{$option->value}}" >
                                    </div>
                                    <div class="col col-lg-1 text-right mt-lg-4 d-none d-lg-block">
                                        <div style="margin-top: 12px"><a href="#" style="padding: 10px" class="redu5 bg-danger border-danger border-danger text-light">حذف</a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="col-12 text-center h4 mt-0 mb-0">
                            هیچ ویژگی وجود ندارد
                        </div>
                    @endif
                </div>
                <form method="POST" action="{{ route('optionsproduct.store') }}" >
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{$product->id}}" >
                    <div class="row ">
                        <div class="col-lg mr-lg-1">
                            <label for="options" class="text-right" >نام ویژگی جدید</label>
                            <input type="text" name="options" placeholder="نام ویژگی " class="form-control mb-3 text-right" required>
                        </div>
                        <div class="col-lg">
                            <label for="options" class="text-right" >مقدار ویژگی جدید</label>
                            <input type="text" name="value" placeholder="مقدار ویژگی " class="form-control mb-3 text-right" required>
                        </div>
                    </div>
                    <button type="submit" class="btn bg-secondary text-light mt-2" >اضافه کردن ویژگی به محصول</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 ">اضافه کردن تصاویر به محصول</h4>
                <label for="file" >تصاویر خود را در باکس زیر قرار دهید</label>
                <form method="POST" action="{{ route('imagesproduct.store') }}" class="mt-1 redu5 dropzone" id="myawesomedropzone" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{$product->id}}" >
                </form>
                @if ($images->count() > 0)
                    <h4 class="mt-4 mb-4">این محصول {{$images->count()}} تصویر دارد </h4>
                    <div class="row" >
                        @foreach ($images as $image)
                            <div class="col-6 col-lg-4 text-center redu5">
                                <div class=" bg-white mt-1 mb-1">
                                    <a href="#" class="btn btn-sm bg-danger border-danger text-light close pr-1 pl-1 pt-1 " style="border-radius: 50%;padding-bottom: 2px;position: absolute;margin-top: 5px;margin-right: 5px;">&times;</a>
                                    <a target="_blank" href="{{$image->image_product}}" >
                                        <img class="img height-100px rounded" target="_blank" src="{{$image->image_product}}" alt="{{$image->product_id}}">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    Dropzone.options.myawesomedropzone = {
        paramName: "file",
        dictDefaultMessage: "تصاویر محصول را به درون این باکس هدایت کنید",
        acceptedFiles: "image/jpg,image/jpeg,image/png,image/gif"
    };
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(function(){
        $("input[name='sku']").on('input', function (e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
        $("input[name='amount']").on('input', function (e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
        $("input[name='off_amount']").on('input', function (e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
        $("input[name='product_count']").on('input', function (e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>
@endsection
