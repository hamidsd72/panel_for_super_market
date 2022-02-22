<div class="row">
    <div class="col-lg-4" >
        @include('dashboard.imageInputForm')
    </div>
    <div class="col-lg-8" >
        <form method="POST" action="{{ route('users.update',Auth::user()->id) }}" enctype="multipart/form-data" >
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="card text-right">
                <div class="card-body">
                    <h4 class="mb-4" style="margin-top: 0%">ویرایش حساب کاربر</h4>
                    <div class="row text-secondary ">
                        <div class="col-lg-4">
                            <label for="first_name">شماره موبایل کاربر</label>
                            <input type="text" name="mobile" placeholder="۹۱۳۳۶۲۸۸۴۴" class="form-control mb-2 text-left" value="{{ Auth::user()->mobile }}" disabled>                
                        </div>
                        <div class="col-lg-4">
                            <label for="first_name">نام کاربر</label>
                            <input type="text" name="first_name" placeholder="نام کاربر" class="form-control mb-2 text-right" value="{{ Auth::user()->first_name }}" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="first_name">نام خانوادگی کاربر</label>
                            <input type="text" name="last_name" placeholder="فامیلی کاربر" class="form-control mb-2 text-right" value="{{ Auth::user()->last_name }}" required>
                        </div>
                        <div class="col-12 mt-lg-3 mb-lg-4">
                            <label for="bio">بایوگرافی</label>
                            <textarea name="bio" class="form-control text-right" rows="5" placeholder="بایوگرافی">{{Auth::user()->bio}}</textarea>
                        </div>
                        @if (Auth::user()->status)
                            <input type="hidden" name="shop_id" value="{{$shop->id}}">
                        @endif
                        <div class="col-lg-4">
                            <label for="shop_name">نام فروشگاه</label>
                            <input type="text" name="shop_name" placeholder="نام فروشگاه" value="{{$shop->shop_name ?? ''}}" class="form-control mb-2 text-right" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="owner_first_name">نام مالک فروشگاه</label>
                            <input type="text" name="owner_first_name" placeholder="نام مالک فروشگاه " value="{{$shop->owner_first_name ?? ''}}" class="form-control mb-2 text-right" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="owner_last_name">نام خانوادگی مالک فروشگاه</label>
                            <input type="text" name="owner_last_name" placeholder="نام خانوادگی مالک فروشگاه" value="{{$shop->owner_last_name ?? ''}}" class="form-control mb-2 text-right" required>
                        </div>
                        <div class="col-12 mt-lg-3 mb-lg-4">
                            <label for="address">آدرس فروشگاه</label>
                            <textarea name="address" class="form-control text-right mb-1" rows="5" placeholder="آدرس فروشگاه" required>{{$shop->address ?? ''}}</textarea>
                        </div>
        
                    </div>
                    <button type="submit" class="btn bg-secondary text-light" >ویرایش اطلاعات</button>
                </div>
            </div>
        </form>
    </div>
</div>