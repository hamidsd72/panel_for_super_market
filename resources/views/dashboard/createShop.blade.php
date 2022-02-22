<div class="text-center p-5 mt-5 col-11 col-lg-4 mx-auto glass redu20 violet">
    <form method="POST" action="{{ route('shops.store') }}" >
        {{ csrf_field() }}
        <div class="text-right violet mb-3 mr-lg-3">ابتدا لازم است فروشگاه خود را ایجاد کنید</div>
        <input type="text" name="shop_name" placeholder="نام فروشگاه " class="form-control mb-3 redu10 text-right" required>
        <input type="text" name="owner_first_name" placeholder="نام متصدی فروشگاه " class="form-control mb-3 redu10 text-right" required>
        <input type="text" name="owner_last_name" placeholder="فامیلی متصدی فروشگاه" class="form-control mb-3 redu10 text-right" required>
        <textarea name="address" class="form-control mb-4 redu10 text-right" rows="2" placeholder="آدرس فروشگاه"></textarea>
        
        <button type="submit" class="btn btn-block bg-violet text-light redu20 col-lg-6 mx-auto">ایجاد فروشگاه</button>
    </form>
</div>


