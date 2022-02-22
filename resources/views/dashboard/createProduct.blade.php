@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body text-right">
            <form method="POST" action="{{ route('products.store') }}" >
                {{ csrf_field() }}
                <h4 class="mt-0">ابتدا لازم است محصول را ایجاد کنید</h4>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="sku">کد محصول</label>
                        <input type="text" name="sku" placeholder="کد محصول " class="form-control text-right" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="product_name">نام محصول</label>
                        <input type="text" name="product_name" placeholder="نام محصول " class="form-control text-right" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="amount">تعداد موجود</label>
                        <input type="text" name="product_count" placeholder="تعداد موجود" class="form-control text-right" >
                    </div>
                    <div class="col-12">
                        <label for="amount">توضیحات محصول</label>
                        <textarea name="description" class="form-control text-right" rows="5" placeholder="توضیحات"></textarea>
                    </div>
                    <div class="col-lg-4">
                        <label for="amount">قیمت روی محصول</label>
                        <input type="text" name="amount" placeholder="قیمت روی محصول" value="0" class="form-control text-right" >
                    </div>
                    <div class="col-lg-4">
                        <label for="off_amount">قیمت تخفیفی</label>
                        <input type="text" name="off_amount" placeholder="قیمت تخفیفی" value="0" class="form-control text-right" >
                    </div>
                    <div class="col-lg-4 mt-4 text-center d-none d-lg-block">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" name="availability" id="availability" >
                            <label class="custom-control-label" for="availability" >وضعیت محصول</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><button type="submit" class="btn btn-secondary bg-secondary text-light mt-4 ">ایجاد محصول</button></div>
                    <div class="col mt-2">
                        <div class="mt-4 text-center d-lg-none">
                            <div class="custom-control custom-switch text-left mt-2">
                                <input type="checkbox" class="custom-control-input" name="availability" id="availability" >
                                <label class="custom-control-label" for="availability" >وضعیت محصول</label>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

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

