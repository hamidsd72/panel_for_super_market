<div class="text-center p-4 pr-lg-5 pl-lg-5 mt-4 col-11 col-lg-8 mx-auto glass redu20 violet">
    <img src="{{Auth::user()->image}}" class="img-avatar rounded-circle" alt="{{Auth::user()->email}}">
    <form method="POST" action="{{ route('users.update',Auth::user()->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="text-right violet mr-lg-3">اصلاح مشخصات کاربر</div>
        <input type="text" name="first_name" placeholder="نام شخص" class="form-control mb-2 redu10 text-right" value="{{ Auth::user()->first_name }}" required>
        <input type="text" name="last_name" placeholder="فامیلی شخص" class="form-control mb-2 redu10 text-right" value="{{ Auth::user()->last_name }}" required>
        <input type="number" name="mobile" placeholder="شماره موبایل" class="form-control mb-2 redu10 text-right" value="{{ Auth::user()->mobile }}" required>
        <textarea name="bio" class="form-control mb-2 redu20 text-right" rows="3" placeholder="بایوگرافی">{{Auth::user()->bio}}</textarea>
        <div class="text-left bg-light @if (Auth::user()->image) text-success @endif redu10 pt-2 pl-2 mb-2 ">
            <input name="image" type="file"  @unless (Auth::user()->image) required @endunless>
            <label class="text-right text-secondary @if (Auth::user()->image) text-success @endif" for="image">
                @if (Auth::user()->image) تصویر دارید @else تصویر نمایه @endif
            </label>
        </div>
        <div class="text-right violet mr-lg-3">اصلاح مشخصات فروشگاه</div>
        <input type="hidden" name="shop_id" value="{{$shop->id}}">
        <input type="text" name="shop_name" placeholder="نام فروشگاه " class="form-control mb-2 redu10 text-right" value="{{$shop->shop_name}}" required>
        <input type="text" name="owner_first_name" placeholder="نام متصدی فروشگاه " class="form-control mb-2 redu10 text-right" value="{{$shop->owner_first_name}}" required>
        <input type="text" name="owner_last_name" placeholder="فامیلی متصدی فروشگاه" class="form-control mb-2 redu10 text-right" value="{{$shop->owner_last_name}}" required>
        <textarea name="address" class="form-control mb-4 redu20 text-right" rows="2" placeholder="آدرس فروشگاه">{{$shop->address}}</textarea>
        
        <button type="submit" class="btn btn-block bg-violet text-light redu20 col-lg-6 mx-auto shadow">ویرایش اطلاعات</button>
    </form>
</div>